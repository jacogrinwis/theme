@props(['method' => 'POST', 'action' => false, 'files'])

<form
    @php
        $uppercase_method = strtoupper($method);
    @endphp
    @if ($uppercase_method === 'POST')
        method="POST"
    @elseif ($uppercase_method === 'UPDATE')
        method="POST"
    @endif
    action="{{ $action }}"
    @isset($files)
        enctype="multipart/form-data"
    @endisset
>

    @csrf
    @if ($uppercase_method === 'UPDATE')
        @method('PUT')
    @endif
    {{ $slot }}

</form>
