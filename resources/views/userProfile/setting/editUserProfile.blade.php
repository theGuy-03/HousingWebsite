@extends('userProfile.master')
@section('user')
<script src="{{ asset('jquery/jquery.js') }}"></script>
@php
     $id=Auth::user()->id;
     $data=App\Models\User::find($id);
@endphp
<hr>
<div class="card-body">
    <form action="{{ route('store.useraccount',$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

            @if (Session()->has('flash'))
                  <div class="alert alert-success" role="alert">
                      {{ Session()->get('success', 'profile edited  successfuly!'); }}
                  </div>
            @endif
            <h4 class="card-title">Edit Profile</h4>


            <input type="hidden" name="id" value=" {{ $data->id }}">
            <div class="row mb-3">
                <div class="col-3">
                    <label for="name" class="col-form-label">Name</label>
                </div>
                <div class="col-9">
                    <input class="form-control" name="name" type="text" value="{{ $data->name }}" id="name">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label for="example-text-input" class="col-form-label">Username</label>
                </div>
                <div class="col-9">
                    <input class="form-control" name="username" type="text" value="{{ $data->username }}" id="username">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <div class="col-3">
                    <label for="example-text-input" class=" col-form-label">Email</label>
                </div>
                <div class="col-9">
                    <input class="form-control" name="email" type="text" value="{{ $data->email }}" id="email">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <div class="col-3">
                    <label for="address" class=" col-form-label">Address</label>
                </div>
                <div class="col-9">
                    <input class="form-control" name="address" type="text" value="{{ $data->profile?->address }}" id="address">
                </div>
            </div>
             <!-- end row -->
             <div class="row mb-3">
                <div class="col-3">
                    <label for="phone" class=" col-form-label">Phone</label>
                </div>

                <div class="col-9">
                    <input class="form-control" name="phone" type="text" value="{{ $data->profile?->phone }}" id="phone">
                </div>
            </div>
            <!-- end row -->
            <!-- end row -->
            <div class="row mb-3">
                <div class="col-3">
                    <label for="profile_image" class=" col-form-label">Profile Image</label>
                </div>
                <div class="col-9">
                    <input class="form-control" name="profile_image" type="file" id="profile_image">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <div class="col-3">
                    <label for="example-text-input" class=" col-form-label"></label>
                </div>
                <div class="col-9">
                    <img class="rounded" id="showImage" style="height: 100px; width:auto"
                    src="{{  (!empty($data->profile?->profile_image))?
                        url($data->profile?->profile_image):url('upload/avatar.png')}}"
                         alt="admin image">
                </div>
            </div>
            {{-- <div class="row mb-3">
                <div class="col-3">
                    <label for="cover_image" class="col-form-label">Cover Image</label>
                </div>
                <div class="col-9">
                    <input class="form-control" name="profile_Image" type="file" id="cover_image">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <div class="col-3">
                    <label for="example-text-input" class="col-form-label"></label>
                </div>
                <div class="col-9">
                    <img class="rounded " id="showCover" style="height: 100px; width:auto"
                    src="{{
                        (!empty($data->profile->profile_Image))?url(
                        $editData->profile_Image):url('upload/avatar.png')}}" alt="admin image">
                </div>
            </div> --}}
            <!-- end row -->
            <input type="submit" value="Updat Profile" class="btn btn-primary waves-effect waves-light">
        </form>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        $('#profile_image').change(function(e){

            var reader=new FileReader();

            reader.onload = function(e){

                $('#showImage').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);
        });
        $('#cover_image').change(function(e){

        var reader=new FileReader();

        reader.onload = function(e){

            $('#showCover').attr('src',e.target.result);

        }

        reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
