@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/profile.css') }}">
@endsection
@section('content')
<div class="container">
    <h1>PROFILE</h1>
    {{-- <div class="anabul box mx-auto">
        <img src="{{ asset('/image/logo-white.png') }}" alt="logo"  class="img-fluid mx-auto d-block logo">
        <h3 class="mt-3">Name : </h3>
        <h3>Age : </h3>
        <h3>Breeds : </h3>
        <h3>Gender : </h3>
        <button class="mx-auto text-center justify-content-center d-flex mt-3 submit" >
            EDIT
        </button>
    </div> --}}
    <div class="owner box mx-auto">
        <img src="{{ asset('/image/logo-white.png') }}" alt="logo"  class="img-fluid mx-auto d-block logo pb-3">
        {{-- <h2><i class="bi bi-person-fill"></i></h2> --}}
        <h3>{{ $data->name }}</h3>
        <h3>{{ $data->email }}</h3>
        <a href="/profile/update/{{ $data->id }}">
            <button class="mx-auto text-center justify-content-center d-flex mt-3 submit">
                EDIT
            </button>
        </a>
    </div>
</div>
@endsection