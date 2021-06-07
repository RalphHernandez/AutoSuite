<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<?php require_once ('Components/head.php'); ?>
    <link href="assets/css/styleAppointment.css" rel="stylesheet">

</head>

<body>
<?php
    require_once ('Components/header.php');
?>

    <main id="main" style="padding-top: 1rem;">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.php">Home</a></li>
					<li><a href="shops.php">Shops</a></li>
					<li><a href="shopFormat.php">[Shop Name]</a></li>
                    <li><a>Book Appointment</a></li>
                </ol>
                <h2>Book Appointment</h2>

            </div>
        </section>

		<div id="booking" class="section">
			<div class="section-center">
				<div class="container">
					<div class="row">
						<div class="booking-form">
							<div class="booking-bg">
								<div class="form-header">
									<h2>Book an appointment</h2>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
								</div>
							</div>
							<form>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Date and Time</span>
											<input class="form-control" type="datetime-local" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Select Vehicle</span>
											<select class="form-control">
												<option>Toyota - NJS 728</option>
												<option>Toyota - KSL 020</option>
												<option>Tricycle - ASD 875</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<span class="form-label">Service Type</span>
											<select class="form-control">
												<option>Oil Change</option>
												<option>Wings Installation</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<span class="form-label">Serivce Requirements</span>
									<textarea class="form-control" name="message" rows="5"required></textarea>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Book</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once ('Components/modal.php'); ?>
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
	</main>
	
</body>

</html>