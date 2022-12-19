<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <livewire:components.breadcrumb-component />

            @role('seller|admin')
            <livewire:button-default text="{{ __('navigation.create') }}" link="{{ route('feedback.create') }}">
                @endrole
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:table.feedback-component />
                </div>
            </div>
        </div>
</x-app-layout>