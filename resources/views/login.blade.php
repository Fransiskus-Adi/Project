@extends('layout.main')

@section('form')
    <div class="content-login">
        <div class="heading">
            <h1>Sign In</h1>
        </div>
        <div class="login-card">
            <div class="card w-25">
                <div class="card-body">
                    <form method="post" action="/login">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" id="full_name" name="full_name">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label">Remember me?</label>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
