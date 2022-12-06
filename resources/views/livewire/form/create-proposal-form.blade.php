<form class="" method="POST" action="{{ route('client.store') }}" wire:submit.prevent="submit">
    @csrf
    <div class="grid grid-cols-12 gap-4 p-6 mb-4 bg-white border-b border-gray-200 ">
        <h2 class="col-span-12">Dados Cliente</h2>
        <!-- Name -->
        <div class="w-full col-span-8 ">
            <x-input-label for="client" :value="__('form.client identification')" class="" />

            <x-text-input id="client" wire:change.defer="changeClient" class="w-full mt-2" type="text" name="client" wire:model.defer='client' :value="old('client')" :placeholder="__('form.client identification placeholder')" autofocus />

            <x-input-error :messages="$errors->get('client')" class="col-span-12 mt-2" />
        </div>

        <div class="w-full col-span-4">
            <x-input-label for="saleMode" :value="__('form.saleMode')" />

            <x-select-input class="block w-full mt-1 text-slate-600" wire:change.defer="changeSaleMode" name="saleMode" wire:model.lazy='saleMode' :value="old('saleMode')">
                <option value="" class="text-slate-600">{{ __('form.first_select') }}</option>
                @foreach ($saleModeState as $item)
                <option value="{{ $item->value }}" class="text-slate-600">{{ $item->data() }}</option>
                @endforeach
            </x-select-input>

            <x-input-error :messages="$errors->get('saleMode')" class="mt-2" />
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4 p-6 bg-white border-b border-gray-200">
        <h2 class="col-span-12">Dados Produtos</h2>

        <div class="col-span-12">
            <livewire:table.products-proposal :products="$products" :client="$client" :saleMode="$saleMode" />
        </div>
    </div>
    <!-- @if (isset($client)) -->

    <!-- @endif -->
    <div class="grid grid-cols-12 gap-4 p-6 mb-4 bg-white border-b border-gray-200 ">
        <h2 class="col-span-12 mt-4">Dados Transporte</h2>
        <div class="grid grid-cols-3 col-span-12 gap-4">
            <div class="w-full">
                <x-input-label for="shipping_company" :value="__('form.shipping_company')" class="" />

                <x-text-input id="shipping_company" class="w-full mt-2" type="text" name="shipping_company" wire:model.lazy='shipping_company' :value="old('shipping_company')" :placeholder="__('form.shipping_company placeholder')" autofocus />

                <x-input-error :messages="$errors->get('shipping_company')" class="col-span-12 mt-2" />
            </div>

            <div class="w-full">
                <x-input-label for="shippingMode" :value="__('form.shippingMode')" class="" />

                <x-select-input id="shippingMode" class="block w-full mt-1 text-slate-600" name="shippingMode" wire:model.lazy='shippingMode' :value="old('shippingMode')">
                    <option value="" class="text-slate-600">{{ __('form.first_select') }}</option>
                    @foreach ($shippingModeState as $item)
                    <option value="{{ $item }}" class="text-slate-600">{{ $item->data() }}</option>
                    @endforeach
                </x-select-input>

                <x-input-error :messages="$errors->get('shippingMode')" class="col-span-12 mt-2" />
            </div>

            <div class="w-full">
                <x-input-label for="seller_discount" :value="__('form.seller_discount')" class="" />

                <x-text-input id="seller_discount" wire:change.defer="changeSellerDiscount" class="w-full mt-2" type="text" name="seller_discount" wire:model.defer='seller_discount' :value="old('seller_discount')" :placeholder="__('form.seller_discount placeholder')" autofocus />

                <x-input-error :messages="$errors->get('seller_discount')" class="col-span-12 mt-2" />
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4 p-6 mb-4 bg-white border-b border-gray-200 ">
        <livewire:table.parcels-table :products="$products" :parcels="$parcels" :client="$client" :seller_discount="$seller_discount" />
    </div>

    <div class="grid grid-cols-12 gap-4 p-6 bg-white border-b border-gray-200 ">
        <div class="w-full col-span-12">
            <x-input-label for="seller_note" :value="__('form.seller_note')" class="" />

            <x-text-input id="seller_note" class="w-full mt-2" type="text" name="seller_note" wire:model.lazy='seller_note' :value="old('seller_note')" :placeholder="__('form.seller_note placeholder')" autofocus />

            <x-input-error :messages="$errors->get('seller_note')" class="col-span-12 mt-2" />
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4 px-6 pb-6 bg-white border-b border-gray-200 ">
        <div class="flex justify-end col-span-12 mt-5 cols">
            <x-primary-button type='submit'>{{ __('navigation.create') }}</x-primary-button>
        </div>
    </div>
</form>