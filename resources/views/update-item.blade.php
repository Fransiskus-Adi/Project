@extends('layout.main')

@section('container')
    <div class="update-item min-vh-100">
        <div class="heading">
            <h1>Update Item</h1>
        </div>
        <div class="update-box">
            @extends('Layout/main')
            <form method="post" action="/update-item/{{ $product->id }}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Item ID</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled
                        readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Item price</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Item Category</label>
                    <select id="disabledSelect" class="form-select">
                        <option>Recycled</option>
                        <option>Second</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Item Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Item Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">New Image</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" class="btn btn-success w-100 mb-5">Submit</button>
            </form>
        </div>
    </div>
@endsection
