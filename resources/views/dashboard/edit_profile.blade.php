@extends('dashboard.dashboard_master')
@section('admin')
<script src="{{ asset('jquery/jquery.js') }}"></script>
@php
     $id=Auth::user()->id;
     $editData=App\Models\User::find($id);
@endphp
<div class="page-content">
    <div class="container-fluid">
        <div class="card-body">
            <form action="{{ route('store.profile',$editData->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <h4 class="card-title">Edit Profile</h4>
                    <input type="hidden" name="id" value="{{ $editData->id }}">
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="name" type="text" value="{{ $editData->name }}" id="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="username" type="text" value="{{ $editData->username }}" id="username">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="email" type="text" value="{{ $editData->email }}" id="email">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="address" type="text" value="{{ $editData->profile?->address }}" id="address">
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="phone" type="text" value="{{ $editData->profile?->phone }}" id="phone">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="profile_Image" type="file" id="image">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <img class="rounded avatar-xl " id="showImage"
                            src="{{
                                (!empty($editData->profile?->profile_Image))?url(
                                $editData->profile?->profile_Image):url('upload/avatar.png')}}" alt="admin image">
                        </div>
                    </div>
                    <!-- end row -->
                    <input type="submit" value="Updat Profile" class="btn btn-primary waves-effect waves-light">
                </form>
        </div>
    </div>

</div>
<script type="text/javascript">
    $(document).ready(function(){

        $('#image').change(function(e){

            var reader=new FileReader();

            reader.onload = function(e){

                $('#showImage').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
