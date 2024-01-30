<div class="sm:col-span-2">
    <label for="{{ $name }}">{{ ucwords($name) }}</label>
    <textarea {{ $attributes }} id="{{ $name }}" rows="4"
              class="w-full rounded-sm border-gray-200 mt-2 shadow-md focus:border-red-600 focus:ring-0"
              required></textarea>
</div>
