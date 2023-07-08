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

        <!-- Most popular -->
        <div class="osahan-favorites">
        <div class="container most_popular py-5">
            <div class="d-flex align-items-center mb-4">
                    <h3 class="font-weight-bold text-dark mb-0">Favorites</h3>
                    <a href="#" data-toggle="modal" data-target="#filters" class="ml-auto btn btn-primary">Filters</a>
                </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart bg-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="china_town_se_starter.php">
                                <img alt="#" src="img/Veg_Manchurian.jpg" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="china_town_se_starter.php" class="text-black">Veg Manchurian
                             </a>
                                </h6>
                                <p class="text-gray mb-3">China Town • Starter • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-40"> ₹350 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-danger">OFFER</span> <small>65% चतुर्थी-व्हेज</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart bg-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="main_course_indian_punjabi_se.php">
                                <img alt="#" src="img/Chhole-Masala.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="main_course_indian_punjabi_se.php" class="text-black">Chhole Masala</a></h6>
                                <p class="text-gray mb-3">Punjabi  • Chhole Masala • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-right text-black-40"> ₹250 FOR ONE</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-success">OFFER</span> <small>65% off</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart bg-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="chaturthi_veg_special.php">
                                <img alt="#" src="img/paneer-pistawari.jpg" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="chaturthi_veg_special.php" class="text-black">Paneer Pistawari
                             </a>
                                </h6>
                                <p class="text-gray mb-3">चतुर्थी-व्हेज-Special • Paneer Pistawari • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-40"> ₹500 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-danger">OFFER</span> <small>65% चतुर्थी-व्हेज</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart bg-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="mughal _samrajya_se.php">
                                <img alt="#" src="img/Navrattan-Korma.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="mughal _samrajya_se.php" class="text-black">Navrattan-Korma</a></h6>
                                <p class="text-gray mb-3">Mughal Samrajya Se • Indian • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-right text-black-40"> ₹250 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-success">OFFER</span> <small>65% off</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart bg-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="main_course_indian_punjabi_se.php">
                                <img alt="#" src="img/Veg-Kofta-curry.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="main_course_indian_punjabi_se.php" class="text-black">Veg Kofta
                             </a>
                                </h6>
                                <p class="text-gray mb-3">Punjabi • Main Course • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-40"> ₹250 FOR ONE</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-danger">OFFER</span> <small>65% चतुर्थी-व्हेज</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart bg-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="main_course_indian_punjabi_se.php">
                                <img alt="#" src="img/Pindi-Chhole.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="main_course_indian_punjabi_se.php" class="text-black">Pindi Chhole</a></h6>
                                <p class="text-gray mb-3">Punjbai • Main Course • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-right text-black-40"> ₹250 FOR TWO</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-success">OFFER</span> <small>65% off</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart bg-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="main_course_indian_punjabi_se.php">
                                <img alt="#" src="img/Bhindi Do-Pyaza.png" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="main_course_indian_punjabi_se.php" class="text-black">Bhindi Do Pyaza/Masala
                             </a>
                                </h6>
                                <p class="text-gray mb-3">Punjabi • Main Course • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-40"> ₹250 FOR ONE</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-danger">OFFER</span> <small>65% चतुर्थी-व्हेज</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm grid-card">
                        <div class="list-card-image">
                            <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                            <div class="favourite-heart bg-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                            <a href="chaturthi_veg_special.php">
                                <img alt="#" src="img/kurchan.jpg" class="img-fluid item-img w-100">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="chaturthi_veg_special.php" class="text-black">Paneer Kurchan</a></h6>
                                <p class="text-gray mb-3">चतुर्थी-व्हेज-Special • Indian • Pure veg</p>
                                <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 30–35 min</span> <span class="float-right text-black-40"> ₹330 FOR Half</span></p>
                            </div>
                            <div class="list-card-badge">
                                <span class="badge badge-success">OFFER</span> <small>65% off</small>
                            </div>
                        </div>
                    </div>
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