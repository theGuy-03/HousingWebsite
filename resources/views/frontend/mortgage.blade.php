@extends('frontend.master')
@section('main')
@php
    $posts=App\Models\Property::paginate(12);
@endphp
<div class="main-content">
    @include('frontend.body.slidShow')
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">New Properties</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 pt-2">
                    <div class="property-slider-wrap pt-2">
                            <div class="property-slider">

                                    @foreach ($userData as $post )
                                    <div class="card">
                                        <div class="property-item">
                                            <div class="row">
                                                <img src="{{ $post->images->path }}" alt="Image "  class="image-fluid " style="min-height: 380px;">
                                            </div>
                                            <div class="property-content">
                                                <div class="price "><span>{{ $post->mortgage->price }}</p>
                                                 </span></div>
                                                <div>
                                                    <span class="d-block mb-2 text-black-50">{{ Str::upper( $post->address->city) }}, {{ Str::ucfirst($post->address->district) }}</span>
                                                    <span class="city d-block mb-3">{{ Str::upper( $post->address->city) }}, AFG</span>

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

                                                    <a href="/single/post/details/{{ $post->id }}" class="btn btn-primary py-2 px-3">See details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- .item -->
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

                @foreach ($userData as $post )
                    <div class="col-sm-3">
                        <div class="card m-3">
                            <img src="{{ $post->images->path}}" alt="" style="max-height: 160px">

                            <div class="card-body">

                                <h3 style="font-weight: bold">{{ Str::upper( $post->address->city)}} </h3>

                                <span class="d-block mb-2 text-black-50 " style="text-decoration: underline ;font-width:black;" >
                                {{ $post->mortgage->price  }}
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
</div>
@endsection
