<div class="col-xs-6 col-sm-4 col-md-3 pb-4">
    <div class="card lc-card">
        <img src="{{ $product->img }}" class="card-img-top p-3" alt="{{ $product->name }}">
        <div class="card-body d-flex justify-content-between p-3 lc-card-body">
            <p>{{ $product->name }}</p>
            <p class="price">{{ $product->price }}</p>
        </div>
    </div>
</div>