<div>
    <div class="">
        <div class="w-full mb-4">
            @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                <li class="space-y-1 text-sm font-thin text-red-600">{{ $error }}</li>
                @endforeach
            </ul>
            @endif

            <x-input-label for="sku" :value="__('form.product data')" class="" />
            <div class="grid grid-cols-12 gap-4 mt-2">
                <x-text-input id="sku" class="w-full col-span-7" type="text" name="sku" wire:model.lazy='sku' :placeholder="__('form.sku identification placeholder')" autofocus />
                <x-text-input id="amount" class="w-full col-span-3" type="text" name="amount" wire:model.lazy='amount' :placeholder="__('form.amount')" autofocus />

                <button wire:click.prevent="searchProduct" class="flex justify-center w-full col-span-2 text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Adicionar</button>
            </div>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        SKU
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descrição
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantidade
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Preço UN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        D.Escalonado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        D.Difal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{ $item['product']['codigo'] }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ mb_strimwidth($item['product']['descricao'], 0, 30, "...")  }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item['amount'] }}

                    </td>
                    <td class="px-6 py-4">
                        {{ 'R$ ' . number_format($item['product']['preco'], 2) }}
                    </td>
                    <td class="px-6 py-4">
                        {{ 'R$ ' . number_format($item['staggeredDiscount'], 2) }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item['difal'] . '%' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ 'R$ ' . number_format($item['totalWithDiscouts'], 2) }}
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