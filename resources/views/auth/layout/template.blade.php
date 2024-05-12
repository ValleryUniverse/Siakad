<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>

    <!-- Favicons -->
  <link href="{{ asset('Landingpageassets/images/logo-icon.png')}}" rel="icon">
  <link href="{{asset('Landingpage/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Landingpage/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('Landingpage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('Landingpage/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Landingpage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('Landingpage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Landingpage/assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
    {{-- header --}}
    @include('auth.layout.navbar')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}


    <!-- Vendor JS Files -->
  <script src="{{asset('Landingpage/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('Landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Landingpage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('Landingpage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('Landingpage/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Landingpage/assets/js/main.js')}}"></script>
</body>
</html>