@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/profile.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="main">
        <div class="edit mx-auto">
            <div class="edit-header">
                <h3>ADD DISEASES</h3>
            </div>
            <div class="edit-body">
                {{-- <form action="/profile/update" method="POST"> --}}
                <form action="{{ route('createDiseases') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Kode Penyakit</label>
                        <input type="text" name="kodePenyakit" class="form-control" value="">
                    </div>
                    <div class="form-group
                    ">
                        <label for="name">Nama Penyakit</label>
                        <input type="text" name="namaPenyakit" class="form-control" value="">
                    </div>
                    <div class="form-group
                    ">
                        <label for="name">Detail Penyakit</label>
                        <textarea type="text" name="detailPenyakit" class="form-control"></textarea>
                    </div>
                    <div class="form-group
                    ">
                        <label for="name">Pencegahan Penyakit</label>
                        <textarea type="text" name="pencegahanPenyakit" class="form-control"></textarea>
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