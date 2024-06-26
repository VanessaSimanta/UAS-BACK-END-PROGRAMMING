<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alleyway Muse - Homepage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
@include('header');
  <main> 
    <h1>Cappuccino</h1>

    <!-- ======= Make Your Own Drink Section ======= -->
    <section id="yourDrink" class="yourDrink">
      <div class="container">

        <div class="section-title">
          <h2>Make Your Own Drink</h2>
          <p>Nikmati kopi favoritmu, buatanmu!</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-coffee">Coffee</li>
              <li data-filter=".filter-noncoffee">Non-Coffee</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

        <!-- Coffee : Kopi Inspirasi -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-coffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/KopiInspirasiA.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kopi Inspirasi</h4>
                <p><i>simply kopi susu gula aren</i></p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/KopiInspirasiA.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Non Coffee : Matcha Latte -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-noncoffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/MatchaLatteA.png" class="img-fluid" alt="" width="540" height="540">
              <div class="portfolio-info">
                <h4>Matcha Latte</h4>
                <p><i>vibrant green, creamy, and slightly sweet drink with a unique, earthy flavor</i></p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/MatchaLatteA.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Coffee : Caramel Macchiato -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-coffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/CaramelMacchiatoA.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Caramel Macchiato</h4>
                <p><i>sweet and creamy drink with a bold coffee flavor and rich caramel notes</i></p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/CaramelMacchiatoA.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Non Coffee : Red Velvet -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-noncoffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/RedVelvetA.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Red Velvet</h4>
                <p><i>comforting drink that tastes like a liquid version of red velvet cake</i></p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/RedVelvetA.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Coffee : Mochaccino -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-coffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/MochaccinoA.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mochaccino</h4>
                <p><i>rich, creamy drink with the perfect blend of coffee and chocolate flavors</i></p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/MochaccinoA.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Non Coffee : Cookies n Cream -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-noncoffee">
            <div class="portfolio-wrap">
              <img src="assets/img/make-your-own-drink/CookiesnCreamA.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cookies n Cream</h4>
                <p><i>thick, creamy drink that tastes like cookies and cream ice cream in a glass</i>/p>
                <div class="portfolio-links">
                  <a href="assets/img/make-your-own-drink/CookiesnCreamA.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


  @include('contact');
  </main><!-- End #main -->

@include('footer');

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>