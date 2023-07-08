<?php
include("dbconnect.php");
session_start();
$usermobile = $_SESSION['login_mobile'];
if ($usermobile == true) {
} else {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <link rel="icon" type="image/png" href="img/fav.png">
    <title>चतुर्थी-व्हेज</title>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />
    <!-- Feather Icon-->
    <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Sidebar CSS -->
    <link href="vendor/sidebar/demo.css" rel="stylesheet">
</head>

<body>
    <?php
    error_reporting(0);
    include 'header.php';
    include 'mobheader.php';

    ?>

    <?php

    include "dbconnect.php";

    $id_odr = $_SESSION['order_id'];

    $query_show_odr = mysqli_query($conn, "SELECT * FROM order_details WHERE orderId='$id_odr' AND status='0'");

    $show_odr = mysqli_fetch_array($query_show_odr);



    ?>

    <div class="py-5 osahan-coming-soon d-flex justify-content-center align-items-center">
        <div class="col-md-6">

            <!-- continue -->
            <div class="bg-white rounded text-center p-4 shadow-sm">
                <div class="text-center pb-3">
                    <h4><?php echo $show_odr['customerName']; ?> Your Order Placed Successfully. </h4>
                </div>
                <h4><b> Your Order ID: #<?php echo $show_odr['orderId']; ?></b></h4>
                <img width="200px" class="display-1 mb-4" src="img/order-place.gif" alt="">
                <!-- <h1 class="display-1 mb-4">🎉</h1> -->
                <h6 class="font-weight-bold mb-2">Preparing your order</h6>
                <p class="small text-muted">Your order will be prepared and will come soon</p>
                <a href="status_onprocess.php" class="btn rounded btn-primary btn-lg btn-block">View Order Status</a>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php

    include 'footer.php';
    include 'sidemenu.php';
    include 'bottommenu.php';
    include 'extra.php';

    ?>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slick Slider JS-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <!-- Sidebar JS-->
    <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="js/osahan.js"></script>
</body>

</html>