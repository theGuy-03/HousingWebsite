@extends('userProfile.master')
@section('user')
<script src="{{ asset('jquery/jquery.js') }}"></script>
<hr>
<div class="form-group" style="background-color: rgba(rgb(122, 108, 108), green, blue, alpha)">
    <div class="card-body">
        <form action="{{ route('update.post', ['id' => Auth::id()]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h4 class="card-title">Add Property</h4>
                @if (count($errors))
                @foreach ($errors->all() as $error )
                <p class="alert alert-warning" role="alert">{{ $error }}</p>
                @endforeach
                  @endif
                @if (Session()->has('success'))
                  <div class="alert alert-success" role="alert">
                      {{ Session()->get('success', 'Form save successfuly!'); }}
                  </div>
                @endif
                    <div class="row mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <label for="title" class=" col-form-label">Title</label>
                                </div>
                                <div class="col-10">
                                    <input class="form-control" name="title" type="text"  id="title" value="{{ $post->title }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="card">
                            <div class="row ">
                                <div class="col-3">
                                    <label for="property_type" class=" col-form-label">Property Type</label>

                                    <select name="property_type" id="property_type" class="form-control">
                                        <option value="house"
                                            @if($post->deal_type=='sale')
                                                {{ old('property_type', $post->sale->property_type) == 'house' ? 'selected' : '' }}
                                            @elseif($post->deal_type=='rent')
                                                {{ old('property_type', $post->rent->property_type) == 'house' ? 'selected' : '' }}
                                            @else
                                                {{ old('property_type', $post->property_type) == 'house' ? 'selected' : '' }}
                                            @endif
                                        >House</option>
                                        <option value="apartment"
                                            @if($post->deal_type=='sale')
                                                {{ old('property_type', $post->sale->property_type) == 'apartment' ? 'selected' : '' }}
                                            @elseif($post->deal_type=='rent')
                                                {{ old('property_type', $post->rent->property_type) == 'apartment' ? 'selected' : '' }}
                                            @else
                                                {{ old('property_type', $post->property_type) == 'apartment' ? 'selected' : '' }}
                                            @endif
                                        >Apartment</option>
                                        <option value="office"
                                            @if($post->deal_type=='sale')
                                                {{ old('property_type', $post->sale->property_type) == 'office' ? 'selected' : '' }}
                                            @elseif($post->deal_type=='rent')
                                                {{ old('property_type', $post->rent->property_type) == 'office' ? 'selected' : '' }}
                                            @else
                                                {{ old('property_type', $post->property_type) == 'office' ? 'selected' : '' }}
                                            @endif
                                        >Office</option>
                                        <option value="hotel"
                                            @if($post->deal_type=='sale')
                                                {{ old('property_type', $post->sale->property_type) == 'hotel' ? 'selected' : '' }}
                                            @elseif($post->deal_type=='rent')
                                                {{ old('property_type', $post->rent->property_type) == 'hotel' ? 'selected' : '' }}
                                            @else
                                                {{ old('property_type', $post->property_type) == 'hotel' ? 'selected' : '' }}
                                            @endif
                                        >Hotel</option>
                                        <option value="land"
                                            @if($post->deal_type=='sale')
                                                {{ old('property_type', $post->sale->property_type) == 'land' ? 'selected' : '' }}
                                            @elseif($post->deal_type=='rent')
                                                {{ old('property_type', $post->rent->property_type) == 'land' ? 'selected' : '' }}
                                            @else
                                                {{ old('property_type', $post->property_type) == 'land' ? 'selected' : '' }}
                                            @endif
                                        >Land</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label for="price" class=" col-form-label">Price </label>
                                    <input type="text" name="price" id="price" class="form-control" value="@if($post->deal_type === 'rent'){{ $post->rent->price }}@elseif($post->deal_type === 'sale'){{ $post->sale->price }}@else{{ $post->mortgage->price }}@endif">
                                </div>

                                <div class="col-3">
                                    <label for="deal_type" class=" col-form-label">For </label>
                                    <select name="deal_type" id="deal_type" class="form-control">
                                        <option value="rent" {{ old('deal_type', $post->deal_type) == 'rent' ? 'selected' : '' }}>Rent</option>
                                        <option value="sale" {{ old('deal_type', $post->deal_type) == 'sale' ? 'selected' : '' }}>Sale</option>
                                        <option value="mortgage" {{ old('deal_type', $post->deal_type) == 'mortgage' ? 'selected' : '' }}>Mortgage</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="area" class=" col-form-label">Area s.qm </label>
                                    <input type="number" name="area" id="area" class="form-control" value="{{ $post->area }}" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="card">
                            <div class="row ">

                                        <div class="col-3">
                                            <label for="floor" class=" col-form-label">floor</label>
                                            <input type="number" name="floor" id="floor" class="form-control" value="{{ $post->floor }}">
                                        </div>

                                        <div class="col-3">
                                            <label for="bedroom" class=" col-form-label">Bedroom</label>
                                            <input type="number" name="bedroom" id="bedroom" class="form-control" value="{{ $post->bedroom }}">
                                        </div>

                                        <div class="col-3">
                                            <label for="bathroom" class=" col-form-label">Bathroom</label>
                                            <input type="number" name="bathroom" id="bathroom" class="form-control" value="{{ $post->bathroom }}">
                                        </div>
                                        <div class="col-3">
                                            <label for="kitchen" class=" col-form-label">Kitchen</label>
                                            <input class="form-control" name="kitchen" type="number"  id="kitchen" value="{{ $post->kitchen }}">
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Address</h4>
                            <div class="row">
                                <div class="col-3">
                                    <label for="city" class=" col-form-label">City</label>
                                    <select name="city" id="city" class="form-control">
                                        <option value="kabul" {{ old('city', $post->address->city) == 'kabul' ? 'selected' : '' }}>Kabul</option>
                                        <option value="herat" {{ old('city', $post->address->city) == 'herat' ? 'selected' : '' }}>Herat</option>
                                        <option value="mazar" {{ old('city', $post->address->city) == 'mazar' ? 'selected' : '' }}>Mazar</option>
                                        <option value="nangarhar" {{ old('city', $post->address->city) == 'nangarhar' ? 'selected' : '' }}>Nangarhar</option>
                                        <option value="Ghazni" {{ old('city', $post->address->city) == 'Ghazni' ? 'selected' : '' }}>Ghazni</option>
                                        <option value="helmand" {{ old('city', $post->address->city) == 'helmand' ? 'selected' : '' }}>Helmand</option>
                                        <option value="laghman" {{ old('city', $post->address->city) == 'laghman' ? 'selected' : '' }}>Laghman</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                        <label for="district" class=" col-form-label">District</label>
                                        <input type="text" name="district" id="district" class="form-control" value="{{ $post->address->district }}">
                                </div>
                                <div class="col-6">
                                        <label for="address_description" class=" col-form-label">Add Description</label>
                                        <textarea name="address_description" id="description" cols="" rows="2" class="form-control" >{{ $post->address->address_description }}</textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <label for="path" class=" col-form-label" >Images</label>
                                </div>
                                <div class="col-10">
                                <input class="form-control" type="file" name="path[]" id="path" multiple="multiple" value="{{ $post->images->path }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <label for="preview" class=" col-form-label"></label>
                                </div>
                                <div class="col-10">
                                    <img class="rounded" id="showImage" style="height: 100px; width:auto"
                                    src="{{  (!empty($data->profile?->profile_image))?
                                        url($data->profile?->profile_image):url('upload/avatar.png')}}"
                                         alt="admin image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <label for="description" class=" col-form-label">Description </label>
                                </div>
                                <div class="col-10">
                                    <textarea name="description" id="elm1" cols="" rows="10" class="form-control" >{{ $post->description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#path').change(function(e){
            var reader=new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
