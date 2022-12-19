<form class="mt-5" wire:submit.prevent="submit" method="get">
    @csrf
    <div class="grid grid-cols-2 gap-4">
        <div class="col-span-12">
            <x-input-label for="to_user" value="{{ __('form.to_user') }}" />

            <x-text-input id="to_user" class="block w-full mt-1" type="text" name="to_user" wire:model.lazy='to_user' :value="old('to_user')" autofocus />

            <x-input-error :messages="$errors->get('to_user')" class="mt-2" />
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 mt-5">
        <div class="col-span-12">
            <x-input-label for="feedback" value="{{ __('form.feedback') }}" />

            <x-text-area-input id="feedback" class="block w-full mt-1" type="text" name="feedback" wire:model.lazy='feedback' :value="old('feedback')" autofocus />

            <x-input-error :messages="$errors->get('feedback')" class="mt-2" />
        </div>
    </div>

    <div class="flex justify-end w-full">
        <x-primary-button class="mt-4">
            {{ __('navigation.create') }}
        </x-primary-button>
    </div>
</form>