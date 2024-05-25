@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/editRules.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="main">
        <div class="edit mx-auto">
            <div class="edit-header">
                <h3>ADD RULES</h3>
            </div>
            <div class="edit-body">
                {{-- <form action="/profile/update" method="POST"> --}}
                <form action="{{ route('createRules') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Nama Penyakit</label>
                        <select name="penyakit_id" id="penyakit_id">
                            @foreach($diseases as $diseases)
                                <option value="{{ $diseases->id }}">{{ $diseases->namaPenyakit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Gejala</label>
                        <select name="gejala_id" id="gejala_id">
                            @foreach($symptoms as $symptoms)
                                <option value="{{ $symptoms->id }}">{{ $symptoms->namaGejala }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">CF Value</label>
                            <select name="CFValue" id="CFValue">
                                <option value="0">Tidak Bergejala</option>
                                <option value="0.2">Tidak Tau</option>
                                <option value="0.4">Sedikit Yakin</option>
                                <option value="0.6">Cukup Yakin</option>
                                <option value="0.8">Yakin</option>
                                <option value="1.0">Sangat Yakin</option>
                            </select>
                        {{-- <input type="text" name="cf" class="form-control" value=""> --}}
                    </div>
                    <button type="submit" class="mx-auto text-center justify-content-center d-flex mt-4 update">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection