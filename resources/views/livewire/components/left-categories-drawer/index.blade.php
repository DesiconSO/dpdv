<div>
    <!-- drawer init and show -->
    <div class="text-center">
        <button
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            type="button" data-drawer-target="drawer-categories" data-drawer-show="drawer-categories" aria-controls="drawer-categories">
            Categorias
        </button>
    </div>

    <!-- drawer component -->
    <div id="drawer-categories" tabindex="-1" aria-labelledby="drawer-categories-label" wire:ignore.self
         class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800">
        <h5 id="drawer-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
            Filtros</h5>

        <button type="button" data-drawer-hide="drawer-categories" aria-controls="drawer-categories"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Fechar</span>
        </button>

        <livewire:categories :categories="$categories"/>
    </div>
</div>