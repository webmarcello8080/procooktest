<div class="contents px-3">
    <div class="grid-row-1 w-28 h-28">
        <img class=" w-full h-full object-cover" src="{{ $product->image }}" alt="">
    </div>
    <div class=" grid-row-2 font-bold text-l text-center">{{ $product->product_name }}</div>
    <div class=" grid-row-3">
        <ul>
            <li>{{ $product->point_1 }}</li>
            <li>{{ $product->point_2 }}</li>
            <li>{{ $product->point_3 }}</li>
        </ul>
    </div>
    <div class=" grid-row-4">£{{ $product->price }}</div>
    <div class=" grid-row-5">{{ $product->material }}</div>
    <div class=" grid-row-6">{{ $product->size }}</div>
    <div class=" grid-row-7">{{ $product->colour }}</div>
    <div class=" grid-row-8">{{ $product->weight }}g</div>
</div>
