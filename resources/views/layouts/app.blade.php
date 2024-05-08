<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LRFDT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/logo.png" rel="icon">
    <link href="img/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="css/main.css" rel="stylesheet">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">



  </head>

  <body>

    <!-- ======= Header ======= -->
    @include('partials.header')
  

    <main id="main">
      @yield('content')
      @include('partials.footer')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    
    <!-- End Footer -->

    <button class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></button>

    <div id="preloader"></div> 

        
      
  
    <!-- Vendor JS Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    
    <!-- Template Main JS File -->
    <script src="js/main.js" ></script>

    

  </body>

</html>