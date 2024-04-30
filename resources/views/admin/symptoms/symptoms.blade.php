@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/symptoms.css') }}">
@endsection
@section('content')
<div class="container mt-5 pb-5" id="admin">
    <div class="d-flex justify-content-between align-items-center">
        <div style="color: transparent">Tambah user</div>
        <h1>TABLE SYMPTOMS</h1>
        <a href="/admin/symptoms/add" class="submit">ADD</a>
    </div>
    <table class="table-data">
        <thead>
            <tr>
                <th style="border-radius: 20px 0 0;">No.</th>
                <th>Kode Gejala</th>
                <th>Nama Gejala</th>
                <th style="border-radius: 0 20px 0 0;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
                <tr>
                    <td>{{ $nomor++}}.</td>
                    <td>{{ $data->kodeGejala }}</td>
                    <td>{{ $data->namaGejala }}</td>
                    <td>
                        <a href="/admin/symptoms/update/{{$data->id}}"><i class="bi bi-pen-fill mx-2"></i></a>
                        <a href="{{ route('deleteSymptoms', $data->id) }}"><i class="bi bi-trash-fill mx-2"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection