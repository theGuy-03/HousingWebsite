
@extends('dashboard.dashboard_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Pendding Properties</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            @if(session()->has('flash'))
            <div class="alert alert-success">
                {{ Session()->get('flash', 'Data save successfuly!'); }}
            </div>
        @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-sm-10">
                                <h4 class="card-title">Property</h4>
                            </div>
                        </div>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>Title</th>
                                <th>Username</th>
                                <th>City</th>
                                <th>Price</th>
                                <th>Deal</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @php($i=1)
                                @foreach ( $propertise as $property)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $property->title }}</td>
                                    <td>{{ $property->user->username }}</td>

                                    <td>{{ $property->address->city }}</td>
                                    <td>
                                            @if ($property->deal_type === 'sale')
                                                {{ $property->sale->price }}

                                            @elseif ($property->deal_type === 'rent')
                                                 {{   $property->rent->price }}
                                            @else
                                                 {{   $property->mortgage->price }}
                                            @endif
                                     </td>
                                    <td>{{ $property->deal_type }}</td>


                                    <td class="group-btn">
                                        <a href="/property/details/{{$property->id}}" class="btn btn-info"> <i class="ri-error-warning-fill"></i> Details</a>
                                        <a href="{{ route('approve.post',[$property->id]) }}" class="btn btn-primary"><i class=" ri-check-double-fill"></i> Approve</a>
                                        <a href="{{ route('delete.post',[$property->id]) }}" class="btn btn-danger"><i class=" fas fa-window-close"></i> Reject</a>
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

