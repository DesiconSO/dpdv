<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="grid grid-cols-8 gap-2 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
            <div class="col-span-2 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                <label for="proposalAmount" class="text-slate-600">Propostas Geral</label>
                <div class="flex items-center justify-center text-4xl font-bold text-blue-500">
                    <x-bi-clipboard class="w-6 h-6 mr-5 " />
                    <p name="proposalAmount" id="proposalAmount" class="text-4xl font-bold text-center">
                        2.159
                    </p>
                </div>
            </div>
            <div class="col-span-2 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                <label for="proposalAmount" class="text-slate-600">+ Propostas Aceitas</label>
                <div class="flex items-center justify-center text-4xl font-bold text-green-500">
                    <x-bi-clipboard-check class="w-6 h-6 mr-5 " />
                    <p name="proposalAmount" id="proposalAmount" class="text-4xl font-bold text-center">
                        1.823
                    </p>
                </div>
            </div>
            <div class="col-span-2 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                <label for="proposalAmount" class="text-slate-600">- Propostas Recusadas</label>
                <div class="flex items-center justify-center text-4xl font-bold text-red-500">
                    <x-bi-clipboard-x class="w-6 h-6 mr-5 " />
                    <p name="proposalAmount" id="proposalAmount" class="text-4xl font-bold text-center">
                        259
                    </p>
                </div>
            </div>
            <div class="col-span-2 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                <label for="proposalAmount" class="text-slate-600">- Propostas pendentes</label>
                <div class="flex items-center justify-center text-4xl font-bold text-yellow-300">
                    <x-bi-clipboard-pulse class="w-6 h-6 mr-5 " />
                    <p name="proposalAmount" id="proposalAmount" class="text-4xl font-bold text-center">
                        34
                    </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-8 gap-2 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:mt-1">
            <div class="col-span-2 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                <div class="">
                    <h2 class="mb-2 font-semibold text-md">Dados Vendas</h2>

                    <ul class="w-full gap-2 text-sm">
                        <li class="flex justify-between py-1">
                            <p>Quantidade de Vendas:</p> <span class="">R$ 1550,87</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <p>Quantidade de Vendas:</p> <span class="">R$ 1550,87</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <p>Quantidade:</p> <span class="">R$ 1550,87</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <p>Quantidade:</p> <span class="">R$ 1550,87</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <p>Quantidade:</p> <span class="">R$ 1550,87</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <p>Quantidade:</p> <span class="">R$ 1550,87</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <p>Quantidade:</p> <span class="">R$ 1550,87</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <p>Quantidade:</p> <span class="">R$ 1550,87</span>
                        </li>
                        <li class="flex justify-between py-1">
                            <p>Quantidade:</p> <span class="">R$ 1550,87</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-span-4 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                {{ $proposalBar->container() }}
            </div>
            <div class="col-span-2 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                {{ $sellerSalesChart->container() }}
            </div>

            <div class="col-span-4 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                {{ $clientPurchasesChart->container() }}
            </div>
            <div class="col-span-4 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                {{ $clientCreatedChart->container() }}
            </div>
        </div>
    </div>

    {{ $proposalBar->script() }}
    {{ $sellerSalesChart->script() }}
    {{ $clientPurchasesChart->script() }}
    {{ $clientCreatedChart->script() }}
</x-app-layout>