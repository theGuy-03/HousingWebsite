@extends('frontend.master')
@section('main')
<div class="hero page-inner overlay" style="background-image: url('{{ asset('frontend/asset/images/hero_bg_1.jpg')}} ');">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">All Users</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item "><a href="{{ route('index.home') }}">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
  @foreach ($users as $user)
  <div class="section" style="height: 200px">
    <div class="row justify-content-center footer-cta aos-init aos-animate" data-aos="fade-up">
        <div class=" col-7 text-center">
            <div class="row align-items-center">
                <div class=" col-4">
                    <img style="height: 80px; width:80px" src="{{!empty($user->profile?->profile_image)?url($user->profile?->profile_image): url('upload/avatar.png') }}" class="rounded-circle img-fluid border-2" alt="">
                </div>
                <div class=" col-4">
                    <h5>
                        {{ $user->name }}
                    </h5>
                </div>
                <div class=" col-4">
                    <a href="/view/profile/{{ $user->id }}" class="btn btn-primary"> See Profile</a>
                </div>
            </div>
        </div> <!-- /.col-lg-7 -->
    </div> <!-- /.row -->
</div>
  @endforeach


@endsection
