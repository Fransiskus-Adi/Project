@extends('layout.main')

@section('container')
    <div class="update-item min-vh-100">
        <div class="heading">
            <h1>Add Item</h1>
        </div>
        <div class="update-box">
            <form method="post" action="/store" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Item Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Item price</label>
                    <input type="text" class="form-control" id="price" name="price">
                    {{-- @error('price')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror --}}
                </div>
                <div class="mb-3">
                    <label class="form-label">Item Category</label>
                    <select class="form-select" id="category" name="category">
                        <option value="Recycled">Recycled</option>
                        <option value="Second-hand">Second-Hand</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Item Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Image</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-success w-100 mb-5">Submit</button>
            </form>
        </div>
    </div>
@endsection
