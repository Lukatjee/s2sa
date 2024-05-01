@props(['image', 'name', 'function', 'mail', 'linkedin', 'website'])

<div class="dark:bg-gray-800 dark:border-gray-700 max-w-sm mx-auto rounded-lg shadow w-full">
    <div class="flex flex-col items-center py-10">
        <img class="w-48 h-48 mb-3 rounded-full shadow-lg" src="{{ $image }}" alt="Member Image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $name }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $function }}</span>
        <div class="flex mt-4 space-x-3 md:mt-6">
            @if($website)
                <a href="{{ $website }}" target="_blank"
                   class="inline-flex items-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 0 19 9.5 9.5 0 0 0 0-19ZM8.374 17.4a7.6 7.6 0 0 1-5.9-7.4c0-.83.137-1.655.406-2.441l.239.019a3.887 3.887 0 0 1 2.082 2.5 4.1 4.1 0 0 0 2.441 2.8c1.148.522 1.389 2.007.732 4.522Zm3.6-8.829a.997.997 0 0 0-.027-.225 5.456 5.456 0 0 0-2.811-3.662c-.832-.527-1.347-.854-1.486-1.89a7.584 7.584 0 0 1 8.364 2.47c-1.387.208-2.14 2.237-2.14 3.307a1.187 1.187 0 0 1-1.9 0Zm1.626 8.053-.671-2.013a1.9 1.9 0 0 1 1.771-1.757l2.032.619a7.553 7.553 0 0 1-3.132 3.151Z"/>
                    </svg>
                </a>
            @endif
            @if(isset($mail))
                <a href="mailto:{{ $mail }}"
                   class="inline-flex items-center">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white"
                         aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor"
                         viewBox="0 0 20 16">
                        <path
                            d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path
                            d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                </a>
            @endif
            @if($linkedin)
                <a href="{{ $linkedin }}" target="_blank"
                   class="inline-flex items-center">
                    <svg class="w-[18px] h-[18px] text-gray-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 15">
                        <path fill-rule="evenodd"
                              d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"
                              clip-rule="evenodd"/>
                        <path d="M3 5.012H0V15h3V5.012Z"/>
                    </svg>
                </a>
            @endif
        </div>
    </div>
</div>
