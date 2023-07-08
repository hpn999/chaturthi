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
                            <a class="nav-link border-0 text-dark py-3 active" href="my_order.php">
                                <i class="feather-check mr-2 text-success mb-0"></i> Completed</a>
                        </li>
                        <li class="nav-item border-top" role="presentation">
                            <a class="nav-link border-0 text-dark py-3" href="my_order.php">
                                <i class="feather-clock mr-2 text-warning mb-0"></i> On Progress</a>
                        </li>
                        <li class="nav-item border-top" role="presentation">
                            <a class="nav-link border-0 text-dark py-3" href="my_order.php">
                                <i class="feather-x-circle mr-2 text-success mb-0"></i> Canceled</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <!-- body -->
                    <section class="bg-white osahan-main-body rounded shadow-sm overflow-hidden">
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="osahan-status">
                                        <!-- status complete -->
                                        <div class="p-3 status-order bg-white border-bottom d-flex align-items-center">
                                            <p class="m-0"><i class="feather-calendar text-primary"></i> 16 June, 11:30AM</p>
                                            <a href="review.php" class="text-primary ml-auto text-decoration-none">Review</a>
                                        </div>
                                        <div class="p-3 border-bottom">
                                            <h6 class="font-weight-bold">Order Status</h6>
                                            <div class="tracking-wrap">
                                                <div class="my-1 step active">
                                                    <span class="icon text-success"><i class="feather-check"></i></span>
                                                    <span class="text small">Preparing order</span>
                                                </div>
                                                <!-- step.// -->
                                                <div class="my-1 step active">
                                                    <span class="icon text-success"><i class="feather-check"></i></span>
                                                    <span class="text small"> Ready to collect</span>
                                                </div>
                                                <!-- step.// -->
                                                <div class="my-1 step">
                                                    <span class="icon text-success"><i class="feather-check"></i></span>
                                                    <span class="text small"> On the way </span>
                                                </div>
                                                <!-- step.// -->
                                                <div class="my-1 step">
                                                    <span class="icon text-success"><i class="feather-check"></i></span>
                                                    <span class="text small">Delivered Order</span>
                                                </div>
                                                <!-- step.// -->
                                            </div>
                                        </div>
                                        <!-- Destination -->
                                        <div class="p-3 border-bottom bg-white">
                                            <h6 class="font-weight-bold">Destination</h6>
                                            <p class="m-0 small">554 West 142nd Street, New York, NY 10031</p>
                                        </div>
                                        <div class="p-3 border-bottom">
                                            <p class="font-weight-bold small mb-1">Courier</p>
                                            <img alt="#" src="img/logo-green.png" class="img-fluid sc-osahan-logo mr-2"> <span class="small text-primary font-weight-bold">Grocery Courier
                                    </span>
                                        </div>
                                        <!-- total price -->
                                        <!-- Destination -->
                                        <div class="p-3 bg-white">
                                            <div class="d-flex align-items-center mb-2">
                                                <h6 class="font-weight-bold mb-1">Total Cost</h6>
                                                <h6 class="font-weight-bold ml-auto mb-1">₹8.52</h6>
                                            </div>
                                            <p class="m-0 small text-muted">You can check your order detail here,<br>Thank you for order.</p>
                                        </div>
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