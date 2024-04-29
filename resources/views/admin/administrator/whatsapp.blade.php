@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/profile.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="main">
        <div class="edit mx-auto">
            <div class="edit-header">
                <h3>WHATSAPP</h3>
            </div>
            <div class="edit-body">
                {{-- <form action="/profile/update" method="POST"> --}}
                <form action="{{ route('updateWhatsapp') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nomor Telepon</label>
                        <input type="text" name="phone" class="form-control" value="{{ $data->phone }}">
                    </div>
                    <div class="form-group
                    ">
                        <label for="email">Pesan</label>
                        <textarea type="email" name="message" class="form-control" rows="3">{{ $data->message }}</textarea>
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