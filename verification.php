<?php
include "dbconnect.php";
if (isset($_POST['verify'])) {
    $mobile = $_POST['mobile'];
    $randotp = $_POST['user_otp'];
    $sql = "Select * from customer_registration where mobile = '$mobile' and user_otp='$randotp'";
    $row = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $rows = mysqli_fetch_object($row);
        $_SESSION['login_id'] = $rows->id;
        $_SESSION['login_fullname'] = $rows->fullname;
        $_SESSION['login_password'] = $rows->password;
        echo "<SCRIPT type='text/javascript'> //not showing me this
                   alert('Your Mobile Number verified successfully.');
                    window.location.replace('login.php');
            </SCRIPT>";
    } else {
        echo "<script>alert('Your OTP/Mobile number is invalid'); </script>";
    }
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

<body>
    <div class="osahan-signup login-page">
        <video loop autoplay muted id="vid">
            <source src="img/bg.mp4" type="video/mp4">
            <source src="img/bg.mp4" type="video/ogg">
            Your browser does not support the video tag.
        </video>
        <div class="d-flex align-items-center justify-content-center flex-column vh-100">
            <div class="px-5 col-md-6 ml-auto">
                <div class="px-5 col-10 mx-auto mb-4">
                    <!-- <h2 class="mb-3">Verify your Phone Number</h2> -->
                    <h6><b>Enter Registered Mobile Number & OTP</b></h6>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputPhone" class="text-dark"></label>
                            <input type="tel" name= "mobile" placeholder="Mobile Number" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="enterotp" class="text-dark"></label>
                            <input type="tel" name= "user_otp" placeholder="4-Digit OTP" class="form-control" id="enterotp" aria-describedby="phoneHelp" required>
                        </div>
                        <div class="text-black-50">Time left : <span id="timer"></span></div>

                        <!-- <label for="mobile"></label>
                        <input type="text" placeholder="Enter 10 digit number" name="mobile" required><br><br> -->
                        <!-- <h6 class="text-black-50">Enter OTP here</h6> -->
                        <!-- <label for="otp"></label>
                        <input type="text" placeholder="Enter 4 digit otp" name="user_otp" required><br><br> -->
                        <button class="btn btn-lg btn-primary btn-block" name="verify">Verify Now</button>
                    </form>

                </div>
                <div class="new-acc d-flex align-items-center justify-content-center">
                    <a href="login.php">
                        <p class="text-center m-0">Already an account? Sign in</p>
                    </a>
                </div>
            </div>
        </div>


        <?php
        include 'sidemenu.php';
        ?>

        <script>
            let timerOn = true;

            function timer(remaining) {
                var m = Math.floor(remaining / 60);
                var s = remaining % 60;

                m = m < 10 ? '0' + m : m;
                s = s < 10 ? '0' + s : s;
                document.getElementById('timer').innerHTML = m + ':' + s;
                remaining -= 1;

                if (remaining >= 0 && timerOn) {
                    setTimeout(function() {
                        timer(remaining);
                    }, 1000);
                    return;
                }

                if (!timerOn) {
                    // Do validate stuff here
                    return;
                }

                // Do timeout stuff here
                alert('Timeout for otp');
            }

            timer(300);
        </script>

</body>

</html>