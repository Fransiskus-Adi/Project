@extends('layout.main')

@section('form')
    <div class="content-login">
        <div class="heading">
            <h1>Register</h1>
        </div>
        <div class="register-card">
            <div class="card w-25">
                <div class="card-body">
                    <form method="post" action="{{ url('/store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name">
                            @error('full_name')
                                <p style="color:red;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="text" class="form-control" id="email" name="email">
                            @error('email')
                                <p style="color:red;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            @error('password')
                                <p style="color:red;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation">
                            @error('confirm_password')
                                <p style="color:red;">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
