@extends('layout.main')

@section('container')
    <div class="update-item min-vh-100">
        <div class="heading">
            <h1>Update Item</h1>
        </div>
        <div class="update-box">
            @extends('Layout/main')
            <form method="post" action="/update-item/{{ $product->id }}" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Item ID</label>
                    <input type="text" class="form-control" id="id" name="id" disabled readonly
                        value="{{ $product->id }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Item Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Item Category</label>
                    <select id="category" name="category" class="form-select">
                        <option value="Recycled">Recycled</option>
                        <option value="Second-Hand">Second</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Item Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
                </div>
                <div class="mb-3">
                    <div class="old-image">
                        <label class="form-label">Old Image</label>
                        <img src="{{ asset('storage/image-product/' . $product->image) }}" class="img-thumbnail"
                            alt="...">
                    </div>
                    <div class="new-image">
                        <label class="form-label">New Image</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                </div>
                <button type="submit" class="btn btn-success w-100 mb-5">Update</button>
            </form>
        </div>
    </div>
@endsection
