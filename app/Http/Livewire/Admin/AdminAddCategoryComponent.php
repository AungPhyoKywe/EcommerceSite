<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Category;
class AdminAddCategoryComponent extends Component
{
    public $slug;
    public $name;

    public function generateslug() {
        $this->slug = Str::slug($this->name);
    }
    public function sotorecategory() 
    {
        $category = new Category;
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','category has been saved successuflly');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
