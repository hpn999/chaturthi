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
            <div class="search py-5">
                <div class="input-group mb-4">
                    <input type="text" class="form-control form-control-lg input_search border-right-0" id="inlineFormInputGroup" value="Search">
                    <div class="input-group-prepend">
                        <div class="btn input-group-text bg-white border_search border-left-0 text-primary"><i class="feather-search"></i></div>
                    </div>
                </div>
                <!-- nav tabs -->
                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active border-0 bg-light text-dark rounded" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="feather-home mr-2"></i>Restaurants (8)</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link border-0 bg-light text-dark rounded ml-3" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="feather-disc mr-2"></i>Dishes (23)</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- Content Row -->
                        <div class="container mt-4 mb-4 p-0">
                            <!-- restaurants nearby -->
                            <div class="row">
                                <div class="col-md-3 pb-3">
                                    <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                        <div class="list-card-image">
                                            <div class="star position-absolute"><span class="badge badge-success"><i class="feather-star"></i> 3.1 (300+)</span></div>
                                            <div class="favourite-heart text-success position-absolute"><a href="#"><i class="feather-heart"></i></a></div>
                                            <div class="member-plan position-absolute"><span class="badge badge-dark">Promoted</span></div>
                                            <a href="shorba_soups.php">
                                                <img alt="#" src="img/tomato.png" class="img-fluid item-img w-100">
                                            </a>
                                        </div>
                                        <div class="p-3 position-relative">
                                            <div class="list-card-body">
                                                <h6 class="mb-1"><a href="shorba_soups.php" class="text-black">Tomato Dhania Shorba
                                          </a>
                                                </h6>
                                                <p class="text-gray mb-1 small">Shorba/Soups • Tomato Dhania Shorba • Pure veg</p>
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
                                                <span class="badge badge-danger">OFFER</span> <small>65% चतुर्थी-व्हेज</small>
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
                                            <a href="restaurant.php">
                                                <img alt="#" src="img/Paneer_hot.jpg" class="img-fluid item-img w-100">
                                            </a>
                                        </div>
                                        <div class="p-3 position-relative">
                                            <div class="list-card-body">
                                                <h6 class="mb-1"><a href="restaurant.php" class="text-black">Paneer Hot Pan</a></h6>
                                                <p class="text-gray mb-1 small">China Town Se Slarter • Paneer Hot Pan • Pure veg</p>
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
                                                <span class="badge badge-success">OFFER</span> <small>65% off</small>
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
                                            <a href="chaturthi_veg_special.php">
                                                <img alt="#" src="img/lucknowi.jpg" class="img-fluid item-img w-100">
                                            </a>
                                        </div>
                                        <div class="p-3 position-relative">
                                            <div class="list-card-body">
                                                <h6 class="mb-1"><a href="chaturthi_veg_special.php" class="text-black">Veg Lucknowi
                                          </a>
                                                </h6>
                                                <p class="text-gray mb-1 small">• Chaturthi Veg Special • Veg Lucknowi • Pure veg</p>
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
                                                <span class="badge badge-danger">OFFER</span> <small>65% चतुर्थी-व्हेज</small>
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
                                                <img alt="#" src="img/Alu-Vadi.png" class="img-fluid item-img w-100">
                                            </a>
                                        </div>
                                        <div class="p-3 position-relative">
                                            <div class="list-card-body">
                                                <h6 class="mb-1"><a href="maratha_samrajya_se.php" class="text-black">Aluchi Wadi</a></h6>
                                                <p class="text-gray mb-1 small">Maratha Samrajya Se • Sukkha Batata Bhaji • Pure veg</p>
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
                                                <span class="badge badge-success">OFFER</span> <small>65% off</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Content Row -->
                        <div class="row d-flex align-items-center justify-content-center py-5">
                            <div class="col-md-4 py-5">
                                <div class="text-center py-5">
                                    <p class="h4 mb-4"><i class="feather-search bg-primary text-white rounded p-2"></i></p>
                                    <p class="font-weight-bold text-dark h5">Nothing found</p>
                                    <p>we could not find anything that would match your search request, please try again.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- footer -->
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