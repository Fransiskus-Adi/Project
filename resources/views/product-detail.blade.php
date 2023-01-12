@extends('layout.main')

@section('container')
    <div class="product-detail">
        <div class="product-desc">
            <div class="card mb-3 w-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/image-product/' . $products->image) }}" class="img-fluid rounded-start"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title pb-3">{{ $products->name }}</h1>
                            <h6>Category</h6>
                            <p>{{ $products->category }}</p>
                            <h6>Price</h6>
                            <p>Rp {{ $products->price }}</p>
                            <h6>Description</h6>
                            <p class="card-text pb-4">{{ $products->description }}</p>
                            <a href="#" class="btn btn-success btn-lg">Login to buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
