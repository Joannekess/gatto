@extends('template.admin')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/profile.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="main">
        <div class="edit mx-auto">
            <div class="edit-header">
                <h3>EDIT USER</h3>
            </div>
            <div class="edit-body">
                {{-- <form action="/profile/update" method="POST"> --}}
                <form action="{{ route('editUser', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama kamu!</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>
                    <div class="form-group
                    ">
                        <label for="email">Email kamu!</label>
                        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                    </div>
                    <div class="form-group
                    ">
                        <label for="password">Password kamu!</label>
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