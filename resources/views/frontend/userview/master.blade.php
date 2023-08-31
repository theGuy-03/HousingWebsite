
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/profile/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('frontend/profile/assets/img/favicon.png') }}">
  <title>
    Profile
  </title>

  <script src="{{ asset('jquery/jquery.js') }}"> </script>
  <!--     Fonts and icons     -->
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
  <!-- Nucleo Icons -->
  <link href="{{ asset('frontend/profile/css/nucleo-icons.css') }}" rel="stylesheet" >
  <link href="{{ asset('frontend/profile/css/nucleo-svg.css') }}" rel="stylesheet" >
  <!-- Font Awesome Icons -->
  <link href="{{ asset('frontend/profile/css/nucleo-svg.css') }}" rel="stylesheet" >
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('frontend/asset/fonts/icomoon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/asset/fonts/flaticon/font/flaticon.css') }}">

	<link rel="stylesheet" href="{{ asset('frontend/asset/css/tiny-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/asset/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}">
  <link id="pagestyle" href="{{ asset('frontend/profile/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" >
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  {{-- Profile side bar --}}
    @include('frontend.userview.profileBody.sidebar')
  {{-- Profile side bar --}}
  <div class="main-content position-relative ">
    {{-- mainContent --}}

        <div class="container-fluid py-4">

            <div class="row ">
                <div class="col-md-12">
                <div class="card">
                        {{-- Hesder --}}
                            @include('frontend.userview.profileBody.header')
                        {{-- Hesder end--}}
                        <div class="card-body">
                            @yield('user')
                        </div>
                </div>
                </div>
            </div>


        </div>

    {{-- mainContent end--}}
  </div>
    <footer class="footer pt-3  ">
        <div class="row row justify-content-end">
            <div class="col-8">
                @include('frontend.userview.profileBody.footer')
            </div>
        </div>
    </footer>



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

  <!--   Core JS Files   -->
  <script src="{{ asset('frontend/profile/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/profile/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/profile/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('frontend/profile/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('frontend/profile/js/argon-dashboard.min.js?v=2.0.4') }}"></script>

        <!--tinymce js-->
        <script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }}"></script>

        <!-- init js -->
        <script src="{{ asset('backend/assets/js/pages/form-editor.init.js')}}"></script>
</body>

</html>
