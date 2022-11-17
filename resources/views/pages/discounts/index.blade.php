<x-app-layout>
    <x-slot name="header">
        <h2 class="grid grid-cols-4 text-xl font-semibold leading-tight text-gray-800">
            <div class="flex items-center col-span-1">
                {{ __('navigation.discounts') }}
            </div>
            <div class="flex items-center justify-end col-span-3 m-0">
                @role('seller|admin')
                    <livewire:button-default text="{{ __('navigation.export') }}" link="{{ route('discount.export') }}">

                    <x-modal text="{{ __('navigation.import') }}" identification="import" route="{{route('discount.import')}}" >
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">{{ __('form.fileExcel') }}</label>
                        <input aria-describedby="file_input_help" name="file_input" id="file_input" type="file" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF.</p>
                    </x-modal>

                    <livewire:button-default text="{{ __('navigation.create') }}" link="{{ route('discount.create') }}">
                @endrole
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <livewire:discount-table theme="tailwind" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>