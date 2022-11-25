<div class="grid grid-cols-5 col-span-12 gap-4">
    <div class="">
        <x-input-label for="parcel_day" :value="__('form.parcel_day')" class="" />

        <x-text-input id="parcel_day" class="w-full mt-2" type="text" name="parcel_day" wire:model.lazy='parcel_day' :value="old('parcel_day')" :placeholder="__('form.parcel_day placeholder')" />

        <x-input-error :messages="$errors->get('parcel_day')" class="col-span-12 mt-2" />
    </div>

    <div class="">
        <x-input-label for="parcel_price" :value="__('form.parcel_price')" class="" />
        @if (count($parcels) >= 1)
        <x-text-input id="parcel_price" class="w-full mt-2 disabled:bg-slate-200" type="text" name="parcel_price" wire:model.lazy='parcel_price' :value="old('parcel_price')" :placeholder="__('form.parcel_price placeholder')" disabled />
        @else
        <x-text-input id="parcel_price" class="w-full mt-2 disabled:bg-slate-200" type="text" name="parcel_price" wire:model.lazy='parcel_price' :value="old('parcel_price')" :placeholder="__('form.parcel_price placeholder')" />
        @endif

        <x-input-error :messages="$errors->get('parcel_price')" class="col-span-12 mt-2" />
    </div>

    <div class="">
        <x-input-label for="payment_parcel" :value="__('form.payment_parcel')" class="" />


        <x-text-input id="payment_parcel" class="w-full mt-2" type="text" name="payment_parcel" wire:model.lazy='payment_parcel' :value="old('payment_parcel')" :placeholder="__('form.payment_parcel placeholder')" />

        <x-input-error :messages="$errors->get('payment_parcel')" class="col-span-12 mt-2" />
    </div>

    <div class="col-span-2">
        <x-input-label for="description_parcel" :value="__('form.description_parcel')" class="" />

        <div class="grid grid-cols-2 col-span-2 gap-4">
            <x-text-input id="description_parcel" class="w-full mt-2" type="text" name="description_parcel" wire:model.lazy='description_parcel' :value="old('description_parcel')" :placeholder="__('form.description_parcel placeholder')" autofocus />

            <button wire:click.prevent="addParcel" class="mt-2 flex justify-center w-full col-span-1 text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Adicionar</button>
        </div>

        <x-input-error :messages="$errors->get('description_parcel')" class="col-span-12 mt-2" />
    </div>
    <div class="relative col-span-5 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        {{ __('table.parcel_day') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('table.parcel_price') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('table.payment_parcel') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parcels as $item)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item['parcel_day'] }}
                    </th>
                    <td class="px-6 py-4">
                        {{ 'R$ '.$item['parcel_price'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item['payment_parcel'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item['description_parcel'] }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Remover</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>