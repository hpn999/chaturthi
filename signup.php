<?php
include("customersignup.php");
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
    <div class="osahan-signup login-page">
        <video loop autoplay muted id="vid">
            <source src="img/bg.mp4" type="video/mp4">
            <source src="img/bg.mp4" type="video/ogg">
            Your browser does not support the video tag.
        </video>
        <div class="d-flex align-items-center justify-content-center flex-column vh-100">
            <div class="px-5 col-md-6 ml-auto">
                <div class="px-5 col-10 mx-auto">
                    <h6 class="text-50"><b>SIGN-UP TO CONTINUE</b></h6>

                    <form class="mt-5 mb-4" action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputName1" class="text-dark">Name</label>
                            <input type="text" name="fullname" placeholder="Enter Name" class="form-control" autocomplete="off" required id="exampleInputName1" aria-describedby="nameHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNumber1" class="text-dark">Mobile Number</label>
                            <input type="tel" name="mobile" placeholder="Enter Mobile" class="form-control" autocomplete="off" required id="exampleInputNumber1" aria-describedby="numberHelp">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-dark">Password</label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" name="submit">
                            SIGN UP
                        </button>
                        <!-- <div class="py-2">
                            <button class="btn btn-facebook btn-lg btn-block" ><i class="feather-facebook"></i> Connect with Facebook</button>
                        </div> -->
                    </form>
                </div>
                <div class="new-acc d-flex align-items-center justify-content-center">
                    <a href="login.php">
                        <p class="text-center m-0">Already an account? Sign in</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        var phoneInput = document.getElementById('exampleInputNumber1');
        phoneInput.addEventListener('input', function(event) {
            event.target.value = event.target.value.replace(/\D/g, '');
        });
    </script>

    <?php
    include 'sidemenu.php';
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