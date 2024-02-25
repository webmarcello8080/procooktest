<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Info extends Component
{
    public $product;

    public function mount($product):void
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.products.info');
    }
}
