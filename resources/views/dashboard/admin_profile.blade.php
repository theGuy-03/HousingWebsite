@extends('dashboard.dashboard_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <center class="mt-4">
                    <img class="rounded-circle avatar-xl " src="{{
                        (!empty($adminData->profile?->profile_image))?url(
                        $adminData->profile->profile_image):url('upload/avatar.png')}}" alt="image">
                    </center>

                    <div class="card-body">
                        <h4>Name  : {{ $adminData->name }}</h1>
                        <h4>Username : {{ $adminData->username }}</h4>
                        <h4>Email : {{ $adminData->email }}</h1>
                        <h4>Address : {{ $adminData->profile?->address}}</h1>
                        <h4>Phone : {{ $adminData->profile?->phone }}</h1>

                        <a href="{{ route('edit.profile') }}" class="btn btn-primary waves-effect waves-light">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
