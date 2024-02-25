<div>
    <div class="compare-filters flex items-center justify-center gap-4 mb-4">
        <select wire:model.live="selectedColour">
            <option value="">Select a colour...</option>
            @foreach (\App\Models\Product::select('colour')->groupBy('colour')->orderBy('colour')->get() as $colour)
                <option value="{{ $colour->colour }}">{{ $colour->colour }}</option>
            @endforeach
        </select>
    
        <select wire:model.live="selectedMaterial">
            <option value="">Select a material...</option>
            @foreach (\App\Models\Product::select('material')->groupBy('material')->orderBy('material')->get() as $material)
                <option value="{{ $material->material }}">{{ $material->material }}</option>
            @endforeach
        </select>
    
        <select wire:model.live="selectedSize">
            <option value="">Select a size...</option>
            @foreach (\App\Models\Product::select('size')->groupBy('size')->orderBy('size')->get() as $size)
                <option value="{{ $size->size }}">{{ $size->size }}</option>
            @endforeach
        </select>
    
        <select wire:model.live="selectedPrice">
            <option value="">Select a price...</option>
            @foreach (\App\Models\Product::select('price')->groupBy('price')->orderBy('price')->get() as $price)
                <option value="{{ $price->price }}">£{{ $price->price }}</option>
            @endforeach
        </select>
    </div>

    <div class="compare-table">
        <div class="grid grid-cols-5">
            <div class="contents">
                <div class=" grid-row-1"></div>
                <div class=" grid-row-2">Product Name</div>
                <div class=" grid-row-3">Description</div>
                <div class=" grid-row-4">Price</div>
                <div class=" grid-row-5">Material</div>
                <div class=" grid-row-6">Size</div>
                <div class=" grid-row-7">Colour</div>
                <div class=" grid-row-8">Weight</div>
            </div>
            @if ($products)
                @if ($products->count())
                    @foreach ($products as $product)
                        @livewire('products.info', ['product' => $product], key($product->id))
                    @endforeach
                @else
                    <h2>no product found</h2>
                @endif
            @endif
        </div>
    </div>

</div>
