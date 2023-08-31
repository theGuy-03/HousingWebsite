

<style>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {

  background-color: rgba(rgba(247, 244, 244, 0.945), green, blue, alpha)
  border-radius: 5%;
  color:
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 8px 12px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</style>
<div class="card-header pb-0">
    <div class="d-flex align-items-center">
        <div class="position-relative end-0">

            <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " href="{{ route('index.home') }}" role="tab" aria-selected="true">
                <i class="ri-home-2-fill"></i>
                <span class="ms-1">Home</span>
            </a>

        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto  mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
                <ul class="nav  nav-fill  mx-3" role="tablist">

                    <li class="nav-item ">
                    <a class="nav-link mb-0 px-0  active d-flex align-items-center justify-content-center "  href="{{  route('profile') }}" role="tab" aria-selected="true">
                        <i class="ni ni-app"></i>
                        <span class="ms-2">All</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mb-0 px-0  active d-flex align-items-center justify-content-center "  href="{{ route('sale.post') }}" role="tab" aria-selected="true">
                        <i class="ni ni-email-83"></i>
                        <span class="ms-2">Sale</span>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0  active d-flex align-items-center justify-content-center "  href="{{ route('rent.post') }}" role="tab" aria-selected="true">
                        <i class="ni ni-email-83"></i>
                        <span class="ms-2">Rent</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mb-0 px-0  d-flex active align-items-center justify-content-center "  href="{{ route('mortgage.post') }}" role="tab" aria-selected="true">
                        <i class="ni ni-settings-gear-65"></i>
                        <span class="ms-2">Mortgage</span>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mx-2">
            <a href="{{ route('add.property') }}"  id="" class="btn btn-primary btn-sm my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3   d-flex align-items-center float-right"><i class="ni ni-settings-gear-65 mx-1"></i>Add New</a>
        </div>
        <div class="mx-3">
            <ul class="mx-3">
                <li class="dropdown">
                        <a href="" class="dropbtn btn btn-primary btn-sm  my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3  d-flex align-items-center  "><i class="ni ni-settings-gear-65 mx-1"></i> Setting</a>
                        <div class="dropdown-content">
                        <a href="{{ route('edit.useraccout') }}">Edit Profile</a>
                        <a href="{{ route('editUser.profile') }}">Change Password</a>
                        <a href="{{ route('propeties.list') }}">All Post</a>
                        <a href="{{ route('distroy.userAccout',$id=auth::user()->id ) }}">Delete Acout</a>
                        <a href="{{ route('admin.logout') }}">Logout</a>
                        </div>
                </li>

            <ul>
        </div>
    </div>
</div>

{{-- Models  --}}
{{-- Models  of Add Property--}}
 {{-- <form id="ajaxForm">
    <div class="modal fade" id="addperopertyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modelTitle"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
                <span id="nameError" class="text-danger"></span>
                </div>
                <div class="form-group mb-3">
                    <label for="propterty_type">Property Type</label>
                    <select name="property_type" id="type" class="form-control">
                        <option class="form-control" value="house">House</option>
                        <option class="form-control" value="apartment">Apartment</option>
                        <option class="form-control" value="land">Land</option>
                    </select>
                    <span id="typeError" class="text-danger"></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="modelSave"></button>
            </div>
        </div>
        </div>
    </div>
</form> --}}


     {{-- jquery model --}}
     {{-- <script >
        $(document).ready(function(){
            alert('hello')
            $.ajaxSetup({
                header:{
                    'X-CSRF-TOKEN': $('meta[name=" csrf_token"]').attr('content')
                }
            });


            $('#modelTitle').html('Add Property');
            $('#modelSave').html('Save');

            var form=$('#ajaxForm')[0];

            $('#modelSave').click(function(){
                var formData= new FormData(form);

                $.ajax({
                    url: "{{ route('save.property') }}",
                    method : 'POST',
                    processData : 'false',
                    contentType: 'false',
                    data : formData,

                    success: function(response){
                        console.log(response);
                    },
                    error: function(response){
                        if(error){
                            console.log(error.responseJSON.errors.title)
                            $('#nameError').html(error.responseJSON.errors.title)
                            $('#typeError').html(error.responseJSON.errors.property_type)
                        }
                    }
                });
            });
        });
    </script> --}}
    {{-- jquery model end --}}
