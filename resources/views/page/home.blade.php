@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/home.css') }}">
@endsection
@section('content')
<div id="sec-1">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="img">
                    <img src="{{ asset('/image/cat-6.png') }}" alt="cat">
                </div>
            </div>
            <div class="col right">
                <div class="title">
                    <h3>WELCOME</h3>
                    <h1>{{$data->name}}</h1>
                    <p class="text-center">Kesehatan kucing anda sangat penting untuk anda dan kucing anda. <br> Klik tombol di bawah ini untuk memulai proses diagnostik.</p>
                </div>
                <div class="text-center mx-auto d-flex justify-content-center">
                    <a href="/diagnose" class="button type--A">
                        <div class="button__line"></div>
                        <div class="button__line"></div>
                        <span class="button__text">START DIAGNOSTIC</span>
                        <div class="button__drow1"></div>
                        <div class="button__drow2"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection