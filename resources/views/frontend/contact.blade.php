@extends('frontend.master')
@section('main')
@php
    $user=App\Models\User::where('usertype','admin')->first();
@endphp
<div class="hero page-inner overlay" style="background-image: url('{{ asset('frontend/asset/images/hero_bg_2.jpg')}} ');">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Contact Us</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row mb-3">
            <div class="col-9">
                <h3>Contact with us through Massenger or Email us :</h3>
            </div>
            <div class="col-3">
                <a href="chatify/{{ $user?->id }}" class="btn btn-primary"><i class="ri-messenger-fill"></i>  Massage</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info">

                    <div class="address mt-2">
                        <i class="icon-room"></i>
                        <h4 class="mb-2">Location:</h4>
                        <p>{{ Str::title($footer?->location) }}</p>
                    </div>

                    <div class="open-hours mt-4">
                        <i class="icon-clock-o"></i>
                        <h4 class="mb-2">Open Hours:</h4>
                        <p>
                           {{ Str::title($footer?->opendays ) }}<br>
                            {{ Str::title($footer?->openHours) }}
                        </p>
                    </div>

                    <div class="email mt-4">
                        <i class="icon-envelope"></i>
                        <h4 class="mb-2">Email:</h4>
                        <p>{{ $footer?->email }}</p>
                    </div>

                    <div class="phone mt-4">
                        <i class="icon-phone"></i>
                        <h4 class="mb-2">Call:</h4>
                        <p>{{ $footer?->phon1 }}</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                @if (session('flash'))
                    <div class="alert alert-success" role="alert">
                        <p>{{ session('flash') }}</p>
                    </div>
                @endif
                <form action="{{ route('contact.us') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" name="name" >
                        </div>
                        <div class="col-6 mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" name="email" required>
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- /.untree_co-section -->
@endsection
