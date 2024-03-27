@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection
@section('content')
<div class="container">
    <img src="{{ asset('/image/logo-brown.png') }}" alt="logo"  class="img-fluid mx-auto d-block login-logo">
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="text-center pb-4">Gatto Login</h1>
            <form action="/login/user" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ Session::get('email') }}" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="text-center mx-auto">
                    <button type="submit" name="submit" class="btn login-form ">Login</button>
                </div>
                <div class="text-center text-signup pt-3">
                    <h5>Don't have account? Sign Up <a href="/signup">here!</a> </h5>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
