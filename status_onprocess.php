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

<body class="fixed-bottom-bar">
    <?php

    include 'header.php';
    include 'mobheader.php';

    ?>

    <section class="py-4 osahan-main-body">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-tabsa custom-tabsa border-0 flex-column bg-white rounded overflow-hidden shadow-sm p-2 c-t-order" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link border-0 text-warning py-3 active" href="status_onprocess.php">
                                <i class="feather-clock mr-2 text-dark mb-0"></i><b> Order Status</b></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link border-0 text-danger py-3" href="my_order.php">
                                <i class="feather-check mr-2 text-dark mb-0"></i><b> My Orders</b></a>
                        </li>
                    </ul>
                </div>

                <?php

                error_reporting(0);

                include "dbconnect.php";

                $id_odr = $_SESSION['order_id'];

                // $query_show_odr = mysqli_query($conn, "SELECT * FROM order_details WHERE orderId='$id_odr'");
                $query_show_odr = mysqli_query($conn, "SELECT *, DATE_FORMAT(orderTime, '%d-%m-%Y %h:%i %p') AS orderTime, DATE_FORMAT(dineInTime, '%h:%i %p') AS dineInTime FROM `order_details` WHERE orderId='$id_odr'");

                $show_odr = mysqli_fetch_array($query_show_odr);

                ?>

                <div class="col-md-9">
                    <!-- body -->
                    <section class="bg-white osahan-main-body rounded shadow-sm overflow-hidden">
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="osahan-status">
                                        <!-- status complete -->
                                        <div class="p-3 status-order border-bottom bg-white">
                                            <h5 class=" p-1"><i class="feather-calendar text-primary"></i><b> #<?php echo $show_odr['orderId']; ?> : <?php echo $show_odr['customerName']; ?></b></h5>
                                            <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><b>Order Time:</b> </i><?php echo $show_odr['orderTime']; ?></a></p>
                                            <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><b>Dine-In-Time:</b> <?php echo $show_odr['dineInTime']; ?></a></p>
                                            <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><b>No of Person:</b> <?php echo $show_odr['personsNo']; ?></a></p>
                                            <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><b>Remark:</b> <?php echo $show_odr['remark']; ?></a></p>
                                            <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><b>Total Payment:</b> ₹<?php echo $show_odr['grantTotal']; ?></a></p>
                                        </div>
                                        <div class="p-3 border-bottom">
                                            <?php
                                            if (isset($_SESSION['order_id'])) {
                                                if ($show_odr['status'] == 1) {
                                                    echo '<h6 class="font-weight-bold bg-white"><img width="75px" class="display-1" src="img/done-food.gif" alt="">Your order is ready to serve...!!!
                                                </h6>';
                                                } else {
                                                    echo '<h6 class="font-weight-bold bg-light"><img width="70px" class="display-1 mb-2" src="img/prep-food.gif" alt="">Your order is being prepared...!!!
                                                </h6>';
                                                }
                                            } else {
                                                echo 'Place Order First';
                                            }
                                            ?>

                                            <div class="">
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                                                        <div class="order-body">
                                                            <?php

                                                            include "dbconnect.php";

                                                            $id_odr = $_SESSION['order_id'];

                                                            $i = 1;

                                                            $retrieveQuery = "SELECT *, DATE_FORMAT(orderTime, '%d-%m-%Y %h:%i %p') AS orderTime, DATE_FORMAT(dineInTime, '%h:%i %p') AS dineInTime FROM `order_details` WHERE orderId='$id_odr'";
                                                            $result = mysqli_query($conn, $retrieveQuery);

                                                            if ($result && mysqli_num_rows($result) > 0) {
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                                    $serializedData = $row['products_odr'];
                                                                    $unserializedProducts = @unserialize($serializedData);
                                                                    if ($unserializedProducts === false) {
                                                                    } else {
                                                                        if (is_array($unserializedProducts) || is_object($unserializedProducts)) {
                                                                            foreach ($unserializedProducts as $product) {
                                                                                $productImg = $product['productImg'];
                                                                                $productName = $product['productName'];
                                                                                $productDesc = $product['productDesc'];
                                                                                $price = $product['price'];
                                                                                $quantity = $product['quantity'];
                                                                                $total = $product['total'];

                                                            ?>
                                                                                <div class="pb-3">
                                                                                    <div class="p-3 rounded shadow-sm bg-white">
                                                                                        <div class="d-flex pb-3">
                                                                                            <div class="text-muted mr-3">
                                                                                                <img alt="#" src="img/<?php echo $productImg; ?>" class="img-fluid order_img rounded">
                                                                                            </div>
                                                                                            <div>
                                                                                                <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><?php echo $productName; ?></a></p>
                                                                                                <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><?php echo $productDesc; ?></a></p>
                                                                                                <p class="mb-0 font-weight-bold"><a href="" class="text-dark">Price: ₹<?php echo $price; ?></p>
                                                                                            </div>
                                                                                            <div class="ml-auto">
                                                                                                <a href="view_all.php" class="btn btn-primary btn-sm px-3">Reorder</a>
                                                                                                <a href="contact-us.php" class="btn btn-outline-primary btn-sm px-3">Help</a>
                                                                                                <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><?php echo $productName; ?> x <?php echo $quantity; ?></a></p>
                                                                                                <p class="mb-0 font-weight-bold"><a href="" class="text-dark">Total: ₹<?php echo $total; ?></a></p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                        </div>
                                    <?php $i++;
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            } else {
                                                                echo "No Order Details Found.";
                                                            }
                                    ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- step.// -->
                                    </div>
                                </div>
                                <!-- Destination -->
                                <!-- <div class="p-3 border-bottom bg-white">
                                    <h6 class="font-weight-bold">Destination</h6>
                                    <a href="https://goo.gl/maps/PtMAuVCRfSwYo5qg7" class="text-dark d-flex align-items-center py-3">
                                        <div><i class="feather-map-pin mr-2 bg-light rounded-pill p-2 icofont-size"></i></div>
                                        <div>
                                            Chaturthi-Veg, Solapur-Pune Hwy, Kurkumbh, Maharashtra, 413802.
                                        </div>
                                    </a>
                                </div>
                                <div class="p-3 border-bottom">
                                    <h6 class="font-weight-bold">Service By</h6>
                                    <span class="small text-primary font-weight-bold">चतुर्थी-व्हेज</span>
                                </div>
                                total price -->
                                <!-- Destination -->
                                <!-- <div class="p-3 border-bottom bg-white">
                                    <div class="d-flex align-items-center mb-2">
                                        <h6 class="font-weight-bold mb-1">Total Payment</h6>
                                        <h6 class="font-weight-bold ml-auto mb-1">₹<?php echo $show_odr['grantTotal']; ?></h6>
                                    </div>
                                    <p class="m-0 small text-muted">You can check your order details here,<br>Thank you for order.</p>
                                </div> -->
                            </div>
                        </div>
                </div>
            </div>
    </section>
    </div>
    </div>
    </div>
    </section>
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