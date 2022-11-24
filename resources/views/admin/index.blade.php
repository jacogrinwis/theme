<x-admin-layout>

    <x-alert type="info">
        info
    </x-alert>

    <x-alert type="danger">
        danger
    </x-alert>

    <x-alert type="error">
        error
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
        <x-form.text-input name="name" class="block w-full" placeholder="text" />
    </div>

    <div class="mb-4">
        <x-form.text-input type="email" name="name" class="block w-full" placeholder="admin@admin.com" />
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
        <x-form.textarea placeholder="placeholder" name="description" class="block w-full"></x-form.textarea>
    </div>

    <div class="mb-4">
        <x-form.textarea placeholder="placeholder" name="description" class="block w-full placeholder:italic">
        </x-form.textarea>
    </div>

    <div class="mb-4">
        <x-form.textarea placeholder="text" name="description" class="block w-full">textarea</x-form.textarea>
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
        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div class="mb-4">
        <button class="primary-btn w-full uppercase">full witdh button</button>
    </div>


</x-admin-layout>
