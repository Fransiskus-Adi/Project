@extends('layout.main')

@section('container')
    <div class="product-detail">
        <div class="product-desc">
            <div class="card mb-3 w-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/recycled-chair.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title pb-3">Card title</h1>
                            <h6>Category</h6>
                            <p>Recycled</p>
                            <h6>Price</h6>
                            <p>Rp 120.000</p>
                            <h6>Description</h6>
                            <p class="card-text pb-4">This is a wider card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="#" class="btn btn-success btn-lg">Login to buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
