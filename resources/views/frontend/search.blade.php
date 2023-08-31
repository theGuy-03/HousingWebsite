@extends('frontend.master')
@section('main')
<div class="main-content">
    @include('frontend.body.slidShow')

    <section class="mx-2 mt-4 ">
        <h2>Searched Property</h2>
        <hr>
        <div class="cotainer-fluid">
            <div class="row">

                @foreach ($posts as $post )

                    <div class="col-sm-3">
                        <div class="card m-3">
                            <img src="{{ $post->images->path}}" alt="" style="max-height: 160px">

                            <div class="card-body">
                                <h3 style="font-weight: bold">{{ Str::upper( $post->address->city)
                                     }} </h3>
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
</div>
@endsection
