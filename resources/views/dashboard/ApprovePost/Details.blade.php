@extends('dashboard.dashboard_master')
@section('admin')
<link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

<!-- jquery.vectormap css -->
<link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

<!-- DataTables -->
<link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Bootstrap Css -->
<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->



<link rel="stylesheet" href="{{ asset('frontend/asset/fonts/icomoon/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/asset/fonts/flaticon/font/flaticon.css') }}">

<link rel="stylesheet" href="{{ asset('frontend/asset/css/tiny-slider.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/asset/css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">
<div class="page-content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-8">
                <h1>Deed Photo</h1>
            </div>
            <div class="col-4">
                <a href="{{ route('approve.post',[$property->id]) }}" class="btn btn-primary" style="border-radius: 5px"><i class=" ri-check-double-fill"></i> Approve</a>
                <a href="" class="btn btn-danger "  style="border-radius: 5px"><i class=" fas fa-window-close"></i> Reject</a>
            </div>
        </div>
        <section class="mx-2 ">
            <hr>
            <div class="cotainer-fluid">
                <div class="row">


                    <p>Property ower clims this property with this documetns.</p>
                    @foreach ( $property->approves as $path)
                        <div class="col-sm-3">
                            <div class="card m-3">
                                <img src="{{ $path->deed_path }}" alt="" style="max-height: 260px">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <hr>

        <h1>Property Photo</h1>
        <p>These Photo belongs to Property </p>
        <section class="mt-3">
        <div class="row ">
            <div class="col-12 pt-2">
                <div class="property-slider-wrap pt-2">
                        <div class="property-slider">
                            @foreach ($image as $post )
                                <div class="card">
                                    <div class="property-item">
                                        <div class="row">
                                            <img src="{{ $post->path }}" alt="Image "  class="image-fluid " style="min-height: 380px;">
                                        </div>
                                        {{-- <div class="property-content">
                                            <div class="price mb-2"><span>
                                            @if($details->deal_type=='rent')
                                                <p> {{ $details->rent->price }}</p>
                                            @elseif($details->deal_type=='sale')
                                             <p> {{ $details->sale->price }}</p>
                                            @else
                                             <p>  {{ $details->mortgage->price }}</p>
                                            @endif</span></div>
                                            <div>
                                                <span class="d-block mb-2 text-black-50">{{ Str::upper( $details->address->city) }}, {{ Str::ucfirst($post->address->ditrict) }}</span>
                                                <span class="city d-block mb-3">{{ Str::upper( $details->address->city) }}, AFG</span>

                                                <div class="specs d-flex mb-4">
                                                    <span class="d-block d-flex align-items-center me-3">
                                                        <span class="icon-bed me-2"></span>
                                                        <span class="caption">{{ $details->bathroom }} beds</span>
                                                    </span>
                                                    <span class="d-block d-flex align-items-center">
                                                        <span class="icon-bath me-2"></span>
                                                        <span class="caption">{{ $details->bedroom }} baths</span>
                                                    </span>
                                                </div>

                                            </div>
                                        </div> --}}
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
    </section>
    <section class="mt-3">
        <div class="row">
            <div class="col-8">
                <h1>{{ Str::title($property->title) }}, {{ Str::upper(  $property->address->city ) }}  </h1>
            </div>
            <div class="col-4">
                @if($property->deal_type == 'rent')
                    <h1>{{ $property->rent->price }}</h1>
                @elseif($property->deal_type == 'sale')
                    <h1>{{ $property->sale->price }}</h1>
                @else
                    <h1>{{ $property->mortgage->price }}</h1>
                @endif
            </div>
        </div>

        <ul>
            <li >Prperty Owner Name: {{ $property->user?->name }}</li>
            <li >Prperty Owner Email: {{ $property->user?->email }}</li>
            <li >Prperty Owner UserName: {{ $property->user?->username }}</li>
            <li >Property Area: {{ $property->area }} </li>
            <li >Property Floor: {{ $property->floor }} </li>
            <li >Property Bathrooms: {{ $property->bathroom }}</li>
            <li >Property Bedrooms: {{ $property->bedroom }}</li>
            <li >Property Kitchen: {{ $property->kitchen }} </li>
            <li >Property Deal: {{ Str::upper( $property->deal_type) }} </li>
        </ul>
        <p>{{ $property->description }}</p>
    </section>
    </div>
</div>

<script src="{{ asset('frontend/asset/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/asset/js/tiny-slider.js') }}"></script>
<script src="{{ asset('frontend/asset/js/aos.js') }}"></script>
<script src="{{ asset('frontend/asset/js/navbar.js') }}"></script>
<script src="{{ asset('frontend/asset/js/counter.js') }}"></script>
<script src="{{ asset('frontend/asset/js/custom.js') }}"></script>

{{-- profile --}}
<script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- jquery.vectormap map -->
<script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>
        <!--tinymce js-->
        <script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }}"></script>

        <!-- init js -->
        <script src="{{ asset('backend/assets/js/pages/form-editor.init.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('jquery/jquery.js') }}"></script>
@endsection
