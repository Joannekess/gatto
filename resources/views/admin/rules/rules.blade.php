@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/rules.css') }}">
@endsection
@section('content')
<div class="container mt-5 pb-5" id="admin">
    <div class="d-flex justify-content-between align-items-center">
        <form action="/admin/rules/search" method="GET" class="d-flex">
            {{-- <input type="text" name="search" class="form-control" placeholder="Search" value="{{ old('search') }}"> --}}
            <select name="search" id="search" class="form-control2">
                <option value="" disabled selected>Search</option>
                @foreach($penyakit as $penyakits)
                    <option value="{{ $penyakits->namaPenyakit }}" >{{ $penyakits->namaPenyakit }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn-search ps-3">
                <i class="bi bi-search-heart-fill">
                    
                </i>
            </button>
        </form>
        <h1>TABLE RULES</h1>
        <a href="/admin/rules/add" class="submit">ADD</a>
    </div>
    <table class="table-data">
        <thead>
            <tr>
                <th style="border-radius: 20px 0 0;">No.</th>
                <th>Nama Penyakit</th>
                <th>Nama Gejala</th>
                <th>CF Value</th>
                <th style="border-radius: 0 20px 0 0;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $datas)
                <tr>
                    <td>{{ $nomor++}}.</td>
                    <td>{{ $datas->namaPenyakit }}</td>
                    <td>{{ $datas->namaGejala }}</td>
                    <td>{{ $datas->CFValue }}</td>
                    <td>
                        <a href="/admin/rules/update/{{$datas->id}}"><i class="bi bi-pen-fill mx-2"></i></a>
                        <a href="{{ route('deleteRules', $datas->id) }}"><i class="bi bi-trash-fill mx-2"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection