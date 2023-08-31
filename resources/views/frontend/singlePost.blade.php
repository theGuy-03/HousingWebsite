@extends('frontend.master');
@section('main')
<style>
    .slid-show{
        max-width:640px ;
        max-height: 427px;
        min-width: 640px;
        min-height: 427px:
    }
    .bg{
        background-color: rgba(rgb(235, 235, 235), green, blue, alpha)
    }
    ul li{
       font-size:large;
       color: black;
    }
</style>
<section  style="background-color:snow">
    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-9 mt-3">
                    <h2 class="font-weight-bold text-primary heading pt-4 ">Property Images</h2>
                </div>
                <div class="col-lg-3 mt-3">
                    <a href="/chatify/{{ $property->user?->id }}" class="btn btn-primary"><i class="ri-messenger-fill mt-1"></i> Message</a>
                </div>
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
                                                <img src="{{ $post->path }}" alt="Image "  class="image-fluid " style="min-height: 380px;">
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

<div>
    <div class="row mt-4 mb-3">
        <div class="col-10 offset-1">
            <div class="" id="property-overview-wrap">
                <div class="block-wrap">
                    <div class="d-flex property-overview-data">
                        <ul class="list-unstyled flex-fill text-alin-center font-">
                             <li> Property Type</li>
                            <li  class="  ri-home-2-fill"><strong>
                            @if($property->deal_type == 'rent')
                               {{ $property->rent->property_type }}
                            @elseif($property->deal_type == 'sale')
                               {{ $property->sale->property_type }}
                            @else
                               {{ $property->mortgage->property_type }}
                            @endif
                            </strong></li>
                        </ul>
                        <ul class="list-unstyled flex-fill">
                            <li >Bedrooms</li>
                            <li class="property-overview-item">
                                <i class="icon-bed me-2"></i> <strong>{{ $property->bedroom }}</strong>
                            </li>

                        </ul>
                        <ul class="list-unstyled flex-fill">
                            <li >Bathrooms</li>
                            <li class="property-overview-item">
                                <i class="icon-bath me-2"></i>
                                <strong>{{ $property->bathroom }}</strong>
                            </li>

                        </ul>
                        <ul class="list-unstyled flex-fill">
                            </li><li class="hz-meta-label h-area">sq.m</li>
                            <li class="property-overview-item">
                                <i class="houzez-icon icon-real-estate-dimensions-plan-1 mr-1"></i>
                                <strong>{{ $property->area }}</strong>

                        </ul>
                        <ul class="list-unstyled flex-fill">
                            <li>Number of floors</li>
                            <li class="property-overview-item">
                                <strong>{{ $property->floor }}</strong>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <hr>
      <div class="row">
            <div class="col-8 offset-2">
                <div class="block-content-wrap" style="height: auto !important;">

                    <div class="row">
                        <div class="col-8">
                            <h2>{{ Str::title($property->title) }},{{ Str::ucfirst($property->address->city) }},{{ Str::ucfirst($property->address->district) }} </h2>
                        </div>
                        <div class="col-4">
                             @if($property->deal_type =='rent')
                                    <h1></h1>{{Str::ucfirst($property->rent->price)  }}</h1>
                                @elseif($property->deal_type =='sale')
                                <h1>{{Str::ucfirst($property->sale->price)  }}</h1>
                                @else
                                <h1>{{Str::ucfirst($property->mortgage->price)  }}</h1>
                                @endif
                        </div>
                    </div>

                        <p>{{ Str::title($property->title) }} , {{ Str::ucfirst($property->address->city) }}, with the following specification.</p>
                        <p> @if($property->deal_type =='rent')
                                {{Str::ucfirst($property->rent->property_type)  }}
                            @elseif($property->deal_type =='sale')
                                {{Str::ucfirst($property->sale->property_type)  }}
                            @else
                                {{Str::ucfirst($property->mortgage->property_type)  }}
                            @endif
                            specification:</p>
                        <ul>
                        <li>Property types: @if($property->deal_type =='rent')
                            {{Str::ucfirst($property->rent->property_type)  }}
                        @elseif($property->deal_type =='sale')
                            {{Str::ucfirst($property->sale->property_type)  }}
                        @else
                            {{Str::ucfirst($property->mortgage->property_type)  }}
                        @endif</li>
                        <li>Purpose: for {{ Str::ucfirst($property->deal_type) }}</li>
                        <li>Land area: {{ $property->area }} square meters</li>
                        <li>Number of floors:  {{ $property->floor }}</li>
                        <li>Number of rooms:  {{ $property->bedroom }}</li>
                        <li>Number of kitchen: {{ $property->kitchen }}</li>
                        <li>Number of bathrooms: {{ $property->bathroom }}</li>
                        <p>
                            {{ Str::ucfirst($property->description) }}
                        </p>
                        </ul>
                        <p>WhatsApp Number: 0787280087</p>
                        <p><strong>Home Address</strong>: {{ Str::title($property->address->address_description) }}, {{ Str::title($property->address->district) }},{{ Str::title($property->address->city) }}</p>

                        <hr>
                    </div>
            </div>

</div>



</section>

@endsection
