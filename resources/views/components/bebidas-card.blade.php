<div class="col-sm-6 col-md-3 pb-5 pt-4 lc-col-card">
    <div class="card lc-card">
        <img src="{{ $product->img }}" class="card-img-top p-3" alt="{{ $product->name }}">
        <div class="card-body p-3 lc-card-body">
            <p><strong>{{ $product->name }}</strong></p>
        </div>
        <div class="card-body d-flex justify-content-between px-3 lc-card-body">
            <p>{{ $product->firstOptionName }}</p>
            <p class="price">{{ $product->firstOptionPrice }}</p>
        </div>
        <div class="card-body d-flex justify-content-between p-3 lc-card-body">
            <p>{{ $product->secondOptionName }}</p>
            <p class="price">{{ $product->secondOptionPrice }}</p>
        </div>
    </div>
</div>