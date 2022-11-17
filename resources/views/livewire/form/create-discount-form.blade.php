<form class="mt-5" wire:submit.prevent="submit" method="get">
    @csrf
    <div class="grid grid-cols-3 gap-4">
        <!-- Name -->
        <div>
            <x-input-label for="sku" value="SKU" />

            <x-text-input id="sku" class="block w-full mt-1" type="text" name="sku" wire:model.lazy='sku' :value="old('sku')" autofocus />

            <x-input-error :messages="$errors->get('sku')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="max_amount" :value="__('form.max_amount')" />

            <x-text-input id="max_amount" class="block w-full mt-1" type="text" name="max_amount" wire:model.lazy='max_amount' :value="old('max_amount')" autofocus />

            <x-input-error :messages="$errors->get('max_amount')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="discount" :value="__('form.discount')" />

            <x-text-input id="discount" class="block w-full mt-1" type="text" name="discount" wire:model.lazy='discount' :value="old('discount')" autofocus />

            <x-input-error :messages="$errors->get('discount')" class="mt-2" />
        </div>
    </div>
    <div class="flex justify-end w-full">
        <x-primary-button class="mt-4">
            {{ __('navigation.create') }}
        </x-primary-button>
    </div>
</form>