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

    <div class="offer-section">
        <div class="container">
            <div class="py-5 d-flex align-items-center">
                <div>
                    <h2 class="text-white">Offers for you</h2>
                    <p class="h6 text-white">Explore top deals and offers exclusively for you!</p>
                </div>
                <div class="ml-auto"><img alt="#" src="img/offers.png" class="img-fluid offers_img"></div>
            </div>
        </div>
    </div>
    <!-- Tabs -->
    <div class="bg-white shadow-sm">
        <div class="container">
            <div class="bg-white">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="px-0 py-3 nav-link text-dark h6 border-0 mb-0 active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Payment offers/Coupons</a>
                    </li>
                    <li class="nav-item bottom-tab" role="presentation">
                        <a class="px-0 py-3 nav-link text-dark h6 border-0 mb-0 ml-3" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Restaurant offers</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade py-4" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h5 class="mb-1">All offers (163)</h5>
                <p>All offers and deals, from restaurants near you</p>
                <div class="row">
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                <a href="indian_bread.php">
                                    <img alt="#" src="img/tandoori.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="indian_bread.php" class="text-black">Indian Breads
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-1 small">• Indian Bread • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                <a href="china_town_se_starter.php">
                                    <img alt="#" src="img/p_chilli.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="china_town_se_starter.php" class="text-black">Chinese Main Course</a></h6>
                                    <p class="text-gray mb-1 small">• Chinese • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                <a href="tandoor_se_starters.php">
                                    <img alt="#" src="img/tandoor-starter.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="tandoor_se_starters.php" class="text-black">Tandoor Starters
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-1 small">• Tandoor • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                <a href="main_course_indian_punjabi_se.php">
                                    <img alt="#" src="img/Kadai-Veg.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="main_course_indian_punjabi_se.php" class="text-black">Indian Punjabi</a></h6>
                                    <p class="text-gray mb-1 small">Punjabi • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                <a href="chaturthi_veg_special.php">
                                    <img alt="#" src="img/toofani.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="chaturthi_veg_special.php" class="text-black">Chaturthi Veg Special
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-1 small">• Indian • Pure Veg</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                <a href="mughal _samrajya_se.php">
                                    <img alt="#" src="img/malai-kofta.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="mughal _samrajya_se.php" class="text-black">Mughal Samrajya </a></h6>
                                    <p class="text-gray mb-1 small">• Mughal Samrajya • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                <a href="maratha_samrajya_se.php">
                                    <img alt="#" src="img/Sukkha-Batata-Bhaji.png" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="maratha_samrajya_se.php" class="text-black">Maratha Samrajya
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-1 small">• Maratha Samrajya • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                <a href="dal_and_rice.php">
                                    <img alt="#" src="img/Kashmiri_Pulav.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="dal_and_rice.php" class="text-black">Dal & Rice</a></h6>
                                    <p class="text-gray mb-1 small">Indian • Pure veg</p>
                                    <p class="text-gray mb-1 rating">
                                    </p>
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    <p></p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                <a href="chinese_main_course.php">
                                    <img alt="#" src="img/Hakka_Noodles.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="chinese_main_course.php" class="text-black">Hakka Noodles
                                        </a>
                                    </h6>
                                    <p class="text-gray mb-1 small">• Chinese • Main Course • Pure-Veg </p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pb-3">
                        <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                            <div class="list-card-image">
                                <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                <a href="jain _menu.php">
                                    <img alt="#" src="img/Bhindi_Fry.jpg" class="img-fluid item-img w-100">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="jain _menu.php" class="text-black">Bhindi Fry </a></h6>
                                    <p class="text-gray mb-1 small">• Jain Menu • Pure-Veg</p>
                                    <p class="text-gray mb-1 rating">
                                    <ul class="rating-stars list-unstyled">
                                        <li>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star star_active"></i>
                                            <i class="feather-star"></i>
                                        </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="list-card-badge">
                                    <span class="float-right"><a href="#" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#extras"><i class="feather-shopping-cart h6 mr-2 mb-0"></i>ADD</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active py-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="mb-3 mt-0">Available Coupons</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4">
                            <p class="h6 mb-3"><span class="feather-home text-primary"></span><span class="ml-3">SBI75</span></p>
                            <p class="font-weight-bold mb-2">Get 15% discount using SBI Credit Cards</p>
                            <p class="mb-4">Use code SBI75 and get 15% discount up to Rs.75 on orders above Rs.400</p>
                            <p><a href="#" class="text-primary">+ MORE</a></p>
                            <a href="#" class="btn btn-outline-primary">COPY CODE</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4">
                            <p class="h6 mb-3"><span class="feather-home text-primary"></span><span class="ml-3">PAYZAPP100</span></p>
                            <p class="font-weight-bold mb-2">Get 15% discount using HDFC PayZapp Card</p>
                            <p class="mb-4">Use code PAYZAPP100 & get 15% discount up to Rs.100 on orders above Rs.250</p>
                            <p><a href="#" class="text-primary">+ MORE</a></p>
                            <a href="#" class="btn btn-outline-primary">COPY CODE</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4">
                            <p class="h6 mb-3"><span class="feather-home text-primary"></span><span class="ml-3">LP75</span></p>
                            <p class="font-weight-bold mb-2">Get flat cashback of Rs.75 using LazyPay</p>
                            <p class="mb-4">Use code LP75 & get flat cashback of Rs.75 on orders above Rs.250 on first LazyPay</p>
                            <p><a href="#" class="text-primary">+ MORE</a></p>
                            <a href="#" class="btn btn-outline-primary">COPY CODE</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4">
                            <p class="h6 mb-3"><span class="feather-home text-primary"></span><span class="ml-3">RUPAYFEST</span></p>
                            <p class="font-weight-bold mb-2">Get 30% discount using RuPay Cards</p>
                            <p class="mb-4">Use code RUPAYFEST and get 30% discount up to Rs.100 on orders above Rs.199</p>
                            <p><a href="#" class="text-primary">+ MORE</a></p>
                            <a href="#" class="btn btn-outline-primary">COPY CODE</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4">
                            <p class="h6 mb-3"><span class="feather-home text-primary"></span><span class="ml-3">FCH50</span></p>
                            <p class="font-weight-bold mb-2">Get 20% cashback using Freecharge</p>
                            <p class="mb-4">Use code FCH50 and get 20% cashback up to Rs.50 on transaction using Freecharge.</p>
                            <p><a href="#" class="text-primary">+ MORE</a></p>
                            <a href="#" class="btn btn-outline-primary">COPY CODE</a>
                        </div>
                    </div>
                </div>
                <h5 class="mb-3 mt-2">Bank Offers</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4 d-flex">
                            <div><img alt="#" src="img/axis.png" class="img-fluid"></div>
                            <div class="ml-4">
                                <p class="mb-1 font-weight-bold">Get 4% cashback with Flipkart Axis Bank Credit Card</p>
                                <p class="text-muted">Get 4% cashback on orders using Flipkart Axis Bank Credit Cards</p>
                                <p class="mb-0"><a href="#" class="text-primary">+ MORE</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="bg-white shadow-sm rounded p-4 d-flex">
                            <div><img alt="#" src="img/axis.png" class="img-fluid"></div>
                            <div class="ml-4">
                                <p class="mb-1 font-weight-bold">Get 4% cashback using Axis Bank Ace Credit Cards</p>
                                <p class="text-muted">Get 4% cashback on orders using Axis Bank Ace Credit Cards</p>
                                <p class="mb-0"><a href="#" class="text-primary">+ MORE</a></p>
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
    ?>
    <!-- extras modal -->
    <div class="modal fade" id="extras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Extras</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- extras body -->
                        <div class="recepie-body">
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio1f" name="location" class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadio1f">Tuna <span class="text-muted">+₹35.00</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio2f" name="location" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2f">Salmon <span class="text-muted">+₹20.00</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio3f" name="location" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio3f">Wasabi <span class="text-muted">+₹25.00</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio4f" name="location" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio4f">Unagi <span class="text-muted">+₹10.00</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio5f" name="location" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio5f">Vegetables <span class="text-muted">+₹5.00</span></label>
                            </div>
                            <div class="custom-control custom-radio border-bottom py-2">
                                <input type="radio" id="customRadio6f" name="location" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio6f">Noodles <span class="text-muted">+₹30.00</span></label>
                            </div>
                            <h6 class="font-weight-bold mt-4">QUANTITY</h6>
                            <div class="d-flex align-items-center">
                                <p class="m-0">1 Item</p>
                                <div class="ml-auto">
                                    <span class="count-number"><button type="button" class="btn-sm left dec btn btn-outline-secondary"> <i class="feather-minus"></i> </button><input class="count-number-input" type="text" readonly="" value="1"><button type="button" class="btn-sm right inc btn btn-outline-secondary"> <i class="feather-plus"></i> </button></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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