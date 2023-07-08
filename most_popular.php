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

    <div class="osahan-popular">

        <!-- Most popular -->
        <div class="container">
            <div class="most_popular py-5">
                <div class="d-flex align-items-center mb-4">
                    <h3 class="font-weight-bold text-dark mb-0">Most Popular</h3>
                    <a href="#" data-toggle="modal" data-target="#filters" class="ml-auto btn btn-primary">Filters</a>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="shorba_soups.php">
                                            <img alt="#" src="img/tomato.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="shorba_soups.php">
                                            <img alt="#" src="img/cream.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="shorba_soups.php">
                                            <img alt="#" src="img/veg-manchow-soup.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="shorba_soups.php" class="text-black">Shorba/Soups
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Indian • Shorba/Soup • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹160 FOR TWO</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="china_town_se_starter.php">
                                            <img alt="#" src="img/gobi.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="china_town_se_starter.php">
                                            <img alt="#" src="img/P_chilli.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="china_town_se_starter.php">
                                            <img alt="#" src="img/C_chilli.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="china_town_se_starter.php" class="text-black">China Town Se Starter
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Chinatown • Starter • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹250 FOR ONE</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="chinese_main_course.php">
                                            <img alt="#" src="img/veg_manchurian_gravy.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="chinese_main_course.php">
                                            <img alt="#" src="img/Veg-Hakka-Noodles.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="chinese_main_course.php">
                                            <img alt="#" src="img/panner-chilly-gravy.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="chinese_main_course.php" class="text-black">Chinese Main Course
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Chinese • Main Course • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹250 FOR ONE</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="tandoor_se_starters.php">
                                            <img alt="#" src="img/hari-sabji-tikki.jpgh.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="tandoor_se_starters.php">
                                            <img alt="#" src="img/Mushroom-Tikka.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="tandoor_se_starters.php">
                                            <img alt="#" src="img/Paneer-Losooni-Tikka.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="tandoor_se_starters.php" class="text-black">Tandoor Se Starters
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Tandoor • Starter • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹200 FOR ONE</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="chaturthi_veg_special.php">
                                            <img alt="#" src="img/kheema.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="chaturthi_veg_special.php">
                                            <img alt="#" src="img/toofani.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="chaturthi_veg_special.php">
                                            <img alt="#" src="img/paneer-pistawari.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="chaturthi_veg_special.php" class="text-black">Chaturthi Veg Special
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Chaturthi • Veg Special • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹300 FOR ONE</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="main_course_indian_punjabi_se.php">
                                            <img alt="#" src="img/mix-veg.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="main_course_indian_punjabi_se.php">
                                            <img alt="#" src="img/Kadai-Veg.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="main_course_indian_punjabi_se.php">
                                            <img alt="#" src="img/Veg-Kofta-curry.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="main_course_indian_punjabi_se.php" class="text-black">Main Course Indian Punjabi Se
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Indian • Punjabi • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹500 FOR TWO</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="mughal _samrajya_se.php">
                                            <img alt="#" src="img/malai-kofta.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="mughal _samrajya_se.php">
                                            <img alt="#" src="img/Veg-Nargisi-Kofta.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="mughal _samrajya_se.php">
                                            <img alt="#" src="img/Navrattan-Korma.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="mughal _samrajya_se.php" class="text-black">Mughal Samrajya Se
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Mughal Samrajya Se • Main Course • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹500 FOR TWO</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="maratha_samrajya_se.php">
                                            <img alt="#" src="img/Plain-besan.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="maratha_samrajya_se.php">
                                            <img alt="#" src="img/Matki-Masala.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="maratha_samrajya_se.php">
                                            <img alt="#" src="img/Alu-Vadi.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="maratha_samrajya_se.php" class="text-black">Maratha Samrajya Se
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Maratha Samrajya Se • Main Course • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹500 FOR TWO</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="indian_bread.php">
                                            <img alt="#" src="img/tandoori.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="indian_bread.php">
                                            <img alt="#" src="img/Garlic-Naan.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="indian_bread.php">
                                            <img alt="#" src="img/Assorted-Roti-Basket.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="indian_bread.php" class="text-black">Indian Bread
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Indian • Bread • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹500 FOR TWO</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="paratha.php">
                                            <img alt="#" src="img/Aloo-Paratha.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="paratha.php">
                                            <img alt="#" src="img/Paneer-Paratha.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="paratha.php">
                                            <img alt="#" src="img/Cheese-Paratha.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="paratha.php" class="text-black">Paratha
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Indian • Paratha • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹140 FOR ONE</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="dal_and_rice.php">
                                            <img alt="#" src="img/Dal_tadka.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="dal_and_rice.php">
                                            <img alt="#" src="img/Jeera_Rice.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="dal_and_rice.php">
                                            <img alt="#" src="img/Veg_Biryani.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="dal_and_rice.php" class="text-black">Dal & Rice
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Indian • Dal & Rice • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹200 FOR ONE</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="jain _menu.php">
                                            <img alt="#" src="img/Mix_Veg.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="jain _menu.php">
                                            <img alt="#" src="img/palak_paneer.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="jain _menu.php">
                                            <img alt="#" src="img/Peas_Pulav.jpg" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="jain _menu.php" class="text-black">Jain Menu
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Jain • Indian • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹300 FOR ONE</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 mb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="popular-slider">
                                    <div class="osahan-slider-item">
                                        <a href="papad_raita_salad.php">
                                            <img alt="#" src="img/roasted-papad.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="papad_raita_salad.php">
                                            <img alt="#" src="img/tomato-slad.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                    <div class="osahan-slider-item">
                                        <a href="mughal _samraapapapad_raita_salad.php">
                                            <img alt="#" src="img/fruit-salad.png" class="img-fluid item-img w-100 rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="papad_raita_salad.php" class="text-black">Papad/Raita/Salad's
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-3">Indian • Papad/Raita/Salad's • Pure veg</p>
                                    <p class="text-gray mb-3 time"><span class="bg-light text-dark rounded-sm pl-2 pb-1 pt-1 pr-2"><i class="feather-clock"></i> 15–25 min</span> <span class="float-right text-black-50"> ₹60 FOR ONE</span></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
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