<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Auto Suite</title>
  <?php require_once ('Components/head.php'); ?>
  
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>
<?php require_once ('Components/header.php'); ?>
<div>
    <img src="images/welcome.png" alt="" style="height: auto; width: 100vw;">
</div>
<div class="container pt-5" style="padding-bottom: 6rem; position: relative; top: -3rem;">
    <div class="row d-flex justify-content-center">
        <img src="images/success.png" alt="" style="height: 10rem; width: auto;" class ="d-flex align-items-center justify-content-center">
    </div>
    <div class="row d-flex justify-content-center">
        <h1 style="text-align: center;">Your registration was successful!</h1>
        <h4 style="text-align: center;">Click the download button below to start downloading Auto Suite for Windows</h4>
    </div>
    <br><br>
    <div class="row d-flex justify-content-center">
        <div class="row d-flex justify-content-center btn btn-success" style="width: 30rem; height: 5rem; border-radius: 0;">
            <h3 style="margin: 0;">Download Auto Suite</h3>
            <p style="color: white; margin: 0;">V 1.0.0 / 64-bits / Windows 10</p>
        </div>
    </div>
</div>
<div>

<section id="clients" class="clients"" style="position: relative; top: -8rem;">
    <div class="clients-slider swiper-container">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="images/Payment Methods/bpi.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="images/Payment Methods/bdo.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="images/Payment Methods/7eleven.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="images/Payment Methods/gcash.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="images/Payment Methods/mastercard.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="images/Payment Methods/visa.png" class="img-fluid" alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    </div>
  </section>
</div>

<div>
    <?php require_once ('Components/modal.php'); ?>
    <!-- ======= ^Login and Register Modals^ ======= -->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

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


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>