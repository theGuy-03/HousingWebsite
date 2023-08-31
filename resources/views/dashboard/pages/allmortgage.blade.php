@extends('dashboard.dashboard_master')
@section('admin')
    <div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Mortgage Property</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-end mb-2">

                                <h4 class="card-title">Sales</h4>
                        </div>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>Photo</th>
                                <th>Title</th>
                                <th>Username</th>
                                <th>Price</th>
                                <th>Deal</th>
                                <th>Action</th>

                            </tr>
                            </thead>

                            <tbody>
                                @php($i=1)
                                @foreach ( $mortgages as $mortgage)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{asset( $mortgage->images?->path)
                                    }}"
                                     alt="" style="width: 50px ;height:50px;" class=" rounded-circle"></td>
                                    <td>{{ Str::title($mortgage->title) }}</td>
                                    <td>{{ $mortgage->user?->username }}</td>
                                    <td>   @if ($mortgage->deal_type === 'sale')
                                        {{ $mortgage->sale->price }}

                                        @elseif ($mortgage->deal_type === 'rent')
                                            {{   $mortgage->rent->price }}
                                        @else
                                            {{   $mortgage->mortgage->price }}
                                        @endif</td>
                                    <td>{{ Str::ucfirst($mortgage->deal_type) }}</td>
                                    <td>
                                        <a href="/property/details/{{$mortgage->id}}" class="btn btn-info"> <i class="ri-error-warning-fill"></i> Details</a>
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
@endsection


