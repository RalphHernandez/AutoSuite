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
<?php require_once ('Components/ownsAShop/indexCoverPhoto.php'); ?>

<?php require_once ('Components/ownsAShop/features.php'); ?>


<section id="registrationForm" style="position: relative; top: -10rem;">
  <div class="container" style="padding: 5rem 15rem 0 15rem;">
    <div class="row">
      <div class="col-xs-6">
        <form action="/examples/actions/confirmation.php" method="post">
          <h3 style="padding-bottom: 1rem;">Shop Information</h3>
          <div class="form-group">
            <input type="text" class="form-control" name="shopName" placeholder="Shop Name" required="required">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="addressLine1" placeholder="Address Line 1" required="required">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="addressLine2" placeholder="Address Line 2" required="required">
          </div>
          <hr class="mt-2 mb-3" />
          <h3 style="padding-bottom: 1rem;">Owner Information</h3>
          <div class="form-group">
            <input type="text" class="form-control" name="firstName" placeholder="First Name" required="required">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="lastName" placeholder="Last Name" required="required">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-append">
              <label class="input-group-text" for="inputGroupSelect02">Government ID</label>
            </div>
            <select class="custom-select" id="inputGroupSelect02">
              <option value="passport">Passport</option>
              <option value="driverslicense">Driver's License</option>
              <option value="fiat">Another ID...</option>
              <option value="audi">And another...</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="idNumber" placeholder="ID Number" required="required">
          </div>
          <hr class="mt-2 mb-3" />
          <div class="form-group">
            <button type="submit" class="btn btn-secondary btn-lg btn-block login-btn">Upload Business Permit</button>
          </div>
          <div class="form-group">
            <a type="submit" class="btn btn-info btn-lg btn-block login-btn" style="color: white;" href="confirmingRegistration.php">Register</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
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