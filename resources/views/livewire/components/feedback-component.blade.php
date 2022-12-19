<div class="w-full mt-5 border border-solid rounded-lg ">
    <div class="grid grid-cols-2 mt-4 text-center shadow-md">
        <div class="p-2 mx-8">
            <label for="fromUser" class="text-slate-500">{{ __("From") }}:</label>
            <input type="text" value="{{ $fromUser }}" name="fromUser" disabled class="border-0">
        </div>
        <div class="">
            <label for="toUser" class="text-slate-500">{{ __("To") }}:</label>
            <input type="text" value="{{ $toUser }}" name="toUser" disabled class="border-0">
        </div>
        <div class="col-span-2 p-2 mx-8 text-left border rounded-md">
            <h3 class="text-slate-500">Feedback:</h3>
            <p>{{$feedback}}</p>
        </div>
        <div class="col-span-2 p-2 mx-8 text-end">
            <div class="flex justify-end gap-4">
                <a href="#" wire:click.prevent="like({{ $feedbackId }})" aria-label="{{ __('Unlike') }}">
                    <x-bx-like class="w-5 duration-150 hover:text-blue-600 hover:opacity-30 focus:text-blue-600 focus:opacity-100" />
                </a>
                <a href="#" wire:click.prevent="unLike({{ $feedbackId }})" aria-label="{{ __('Like') }}">
                    <x-bx-like class="w-5 duration-150 rotate-180 hover:text-blue-600 hover:opacity-30 focus:text-blue-600 focus:opacity-100" />
                </a>
            </div>
            <div>
                <p class="flex justify-end" aria-label="{{ __('Likes') }}">{{ $likes }}</p>
            </div>
        </div>
    </div>
</div>