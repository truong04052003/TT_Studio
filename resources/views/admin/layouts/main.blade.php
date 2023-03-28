<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('admin/uploads/' .auth()->user()->image) }}" rel="icon">
  <link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CNunito:300,300i,400,400i,600,600i,700,700i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
  <style>
    /* css phân trang */
    .d-flex.justify-content-around {
      margin: 30px -1450px 0px -77px;
    }

    /* css têm sản phẩm*/
    a.btn.btn-primary {
      margin: 0px 10px 14px 8px;
    }
    
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    @include('admin.includes.header');


  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    @include('admin.includes.sidebar');

  </aside>

    <main id="main" class="main">
      @yield('content')
    </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    @include('admin.includes.footer')

  </footer>


  <script src="{{asset('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('admin/assets/js/main.js')}}"></script>
  
</body>

</html>