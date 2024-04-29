@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/landing.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="box">
    <div class="row align-item-center pt-5">
        <div class="col-6">
            <div class="main-cat">
                <img src="{{ asset('/image/cat/6.png') }}" alt="logo"  class="img-fluid">
            </div>
        </div>
        <div class="col-5 col kiri text-end pe-5 me-5 justify-content-end">
            <h3>WELCOME</h3>
            <h1>ADMIN</h1>
            <div class="d-flex justify-content-end">
            @if (Auth::guard('admin')->check())
                <a href="/admin/home" class="button type--A">
                    <div class="button__line"></div>
                    <div class="button__line"></div>
                    <span class="button__text">GET STARTED</span>
                    <div class="button__drow1"></div>
                    <div class="button__drow2"></div>
                </a>
            @else
            <a href="/admin/login" class="button type--A">
                <div class="button__line"></div>
                <div class="button__line"></div>
                <span class="button__text">GET STARTED</span>
                <div class="button__drow1"></div>
                <div class="button__drow2"></div>
            </a>
            @endif
            </div>

        </div>


    </div>
    </div>
</div>
@endsection