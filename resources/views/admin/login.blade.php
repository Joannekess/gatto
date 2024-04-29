@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="main-image">
                <img src="{{ asset('/image/cat/11.png') }}" alt="hand" class="float-start img-fluid home-bg d-block">
            </div>
        </div>
        <div class="col">
            <div class="card mx-auto">
                <div class="card-body">
                    {{-- <h2 class="gatto">Gatto</h2> --}}
                    <h1 class="text-center pb-4">ADMIN LOGIN</h1>
                    <form action="/admin/login" method="POST">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <img src="{{ asset('/image/logo-brown.png') }}" alt="logo"  class="img-fluid mx-auto d-block login-logo"> --}}

</div>
@endsection


