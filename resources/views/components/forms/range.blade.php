@props(['id' => false, 'name', 'min', 'max', 'step', 'value' => 5])

<input id="{{ $id }}" name="{{ $name }}" @isset($min) min="{{ $min }}" @endisset
    @isset($max)max="{{ $max }}" @endisset
    @isset($step)step="{{ $step }}" @endisset type="range" value="{{ $value }}"
    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
