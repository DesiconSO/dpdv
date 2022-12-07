<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('navigation.create') ." ". __('navigation.clients') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <livewire:table.user-table theme="tailwind" />
            </div>
        </div>
    </div>
</x-app-layout>