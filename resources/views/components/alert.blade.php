@if($show)
    <div role="alert" {{ $attributes->class('relative flex justify-center') }}>
        <div class="absolute flex items-center justify-center p-4 mt-4 -mb-8 text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
            {{$message}}
        </div>
    </div>
@endif