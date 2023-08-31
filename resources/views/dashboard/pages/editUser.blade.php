@extends('dashboard.dashboard_master')
@section('admin')
<script src="{{ asset('jquery/jquery.js') }}"></script>
@php

@endphp
<div class="page-content">
    <div class="container-fluid">
        <div class="card-body">
            <form action="{{ route('update.userAuthority',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <h4 class="card-title">Edit User</h4>
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label" >Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="name" type="text"  id="name" readonly value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="username" type="text"  id="username" readonly value="{{ $user->username }}">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="email" type="text"  id="email" readonly value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">User Type</label>
                        <div class="col-sm-10">
                                <select name="usertype" id="usertype" class="form-control" >
                                    <option value="admin" {{ old('usertype', $user->usertype) == 'admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="user" {{ old('usertype', $user->usertype) == 'user' ? 'selected' : '' }}>User</option>
                                </select>
                        </div>
                    </div>
                    <!-- end row -->
                    <input type="submit" value="Updat Profile" class="btn btn-primary waves-effect waves-light">
                </form>
        </div>
    </div>

</div>

@endsection
