<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title') | {{ config('app.name') }}</title>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
  <!-- For adding custom css -->
  @stack('css')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  @include('layouts.partials.navigation-sidebar')
  <div class="content-wrapper">
    <div class="container-fluid">
      @yield('content')
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('layouts.partials.footer')
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="'#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    @include('layouts.partials.logout-modal')
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>
    <!-- Custom JS -->
    @stack('js')
  </div>
</body>

</html>
