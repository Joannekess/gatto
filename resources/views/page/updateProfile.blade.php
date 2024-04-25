@extends('template.app')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/page/profile.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="box">
        <div class="box-header">
            <h3>Update Profile</h3>
        </div>
        <div class="box-body">
            {{-- <form action="/profile/update" method="POST"> --}}
            <form action="{{ route('updateProfile', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group
                ">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="form-group
                ">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit">
                    Update
                </button>
            </form>
        </div>
    </div>
</div>
@endsection