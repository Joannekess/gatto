@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/auth/signup.css') }}">
@endsection
@section('content')
<div class="container">
    <img src="{{ asset('/image/logo-brown.png') }}" alt="logo"  class="img-fluid mx-auto d-block login-logo">
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="text-center pb-4">Gatto Sign Up</h1>
            <form method="POST" action="/signup/user">
                @csrf
                <div class="mb-1">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="mb-1">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="text-center mx-auto mt-3">
                    <button type="submit" class="btn signup-form ">Sign Up</button>
                </div>
                <div class="text-center text-login pt-3">
                    <h5>Already have account? Login <a href="/login">here!</a> </h5>
                </div>
        </div>
    </div>
</div>

@endsection
