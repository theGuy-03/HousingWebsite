@extends('userProfile.master')
@section('user')
<hr style="border-block-color: black; border-width:2px">
<section class="mx-2 ">
    <h2>All Sale Property</h2>
    <hr>
    <div class="cotainer-fluid">
        <div class="row">
            @if (Session()->has('flash'))
            <div class="alert alert-success" role="alert">
                {{ Session()->get('flash','Post deleted Succefully!'); }}
            </div>
        @endif
            @foreach ($userData as $post )
                @csrf

                <div class="col-sm-4">
                    <div class="card m-4">
                        <img src="{{ $post->images?->path}}" alt="" style="max-height: 150px">

                        <div class="card-body">
                            <h5 class="card-title"> {{ $post->title }}</h5>
                            <div>
                                <span class="d-block mb-2 text-black-50">{{ $post->address?->city }}, {{ $post->address?->district }},{{ $post->address?->address_description }}</span>


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
                            <a href="{{ route('edit.post',[$post->id]) }}" class="btn btn-primary"><i class="fas fa-edit mx-1" ></i>Edit</a>
                            <a href="{{ route('delete.post',[$post->id]) }}" class="btn btn-danger"><i class="fas fa-trash-restore-alt  mx-1" ></i> Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>


@endsection

