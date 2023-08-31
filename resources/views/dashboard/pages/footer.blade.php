@extends('dashboard.dashboard_master')
@section('admin')
<script src="{{ asset('jquery/jquery.js') }}"></script>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Footer Page</h4>

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
                                <a href="{{ route('add.footer') }}" class="btn btn-primary "><i class=" ri-add-box-line"></i> Add Footer</a>
                            </div>
                        </div>



                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Location</th>
                                <th>Open Houers</th>
                                <th>Open Days</th>
                                <th>Email</th>
                                <th>Disclaimer</th>
                                <th>Email</th>
                                <th>phone 1</th>
                                <th>Phone 2</th>
                                <th>Instagram Link</th>
                                <th>Facebooke Link</th>
                                <th>Tweeter Link</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @php($i=1)
                                @foreach ( $footers as $footer)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $footer->location }}</td>
                                    <td>{{ $footer->opendays }}</td>
                                    <td>{{ $footer->openHours }}</td>
                                    <td>{{ $footer->disclaimer }}</td>
                                    <td>{{ $footer->email }}</td>
                                    <td>{{ $footer->phon1 }}</td>
                                    <td>{{ $footer->phon2 }}</td>
                                    <td>{{ $footer->instagramLink }}</td>
                                    <td>{{ $footer->tweeterLink }}</td>
                                    <td>{{ $footer->facebookLink }}</td>
                                    <td>
                                        <a href="{{ route('add.footer') }}" class="btn btn-primary"><i class="ri-add-box-line"></i> Edit</a>

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
