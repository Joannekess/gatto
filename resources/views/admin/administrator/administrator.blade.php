@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/administrator.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-6">
        <div class="title">
            <h3>WELCOME</h3>
            <h1>{{ $nama->name }}</h1>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#admin">
                <div class="card" style="background-color: white;">
                    <h2>DAFTAR ADMIN</h2>
                </div>
            </a>
            <a href="/admin/whatsapp">
                <div class="card" style="background-color: #FFB7B7;">
                    <h2>WHATSAPP</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="col-6">
        <div class="main-cat">
            <img src="{{ asset('/image/cat/8.png') }}" alt="logo"  class="img-fluid">
        </div>
    </div>
</div>
<div class="container mt-5 pt-5" id="admin">
    <h1> DAFTAR ADMIN </h1>
    <table class="table-data mt-3">
        <thead>
            <tr>
                <th style="border-radius: 20px 0 0;">No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th style="border-radius: 0 20px 0 0;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
                <tr>
                    <td>{{ $nomor++}}.</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        <a href="/admin/administrator/update/{{$data->id}}"><i class="bi bi-pen-fill mx-2"></i></a>
                        <a href="{{ route('deleteAdmin', $data->id) }}"><i class="bi bi-trash-fill mx-2"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="py-5">
        <a href="/admin/administrator/add" class="submit">Tambah admin</a>
    </div>
</div>

@endsection