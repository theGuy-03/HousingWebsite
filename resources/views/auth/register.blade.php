
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   Register
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('backend/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('backend/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />

</head>

<body class="">
  <!-- Navbar -->
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-8 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Registeriton</h5>
            </div>
            <div class="card-body">
            <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
                    @csrf
                @if(session()->has('flash'))
                    <div class="alert alert-success" role="alert">
                        <p>{{ session()->get('flash') }}</p>
                    </div>
                @endif
                <div class="mb-3">
                  <input id="name" type="text" name="name" required=""  class="form-control @error('name')is-invalid @enderror" placeholder="Name" aria-label="Name">
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>
                <div class="mb-3">
                    <input id="username" type="text" name="username" required="" class="form-control @error('username')is-invalid @enderror" placeholder="Username" aria-label="Username">
                    @error('username')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>
                <div class="mb-3">
                  <input id="email" type="email" name="email" required="" class="form-control @error('email')is-invalid @enderror" placeholder="Email" aria-label="Email">
                  @error('email')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                </div>
                <div class="mb-3">
                  <input id="password" type="password" name="password" required="" class="form-control @error('password')is-invalid @enderror" placeholder="Password" aria-label="Password">
                  @error('password')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                    <input type="password" id="password_confirmation" type="password" name="password_confirmation" required="" class="form-control @error('password_confirmation')is-invalid @enderror" placeholder="Password Confirmation" aria-label="Password Confirmation">
                    @error('password_confirmation')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="sumbit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by Creative Tim.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
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
  <script src="{{ asset('backend/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
