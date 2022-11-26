<x-theme-layout>

    <form
        method="POST"
        action="/"
    >
        @csrf

        <div class="mb-6">
            <x-forms.input-label
                for="name"
                value="Name"
            />
            <x-forms.text-input
                id="name"
                name="name"
                class="block w-full"
                placeholder="text"
            />
        </div>

        <div class="mb-6">
            <x-forms.input-label
                for="email"
                value="Email"
            />
            <x-forms.text-input
                type="email"
                id="email"
                name="name"
                class="block w-full"
                placeholder="admin@admin.com"
            />
        </div>

        <div class="mb-6">
            <x-forms.input-label
                for="phone"
                value="Phone"
            />
            <x-forms.text-input
                type="number"
                id="phone"
                name="phone"
                class="block w-full"
                placeholder="0612345678"
                required
            />
        </div>

        <div class="mb-6">
            <x-forms.input-label
                for="datetime"
                value="Date and Time"
            />
            <x-forms.text-input
                type="datetime-local"
                id="datetime"
                name="datetime"
                class="block w-full"
                required
            />
        </div>

        <div class="mb-6">
            <x-forms.input-label
                for="file"
                value="Upload file"
            />
            <x-forms.file-input
                id="file"
                name="file"
            />
        </div>

        <div class="mb-6">
            <x-forms.input-label
                for="description"
                value="Select"
            />
            <x-forms.input-select name="select">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
            </x-forms.input-select>
        </div>

        <div class="mb-6">
            <x-forms.input-label
                for="description"
                value="Description"
            />
            <x-forms.textarea
                placeholder="Description"
                name="description"
                class="block w-full"
            ></x-forms.textarea>
        </div>

        <div>
            <div class="mb-6 flex items-center">
                <x-forms.radio
                    id="default-radio-1"
                    name="default-radio"
                    label="Default radio"
                />
            </div>

            <div class="mb-6 flex items-center">
                <x-forms.radio
                    id="default-radio-2"
                    name="default-radio"
                    label="Checked state"
                    checked
                />
            </div>
        </div>

        <div class="flex mb-6">
            <div class="flex items-center mr-4">
                <x-forms.radio
                    id="inline-radio-1"
                    name="inline-radio-group"
                    label="Inline 1"
                />
            </div>

            <div class="flex items-center mr-4">
                <x-forms.radio
                    id="inline-radio-2"
                    name="inline-radio-group"
                    label="Inline 2"
                />
            </div>

            <div class="flex items-center mr-4">
                <x-forms.radio
                    id="inline-checked-radio"
                    name="inline-radio-group"
                    label="Inline checked"
                    checked
                />
            </div>

            <div class="flex items-center">
                <x-forms.radio
                    id="inline-disabled-radio"
                    name="inline-radio-group"
                    label="Inline disabled"
                    for="inline-disabled-radio"
                    disabled
                />
            </div>
        </div>

        <div class="mb-6">
            <x-forms.checkbox
                id="checkbox"
                name="checkbox"
                label="Remember me"
                checked
            />
        </div>

        <div class="mb-6">
            <x-forms.checkbox
                id="disabled-checkbox"
                name="disabled-checkbox"
                label="Disabled checkbox"
                disabled
            />
        </div>

        <div class="mb-6">
            <x-forms.toggle
                name="toggle"
                label="Toggle"
            />
        </div>

        <div class="mb-6">
            <x-forms.input-label
                for="range-1"
                value="Range"
            />
            <x-forms.range
                id="range-1"
                name="range"
                value="33"
            />
        </div>

        <div class="mb-6">
            <x-forms.input-label
                for="range-2"
                value="Min and max"
            />
            <x-forms.range
                id="range-2"
                name="range-min-max"
                min="0"
                max="10"
                value="3"
            />
        </div>

        <div class="mb-6">
            <x-forms.input-label
                for="range-3"
                value="Range steps"
            />
            <x-forms.range
                id="range-3"
                name="range-steps"
                min="0"
                max="10"
                step="2"
                value="3"
            />
        </div>

        <div class="mb-6">
            <x-buttons.primary-button
                class="w-full sm:w-auto uppercase"
                type="submit"
            >
                Primary Button
            </x-buttons.primary-button>
        </div>

        <div class="mb-6">
            <x-buttons.secondary-button
                href="/"
                confirm="Clicked on Link"
            >
                <x-slot:left>
                    <span>Left</span>
                </x-slot:left>
                Secondary Button
                <x-slot:right>
                    Right
                </x-slot:right>
            </x-buttons.secondary-button>
            <x-buttons.secondary-button
                type="submit"
                confirm="Clicked on Button"
            >
                Secondary Button
            </x-buttons.secondary-button>
        </div>

    </form>

</x-theme-layout>
