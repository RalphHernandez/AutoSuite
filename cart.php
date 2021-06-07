<!doctype html>
<html lang="en">
<head>
    <?php require_once ('Components/head.php') ?>
</head>
<body>
<script
    src="https://www.paypal.com/sdk/js?client-id=AbMQkGKo9KqwOBsQsQnX9XehN3L3kw9DA7YfQowW6AFe-hJ__hvb5OsEKnH-QxAohlETeGaZ8jiHaLae&currency=PHP">
</script>

<?php
    require_once ('Components/header.php');
?>

<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a>Cart</a></li>
        </ol>
        <h2>Cart</h2>

      </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="shopping-cart">
                <section id="contact" class="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="info-box mb-4">
                                    <div class="cart_items">
                                        <h5>Cart is Empty!</h5>
                                        <ul class=""
                                            style="list-style: none;
                                            margin-bottom: 0px"
                                        >
                                            <?php
                                            #    $total = 0;
                                            #    if (isset($_SESSION['cart'])){
                                            #        $product_id = array_column($_SESSION['cart'], 'product_id');
                                            #        $result = $db->getData();
                                            #        while ($row = mysqli_fetch_assoc($result)){
                                            #            foreach ($product_id as $id){
                                            #                if ($row['id'] == $id){
                                            #                    cartElement(base64_encode( $row['product_image'] ), $row['product_name'],$row['product_price'], $row['id'], $row['description']);
                                            #                    $total = $total + (int)$row['product_price'];
                                            #                }
                                            #            }
                                            #        }
                                            #    }
                                            #    if($total == 0)
                                            #        echo "<h5>Cart is Empty</h5>";
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="col border rounded mt-5 bg-white h-25" style="width: 33rem;">
            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                    <h6>Price (0 items)</h6>
                        <?php
                            #if (isset($_SESSION['cart'])){
                            #    $count  = count($_SESSION['cart']);
                            #    echo "<h6>Price ($count items)</h6>";
                            #}else{
                            #    echo "<h6>Price (0 items)</h6>";
                            #}
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Total Amount Due</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>₱ 0<?php #echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>₱ 0<?php
                            #echo $total;
                            ?></h6>
                    </div>
                    <hr>
                    <div class="col-xs-12 pb-3">
                        <form action="checkout.php">
                            <?php 
                                #if ($total == '0'){
                                #    echo "<button class=\"btn btn-secondary btn-block\" disabled>Check Out</button>";
                                #}else{
                                #    echo "<div id=\"paypal-button-container\"></div>";
                                #}
                            ?>
                            <div id="paypal-button-container"></div>
                        </form>
                    </div>

                    <script>
                        paypal.Buttons({
                            createOrder:function(data, actions){
                                return actions.order.create({
                                    purchase_units: [{
                                        amount:{
                                            value: 1//'<?#php echo $total ?>'
                                        }
                                    }]
                                })
                            },
                            onApprove:function(data){
                                window.location.href = 'paymentSuccess.php';
                            },
                            onCancel:function(data){
                                window.location.href = 'paymentFailed.php';
                            }
                        }).render('#paypal-button-container');
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once ('Components/modal.php'); ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
