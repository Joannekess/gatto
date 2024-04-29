@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/profile.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="main">
        <div class="edit mx-auto">
            <div class="edit-header">
                <h3>ADD ADMIN</h3>
            </div>
            <div class="edit-body">
                {{-- <form action="/profile/update" method="POST"> --}}
                <form action="{{ route('createAdmin') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Nama Admin</label>
                        <input type="text" name="name" class="form-control" value="">
                    </div>
                    <div class="form-group
                    ">
                        <label for="email">Email Admin</label>
                        <input type="email" name="email" class="form-control" value="">
                    </div>
                    <div class="form-group
                    ">
                        <label for="password">Password Admin</label>
                        <input type="password" name="password" class="form-control">
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