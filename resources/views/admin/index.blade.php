<x-admin-layout>

    <x-alert type="info">
        {{ $message }}
    </x-alert>

    <x-alert type="danger">
        {{ $message }}
    </x-alert>

    <x-alert type="success">
        {{ $message }}
    </x-alert>

    <x-alert type="warning">
        {{ $message }}
    </x-alert>

    <x-alert type="dark">
        {{ $message }}
    </x-alert>

    <x-alert type="">
        {{ $message }}
    </x-alert>

    <div class="mb-4">
        <x-form.text-input name="name" class="block w-full" placeholder="Placeholder text..." />
    </div>

    <div class="mb-4">
        <x-form.text-input type="number" name="name" class="block w-full" placeholder="Placeholder text..." value="1234567890" required />
    </div>

    <div>
        <x-form.primary-button class="w-full sm:w-auto uppercase mb-4 mr-4" type="button">
            Primary Button
        </x-form.primary-button>

        <x-form.primary-button class="w-full sm:w-auto mb-4" type="button">
            Primary Button
        </x-form.primary-button>
    </div>

    <div class="mb-4">
        <x-form.primary-button class="mx-auto block">
            Primary Button
        </x-form.primary-button>
    </div>


</x-admin-layout>
