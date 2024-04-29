@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/profile.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="main">
        <div class="edit mx-auto">
            <div class="edit-header">
                <h3>EDIT SYMPTOMS</h3>
            </div>
            <div class="edit-body">
                {{-- <form action="/profile/update" method="POST"> --}}
                <form action="{{ route('editSymptoms', $symptoms->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode">Kode Gejala</label>
                        <input type="text" name="kodeGejala" class="form-control" value="{{ $symptoms->kodeGejala }}">
                    </div>
                    <div class="form-group
                    ">
                        <label for="nama">Nama Gejala</label>
                        <input type="text" name="namaGejala" class="form-control" value="{{ $symptoms->namaGejala }}">
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