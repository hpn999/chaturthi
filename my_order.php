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
                <div class="col-md-3 mb-3">
                    <ul class="nav nav-tabsa custom-tabsa border-0 flex-column bg-white rounded overflow-hidden shadow-sm p-2 c-t-order" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link border-0 text-warning py-3" href="status_onprocess.php">
                                <i class="feather-clock mr-2 text-dark mb-0"></i><b> Order Status</b></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link border-0 text-danger py-3 active" href="my_order.php">
                                <i class="feather-check mr-2 text-dark mb-0"></i><b> My Orders</b></a>
                        </li>
                    </ul>
                </div>

                <?php
                $id_cust = $_SESSION['login_user_id'];
                $name_cust = $_SESSION['login_fullname'];
                ?>

                <div class="tab-content col-md-9" id="myTabContent">
                    <div class="tab-pane fade show active" id="completed" role="tabpanel" aria-labelledby="completed-tab">
                        <div class="order-body">
                            <h4 class=" p-2"><i class="feather-calendar text-primary"></i><b> #<?php echo $id_cust; ?> : <?php echo $name_cust; ?></b></h4>

                            <?php
                            $query_show_odr = mysqli_query($conn, "SELECT * FROM order_details WHERE customerId='$id_cust'");
                            $show_odr = mysqli_fetch_array($query_show_odr);
                            $i = 1;

                            $retrieveQuery = "SELECT *, DATE_FORMAT(orderTime, '%d-%m-%Y %h:%i %p') AS orderTime, DATE_FORMAT(dineInTime, '%h:%i %p') AS dineInTime FROM `order_details` WHERE customerId='$id_cust' AND status='1' ORDER BY id DESC";
                            $result = mysqli_query($conn, $retrieveQuery);

                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <div class="p-3 status-order border-bottom bg-white">
                                        <h5 class=" p-1"><i class="feather-calendar text-primary"></i><b> #<?php echo $row['orderId']; ?></b></h5>
                                        <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><b>Order Time:</b> </i><?php echo $row['orderTime']; ?></a></p>
                                        <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><b>Dine-In-Time:</b> <?php echo $row['dineInTime']; ?></a></p>
                                        <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><b>No of Person:</b> <?php echo $row['personsNo']; ?></a></p>
                                        <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><b>Remark:</b> <?php echo $row['remark']; ?></a></p>
                                        <p class="mb-0 font-weight-bold"><a href="" class="text-dark"><b>Total Payment:</b> ₹<?php echo $row['grantTotal']; ?></a></p>
                                    </div>
                                    <?php
                                    $serializedData = $row['products_odr'];
                                    $unserializedProducts = unserialize($serializedData);

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
        <?php $i++;
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
