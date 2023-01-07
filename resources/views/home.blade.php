@extends('layout.main')

@section('container')
    <div class="content-1">
        <div class="left-content">
            <h1>Recycon Shop</h1>
        </div>
        <div class="right-content">
            <img src="{{ asset('assets/recycon-guest.jpg') }}" alt="">
        </div>
    </div>

    <div class="content-about">
        <div class="heading">
            <h1>About Us</h1>
        </div>
        <div class="abouts">
            <p>We are a shop for buying recycle things and second hand thing</p>
        </div>
    </div>
@endsection
