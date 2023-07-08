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

    <div class="osahan-trending">
        <!-- Most popular -->
        <div class="container">
            <div class="most_popular py-5">
                <div class="d-flex align-items-center mb-4">
                    <h3 class="font-weight-bold text-dark mb-0">Main Course Indian Punjabi Se</h3>
                    <a href="#" data-toggle="modal" data-target="#filters" class="ml-auto btn btn-primary">Filters</a>
                </div>
                <div class="row">
                    <?php

                    include "dbconnect.php";

                    $i = 1;

                    $query_show = mysqli_query($conn, "SELECT * FROM products WHERE productCat = 'Main Course Indian Punjabi Se'");

                    while ($show = mysqli_fetch_array($query_show)) {

                    ?>
                        <div class="col-lg-4 mb-3">
                            <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                                <div class="list-card-image">
                                    <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                    <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                    <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                    <a href="restaurant.php">
                                        <img alt="#" src="img/<?php echo $show['productImg']; ?>" width="100px" height="100px" class="img-fluid item-img w-100">
                                    </a>
                                </div>
                                <div class="p-3 position-relative">
                                    <div class="list-card-body">
                                        <h6 class="mb-1"><a href="restaurant.php" class="text-black"><?php echo $show['productName']; ?>
                                            </a>
                                        </h6>
                                        <p class="text-gray mb-3"><?php echo $show['productDesc']; ?></p>
                                        <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i><?php echo $show['time']; ?> min</span> <span class="float-right text-black-40"> ₹<?php echo $show['price']; ?> FOR <?php echo $show['one_half']; ?></span></p>
                                    </div>
                                    <div class="list-card-badge">
                                        <span class="float-right"><a href="add_cart.php?id=<?php echo $show['id']; ?>" class="btn btn-outline-secondary btn-sm" data-toggle="" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Footer -->

        <?php
        include 'footer.php';
        include 'sidemenu.php';
        include 'bottommenu.php';
        include 'filter.php';
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