<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('/theme/assets/images/favicon.svg') }}" type="image/x-icon" />
    <title>ScheduLogic</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('/theme/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/theme/assets/css/lineicons.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/theme/assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/theme/assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/theme/assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('/theme/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('/theme/assets/css/style.css')}}" />
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->
    <div class="overlay"></div>

      <!-- ========== signin-section start ========== -->
      <section class="signin-section">
        <div class="container-fluid">

          <div class="row g-0 auth-row">
            <div class="col-lg-6">
              <div class="auth-cover-wrapper bg-primary-100">
                <div class="auth-cover">
                  <div class="title text-center">
                    <h1 class="text-primary mb-10">ScheduLogic</h1>
                    <p class="text-medium">
                      Start creating the best possible user experience
                      <br class="d-sm-block" />
                      for you customers.
                    </p>
                  </div>
                  <div class="cover-image">
                    <img src="assets/images/auth/signin-image.svg" alt="" />
                  </div>
                  <div class="shape-image">
                    <img src="assets/images/auth/shape.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6">
              <div class="signup-wrapper">
                <div class="form-wrapper">
                  <h6 class="mb-15">Registrasi Form</h6>
                  <p class="text-sm mb-25">
                    Start creating the best possible user experience for you
                    customers.
                  </p>
                  <form action="/register" method="POST">
                    @csrf
                    @if (session()->has('loginError'))
                        {{ session('loginError')}}
                    @endif
                    <div class="row">
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Name</label>
                          <input type="text" name="name" value="{{ old('name')}}" placeholder="Name" />
                            @error('name')
                                <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                            @enderror
                        </div>
                      </div>
                      <!-- end col -->
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Email</label>
                          <input type="email" name="email" value="{{ old('email')}}" placeholder="Email" />
                        </div>
                      </div>
                      <!-- end col -->
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Password</label>
                          <input type="password" name="password" placeholder="Password" />
                        </div>
                      </div>
                      <!-- end col -->
                      <div class="col-12">
                        <div class="button-group d-flex justify-content-center flex-wrap">
                            <input type="submit" class="main-btn primary-btn btn-hover w-100 text-center" value="Register">
                          </div>
                      </div>
                    </div>
                    <!-- end row -->
                  </form>
                  <div class="utton-group d-flex justify-content-center flex-wrap mt-1">
                    <a href="/index" class="main-btn light-btn btn-hover w-100 text-center text-primary">Login</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
      </section>
      <!-- ========== signin-section end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div class="terms d-flex justify-content-center justify-content-md-end">
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ asset('/theme/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/theme/assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('/theme/assets/js/dynamic-pie-chart.js') }}"></script>
    <script src="{{ asset('/theme/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('/theme/assets/js/fullcalendar.js') }}"></script>
    <script src="{{ asset('/theme/assets/js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('/theme/assets/js/world-merc.js') }}"></script>
    <script src="{{ asset('/theme/assets/js/polyfill.js') }}"></script>
    <script src="{{ asset('/theme/assets/js/main.js') }}"></script>
  </body>
</html>
