<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Auto Suite</title>
    <?php require_once ('Components/head.php'); ?>
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
                    <li><a href="#">Account</a></li>
                    <li>Manage Account</li>
                </ol>
                <h2>Manage Account</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="php-email-form">
                            <div class="container">
                                <div class="row gutters">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="account-settings">
                                                    <div class="user-profile">
                                                        <div class="user-avatar">
                                                            <img src="images/Capstoners/zancha.jpg">
                                                        </div>
                                                        <h5 class="user-name">Zancha Aguilar</h5>
                                                        <h6 class="user-email">zancha.aguilar@unc.edu.ph</h6>
                                                        <br>
                                                        <button type="button" id="submit" name="submit"
                                                        class="btn btn-primary">Change Profile Picture</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <h6 class="mb-2 text-primary">Personal Details</h6>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="fullName">Full Name</label>
                                                            <input type="text" class="form-control" id="fullName"
                                                                placeholder="Zancha Aguilar">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="eMail">Email</label>
                                                            <input type="email" class="form-control" id="eMail"
                                                                placeholder="zancha.aguilar@unc.edu.ph">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input type="text" class="form-control" id="phone"
                                                                placeholder="0917 793 0987">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="Street">Street</label>
                                                            <input type="name" class="form-control" id="Street"
                                                                placeholder="Naga Street">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="ciTy">City</label>
                                                            <input type="name" class="form-control" id="ciTy"
                                                                placeholder="Legazpi City">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="sTate">Province</label>
                                                            <input type="text" class="form-control" id="sTate"
                                                                placeholder="Camarines West">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="zIp">Zip Code</label>
                                                            <input type="text" class="form-control" id="zIp"
                                                                placeholder="10000001">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="text-right">
                                                            <button type="button" id="submit" name="submit"
                                                                class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row gutters">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12"></div>
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <h6 class="mb-2 text-primary">Vehicles</h6>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="Street">Plate Number</label>
                                                            <select class="form-control">
                                                                <option>NJS 728</option>
                                                                <option>KSL 020</option>
                                                                <option>ASD 875</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="ciTy">Brand</label>
                                                            <input type="name" class="form-control" id="ciTy"
                                                                placeholder="Tricycle">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <h6 class="mt-3 mb-2 text-primary">Manage Vehicles</h6>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="Street">Plate Number</label>
                                                            <input type="name" class="form-control" id="ciTy"
                                                                placeholder="Enter Plate Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                        <div class="form-group">
                                                            <label for="ciTy">Brand</label>
                                                            <input type="name" class="form-control" id="ciTy"
                                                                placeholder="Enter Brand Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="text-right">
                                                            <button type="button" id="submit" name="submit"
                                                                class="btn btn-success">Add</button>
                                                            <button type="button" id="submit" name="submit"
                                                                class="btn btn-primary">Update</button>
                                                            <button type="button" id="submit" name="submit"
                                                                class="btn btn-danger">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
    </main>
    <?php require_once ('Components/modal.php'); ?>
</body>

</html>