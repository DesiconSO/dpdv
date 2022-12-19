<div>
    @foreach ($feedbacks as $item)
    <livewire:components.feedback-component :feedback="$item->id" />
    @endforeach
</div>