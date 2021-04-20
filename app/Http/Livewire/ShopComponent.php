<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ShopComponent extends Component
{
    public function render()
    {
        $products = Product::paginate(9);
        return view('livewire.shop-component',['products'=>$products])->layout('layouts.base');
    }
}
