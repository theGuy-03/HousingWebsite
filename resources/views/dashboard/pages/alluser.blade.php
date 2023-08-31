@extends('dashboard.dashboard_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All User</h4>

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
                                @if(session()->has('flash'))
                                    <div class="alert alert-success" role="alert">
                                       <p>{{ session()->get('flash') }}</p>
                                    </div>

                                @endif
                                @if(session()->has('create'))
                                    <div class="alert alert-success" role="alert">
                                       <p>{{ session()->get('create') }}</p>
                                    </div>

                                @endif
                            </div>
                            <div class="col-sm-2 align-items-end ">
                                <a href="{{ route('addnew.user')   }}" class="btn btn-primary "><i class=" ri-user-2-fill"></i> Add User</a>
                            </div>
                        </div>



                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Usertype</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                @php($i=1)
                                @foreach ( $users as $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{!empty( $user->profile?->profile_img)?
                                    url($user->profile?->profile_img):url('upload/avatar.png') }}"
                                     alt="" style="width: 50px ;height:50px;" class=" rounded-circle"></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->usertype }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->profile?->phone }}</td>
                                    <td>
                                        <a href="{{route('change.authority', $user->id)  }}" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="{{ route('deleteuser.Accout',$user->id) }}" class="btn btn-danger"><i class="fas fa-trash-restore-alt"></i> Delet</a>
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
