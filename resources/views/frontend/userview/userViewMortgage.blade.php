@extends('frontend.userview.master')
@section('user')
<hr class="horizontal dark">
<section class="mx-2 ">
    <h2>All Mortgage Property</h2>
    <hr>
    <div class="cotainer-fluid">
        <div class="row">

            @foreach ($data as $post )
                <div class="col-sm-4">
                    <div class="card m-4">
                        <img src="{{ $post->images?->path}}" alt="" style="max-height: 160px">

                        <div class="card-body">
                            <h2 class="card-title"> {{ $post?->title }}</h2>
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
                            <p class="card-text">
                                <span class="d-block mb-2 text-black-50 " style="text-decoration: underline ;font-width:black;" >
                                   For {{ Str::ucfirst($post->deal_type) }}
                                </span>


                            <div class="specs d-flex mb-4">
                                <span class="d-block d-flex align-items-center me-3">
                                    <span class="icon-bed me-2"></span>
                                    <span class="caption">{{ $post->bedroom }} beds</span>
                                </span>
                                <span class="d-block d-flex align-items-center">
                                    <span class="icon-bath me-2"></span>
                                    <span class="caption">{{ $post->bathroom }} baths</span>
                                </span>
                            </div>
                            </p>
                            <a href="/single/post/details/{{ $post->id }}" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
