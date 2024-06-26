<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @foreach ($myodData as $row)
    <title>{{ $row->header }} Recipe</title>
    @endforeach
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Alleycon -->
    <link href="{{ asset('assets/img/alleycon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- =======================================================
    * Template Name: Green
    * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
    * Updated: Mar 17 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
@include('header')
   
    <!-- ======= Drinks Section ======= -->
    <section id="drinks" class="drinks">
        <div class="container">
            <br>
    @foreach ($myodData as $row)
    <div class="section-title">
        <h2>{{ $row->header }} Recipe</h2>
    </div>
    <img src="{{ asset($row->img_menu) }}" class="center" alt="">
    <div class="step">
        <h4> STEP 01 </h4>
        <p>{{ $row->satu }}</p>
        <h4> STEP 02 </h4>
        <p>{{ $row->dua }}</p>
        <h4> STEP 03 </h4>
        <p>{{ $row->tiga }}</p>
        <h4> STEP 04 </h4>
        <p>{{ $row->empat }}</p>
        <h4> STEP 05 </h4>
        <p>{{ $row->lima }}</p>
        <h4> Enjoy </h4>
        <p>{{ $row->enjoy }}</p>
    </div>
    @endforeach

        </div>
    </section><!-- End Menu Section -->
@include('footer')
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
