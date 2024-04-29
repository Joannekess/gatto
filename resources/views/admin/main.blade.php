@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/main.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="title">
        <h3>WELCOME</h3>
        <h1>{{ $data->name }}</h1>
    </div>

    <div class="row">
        <div class="col">
            <a href="/admin/administrator">
                <div class="card c1 mx-auto">
                    <div class="circle">
                        <h3><i class="bi bi-heart-fill"></i></h3>
                    </div>
                    <h2>ADMINISTRATOR</h2>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="/admin/user">
                <div class="card c2 mx-auto">
                    <div class="circle">
                        <h3><i class="bi bi-heart-fill"></i></h3>
                    </div>
                    <h2>USERS</h2>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="/admin/rules">
                <div class="card c3 mx-auto">
                    <div class="circle">
                        <h3><i class="bi bi-heart-fill"></i></h3>
                    </div>
                    <h2>RULES</h2>
                </div>
            </a>
        </div>
    </div>

    <div class="row py-5">
        <div class="col">
            <a href="/admin/symptoms">
                <div class="card c1 mx-auto">
                    <div class="circle">
                        <h3><i class="bi bi-heart-fill"></i></h3>
                    </div>
                    <h2>SYMPTOMS</h2>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="/admin/diseases">
                <div class="card c2 mx-auto">
                    <div class="circle">
                        <h3><i class="bi bi-heart-fill"></i></h3>
                    </div>
                    <h2>DISEASES</h2>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="/admin/history">
                <div class="card c3 mx-auto">
                    <div class="circle">
                        <h3><i class="bi bi-heart-fill"></i></h3>
                    </div>
                    <h2>HISTORY</h2>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection