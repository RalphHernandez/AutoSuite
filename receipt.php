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

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>
</head>

<body>
<?php
    require_once ('Components/header.php');
?>

    <main id="main" style="padding-top: 2rem;">
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="info-box mb-4">
                        <div class="card-body">
                            <h1>Thank you for your purchase!</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card-header p-4">
                        <div class="float-right">
                            <h3 class="mb-0">Invoice #BBB10234</h3>
                            Date: 12 Jun,2019
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <h3>Summary</h3>
                        </div>
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th class="right">Price</th>
                                        <th class="center">Qty</th>
                                        <th class="right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center">1</td>
                                        <td class="left strong">Iphone 10X</td>
                                        <td class="left">Iphone 10X with headphone</td>
                                        <td class="right">$1500</td>
                                        <td class="center">10</td>
                                        <td class="right">$15,000</td>
                                    </tr>
                                    <tr>
                                        <td class="center">2</td>
                                        <td class="left">Iphone 8X</td>
                                        <td class="left">Iphone 8X with extended warranty</td>
                                        <td class="right">$1200</td>
                                        <td class="center">10</td>
                                        <td class="right">$12,000</td>
                                    </tr>
                                    <tr>
                                        <td class="center">3</td>
                                        <td class="left">Samsung 4C</td>
                                        <td class="left">Samsung 4C with extended warranty</td>
                                        <td class="right">$800</td>
                                        <td class="center">10</td>
                                        <td class="right">$8000</td>
                                    </tr>
                                    <tr>
                                        <td class="center">4</td>
                                        <td class="left">Google Pixel</td>
                                        <td class="left">Google prime with Amazon prime membership</td>
                                        <td class="right">$500</td>
                                        <td class="center">10</td>
                                        <td class="right">$5000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5">
                            </div>
                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left">
                                                <strong class="text-dark">Subtotal</strong>
                                            </td>
                                            <td class="right">$28,809,00</td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <strong class="text-dark">Discount (20%)</strong>
                                            </td>
                                            <td class="right">$5,761,00</td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <strong class="text-dark">VAT (10%)</strong>
                                            </td>
                                            <td class="right">$2,304,00</td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <strong class="text-dark">Total</strong> </td>
                                            <td class="right">
                                                <strong class="text-dark">$20,744,00</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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