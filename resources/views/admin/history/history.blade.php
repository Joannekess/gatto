@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/history.css') }}">
@endsection
@section('content')
<div class="container mt-5 pb-5" id="admin">
    <div class="d-flex justify-content-between align-items-center">
        <div style="color: transparent"></div>
        <div style="color: transparent"></div>
        <h1 class="text-center">TABLE HISTORY</h1>
        <form action="/admin/history/search" method="GET" class="d-flex">
            <input type="text" name="search" class="form-control" placeholder="Search" value="{{ old('search') }}">
            <button type="submit" class="btn-search"><i class="bi bi-search-heart-fill"></i></button>
        </form>
        {{-- <a href="/admin/user/add" class="submit">ADD</a> --}}
    </div>
    <table class="table-data">
        <thead>
            <tr>
                <th style="border-radius: 20px 0 0;">No.</th>
                <th>Tanggal</th>
                <th>Nama User</th>
                <th>Nama Kucing</th>
                <th>Nama Penyakit</th>
                <th style="border-radius: 0 20px 0 0;">Persentase</th>
                {{-- <th style="border-radius: 0 20px 0 0;">Detail</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($histories as $history)
                <tr>
                    <td>{{ $nomor++}}.</td>
                    <td>{{ $history->created_at }}</td>
                    <td>{{ $history->namaUser}}</td>
                    <td>{{ $history->namaKucing }}</td>
                    <td>{{ $history->namaPenyakit }}</td>
                    <td>{{  number_format($history->hasilDiagnosis, 2, '.', ',') }}%</td>
                    {{-- <td>
                        <button type="button" class="btn-remove" data-bs-toggle="modal" data-bs-target="#{{ $history->id }}">
                        <i class="bi bi-search-heart-fill"></i>
                        </button>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection