<div {{ $attributes->class([
        'flex flex-col py-0.5 select-none',
     ]) }}
     x-data="{ open: false }"
>
    <li class="flex items-center">
        <div class="relative flex items-center">
            @if (!empty($children))
                <div class="absolute h-full flex items-center">
                    <span class="material-icons {{ empty($children) ?: 'cursor-pointer' }}" x-show="!open"
                          @click="open = !open">arrow_right</span>
                    <span class="material-icons {{ empty($children) ?: 'cursor-pointer' }}" x-show="open"
                          @click="open = !open">arrow_drop_down</span>
                </div>
            @endif
            <div class="relative ml-6">
                <input
                    type="checkbox"
                    value="{{ empty($id) ? "" : $id . " - "}}{{ $value }}"
                    {{ $value == "Todas" ? 'checked' : '' }}
                    wire:model.defer="selectedCategories"
                    id="{{ $id }}">
                <label for="{{ $id }}" class="ml-2 text-xs uppercase {{ empty($children) ?: 'cursor-pointer' }}"
                       @click="open = !open">{{!empty($id) ? $id . " - " . $value : $value }}</label>
            </div>
        </div>
    </li>

    @if (!empty($children))
        <div x-show="open" x-transition>
            <ol>
                {{ $slot }}
            </ol>
        </div>
    @endif
</div>