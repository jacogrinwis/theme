<x-theme-layout>

    <x-tables :headers="['Name', 'Email', 'Phone', 'Action']">
        @foreach ($items as $item)
            <x-tables.tr>
                <x-tables.td>{{ $item->name }}</x-tables.td>
                <x-tables.td>{{ $item->email }}</x-tables.td>
                <x-tables.td>{{ $item->phone }}</x-tables.td>
                <x-tables.td>
                    <a href="" class="mr-6 font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">Edit</a>
                    <a href="" class="font-medium text-red-600 dark:text-red-500 hover:underline uppercase">Delete</a>
                </x-tables.td>
            </x-tables.tr>
        @endforeach
    </x-tables>

</x-theme-layout>
