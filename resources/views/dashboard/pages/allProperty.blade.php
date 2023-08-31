@extends('dashboard.dashboard_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Propertise</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-sm-10">
                                <h4 class="card-title">Property</h4>
                                @if(session()->has('delete'))
                                    <div class="alert alert-success" role="alert">
                                        <p>{{ session()->get('delelte') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>



                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>Title</th>
                                <th>Photo</th>
                                <th>Username</th>
                                <th>City</th>
                                <th>Price</th>
                                <th>Deal</th>
                                <th>Approved</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @php($i=1)
                                @foreach ( $propertise as $property)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $property->title }}</td>
                                    <td><img src="{{asset($property->images?->path)}}"
                                     alt="" style="width: 50px ;height:50px;" class=" rounded-circle"></td>
                                    <td>{{ $property->user?->username }}</td>

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
                                    <th>{{ $property->approve }}</th>
                                    <td>
                                        <a href="/property/details/{{$property->id}}" class="btn btn-info"> <i class="ri-error-warning-fill"></i> Details</a>
                                        <a href="{{ route('delete.post',$property->id) }}" class="btn btn-danger"><i class="fas fa-trash-restore-alt"></i> Delet</a>
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
