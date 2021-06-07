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
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a>Purchase History</a></li>
        </ol>
        <h2>Purchase History</h2>

      </div>
</section>
    <main id="main">
        <div class="wrapper rounded">
            <nav class="navbar navbar-expand-lg navbar-dark dark d-lg-flex align-items-lg-start"> <a
                    class="navbar-brand" href="#" style="color: black;">Purchases <p class="text-muted pl-1">
                    </p> </a> <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            </nav>
            <div class="table-responsive mt-3">
                <table class="table table-borderless" style="color: black;">
                    <thead>
                        <tr>
                            <th scope="col">Activity</th>
                            <th scope="col">Purchase ID</th>
                            <th scope="col">Date</th>
                            <th scope="col" class="text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Oil</td>
                            <td></td>
                            <td class="text-muted">12 Jul 2020, 12:30 PM</td>
                            <td class="d-flex justify-content-end align-items-center">₱52.9 </td>
                        </tr>
                        <tr>
                            <td scope="row">Sticker</td>
                            <td></td>
                            <td class="text-muted">11 Jul 2020, 2:00 PM</td>
                            <td class="d-flex justify-content-end align-items-center">₱18.9 </td>
                        </tr>
                        <tr>
                            <td scope="row">Bumper</td>
                            <td></td>
                            <td class="text-muted">10 Jul 2020, 8:30 PM</td>
                            <td class="d-flex justify-content-end align-items-center">₱9,765.00 </td>
                        </tr>
                        <tr>
                            <td scope="row">Oil</td>
                            <td></td>
                            <td class="text-muted">12 May 2020, 4:30 PM</td>
                            <td class="d-flex justify-content-end align-items-center">₱198.90 </td>
                        </tr>
                        <tr>
                            <td scope="row">Sticker</td>
                            <td></td>
                            <td class="text-muted">11 May 2020, 5:30 PM</td>
                            <td class="d-flex justify-content-end align-items-center">₱12.90 </td>
                        </tr>
                        <tr>
                            <td scope="row">Sticker</td>
                            <td></td>
                            <td class="text-muted">10 May 2020, 01:30 PM</td>
                            <td class="d-flex justify-content-end align-items-center">₱97.9 </td>
                        </tr>
                        <tr>
                            <td scope="row">LED</td>
                            <td></span></td>
                            <td class="text-muted">09 May 2020, 01:30 PM</td>
                            <td class="d-flex justify-content-end align-items-center">₱97.9 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item disabled"> <a class="page-link" href="#" aria-label="Previous"> <span
                                        aria-hidden="true">&lt;</span> </a> </li>
                            <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span
                                        aria-hidden="true">&gt;</span> </a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <?php require_once ('Components/modal.php'); ?>
</body>

</html>