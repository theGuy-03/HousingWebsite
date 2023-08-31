@extends('userProfile.master')
@section('user')

<div class="card-body">
    <form action="{{ route('save.photo') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <h4 class="card-title">Add Profile Info</h4>
            <!-- end row -->
            <div class="row mb-3">
                <div class="col-3">
                    <label for="address" class=" col-form-label">Address</label>
                </div>
                <div class="col-9">
                    <input class="form-control" name="address" type="text"  id="address">
                </div>
            </div>
             <!-- end row -->
             <div class="row mb-3">
                <div class="col-3">
                    <label for="phone" class=" col-form-label">Phone</label>
                </div>

                <div class="col-9">
                    <input class="form-control" name="phone" type="text" " id="phone">
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
                    src="{{ asset('upload/avatar.png') }}"
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
            <input type="submit" value="Save" class="btn btn-primary waves-effect waves-light">
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
