<form class="p-6 bg-white border-b border-gray-200 " method="POST" action="{{ route('client.store') }}" wire:submit.prevent="submit">
    @csrf
    <div class="grid grid-cols-12 gap-4 mb-4 ">

        <h2 class="col-span-12">Dados Cliente</h2>
        <!-- Name -->
        <div class="w-full col-span-12 ">
            <x-input-label for="client" :value="__('form.client identification')" class="" />

            <x-text-input id="client" class="w-full mt-2" type="text" name="client" wire:model.lazy='client' :value="old('client')" :placeholder="__('form.client identification placeholder')" autofocus />

            <x-input-error :messages="$errors->get('sku')" class="col-span-12 mt-2" />
        </div>
        <h2 class="col-span-12 mt-6">Dados Produtos</h2>

        <div class="col-span-12">
            <livewire:table.products-proposal />
        </div>
        <!-- @if (isset($client)) -->

        <!-- @endif -->

        <h2 class="col-span-12 mt-4">Dados Transporte</h2>
        <div class="grid grid-cols-3 col-span-12 gap-4">
            <div class="w-full">
                <x-input-label for="shipping_company" :value="__('form.shipping_company')" class="" />

                <x-text-input id="shipping_company" class="w-full mt-2" type="text" name="shipping_company" wire:model.lazy='shipping_company' :value="old('shipping_company')" :placeholder="__('form.shipping_company placeholder')" autofocus />

                <x-input-error :messages="$errors->get('shipping_company')" class="col-span-12 mt-2" />
            </div>

            <div class="w-full">
                <x-input-label for="sale_mode" :value="__('form.sale_mode')" class="" />

                <x-text-input id="sale_mode" class="w-full mt-2" type="text" name="sale_mode" wire:model.lazy='sale_mode' :value="old('sale_mode')" :placeholder="__('form.sale_mode placeholder')" autofocus />

                <x-input-error :messages="$errors->get('sale_mode')" class="col-span-12 mt-2" />
            </div>

            <div class="w-full">
                <x-input-label for="seller_discount" :value="__('form.seller_discount')" class="" />

                <x-text-input id="seller_discount" class="w-full mt-2" type="text" name="seller_discount" wire:model.lazy='seller_discount' :value="old('seller_discount')" :placeholder="__('form.seller_discount placeholder')" autofocus />

                <x-input-error :messages="$errors->get('seller_discount')" class="col-span-12 mt-2" />
            </div>
        </div>

        <livewire:table.parcels-table />

        <div class="w-full col-span-12 ">
            <x-input-label for="seller_note" :value="__('form.seller_note')" class="" />

            <x-text-input id="seller_note" class="w-full mt-2" type="text" name="seller_note" wire:model.lazy='seller_note' :value="old('seller_note')" :placeholder="__('form.seller_note placeholder')" autofocus />

            <x-input-error :messages="$errors->get('seller_note')" class="col-span-12 mt-2" />
        </div>
    </div>
    <div class="flex justify-end mt-5">
        <x-primary-button type='submit'>{{ __('navigation.create') }}</x-primary-button>
    </div>
</form>