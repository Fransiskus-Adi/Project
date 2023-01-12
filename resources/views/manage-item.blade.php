@extends('layout.main')

@section('container')
    <div class="manage-item min-vh-100">
        <div class="heading">
            <h1>Manage Items</h1>
        </div>
        <div class="add-item float-end">
            <button type="button" class="btn btn-success"><a href="/add-item" style="color:white;">Add Item</a></button>
        </div>

        <div class="list-items">
            <table class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Item ID</th>
                        <th scope="col" style="width: 30%;">Item Image</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Description</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Item Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->image }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td>
                                <form action="/update-item/{{ $product->id }}">
                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                </form>
                                <form method="post" action="/manage-item/{id}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
