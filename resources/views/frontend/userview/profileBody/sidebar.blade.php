
<div class="card card-profile sidenav bg-white navbar navbar-vertical navbar-expand-lg border-0 border-radius-xl my-3 fixed-start ms-4 width:300x" >
    <img src="{{ asset('frontend/profile/img/bg-profile.jpg') }}" alt="Image placeholder" class="card-img-top">
    <div class="row justify-content-center">
        <div class="col-4 col-lg-4 order-lg-2">
            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
            <a href="#">
                <img src="{{!empty($userData->profile?->profile_image)? $userData->profile?->profile_image:url('upload/avatar.png') }}"  style="height: 90px;width :90px ;border-radius:50%">
            </a>
            {{-- class="orunded-circle  border-2 border-white" --}}
            </div>
        </div>
    </div>

    <div class="card-body pt-0">
        <div class="text-center mt-4">
            <h5>
                {{ $userData->name }}
            </h5>
            <div class="h6 font-weight-300">
                <i class="ni location_pin mr-2"></i>{{ $userData->profile?->address }}
            </div>
            <div class="h6 mt-3">
            <i class="ni business_briefcase-24 mr-2"></i>{{ $userData->profile?->phone}}
            </div>
            <div class="h6 mt-2">
                <i class="ni business_briefcase-24 mr-2"></i>{{ $userData->email}}
            </div>

        </div>
        {{-- <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
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
                </div>
            </div>
        </div> --}}

    </div>
    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
        <div class="d-flex justify-content-between">
            <a href="{{ route('userview.about',$userData->id) }}" class="btn btn-sm btn-info mb-0 d-none d-lg-block " style="margin: 2px"><i class=" ri-information-fill"></i> About</a>
            <a href="/chatify/{{ $userData->id }}" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block" style="margin: 2px"><i class="ri-messenger-fill"></i> Message</a>
        </div>
    </div>
</div>
