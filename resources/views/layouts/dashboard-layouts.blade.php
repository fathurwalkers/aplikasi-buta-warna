<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('login-assets') }}/js/select.dataTables.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('login-assets') }}/css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('login-assets') }}/images/favicon.png" />

    @stack('css')

  </head>
  <body>
    <!-- navbar -->
    <x-dashboard-navbar />
    <!-- akhir navbar -->

    <!-- konten -->
    {{-- <div class="container " style="margin-top: 120px; height: 900px;"> --}}
    <div class="container" style="margin-top: 120px; margin-bottom: 120px;">

        <div class="row row-cols-1 justify-content-center mx-auto">
            <div class="col-sm-12 col-md-12 col-lg-12 justify-content-center mx-auto">
                @yield('header-content')
            </div>
        </div>

        @yield('main-content')
    </div>
    <!-- akhir konten -->

    <!-- footer -->
    <x-dashboard-footer />
    <!-- akhir footer -->

    <!-- akhir footer -->
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
    @stack('js')
  </body>
</html>
