@extends('dashboard.dashboard_master')
@section('admin')
@php
     $id=Auth::user()->id;
     $footer=App\Models\User::find($id);
@endphp

<div class="page-content">
    <div class="container-fluid">
    <div class="card-body">
            <form action="{{ route('store.footer',$footer->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                 @if(session()->has('flash'))
                    <div class="alert alert-success" role="alert">
                        <p>{{session()->get('flash', 'About updated successfylly!'); }}</p>
                    </div>
                @endif
                    <h4 class="card-title">Add Footer Page Data</h4>
                    <input type="hidden" name="id" value="{{ $footer->id }}">
                    <div class="row mb-3">
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                            <input id="location" type="text" name="location" required="" class="form-control" value=" {{ $footer->footer?->location }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="openDays" class="col-sm-2 col-form-label">Open Days</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="openDays" type="text" id="quality" value="{{ $footer->footer?->opendays }}">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="openHours" class="col-sm-2 col-form-label">Open Hours</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="openHours" type="text" id="openHours" value=" {{ $footer->footer?->openHours }}">
                        </div>
                    </div>
                     <!-- end row -->
                     <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" id="Easy"  name="email" required="" class="form-control" value=" {{ $footer->footer?->email }}">
                        </div>
                    </div>
                     <!-- end row -->
                    <div class="row mb-3">
                        <label for="disclaimer" class="col-sm-2 col-form-label">Disclaimer</label>
                        <div class="col-sm-10">
                            <input type="text" id="disclaimer"  name="disclaimer" required="" class="form-control" value="{{ $footer->footer?->disclaimer }}">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="phone1" class="col-sm-2 col-form-label">phone 1</label>
                        <div class="col-sm-10">
                            <input type="text" id="phone1"  name="phone1" required="" class="form-control" value="{{ $footer->footer?->phon1 }}">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="phone2" class="col-sm-2 col-form-label">phone 2</label>
                        <div class="col-sm-10">
                            <input type="text" id="phone2"  name="phone2" required="" class="form-control" value="{{ $footer->footer?->phon2 }}">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="instagramLink" class="col-sm-2 col-form-label">Instagram Link</label>
                        <div class="col-sm-10">
                            <input type="test" id="instagramLink"  name="instagramLink" required="" class="form-control" value="{{ $footer->footer?->instagramLink }}">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="tweeterLink" class="col-sm-2 col-form-label">Tweeter Link</label>
                        <div class="col-sm-10">
                            <input type="text" id="tweeterLink"  name="tweeterLink" required="" class="form-control" value="{{ $footer->footer?->tweeterLink }}">
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row mb-3">
                        <label for="facebookLink" class="col-sm-2 col-form-label">facebook Link</label>
                        <div class="col-sm-10">
                            <input type="text" id="facebookLink"  name="facebookLink" required="" class="form-control" value="{{ $footer->footer?->facebookLink }}">
                        </div>
                    </div>
                    <!-- end row -->

                    <input type="submit" value="Add About" class="btn btn-primary waves-effect waves-light">
                </form>
        </div>
    </div>
</div>



@endsection
