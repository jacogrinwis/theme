<x-admin-layout>

    <x-alert type="info">
        info
    </x-alert>

    <x-alert type="danger">
        danger
    </x-alert>

    <x-alert type="success">
        success
    </x-alert>

    <x-alert type="warning">
        warning
    </x-alert>

    <x-alert type="dark">
        dark
    </x-alert>

    <div class="mb-4">
        <x-form.text-input name="name" class="block w-full" placeholder="Placeholder text..." />
    </div>

    <div class="mb-4">
        <x-form.text-input type="number" name="name" class="block w-full" placeholder="Placeholder text..."
            value="1234567890" required />
    </div>

    <div class="mb-4">
        <x-form.text-input type="datetime-local" name="name" class="block w-full" placeholder="Placeholder text..."
            value="" required />
    </div>

    <div class="mb-4">
        <x-form.textarea placeholder="text" name="description" class="block w-full"></x-form.textarea>
    </div>

    <div class="mb-4">
        <x-form.textarea placeholder="text" name="description" class="block w-full placeholder:italic">
        </x-form.textarea>
    </div>

    <div class="mb-4">
        <x-form.textarea placeholder="text" name="description" class="block w-full">Description</x-form.textarea>
    </div>

    <div>
        <x-form.primary-button class="w-full sm:w-auto uppercase mb-4 mr-4" type="button">
            Primary Button
        </x-form.primary-button>

        <x-form.primary-button class="w-full sm:w-auto mb-4" type="button">
            Primary Button
        </x-form.primary-button>

        <x-form.primary-button class="w-full sm:w-auto mb-4 italic" type="button">
            Primary Button
        </x-form.primary-button>
    </div>

    <div class="mb-4">
        <x-form.primary-button class="mx-auto block">
            Primary Button
        </x-form.primary-button>
    </div>

    <div class="mb-4">
        <button class="primary-btn">test</button>
    </div>


</x-admin-layout>
