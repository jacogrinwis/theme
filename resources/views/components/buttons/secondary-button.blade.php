@props(['href', 'type' => 'button', 'confirm'])

@isset($href)
    <a
        href="{{ $href }}"
        class="btn btn-secondary"
        @isset($confirm)
            onclick="return confirm('{{ $confirm }}')"
        @endisset
    >
        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        {{ $attributes->merge([
            'class' => 'btn btn-secondary',
        ]) }}
        @isset($confirm)
            onclick="return confirm('{{ $confirm }}')"
        @endisset
    >
        {{ $slot }}
    </button>
@endisset
