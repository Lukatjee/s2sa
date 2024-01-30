<div class="sm:col-span-2">
    <label for="{{ $name }}">{{ ucwords($name) }}</label>
    <input {{ $attributes }} id="{{ $name }}"
           class="w-full rounded-sm border-gray-200 mt-2 shadow-md focus:border-red-600 focus:ring-0"
           required>
</div>
