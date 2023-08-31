@extends('dashboard.dashboard_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">
    <div class="card-body">
            <form action="{{ route('storeNew.user') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <h4 class="card-title">Add User</h4>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input id="name" type="text" name="name"  required="" class="form-control @error('name')is-invalid @enderror">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input id="username" type="text" name="username" required="" class="form-control @error('username')is-invalid @enderror" >
                            @error('username')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('password')is-invalid @enderror" name="email" type="text" id="email">
                            @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('password')is-invalid @enderror" name="password" type="password" id="password">
                            @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="password_confirmation" type="password" name="password_confirmation" required="" class="form-control @error('password_confirmation')is-invalid @enderror">
                            @error('password_confirmation')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                    <!-- end row -->
                    <input type="submit" value="Add User" class="btn btn-primary waves-effect waves-light">
                </form>
        </div>
    </div>
</div>

@endsection
