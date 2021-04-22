<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug) {

        $this->slug = $slug;
    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $populat_product = Product::inRandomOrder()->limit(4)->get();
        $related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.details-component',['product'=>$product,'populat_product'=>$populat_product,'related_products'=>$related_products])->layout('layouts.base');
    }
}
