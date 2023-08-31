@extends('userProfile.master')
@section('user')
<hr class="horizontal dark">
@php
        $user = Auth::user();
        $userData = $user->property()->where('approve', true)->get();
@endphp
<section class="mx-2 ">
    <h2>All Property</h2>
    <hr>
    <div class="cotainer-fluid">
        <div class="row">

            @foreach ($userData as $post )
                <div class="col-sm-4">
                    <div class="card m-4">
                        <img src="{{ $post->images->path}}" alt="" style="max-height: 160px">

                        <div class="card-body">
                            <h5 class="card-title"> {{Str::title($post->title)  }}</h5>
                            <div>
                                <span class="d-block mb-2 text-black-50">{{ Str::title($post->address->city ) }},
                                     {{ Str::title($post->address->district) }},{{ Str::title($post->address->address_description) }}</span>

                                    <span><span class="d-block mb-2 text-black-50">For {{ Str::title($post->deal_type) }}</span></span>
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

                            </div>
                            <a href="/single/post/details/{{ $post->id }}" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
