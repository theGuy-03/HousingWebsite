@extends('dashboard.dashboard_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="card-body">
            <form action="{{ route('update.password') }}" method="POST">
                @csrf

                    <div class="row mb-3">
                        <h4 class="card-title mb-6">Change Password</h4>
                    </div>

                    @if (count($errors))
                        @foreach ($errors->all() as $error )
                        <p class="alert alert-warning" role="alert">{{ $error }}</p>
                        @endforeach
                    @endif
                    @if (Session()->has('update_Password'))
                        <div class="alert alert-success" role="alert">
                            {{ Session()->get('update_Password', 'default'); }}
                        </div>
                    @endif
                    @if(Session()->has('updatePassword'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session()->get('updatePassword', 'default'); }}
                    </div>
                    @endif
                    {{-- @if (Session::has('post-created'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session()->get('post-created', 'default'); }}
                                </div>
                           @endif --}}
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="oldPassword" type="password" id="oldPassword">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="newPassword" type="password" id="newPassword">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="confirm_Password" type="password" id="confirm_Password">
                        </div>
                    </div>
                    <input type="submit" value="Change Password" class="btn btn-primary waves-effect waves-light">
                </form>
        </div>
    </div>
</div>

@endsection
