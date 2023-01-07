@extends('layout.main')

@section('container')
    <div class="manage-item min-vh-100">
        <div class="heading">
            <h1>Manage Items</h1>
        </div>
        <div class="add-item float-end">
            <button type="button" class="btn btn-success"><a href="">Add Item</a></button>
        </div>

        <div class="list-items">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Item ID</th>
                        <th scope="col">Item Image</th>
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
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Update</button>
                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
