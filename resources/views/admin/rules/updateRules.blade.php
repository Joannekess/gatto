@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/admin/editRules.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="main">
        <div class="edit mx-auto">
            <div class="edit-header">
                <h3>EDIT RULES</h3>
            </div>
            <div class="edit-body">
                <form action="{{ route('editRules', $rules->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama Penyakit</label>
                        <select name="penyakit" id="penyakit">
                            @foreach($diseases as $disease)
                                <option value="{{ $disease->id }} " {{ old('penyakit', $rules->penyakit_id) == $disease->id ? 'selected' : '' }}>{{ $disease->namaPenyakit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Gejala</label>
                        <select name="gejala" id="gejala">
                            @foreach($symptoms as $symp)
                                <option value="{{ $symp->id }}" {{ old('gejala', $rules->gejala_id) == $symp->id ? 'selected' : '' }}>{{ $symp->namaGejala }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">CF Value</label>
                            <select name="cf" id="cf">
                                <option value="0" {{ old('cf', $rules->CFValue) == '0' ? 'selected' : '' }} >Tidak Bergejala</option>
                                <option value="0.2" {{ old('cf', $rules->CFValue) == '0.2' ? 'selected' : '' }}>Tidak Tau</option>
                                <option value="0.4" {{ old('cf', $rules->CFValue) == '0.4' ? 'selected' : '' }}>Sedikit Yakin</option>
                                <option value="0.6" {{ old('cf', $rules->CFValue) == '0.6' ? 'selected' : '' }}>Cukup Yakin</option>
                                <option value="0.8" {{ old('cf', $rules->CFValue) == '0.8' ? 'selected' : '' }}>Yakin</option>
                                <option value="1.0" {{ old('cf', $rules->CFValue) == '1.0' ? 'selected' : '' }}>Sangat Yakin</option>
                            </select>
                        {{-- <input type="text" name="cf" class="form-control" value="{{ $rules->CFValue }}"> --}}
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