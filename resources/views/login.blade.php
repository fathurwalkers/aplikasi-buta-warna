<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Aplikasi Tes Buta Warna - Metode Farnworth Munsell</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('login-assets') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('login-assets') }}/vendors/feather/feather.css" />
    <link rel="stylesheet" href="{{ asset('login-assets') }}/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{ asset('login-assets') }}/vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="{{ asset('login-assets') }}/vendors/typicons/typicons.css" />
    <link rel="stylesheet" href="{{ asset('login-assets') }}/vendors/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="{{ asset('login-assets') }}/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" />
    <link rel="stylesheet" href="{{ asset('login-assets') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="{{ asset('login-assets') }}/js/select.dataTables.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('login-assets') }}/css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="container">
      <div class="header">
        <img class="img1" src="images/logosmada.png" alt="" />
        <h5>Aplikasi Tes Buta Warna</h5>
        <br />
        <h6>Metode Farnworth Munsell</h6>
      </div>
    <div class="card text-white bg-info mb-3" style="max-width: 18rem; margin:auto;">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <form method="POST" action="{{ route('postlogin') }}">
                @csrf
                <div class="form-group">
                    <label for="login_username">Username</label>
                    <input type="text" class="form-control" id="login_username" aria-describedby="emailHelp" name="login_username">
                </div>
                <div class="form-group">
                    <label for="login_password">Password</label>
                    <input type="password" class="form-control" id="login_password" name="login_password">
                </div>
                {{-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                </div> --}}
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
            Belum punya akun? Daftar&nbsp;<a href="{{ route('register') }}">disini</a>&nbsp;sekarang.
        </div>
    </div>
    <!-- plugins:js -->
    <script src="{{ asset('login-assets') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('login-assets') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('login-assets') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('login-assets') }}/vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('login-assets') }}/js/off-canvas.js"></script>
    <script src="{{ asset('login-assets') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('login-assets') }}/js/template.js"></script>
    <script src="{{ asset('login-assets') }}/js/settings.js"></script>
    <script src="{{ asset('login-assets') }}/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('login-assets') }}/js/dashboard.js"></script>
    <script src="{{ asset('login-assets') }}/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
