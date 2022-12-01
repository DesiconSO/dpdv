<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="grid grid-cols-6 gap-4 mx-auto max-w-7xl sm:px-6 lg:px-8 ">
            <div class="col-span-4 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                {{ $proposalBar->container() }}
            </div>
            <div class="col-span-2 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                {{ $sellerSalesChart->container() }}
            </div>

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
                a
            </div>

            <div class="col-span-3 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                {{ $clientPurchasesChart->container() }}
            </div>
            <div class="col-span-3 p-6 mt-1 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                {{ $clientCreatedChart->container() }}
            </div>
        </div>
    </div>

    {{ $proposalBar->script() }}
    {{ $sellerSalesChart->script() }}
    {{ $clientPurchasesChart->script() }}
    {{ $clientCreatedChart->script() }}
</x-app-layout>