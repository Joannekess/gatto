@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/user.css') }}">
@endsection
@section('content')
<div class="container mt-5" id="admin">
    <div class="d-flex justify-content-between align-items-center">
        <div style="color: transparent">Tambah user</div>
        <h1>TABLE USERS</h1>
        <a href="/admin/user/add" class="submit">ADD</a>
    </div>
    <table class="table-data">
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
                        <a href="/admin/user/update/{{$data->id}}"><i class="bi bi-pen-fill mx-2"></i></a>
                        <a href="{{ route('deleteUser', $data->id) }}"><i class="bi bi-trash-fill mx-2"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection