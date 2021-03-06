<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shops - Eterna Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/autoIcon.png" rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
<?php
    require_once ('Components/header.php');
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Shops</li>
        </ol>
        <h2>Shops</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Shops Section ======= -->
    <section id="featured" class="featured">
      <div class="row">
        <div class="col-xs-12 d-flex justify-content-center">
          <div class="input-group mb-3" style="width: 50%;">
            <input type="text" class="form-control" placeholder="items/services" aria-label="items/services" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-info" type="button" style="color: white;">Search</button>
            </div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row">
          <div class="col-lg-4 pb-4" onclick="location.href='shopFormat.php';">
            <div class="icon-box">
              <img class="pb-5" src="images/shop1.jpg" style="height: 15rem; width: 22.3rem;">
              <h3><a href="">Lorem Ipsum</a></h3>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                cupiditate
                non provident</p>
            </div>
          </div>
          <div class="col-lg-4 pb-4" onclick="location.href='shopFormat.php';">
            <div class="icon-box">
              <img class="pb-5" src="images/shop2.jpg" style="height: 15rem; width: 22.3rem;">
              <h3><a href="">Lorem Ipsum</a></h3>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                cupiditate
                non provident</p>
            </div>
          </div>
          <div class="col-lg-4 pb-4" onclick="location.href='shopFormat.php';">
            <div class="icon-box">
              <img class="pb-5" src="images/shop3.jpg" style="height: 15rem; width: 22.3rem;">
              <h3><a href="">Lorem Ipsum</a></h3>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                cupiditate
                non provident</p>
            </div>
          </div>
          <div class="col-lg-4 pb-4" onclick="location.href='shopFormat.php';">
            <div class="icon-box">
              <img class="pb-5" src="images/coverphoto.jpg" style="height: 15rem; width: 22.3rem;">
              <h3><a href="">Lorem Ipsum</a></h3>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                cupiditate
                non provident</p>
            </div>
          </div>
          <div class="col-lg-4 pb-4" onclick="location.href='shopFormat.php';">
            <div class="icon-box">
              <img class="pb-5" src="images/shop5.jpg" style="height: 15rem; width: 22.3rem;">
              <h3><a href="">Lorem Ipsum</a></h3>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                cupiditate
                non provident</p>
            </div>
          </div>
          <div class="col-lg-4 pb-4" onclick="location.href='shopFormat.php';">
            <div class="icon-box">
              <img class="pb-5" src="images/shop6.jpg" style="height: 15rem; width: 22.3rem;">
              <h3><a href="">Lorem Ipsum</a></h3>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                cupiditate
                non provident</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Shops Section -->
  </main><!-- End #main -->
  <?php require_once ('Components/modal.php'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>