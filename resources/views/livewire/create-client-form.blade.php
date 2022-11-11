<form class="p-6 bg-white border-b border-gray-200 " method="POST" action="{{ route('client.store') }}" wire:submit.prevent="submit">
    @csrf
    <div class="grid grid-cols-3 gap-4 mb-4">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('form.name')" />

            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" wire:model.lazy='name' :value="old('name')" autofocus />

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('form.email')" />

            <x-text-input id="email" class="block w-full mt-1" type="text" name="email" wire:model.lazy='email' :value="old('email')" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Fantasy -->
        <div>
            <x-input-label for="fantasy" :value="__('form.fantasy')" />

            <x-text-input id="fantasy" class="block w-full mt-1" type="text" name="fantasy" wire:model.lazy='fantasy' :value="old('fantasy')" />

            <x-input-error :messages="$errors->get('fantasy')" class="mt-2" />
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4 mb-4">
        <!-- Person Type -->
        <div>
            <x-input-label for="person_type" :value="__('form.person_type')" />

            <x-select-input class="block w-full mt-1 text-slate-600" name="person_type" wire:model.lazy='person_type' :value="old('person_type')">
                <option value="" class="text-slate-600">{{ __('form.first_select') }}</option>
                @foreach ($personTypes as $item)
                <option value="{{ $item->value }}" class="text-slate-600">{{ $item->data() }}</option>
                @endforeach
            </x-select-input>

            <x-input-error :messages="$errors->get('person_type')" class="mt-2" />
        </div>

        <!-- Fone -->
        <div>
            <x-input-label for="fone" :value="__('form.fone')" />

            <x-text-input id="fone" class="block w-full mt-1" type="text" name="fone" wire:model.lazy='fone' :value="old('fone')" />

            <x-input-error :messages="$errors->get('fone')" class="mt-2" />
        </div>

        <!-- CPF CNPJ -->
        <div>
            <x-input-label for="cpf_cnpj" :value="__('form.cpf_cnpj')" />

            <x-text-input id="cpf_cnpj" class="block w-full mt-1" type="text" name="cpf_cnpj" wire:model.lazy='cpf_cnpj' :value="old('cpf_cnpj')" />

            <x-input-error :messages="$errors->get('cpf_cnpj')" class="mt-2" />
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="grid grid-cols-2 gap-4">
            <!-- Tax Regime Code -->
            <div>
                <x-input-label for="tax_regime_code" :value="__('form.tax_regime_code')" />

                <x-select-input id="tax_regime_code" class="block w-full mt-1 text-slate-600" name="tax_regime_code" wire:model.lazy='tax_regime_code' :value="old('tax_regime_code')">
                    <option value="" class="text-slate-600">{{ __('form.first_select') }}</option>
                    @foreach ($taxRegimeCodes as $item)
                    <option value="{{ $item->value }}" class="text-slate-600">{{ $item->data() }}</option>
                    @endforeach
                </x-select-input>

                <x-input-error :messages="$errors->get('tax_regime_code')" class="mt-2" />
            </div>

            <!-- Contributor -->
            <div>
                <x-input-label for="contributor" :value="__('form.contributor')" />

                <x-select-input class="block w-full mt-1 text-slate-600" name="contributor" wire:model.lazy='contributor' :value="old('contributor')">
                    <option value="" class="text-slate-600">{{ __('form.first_select') }}</option>
                    @foreach ($contributors as $item)
                    <option value="{{ $item->value }}" class="text-slate-600">{{ $item->data() }}</option>
                    @endforeach
                </x-select-input>

                <x-input-error :messages="$errors->get('contributor')" class="mt-2" />
            </div>
        </div>

        <!-- State Registration -->
        <div>
            <x-input-label for="state_registration" :value="__('form.state_registration')" />

            <x-text-input id="state_registration" class="block w-full mt-1" type="text" name="state_registration" wire:model.lazy='state_registration' :value="old('state_registration')" />

            <x-input-error :messages="$errors->get('state_registration')" class="mt-2" />
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4 mb-4">
        <div class="grid grid-cols-2 gap-4">
            <!-- Zipcode -->
            <div>
                <x-input-label for="zipcode" :value="__('form.zipcode')" />

                <x-text-input id="zipcode" class="block w-full mt-1" type="text" name="zipcode" wire:model.lazy='zipcode' :value="old('zipcode')" />

                <x-input-error :messages="$errors->get('zipcode')" class="mt-2" />
            </div>

            <!-- Fu -->
            <div>
                <x-input-label for="fu" :value="__('form.fu')" />

                <x-text-input id="fu" class="block w-full mt-1" type="text" name="fu" wire:model.lazy='fu' :value="old('fu')" />

                <x-input-error :messages="$errors->get('fu')" class="mt-2" />
            </div>
        </div>

        <!-- City -->
        <div>
            <x-input-label for="city" :value="__('form.city')" />

            <x-text-input id="city" class="block w-full mt-1" type="text" name="city" wire:model.lazy='city' :value="old('city')" />

            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>
        <!-- District -->
        <div>
            <x-input-label for="district" :value="__('form.district')" />

            <x-text-input id="district" class="block w-full mt-1" type="text" name="district" wire:model.lazy='district' :value="old('district')" />

            <x-input-error :messages="$errors->get('district')" class="mt-2" />
        </div>
    </div>

    <div class="grid grid-cols-5 gap-4 mb-4">
        <div class="col-span-2">
            <!-- Adress -->
            <div>
                <x-input-label for="adress" :value="__('form.adress')" />

                <x-text-input id="adress" class="block w-full mt-1" type="text" name="adress" wire:model.lazy='adress' :value="old('adress')" />

                <x-input-error :messages="$errors->get('adress')" class="mt-2" />
            </div>
        </div>

        <!-- Number -->
        <div>
            <x-input-label for="number" :value="__('form.number')" />

            <x-text-input id="number" class="block w-full mt-1" type="text" name="number" wire:model.lazy='number' :value="old('number')" />

            <x-input-error :messages="$errors->get('number')" class="mt-2" />
        </div>
        <div class="col-span-2">
            <!-- Complement -->
            <div>
                <x-input-label for="complement" :value="__('form.complement')" />

                <x-text-input id="complement" class="block w-full mt-1" type="text" name="complement" wire:model.lazy='complement' :value="old('complement')" />

                <x-input-error :messages="$errors->get('complement')" class="mt-2" />
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 mb-4">
        <!-- Observarion -->
        <div>
            <x-input-label for="observation" :value="__('form.observation')" />

            <x-text-input id="observation" class="block w-full mt-1" type="text" name="observation" wire:model.lazy='observation' :value="old('observation')" />

            <x-input-error :messages="$errors->get('observation')" class="mt-2" />
        </div>
    </div>

    <div class="flex justify-end">
        <x-primary-button type='submit'>{{ __('navigation.create') }}</x-primary-button>
    </div>

</form>