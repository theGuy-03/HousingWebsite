@php
     $id=Auth::user()->id;
     $data=App\Models\User::find($id);
@endphp
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{
                    (!empty($data->profile?->profile_image))?url(
                    $data->profile->profile_image):url('upload/avatar.png')}}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ $data->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('property.post') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('all.user') }}" class="waves-effect">
                        <i class="ri-user-line"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('all.property') }}" class="waves-effect">
                        <i class=" ri-check-double-line"></i>
                        <span>Approved Property</span>
                    </a>
                </li>
                 <li>
                    <a href="{{ route('all.sales') }}" class="waves-effect">
                        <i class="ri-home-4-line"></i>
                        <span>Sales</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('all.rent') }}" class="waves-effect">
                        <i class="ri-home-6-line"></i>
                        <span>Rent</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('all.mortgage') }}" class="waves-effect">
                        <i class="ri-home-8-line"></i>
                        <span>Mortgage</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.about') }}">About page</a></li>
                        <li><a href="{{ route('footer.data') }}">Footer</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
