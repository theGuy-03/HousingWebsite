@extends('frontend.master')
@section('main')
@php
    $posts=App\Models\Property::paginate(12)->where('approve',true);

    $countProperty = App\Models\Property::where('approve',true)->count();
    $countSale = App\Models\Property::where('approve', true)
    ->where('deal_type', 'sale')
    ->count();

    $countRent = App\Models\Property::where('approve', true)
    ->where('deal_type', 'rent')
    ->count();

    $countMortgage = App\Models\Property::where('approve', true)
    ->where('deal_type', 'mortgage')
    ->count();
@endphp
<div class="main-content">
    @include('frontend.body.slidShow')
    {{-- <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Popular Properties</h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <p><a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">View all properties</a></p>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 pt-2">
                    <div class="property-slider-wrap pt-2">
                        <div class="property-slider">
                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('frontend/asset/images/img_1.jpg') }}" alt="Image" class="img-fluid">
                                </a>
                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('frontend/asset/images/img_2.jpg') }}" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('frontend/asset/images/img_3.jpg') }}" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('frontend/asset/images/img_4.jpg') }}" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('frontend/asset/images/img_5.jpg') }}" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('frontend/asset/images/img_6.jpg') }}" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('frontend/asset/images/img_7.jpg') }}" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('frontend/asset/images/img_8.jpg') }}" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->

                            <div class="property-item">

                                <a href="property-single.html" class="img">
                                    <img src="{{ asset('frontend/asset/images/img_1.jpg') }}" alt="Image" class="img-fluid">
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div> <!-- .item -->


                        </div>


                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div> --}}

    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">Popular Properties</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 pt-2">
                    <div class="property-slider-wrap pt-2">
                            <div class="property-slider">

                                    @foreach ($posts as $post )
                                    <div class="card">
                                        <div class="property-item">
                                            <div class="row">
                                                <img src="{{ $post->images->path }}" alt="Image "  class="image-fluid " style="min-height: 380px;">
                                            </div>
                                            <div class="property-content">
                                                <div class="price "><span>@if($post->deal_type=='rent')
                                                    <p> {{ $post->rent->price }}</p>
                                                 @elseif($post->deal_type=='sale')
                                                 <p> {{ $post->sale->price }}</p>
                                                 @else
                                                 <p>  {{ $post->mortgage->price }}</p>
                                                 @endif</span> </div>
                                                <div>
                                                    <span class="d-block mb-2 text-black-50 mt-1"> {{ Str::title($post->address->address_description) }},{{ Str::title($post->address->district) }},{{ Str::title( $post->address->city) }}, </span>
                                                    <span class="city d-block mb-3">{{ Str::upper( $post->address->city) }}, AFG</span>
                                                    <span class="city d-block mb-3">For {{ Str::ucfirst($post->deal_type) }}</span>

                                                    <div class="specs d-flex mb-4">
                                                        <span class="d-block d-flex align-items-center me-3">
                                                            <span class="icon-bed me-2"></span>
                                                            <span class="caption">{{ $post->bathroom }} beds</span>
                                                        </span>
                                                        <span class="d-block d-flex align-items-center">
                                                            <span class="icon-bath me-2"></span>
                                                            <span class="caption">{{ $post->bedroom }} baths</span>
                                                        </span>
                                                    </div>

                                                    <a href="/single/post/details/{{$post->id }}" class="btn btn-primary py-2 px-3">See details</a>
                                                </div>
                                            </div>
                               </div> </div> <!-- .item -->
                                @endforeach


                            </div>


                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="mx-2 ">
        <h2>All Property</h2>
        <hr>
        <div class="cotainer-fluid">
            <div class="row">

                @foreach ($posts as $post )

                    <div class="col-sm-3">
                        <div class="card m-3">
                            <img src="{{ $post->images?->path}}" alt="" style="max-height: 160px">

                            <div class="card-body">
                                <h3 style="font-weight: bold">{{ Str::upper( $post->address->city)
                                     }} </h3>
                                <span> <span class="d-block mb-2 text-black-50 mt-1"> {{ Str::title($post->address->address_description) }},{{ Str::title($post->address->district) }},{{ Str::title( $post->address->city) }}, </span></span>
                                <span class="d-block mb-2 text-black-50 " style="text-decoration: underline ;font-width:black;" >
                                @if($post->deal_type=='rent')
                                   <p> {{ $post->rent->price }}</p>
                                @elseif($post->deal_type=='sale')
                                <p> {{ $post->sale->price }}</p>
                                @else
                                <p>  {{ $post->mortgage->price }}</p>
                                @endif
                                </span>
                                        <span class="city d-block mb-3" style="font-size:20px"> For {{ Str::ucfirst($post->deal_type) }}</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">{{ $post->bathroom }} beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">{{ $post->bedroom }} baths</span>
                                            </span>
                                        </div>
                                <a href="/single/post/details/{{$post->id }}" class="btn btn-primary">See Details</a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <section class="features-1">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3 class="mb-3">Our Properties</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="500">
                    <div class="box-feature">
                        <span class="flaticon-building"></span>
                        <h3 class="mb-3">Property for Sale</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3 class="mb-3">Real Estate Agent</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
                <div class="col-6 col-lg-3"  data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="flaticon-house-1"></span>
                        <h3 class="mb-3">House for Sale</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, accusamus.</p>
                        <p><a href="#" class="learn-more">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section section-4 bg-light">
        <div class="container">

            <div class="row section-counter mt-5">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">
                        @if(is_numeric($countProperty))
                            {{ $countProperty }}
                        @else
                            0
                        @endif

                        </span></span>
                        <span class="caption text-black-50"># All Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">
                        @if(is_numeric($countSale))
                            {{ $countSale }}
                        @else
                            0
                        @endif
                        </span></span>
                        <span class="caption text-black-50"># of Sell Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">
                        @if(is_numeric($countRent))
                            {{ $countRent }}
                        @else
                            0
                        @endif
                        </span></span>
                        <span class="caption text-black-50"># of Rent Properties</span>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <span class="number"><span class="countup text-primary">
                        @if(is_numeric($countMortgage))
                            {{ $countMortgage }}
                        @else
                            0
                        @endif
                        </span></span>
                        <span class="caption text-black-50"># of Mortgage Properties</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
