@extends('frontend.master')
@section('main')
<div class="hero page-inner overlay" style="background-image: url('{{ asset('frontend/asset/images/hero_bg_3.jpg') }}');">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">About</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row text-left mb-5">
            <div class="col-12">
                <h2 class="font-weight-bold heading text-primary mb-4">About Us</h2>
            </div>
            <div class="col-lg-6">
                 {{ $about?->longdi }}
            </div>
            <div class="col-lg-6">

                 {{ $about?->shortdi }}
            </div>
        </div>

    </div>
</div>

<div class="section pt-0">
    <div class="container">
        <div class="row justify-content-between mb-5">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                <div class="img-about dots">
                    <img src="{{ asset($about?->image) }}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-home2"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Quality Properties</h3>
                        <p class="text-black-50">{{ $about?->quality }}.</p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-person"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Reliable User</h3>
                        <p class="text-black-50">{{ $about?->reliable }}</p>
                    </div>
                </div>

                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-security"></span>
                    </span>
                    <div class="feature-text">
                        <h3 class="heading">Easy and safe</h3>
                        <p class="text-black-50">{{ $about?->Easy }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
