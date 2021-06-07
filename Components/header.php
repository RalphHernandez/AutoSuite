<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


if (strpos($url,'index') !== false) {
    ?>
        <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="index.php"><img src="images/autoSuiteLogo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="shops.php">Shops</a></li>
                <li class="dropdown"><a href="#"><span>Appointments</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="myAppointments.php">My Appointments</a></li>
                        <li><a href="repairHistory.php">Repair History</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="transactionHistory.php">Purchase History</a></li>
                        <li><a href="manageAccount.php">Manage Account</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i>Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                </a></li>
                <li><a href="#myModal" data-toggle="modal">Login</a></li>
            </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
</header>
    <?php
} else {
    ?>
        <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="index.php"><img src="images/autoSuiteLogo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="shops.php">Shops</a></li>
                <li class="dropdown"><a href="#"><span>Appointments</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="myAppointments.php">My Appointments</a></li>
                        <li><a href="repairHistory.php">Repair History</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="transactionHistory.php">Purchase History</a></li>
                        <li><a href="manageAccount.php">Manage Account</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i>Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                </a></li>
                <li><a href="#myModal" data-toggle="modal">Login</a></li>
            </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
</header>
    <?php
}

?>
