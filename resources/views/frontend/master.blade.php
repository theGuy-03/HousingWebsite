<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	{{-- <link rel="shortcut icon" > --}}

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> --}}

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- jquery.vectormap css -->
    <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->



	<link rel="stylesheet" href="{{ asset('frontend/asset/fonts/icomoon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/asset/fonts/flaticon/font/flaticon.css') }}">

	<link rel="stylesheet" href="{{ asset('frontend/asset/css/tiny-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/asset/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">

	<title>Property</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>


    {{-- nav bar  --}}
        @include('frontend.body.header')
    {{-- nav bar end --}}

    {{-- main contet --}}
        @yield('main')
    {{-- main contet end --}}




      <!-- /.site-footer -->
    @include('frontend.body.footer')
	 <!-- /.site-footer end -->


    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="{{ asset('frontend/asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/navbar.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/counter.js') }}"></script>
    <script src="{{ asset('frontend/asset/js/custom.js') }}"></script>

    {{-- profile --}}
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
            <!--tinymce js-->
            <script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }}"></script>

            <!-- init js -->
            <script src="{{ asset('backend/assets/js/pages/form-editor.init.js')}}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('jquery/jquery.js') }}"></script>

  </body>
  </html>
