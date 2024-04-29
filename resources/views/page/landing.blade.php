@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/landing.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="box">
    <div class="row align-item-center pt-5">
        <div class="col kiri">
            <h3>WELCOME</h3>
            <h1>Pawrents</h1>
            <h4>Periksa kesehatan kucing anda di sini!</h4>
            @guest
              <a href="/login" class="button type--A">
                <div class="button__line"></div>
                <div class="button__line"></div>
                <span class="button__text">GET STARTED</span>
                <div class="button__drow1"></div>
                <div class="button__drow2"></div>
            </a>
            @else
                <a href="/home" class="button type--A">
                    <div class="button__line"></div>
                    <div class="button__line"></div>
                    <span class="button__text">GET STARTED</span>
                    <div class="button__drow1"></div>
                    <div class="button__drow2"></div>
                </a>
            @endguest
            </div>

        <div class="col">
            <div class="main-cat">
                <img src="{{ asset('/image/cat/2.png') }}" alt="logo"  class="img-fluid">
            </div>
        </div>
    </div>
    </div>
</div>
@endsection