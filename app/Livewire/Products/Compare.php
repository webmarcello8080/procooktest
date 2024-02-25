<?php

namespace App\Livewire\Products;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Compare extends Component
{
    public $selectedColour;
    public $selectedMaterial;
    public $selectedSize;
    public $selectedPrice;
    public $products = null;

    /**
     * filter the product based on the dropdown values
     */
    public function updated():void
    {
        $query = DB::table('products');

        if($this->selectedColour){
            $query->where('colour', $this->selectedColour);
        }

        if($this->selectedMaterial){
            $query->where('material', $this->selectedMaterial);
        }

        if($this->selectedSize){
            $query->where('size', $this->selectedSize);
        }

        if($this->selectedPrice){
            $query->where('price', $this->selectedPrice);
        }

        $this->products = $query->limit(4)->get();
    }

    public function render()
    {
        return view('livewire.products.compare');
    }
}
