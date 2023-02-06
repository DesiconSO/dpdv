<div class="py-4 overflow-y-auto">
    <form class="list-none" action="#" wire:submit.prevent="categoriesFilter">
        <div class="text-sm">
            <x-categories.content :categories="$categories"/>
            <div class="flex justify-end w-full gap-4 mt-5">
                <x-primary-button>Buscar</x-primary-button>
            </div>
        </div>
    </form>
</div>