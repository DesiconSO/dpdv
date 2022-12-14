<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('navigation.clients') }}
            </h2>

            <div>
                @role('seller|admin')
                <livewire:button-default text="{{ __('navigation.create') }}" link="{{ route('client.create') }}" />
                @endrole
                @role('admin')
                <livewire:button-default text="{{ __('navigation.user') }}" link="{{ route('user.index') }}" />
                @endrole
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:client-table theme="tailwind" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>