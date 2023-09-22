<div>
    <x-forms.label :name="$name"/>
    <input {{ $attributes }} id="{{ $name }}"
           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 mb-8"
           required>
</div>
