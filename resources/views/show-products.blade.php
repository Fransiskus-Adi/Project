@extends('layout.main')

@section('container')
    <div class="display-product min-vh-100">
        <div class="heading">
            <h1>Our Products</h1>
        </div>
        <div class="list-products">
            <div class="products">
                <div class="card" style="width: 15rem;">
                    <img src="{{ asset('assets/recycled-chair.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Rp 120.000</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
