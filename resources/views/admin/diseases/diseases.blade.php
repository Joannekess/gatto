@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/diseases.css') }}">
@endsection
@section('content')
<div class="container mt-5" id="admin">
    <div class="d-flex justify-content-between align-items-center">
        <div style="color: transparent">Tambah user</div>
        <h1>TABLE DISEASES</h1>
        <a href="/admin/diseases/add" class="submit">ADD</a>
    </div>
    <table class="table-data">
        <thead>
            <tr>
                <th style="border-radius: 20px 0 0;">No.</th>
                <th>Kode Penyakit</th>
                <th>Nama Penyakit</th>
                <th>Detail Penyakit</th>
                <th>Pencegahan Penyakit</th>
                <th style="border-radius: 0 20px 0 0;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
                <tr>
                    <td>{{ $nomor++}}.</td>
                    <td>{{ $data->kodePenyakit }}</td>
                    <td>{{ $data->namaPenyakit }}</td>
                    <td>
                        <div class="td">
                            {{ $data->detailPenyakit }}
                        </div>
                    </td>
                    <td>
                        <div class="td">
                            {{ $data->pencegahanPenyakit }}
                        </div>
                    </td>
                     <td>
                        <a href="/admin/diseases/update/{{$data->id}}"><i class="bi bi-pen-fill mx-2"></i></a>
                        <a href="{{ route('deleteDiseases', $data->id) }}"><i class="bi bi-trash-fill mx-2"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection