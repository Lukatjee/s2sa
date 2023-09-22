<?php
namespace App\Helpers;

class Autop
{
    public static function formatParagraphs(string $content, bool $useLineBreaks = true): string
    {
        $preTags = [];

        if (trim($content) === '') {
            return '';
        }

        // Just to make things a little easier, pad the end.
        $content .= "\n";

        // Pre tags shouldn't be touched by autop.
        // Replace pre tags with placeholders and bring them back after autop.
        if (str_contains($content, '<pre')) {
            $content = preg_replace_callback('!(<pre[^>]*>)(.*?)(</pre>)!is', function ($matches) use (&$preTags) {
                $tagPlaceholder = '<pre-placeholder-' . count($preTags) . '></pre-placeholder-' . count($preTags) . '>';
                $preTags[$tagPlaceholder] = $matches[0];
                return $tagPlaceholder;
            }, $content);
        }

        // Change multiple <br>s into two line breaks, which will turn into paragraphs.
        $content = preg_replace('|<br\s*/?>\s*<br\s*/?>|', "\n\n", $content);

        $blockElemsPattern = '(?:table|thead|tfoot|caption|col|colgroup|tbody|tr|td|th|div|dl|dd|dt|ul|ol|li|pre|form|map|area|blockquote|address|math|style|p|h[1-6]|hr|fieldset|legend|section|article|aside|hgroup|header|footer|nav|figure|figcaption|details|menu|summary)';

        // Add a single line break above block-level opening tags.
        $content = preg_replace('!(<' . $blockElemsPattern . '[^>]*>)!', "\n$1", $content);

        // Add a double line break below block-level closing tags.
        $content = preg_replace('!(</' . $blockElemsPattern . '>)!', "$1\n\n", $content);

        // Standardize newline characters to "\n".
        $content = str_replace(["\r\n", "\r"], "\n", $content);

        // Collapse line breaks before and after <option> elements so they don't get autop'd.
        if (str_contains($content, '<option')) {
            $content = preg_replace('|\\s*<option|', '<option', $content);
            $content = preg_replace('|</option>\\s*|', '</option>', $content);
        }

        /*
         * Collapse line breaks inside <object> elements, before <param> and <embed> elements
         * so they don't get autop'd.
         */
        if (str_contains($content, '</object>')) {
            $content = preg_replace('|(<object[^>]*>)\\s*|', '$1', $content);
            $content = preg_replace('|\\s*</object>|', '</object>', $content);
            $content = preg_replace('%\\s*(</?(?:param|embed)[^>]*>)\\s*%', '$1', $content);
        }

        /*
         * Collapse line breaks inside <audio> and <video> elements,
         * before and after <source> and <track> elements.
         */
        if (str_contains($content, '<source') || str_contains($content, '<track')) {
            $content = preg_replace('%([<\\[](?:audio|video)[^>\\]]*[>\\]])\\s*%', '$1', $content);
            $content = preg_replace('%\\s*([<\\[]/(?:audio|video)[>\\]])%', '$1', $content);
            $content = preg_replace('%\\s*(<(?:source|track)[^>]*>)\\s*%', '$1', $content);
        }

        // Remove more than two contiguous line breaks.
        $content = preg_replace("/\n\n+/", "\n\n", $content);

        // Split up the contents into an array of strings, separated by double line breaks.
        $contentParts = preg_split('/\n\s*\n/', $content, -1, PREG_SPLIT_NO_EMPTY);

        // Reset $content prior to rebuilding.
        $content = '';

        // Rebuild the content as a string, wrapping every bit with a <p>.
        foreach ($contentParts as $paragraph) {
            $content .= '<p>' . trim($paragraph, "\n") . "</p>\n";
        }

        // Under certain strange conditions, it could create a P of entirely whitespace.
        $content = preg_replace('|<p>\\s*</p>|', '', $content);

        // Add a closing <p> inside <div>, <address>, or <form> tag if missing.
        $content = preg_replace('!<p>([^<]+)</(div|address|form)>!', "<p>$1</p></$2>", $content);

        // If an opening or closing block element tag is wrapped in a <p>, unwrap it.
        $content = preg_replace('!<p>\\s*(</?' . $blockElemsPattern . '[^>]*>)\\s*</p>!', "$1", $content);

        // In some cases <li> may get wrapped in <p>, fix them.
        $content = preg_replace("|<p>(<li.+?)</p>|", "$1", $content);

        // If a <blockquote> is wrapped with a <p>, move it inside the <blockquote>.
        $content = preg_replace('|<p><blockquote([^>]*)>|i', "<blockquote$1><p>", $content);
        $content = str_replace('</blockquote></p>', '</p></blockquote>', $content);

        // If an opening or closing block element tag is preceded by an opening <p> tag, remove it.
        $content = preg_replace('!<p>\\s*(</?' . $blockElemsPattern . '[^>]*>)!', "$1", $content);

        // If an opening or closing block element tag is followed by a closing <p> tag, remove it.
        $content = preg_replace('!(</?' . $blockElemsPattern . '[^>]*>)\\s*</p>!', "$1", $content);

        // Optionally insert line breaks.
        if ($useLineBreaks) {
            // Replace newlines that shouldn't be touched with a placeholder.
            $content = preg_replace_callback('/<(script|style).*?<\\/\\1>/s', function ($matches) {
                return str_replace("\n", "<CustomPreserveNewline />", $matches[0]);
            }, $content);

            // Replace any newline characters that aren't preceded by a <br /> with a <br />.
            $content = preg_replace('|(?<!<br />)\\s*\\n|', "<br />\n", $content);

            // Replace newline placeholders with newlines.
            $content = str_replace('<CustomPreserveNewline />', "\n", $content);
        }

        // If a <br /> tag is after an opening or closing block tag, remove it.
        $content = preg_replace('!(</?' . $blockElemsPattern . '[^>]*>)\\s*<br />!', "$1", $content);

        // If a <br /> tag is before a subset of opening or closing block tags, remove it.
        $content = preg_replace('!<br />(\\s*</?(?:p|li|div|dl|dd|dt|th|pre|td|ul|ol)[^>]*>)!', '$1', $content);
        $content = preg_replace("|\n</p>$|", '</p>', $content);

        // Replace placeholder <pre> tags with their original content.
        if (!empty($preTags)) {
            $content = str_replace(array_keys($preTags), array_values($preTags), $content);
        }

        return $content;
    }
}
