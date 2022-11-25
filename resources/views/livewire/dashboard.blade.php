<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <h2 class="py-4 text-center">Dados Propostas</h2>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-2">
                            {{ $proposalBar->container() }}
                        </div>
                        <div>
                            {{ $sellerSalesChart->container() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-6 mt-5 bg-white border-b border-gray-200">
                <h2 class="py-4 text-center">Dados Clientes</h2>
                <div class="grid grid-cols-4 gap-6">
                    <div class="col-span-2">
                        <h3 class="py-4 text-center">Principais Usuários</h3>
                        <div>
                            {{ $clientPurchasesChart->container() }}
                        </div>
                    </div>
                    <div class="col-span-2">
                        <h3 class="py-4 text-center">Clientes Mensais</h3>
                        <div>
                            {{ $clientCreatedChart->container() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $proposalBar->script() }}
    {{ $sellerSalesChart->script() }}
    {{ $clientPurchasesChart->script() }}
    {{ $clientCreatedChart->script() }}
</x-app-layout>