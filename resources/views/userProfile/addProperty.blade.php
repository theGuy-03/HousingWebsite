@extends('userProfile.master')
@section('user')
<script src="{{ asset('jquery/jquery.js') }}"></script>
<div class="page-content">
    <div class="container-fluid">
<hr>
<div class="form-group" style="background-color: rgba(rgb(122, 108, 108), green, blue, alpha)">
    <div class="card-body">
        <form action="{{ route('save.property') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h4 class="card-title">Add Property</h4>
                @if (count($errors))
                @foreach ($errors->all() as $error )
                <p class="alert alert-warning" role="alert">{{ $error }}</p>
                @endforeach
                  @endif
                @if (Session()->has('success'))
                  <div class="alert alert-success" role="alert">
                      {{ Session()->get('success', 'Your post wil approve as soon as passable!'); }}
                  </div>
                @endif
                    <div class="row mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <label for="title" class=" col-form-label">Title</label>
                                </div>
                                <div class="col-10">
                                    <input class="form-control" name="title" type="text"  id="title">
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
                                        <option value="house">House</option>
                                        <option value="apartment">Apartment</option>
                                        <option value="Office">Office</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="land">Land</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <label for="price" class=" col-form-label">Price </label>
                                    <input type="text" name="price" id="price" class="form-control">
                                </div>

                                <div class="col-3">
                                    <label for="deal_type" class=" col-form-label">For </label>
                                    <select name="deal_type" id="deal_type" class="form-control">
                                        <option value="rent">Rent</option>
                                        <option value="sale">Sale</option>
                                        <option value="mortgage">Mortgage</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="area" class=" col-form-label">Area </label>
                                    <input type="number" name="area" id="area" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="card">
                            <div class="row ">

                                        <div class="col-3">
                                            <label for="floor" class=" col-form-label">floor</label>
                                            <input type="number" name="floor" id="floor" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="bedroom" class=" col-form-label">Bedroom</label>
                                            <input type="number" name="bedroom" id="bedroom" class="form-control">
                                        </div>

                                        <div class="col-3">
                                            <label for="bathroom" class=" col-form-label">Bathroom</label>
                                            <input type="number" name="bathroom" id="bathroom" class="form-control">
                                        </div>
                                        <div class="col-3">
                                            <label for="kitchen" class=" col-form-label">Kitchen</label>
                                            <input class="form-control" name="kitchen" type="number"  id="kitchen">
                                        </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Address</h4>
                            <div class="row">
                                <div class="col-3">
                                    <label for="city" class=" col-form-label">City</label>
                                    <select name="city" id="city" class="form-control">
                                            <option value="kabul">Kabul</option>
                                            <option value="herat">herat</option>
                                            <option value="mazar">mazar</option>
                                            <option value="nangarhar">Nangarhar</option>
                                            <option value="Ghazni">Ghazni</option>
                                            <option value="helmand">Helmand</option>
                                            <option value="laghman">Laghman</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                        <label for="district" class=" col-form-label">District</label>
                                        <input type="text" name="district" id="district" class="form-control">
                                </div>
                                <div class="col-6">
                                        <label for="address_description" class=" col-form-label">Address Description</label>
                                        <input type="text" name="address_description" id="description" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <label for="path" class=" col-form-label" >Images</label>
                                </div>
                                <div class="col-10">
                                <input class="form-control" type="file" name="path[]" id="path" multiple="multiple">
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
                                    <label for="description" class=" col-form-label">Property Description </label>
                                </div>
                                <div class="col-10">
                                    <textarea name="description" id="elm1" cols="" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <label for="deed_path" class=" col-form-label" >Deed Images : <br><span>Please provide reliable domuments.</span> </label>
                                </div>
                                <div class="col-10">
                                <input class="form-control" type="file" name="deed_path[]" id="deed_path" multiple="">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <label for="deed" class=" col-form-label"></label>
                                </div>
                                <div class="col-10">
                                    <img class="rounded" name="deed" id="deedImage" style="height: 100px; width:auto"
                                    src="{{  (!empty($data->profile?->profile_image))?
                                        url($data->profile?->profile_image):url('upload/avatar.png')}}"
                                         alt="admin image">
                                </div>
                            </div>
                        </div>
                    </div>

                <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
</div>
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



        $('#deed_path').change(function(e){

            var reader=new FileReader();

            reader.onload = function(e){

                $('#deeImage').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);
        });

    });

</script>
@endsection
