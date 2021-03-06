<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Auto Suite</title>
    <?php require_once ('Components/head.php'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
                    <li><a>Appointments</a></li>
                    <li>Repair History</li>
                </ol>
                <h2>Repair History</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="contact" class="contact" style="padding-bottom: 0;">
            <div class="container">
                <div class="row">
                    <div class="info-box mb-4">
                        <div class="card-body">
                            <header class="appointmentHeader"> [Shop Name] </header>
                            <article class="card">
                                <div class="card-body row">
                                    <div class="col"> <strong>Date of Appointmet</strong> <br>29 nov 2019</div>
                                    <div class="col"> <strong>Appointment ID:</strong> <br> OD45345345435 </div>
                                    <div class="col"> <strong>Plate #:</strong> <br> BD045903594059 </div>
                                    <div class="col"> <strong>Status:</strong> <br> Service In Progress </div>
                                </div>
                            </article>
                            <br>
                            <article class="card">
                                <div class="card-body row" style="text-align: justify;">
                                    <div class="col"> <strong>Service Requirements</strong> <br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor porta
                                        placerat.
                                        Aenean ante nunc, ultricies quis massa ac, varius posuere nunc. Morbi at elit
                                        vel risus
                                        placerat ultricies ut id velit. Aenean vehicula placerat mi in cursus. Proin
                                        elementum
                                        commodo sapien non vestibulum. Fusce est quam, ultrices in luctus non, lacinia
                                        id nibh.
                                        Nam hendrerit eu magna quis dignissim. Donec at lorem at elit aliquet pulvinar
                                        eget id
                                        neque. Nullam ac ipsum sit amet urna volutpat faucibus in ac ante. Nulla
                                        dignissim vel
                                        elit sed posuere. Aenean quis bibendum tortor. Morbi eget nisi vel nibh posuere
                                        ultrices.
                                        Mauris ullamcorper massa et elit rutrum facilisis. Pellentesque bibendum massa
                                        sit amet
                                        eros mollis lobortis.
                                    </div>
                                </div>
                            </article>
                            <div class="row">
                                <h2 style="color: red;">Appointment Cancelled</h2>
                            </div>
                            <div class="container d-flex justify-content-end"
                                style="padding-top: 1rem; padding-bottom: 0;">
                                <a href="#" class="btn btn-info btn-lg" role="button" aria-disabled="true">View
                                    Store</a>
                                <a href="#" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Cancel
                                    Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact" style="padding-bottom: 0;">
            <div class="container">
                <div class="row">
                    <div class="info-box mb-4">
                        <div class="card-body">
                            <header class="appointmentHeader"> [Shop Name] </header>
                            <article class="card">
                                <div class="card-body row">
                                    <div class="col"> <strong>Date of Appointmet</strong> <br>29 nov 2019</div>
                                    <div class="col"> <strong>Appointment ID:</strong> <br> OD45345345435 </div>
                                    <div class="col"> <strong>Plate #:</strong> <br> BD045903594059 </div>
                                    <div class="col"> <strong>Status:</strong> <br> Service In Progress </div>
                                </div>
                            </article>
                            <br>
                            <article class="card">
                                <div class="card-body row" style="text-align: justify;">
                                    <div class="col"> <strong>Service Requirements</strong> <br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor porta
                                        placerat.
                                        Aenean ante nunc, ultricies quis massa ac, varius posuere nunc. Morbi at elit
                                        vel risus
                                        placerat ultricies ut id velit. Aenean vehicula placerat mi in cursus. Proin
                                        elementum
                                        commodo sapien non vestibulum. Fusce est quam, ultrices in luctus non, lacinia
                                        id nibh.
                                        Nam hendrerit eu magna quis dignissim. Donec at lorem at elit aliquet pulvinar
                                        eget id
                                        neque. Nullam ac ipsum sit amet urna volutpat faucibus in ac ante. Nulla
                                        dignissim vel
                                        elit sed posuere. Aenean quis bibendum tortor. Morbi eget nisi vel nibh posuere
                                        ultrices.
                                        Mauris ullamcorper massa et elit rutrum facilisis. Pellentesque bibendum massa
                                        sit amet
                                        eros mollis lobortis.
                                    </div>
                                </div>
                            </article>
                            <div class="row">
                                <h2 style="color: green;">Service Complete!</h2>
                            </div>
                            <div class="container d-flex justify-content-end"
                                style="padding-top: 1rem; padding-bottom: 0;">
                                <a href="#" class="btn btn-info btn-lg" role="button" aria-disabled="true">View
                                    Store</a>
                                <a href="#" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Cancel
                                    Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
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
</body>

</html>