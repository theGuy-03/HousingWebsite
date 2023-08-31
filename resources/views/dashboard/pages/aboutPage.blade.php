@extends('dashboard.dashboard_master')
@section('admin')
<script src="{{ asset('jquery/jquery.js') }}"></script>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">About Page</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-end mb-2">
                            <div class="col-sm-10">
                                <h4 class="card-title">Users</h4>
                            </div>
                            <div class="col-sm-2 align-items-end ">
                                <a href="{{ route('add.about') }}" class="btn btn-primary "><i class=" ri-user-2-fill"></i> Add About</a>
                            </div>
                        </div>



                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Photo</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Quality Property</th>
                                <th>Rliable Users</th>
                                <th>Easy And Safe</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @php($i=1)
                                @foreach ( $about as $about)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{!empty( $about?->image)?
                                    url($about->image):url('upload/avatar.png') }}"
                                     alt="" style="width: 50px ;height:50px;" class=" rounded-circle"></td>
                                    <td>{{ $about?->shortdi }}</td>
                                    <td>{{ $about?->longdi }}</td>
                                    <td>{{ $about?->quality }}</td>
                                    <td>{{ $about?->reliable }}</td>
                                    <td>{{ $about?->Easy }}</td>

                                    <td>
                                        <a href="" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="" class="btn btn-danger"><i class="fas fa-trash-restore-alt"></i> Delet</a>
                                    </td>
                                </tr>

                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection
