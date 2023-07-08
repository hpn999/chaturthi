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

    <!-- profile -->
    <div class="container position-relative">
        <div class="py-5 osahan-profile row">
            <div class="col-md-4 mb-3">
                <div class="bg-white rounded shadow-sm sticky_sidebar overflow-hidden">
                    <a href="profile.php" class="">
                        <div class="d-flex align-items-center p-3">
                            <div class="left mr-3">
                                <img alt="#" src="img/cust.png" class="img-fluid rounded-circle header-user mr-2 header-user">
                            </div>
                            <?php

                            include "dbconnect.php";
                            $id = $_SESSION['login_id'];
                            $sql = mysqli_query($conn, "SELECT * FROM customer_registration WHERE id='$id'");
                            $show = mysqli_fetch_assoc($sql);
                            $user = $show['user_id'];
                            ?>
                            <div class="right">
                                <h6 class="mb-1 font-weight-bold"><?php echo $show['fullname']; ?><i class="feather-check-circle text-success ml-1"></i></h6>
                                <p class="text-muted m-0 small"><?php echo $show['mobile']; ?></p>
                            </div>
                        </div>
                    </a>
                    <div class="osahan-credits d-flex align-items-center p-3 bg-light">
                        <p class="m-0">Accounts Credits</p>
                        <h5 class="m-0 ml-auto text-primary">₹52.25</h5>
                    </div>
                    <!-- profile-details -->
                    <div class="bg-white profile-details">
                        <a data-toggle="modal" data-target="#paycard" class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Payment Cards</h6>
                                <p class="small text-muted m-0">Add a credit or debit card</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a data-toggle="modal" data-target="#exampleModal" class="d-flex w-100 align-items-center border-bottom p-3">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1 text-dark">Address</h6>
                                <p class="small text-muted m-0">Add or remove a delivery address</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center border-bottom p-3" data-toggle="modal" data-target="#inviteModal">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold mb-1">Refer Friends</h6>
                                <p class="small text-primary m-0">Get ₹10.00 FREE</p>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="faq.php" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-truck bg-success text-white p-2 rounded-circle mr-2"></i> Delivery Support</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="contact-us.php" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-phone bg-primary text-white p-2 rounded-circle mr-2"></i> Contact</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="terms.php" class="d-flex w-100 align-items-center border-bottom px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-info bg-success text-white p-2 rounded-circle mr-2"></i> Term of use</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                        <a href="privacy.php" class="d-flex w-100 align-items-center px-3 py-4">
                            <div class="left mr-3">
                                <h6 class="font-weight-bold m-0 text-dark"><i class="feather-lock bg-warning text-white p-2 rounded-circle mr-2"></i> Privacy policy</h6>
                            </div>
                            <div class="right ml-auto">
                                <h6 class="font-weight-bold m-0"><i class="feather-chevron-right"></i></h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="rounded shadow-sm">
                    <div class="osahan-privacy bg-white rounded shadow-sm p-4">
                        <div id="intro" class="mb-4">
                            <!-- Title -->
                            <div class="mb-3">
                                <h2 class="h5 text-primary">Introduction</h2>
                            </div>
                            <!-- End Title -->
                            <p>Thanks for using our products and services ("Services"). The Services are provided by Pixeel Ltd. ("चतुर्थी-व्हेज"), located at 153 Williamson Plaza, Maggieberg, MT 09514, England, United Kingdom.
                            </p>
                            <p>By using our Services, you are agreeing to these terms. Please read them carefully.</p>
                        </div>
                        <div id="services" class="mb-4">
                            <!-- Title -->
                            <div class="mb-3">
                                <h3 class="h5 text-primary">1. Using our services</h3>
                            </div>
                            <!-- End Title -->
                            <p>You must follow any policies made available to you within the Services.</p>
                            <p>Don't misuse our Services. For example, don't interfere with our Services or try to access them using a method other than the interface and the instructions that we provide. You may use our Services only as permitted by
                                law, including applicable export and re-export control laws and regulations. We may suspend or stop providing our Services to you if you do not comply with our terms or policies or if we are investigating suspected
                                misconduct.
                            </p>
                            <!-- Title -->
                            <div id="personal-data" class="mb-3 active">
                                <h4 class="h6 text-primary">A. Personal Data that we collect about you.</h4>
                            </div>
                            <!-- End Title -->
                            <p>Personal Data is any information that relates to an identified or identifiable individual. The Personal Data that you provide directly to us through our Sites will be apparent from the context in which you provide the data.
                                In particular:
                            </p>
                            <ul class="text-secondary">
                                <li class="pb-2">When you register for a चतुर्थी-व्हेज account we collect your full name, email address, and account log-in credentials.</li>
                                <li class="pb-2">When you fill-in our online form to contact our sales team, we collect your full name, work email, country, and anything else you tell us about your project, needs and timeline.</li>
                                <li class="pb-2">When you use the "Remember Me" feature of चतुर्थी-व्हेज Checkout, we collect your email address, payment card number, CVC code and expiration date.</li>
                            </ul>
                            <p>When you respond to चतुर्थी-व्हेज emails or surveys we collect your email address, name and any other information you choose to include in the body of your email or responses. If you contact us by phone, we will collect the
                                phone number you use to call चतुर्थी-व्हेज. If you contact us by phone as a चतुर्थी-व्हेज User, we may collect additional information in order to verify your identity.
                            </p>
                            <!-- Title -->
                            <div id="information" class="mb-3 active">
                                <h4 class="h6 text-primary">B. Information that we collect automatically on our Sites.</h4>
                            </div>
                            <!-- End Title -->
                            <p>We also may collect information about your online activities on websites and connected devices over time and across third-party websites, devices, apps and other online features and services. We use Google Analytics on
                                our Sites to help us analyze Your use of our Sites and diagnose technical issues.
                            </p>
                            <p>To learn more about the cookies that may be served through our Sites and how You can control our use of cookies and third-party analytics, please see our Cookie Policy.</p>
                        </div>
                        <div id="privacy" class="mb-4">
                            <!-- Title -->
                            <div class="mb-3">
                                <h3 class="h5 text-primary">2. Privacy and copyright protection</h3>
                            </div>
                            <!-- End Title -->
                            <p>चतुर्थी-व्हेज's privacy policies explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that चतुर्थी-व्हेज can use such
                                data in accordance with our privacy policies.
                            </p>
                            <p>We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.</p>
                            <p>We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us, you can find information about submitting notices and
                                चतुर्थी-व्हेज's policy about responding to notices in <a href="help.php">our Help Center</a>.
                            </p>
                        </div>
                        <div id="yourContent" class="active">
                            <!-- Title -->
                            <div class="mb-3">
                                <h3 class="h5 text-primary">3. Your content in our services</h3>
                            </div>
                            <!-- End Title -->
                            <p>Some of our Services allow you to upload, submit, store, send or receive content. You retain ownership of any intellectual property rights that you hold in that content. In short, what belongs to you stays yours.</p>
                            <p>When you upload, submit, store, send or receive content to or through our Services, you give चतुर्थी-व्हेज (and those we work with) a worldwide license to use, host, store, reproduce, modify, create derivative works (such as
                                those resulting from translations, adaptations or other changes we make so that your content works better with our Services), communicate, publish, publicly perform, publicly display and distribute such content.
                            </p>
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

    <div class="modal fade" id="paycard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Credit/Debit Card</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 class="m-0">Add new card</h6>
                    <p class="small">WE ACCEPT <span class="osahan-card ml-2 font-weight-bold">( Master Card / Visa Card / Rupay )</span></p>
                    <form>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label class="form-label font-weight-bold small">Card number</label>
                                <div class="input-group">
                                    <input placeholder="Card number" type="number" class="form-control">
                                    <div class="input-group-append"><button type="button" class="btn btn-outline-secondary"><i class="feather-credit-card"></i></button></div>
                                </div>
                            </div>
                            <div class="col-md-8 form-group"><label class="form-label font-weight-bold small">Valid through(MM/YY)</label><input placeholder="Enter Valid through(MM/YY)" type="number" class="form-control"></div>
                            <div class="col-md-4 form-group"><label class="form-label font-weight-bold small">CVV</label><input placeholder="Enter CVV Number" type="number" class="form-control"></div>
                            <div class="col-md-12 form-group"><label class="form-label font-weight-bold small">Name on card</label><input placeholder="Enter Card number" type="text" class="form-control"></div>
                            <div class="col-md-12 form-group mb-0">
                                <div class="custom-control custom-checkbox"><input type="checkbox" id="custom-checkbox1" class="custom-control-input"><label title="" type="checkbox" for="custom-checkbox1" class="custom-control-label small pt-1">Securely save this card for a faster checkout next time.</label></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer p-0 border-0">
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-6 m-0 p-0">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Delivery Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="">
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label class="form-label">Delivery Area</label>
                                <div class="input-group">
                                    <input placeholder="Delivery Area" type="text" class="form-control">
                                    <div class="input-group-append"><button type="button" class="btn btn-outline-secondary"><i class="feather-map-pin"></i></button></div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group"><label class="form-label">Complete Address</label><input placeholder="Complete Address e.g. house number, street name, landmark" type="text" class="form-control"></div>
                            <div class="col-md-12 form-group"><label class="form-label">Delivery Instructions</label><input placeholder="Delivery Instructions e.g. Opposite Gold Souk Mall" type="text" class="form-control"></div>
                            <div class="mb-0 col-md-12 form-group">
                                <label class="form-label">Nickname</label>
                                <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                                    <label class="btn btn-outline-secondary active">
                                        <input type="radio" name="options" id="option1" checked> Home
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" name="options" id="option2"> Work
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" name="options" id="option3"> Other
                                    </label>
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
                        <button type="button" class="btn btn-primary btn-lg btn-block">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Invite Modal-->
    <div class="modal fade" id="inviteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title font-weight-bold text-dark">Invite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <button class="btn btn-light text-primary btn-sm"><i class="feather-plus"></i></button>
                    <span class="ml-2 smal text-primary">Send an invite to a friend</span>
                    <p class="mt-3 small">Invited friends (2)</p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="mr-3"><img alt="#" src="img/user1.jpg" class="img-fluid rounded-circle"></div>
                        <div>
                            <p class="small font-weight-bold text-dark mb-0">Kate Simpson</p>
                            <P class="mb-0 small">katesimpson@outbook.com</P>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="mr-3"><img alt="#" src="img/user2.png" class="img-fluid rounded-circle"></div>
                        <div>
                            <p class="small font-weight-bold text-dark mb-0">Andrew Smith</p>
                            <P class="mb-0 small">andrewsmith@ui8.com</P>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
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