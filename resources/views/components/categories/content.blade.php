<ol>
    <div>
        @foreach ($categories as $categorie)
            <x-categories.categorie-item
                id="{{$categorie['id']}}"
                value="{{$categorie['name']}}"
                children="{{isset($categorie['children']) ? true : ''}}"
            >
                @if (isset($categorie['children']))
                    <ol class="ml-4">
                        <x-categories.content :categories="$categorie['children']"/>
                    </ol>
                @endif
            </x-categories.categorie-item>
        @endforeach
    </div>
</ol>