@extends('userProfile.master');
@section('user')
@php
    $id=Auth::user()->id;
    $userData=App\Models\User::find($id);
@endphp
<div class="col-md-12">
    <div class="card card-profile">
      <img src="{{ asset('frontend/profile/img/bg-profile.jpg') }} " style="height: 300px" alt="Image placeholder" class="card-img-top">
      <div class="row justify-content-center">
        <div class="col-4 col-lg-4 order-lg-2">
          <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
            <center>
            <img src="{{!empty($userData->profile?->profile_image)?
            url($userData->profile?->profile_image):url('upload/avatar.png') }}"
              style="height: 90px;width :90px ;border-radius:50%">
            </center>
          </div>
        </div>
      </div>
      <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
      </div>
      <div class="card-body pt-0">
        <div class="row">
          <div class="col">
            {{-- <div class="d-flex justify-content-center">
              <div class="d-grid text-center">
                <span class="text-lg font-weight-bolder">22</span>
                <span class="text-sm opacity-8">Friends</span>
              </div>
              <div class="d-grid text-center mx-4">
                <span class="text-lg font-weight-bolder">10</span>
                <span class="text-sm opacity-8">Photos</span>
              </div>
              <div class="d-grid text-center">
                <span class="text-lg font-weight-bolder">89</span>
                <span class="text-sm opacity-8">Comments</span>
              </div>
            </div> --}}
          </div>
        </div>
        <div class="text-center mt-4">
          <h5>
            {{ $userData->name }}<span class="font-weight-light"></span>
          </h5>
          <div class="h6 font-weight-300">
            <i class="ni location_pin mr-2"></i>{{ $userData->profile->address }}
          </div>
          <div class="h6 mt-4">
            <i class="ni business_briefcase-24 mr-2"></i>{{ $userData->profile->phone }}
          </div>
          <div class="h6 mt-4">
            <i class="ni education_hat mr-2"></i>{{ $userData->email}}
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

