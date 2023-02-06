<?php

namespace App\Http\Livewire\Components;

use App\Models\Category;
use Livewire\Component;

class CreateCategoryComponent extends Component
{
    public $identification;

    public $description;

    public function render()
    {
        return view('livewire.components.create-category-component');
    }

    public function saveCategory()
    {
        $validatedData = $this->validate([
            'identification' => 'required|unique:categories,identification',
            'description' => 'required|unique:categories,identification',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Category::create($validatedData);

        return redirect()->route('category.index');
    }
}
