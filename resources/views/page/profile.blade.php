@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/profile.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="img">
                <img src="{{ asset('/image/cat/5.png') }}" alt="cat" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <h1>PROFILE</h1>
            <div class="owner box mx-auto">
                {{-- <img src="{{ asset('/image/logo-white.png') }}" alt="logo"  class="img-fluid mx-auto d-block logo pb-3"> --}}
                <h2><i class="bi bi-person-fill"></i></h2>
                <h3>{{ $data->name }}</h3>
                <h3>{{ $data->email }}</h3>
                <a href="/profile/update/{{ $data->id }}">
                    <button class="mx-auto text-center justify-content-center d-flex mt-3 submit">
                        EDIT
                    </button>
                </a>
            </div>

        </div>
    </div>
</div>
@endsection