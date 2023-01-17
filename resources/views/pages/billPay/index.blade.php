<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('navigation.billPays') }}
            </h2>

            @role('seller|admin')
            <livewire:button-default text="{{ __('navigation.create') }}" link="">
                @endrole
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:table.bill-pay-table theme="tailwind" />
                </div>
            </div>
        </div>
</x-app-layout>