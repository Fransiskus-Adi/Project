@extends('layout.main')

@section('container')
    <div class="display-product min-vh-100">
        <div class="heading">
            <h1>Our Products</h1>
        </div>
        <div class="list-products d-flex">
            @foreach ($products as $product)
                <div class="products">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('storage/image-product/' . $product->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Rp {{ $product->price }}</p>
                            <a href="/product-detail/{{ $product->name }}" class="btn btn-success">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
