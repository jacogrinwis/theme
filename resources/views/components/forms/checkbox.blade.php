@props(['id' => false, 'name' => false, 'label', 'disabled' => false, 'checked' => false])

@isset($label)
    <div class="flex items-start">
        <div class="flex items-center h-5">
        @endisset
        <input type="checkbox" id="{{ $id }}" name="{{ $name }}"
            class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
            {{ $disabled ? 'disabled' : '' }} {{ $checked ? 'checked' : '' }} />
        @isset($label)
        </div>

        <label for="{{ $id }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
            {{ $label }}
        </label>
    </div>
@endisset
