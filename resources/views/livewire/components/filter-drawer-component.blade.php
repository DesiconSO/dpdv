<div>
    <style>
        .tree-select-container>ul {
            max-height: 300px;
            overflow: auto;
            position: relative;
            margin-top: 5px;
        }

        .tree-select-container ul,
        .tree-list ul {
            float: none !important;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .tree-select-container>ul {
            margin-top: 10px !important;
        }

        .tree-select-container li .input-checkbox,
        .tree-list li .input-checkbox {
            margin-left: 16px !important;
        }

        .input-checkbox,
        .input-radio {
            display: inline-flex;
            min-height: 16px;
            margin-right: 6px;
            position: relative;
        }

        ul li {
            display: flex;
            align-items: center;
        }
    </style>
    <!-- drawer init and show -->
    <div class="text-center">
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            Categorias
        </button>
    </div>

    <!-- drawer component -->
    <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Filtros</h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Fechar</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <livewire:components.filter-drawer-dropdown-component dropdownIdentification="dropdownIdentification1" />
        </div>
    </div>
</div>