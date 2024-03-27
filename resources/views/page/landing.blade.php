@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/landing.css') }}">
@endsection
@section('content')
    <!-- <img src="{{ asset('/image/hand.png') }}" alt="hand" class="float-start img-fluid home-bg d-block"> -->

<!-- <div class="container">
    <div class="main-image">
        <img src="{{ asset('/image/logo-brown.png') }}" alt="logo"  class="img-fluid mx-auto d-block home-logo">
        <h1 class="logo-text text-center">Check your cat’s health here!</h1>
    </div>
</div> -->

<div class="container">
    <div class="row">
        <h1 class="text-center welcome">WELCOME</h1>
        <div class="col">
            <h1>Check your cat’s <br> health here!</h1>
            <hr>
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
                <img src="{{ asset('/image/cat-4.png') }}" alt="logo"  class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection