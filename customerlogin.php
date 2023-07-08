<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>

<body>
    <?php
    session_start();

    include "dbconnect.php";

    if (isset($_POST['submit'])) {
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM customer_registration WHERE mobile='$mobile' AND password='$password'";
        $count = mysqli_query($conn, $sql);
        $total = mysqli_num_rows($count);
        if ($total > 0) {
            $counts = mysqli_fetch_object($count);
            if ($counts->status == '0') {
                $_SESSION['login_id'] = $counts->id;
                $_SESSION['login_user_id'] = $counts->user_id;
                $_SESSION['login_fullname'] = $counts->fullname;
                $_SESSION['login_mobile'] = $counts->mobile;
                echo "
                <script type='text/javascript'>
                    Swal.fire({
                        title: '',
                        text: 'User login successfully.',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function() {
                        window.location.replace('home.php');
                    });
                </script>";
            } else {
                echo "
                <script type='text/javascript'>
                    Swal.fire({
                        title: '',
                        text: 'Your account has been temporarily blocked.',
                        icon: 'warning',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function() {
                        window.location.replace('login.php');
                    });
                </script>";
            }
        } else {
            echo "
            <script type='text/javascript'>
                Swal.fire({
                    title: '',
                    text: 'Invalid username and password.',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.location.replace('login.php');
                });
            </script>";
        }
    }
    ?>
</body>

</html>