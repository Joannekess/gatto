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
                    <img src="{{ asset('/image/cat/1.png') }}" alt="cat">
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
</div>
<div id="sec-2">
    <div class="container">
        <div class="box">
            <h1>WHAT WE DO</h1>
            <div class="row text-center pt-5">
                <div class="col">
                    <div class="card c1 mx-auto">
                        <div class="circle">
                            <h3><i class="bi bi-search-heart"></i></h3>
                        </div>
                        <h2>CEK KESEHATAN</h2>
                        <p>Jawab pertanyaan seputar gejala yang di alami kucing kamu</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card c2 mx-auto">
                        <div class="circle">
                            <h3><i class="bi bi-clipboard-heart"></i></h3>
                        </div>
                        <h2>HASIL DIAGNOSA</h2>
                        <p>Gatto akan memberikan hasil diagnosa sesuai dengan gejala yang di alami</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card c3 mx-auto">
                        <div class="circle">
                            <h3><i class="bi bi-chat-left-heart"></i></h3>
                        </div>
                        <h2>HUBUNGI DOKTER</h2>
                        <p>Kucing kamu perlu penangan, hubungi dokter untuk tindakan lebih lanjut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="sec-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>KESEHATAN KUCING KAMU, KESEHATAN KAMU JUGA!</h2>
                <p>Taukah kamu, ada penyakit kucing yang bisa menular ke manusia loh! Tekan tombol ini untuk mempelajari lebih lanjut.</p>
                <div class="text-start mx-auto d-flex">
                    <a href="/diseases" class="button type--A">
                        <div class="button__line"></div>
                        <div class="button__line"></div>
                        <span class="button__text">CLICK ME!</span>
                        <div class="button__drow1"></div>
                        <div class="button__drow2"></div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="img-3">
                    <img src="{{ asset('/image/cat/4.png') }}" alt="cat" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection