@extends('dashboard.dashboard_master')
@section('admin')
@php
     $id=Auth::user()->id;
     $about=App\Models\User::find($id);
@endphp

<div class="page-content">
    <div class="container-fluid">
    <div class="card-body">
            <form action="{{ route('store.about',$about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                 @if(session()->has('flash'))
                    <div class="alert alert-success" role="alert">
                        <p>{{session()->get('flash', 'About updated successfylly!'); }}</p>
                    </div>
                @endif
                    <h4 class="card-title">Add About Page Data</h4>
                    <input type="hidden" name="id" value="{{ $about->id }}">
                    <div class="row mb-3">
                        <label for="shortdi" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                            <input id="shortdi" type="text" name="shortdi" required="" class="form-control" {{ $about->shortdi }}>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="quality" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input class="form-control" name="quality" type="text" id="quality" value="{{ $about->qulity }}">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="reliable" class="col-sm-2 col-form-label">Rliable Users</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="reliable" type="text" id="reliable" {{ $about->reliable }}>
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="Easy" class="col-sm-2 col-form-label">Easy And Safe</label>
                        <div class="col-sm-10">
                            <input type="text" id="Easy"  name="Easy" required="" class="form-control" {{ $about->Easy }}>
                        </div>
                    </div>
                     <!-- end row -->
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" id="image"  name="image" required="" class="form-control">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="Easy" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <img id="showImage" src="{{  (!empty($about->about?->image))?url(
                                $about->about?->image):url('upload/avatar.png')}}" alt="">
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="longdi" class="col-sm-2 col-form-label">Long Description</label>
                        <div class="col-sm-10">
                           <textarea id="elm1" name="longdi"  cols="" rows="10" class="form-control" required="" >
                                {{ $about->longdi }}
                           </textarea>
                        </div>
                    </div>
                    <!-- end row -->
                    <input type="submit" value="Add About" class="btn btn-primary waves-effect waves-light">
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
