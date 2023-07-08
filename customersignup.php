<?php
include "dbconnect.php";

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $duplicate = mysqli_query($conn, "SELECT * FROM customer_registration WHERE mobile='$mobile'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<SCRIPT type='text/javascript'> //not showing me this
                   alert('User already exists.');
                    window.location.replace('signup.php');
            </SCRIPT>";
    } else {
        $checkuser_id = "SELECT * FROM  `customer_registration` ORDER BY id DESC LIMIT 1";
        $checkresult = mysqli_query($conn, $checkuser_id);
        if (mysqli_num_rows($checkresult) > 0) {
            if ($row = mysqli_fetch_assoc($checkresult)) {
                $user_id = $row['user_id'];
                $user_otp = $row['user_otp'];
                $randotp = rand(1000, 9999);
                $get_number = str_replace("CV", "", $user_id);
                $id_increase = $get_number + 1;
                $get_string = str_pad($id_increase, 6, 0, STR_PAD_LEFT);
                $id = "CV" . $get_string;
                $insert_qry = "INSERT INTO  `customer_registration` (user_id,fullname,mobile,password,user_otp) values ('$id','$fullname', '$mobile', '$password','$randotp')";
                $result = mysqli_query($conn, $insert_qry);
                if ($result) {
                    header("location:verification.php");
                    echo "<script>alert('your otp is:$randotp');</script>";
                } else {
                    echo "error";
                }
            }
        } else {
            $id = "CV000001";
            $user_otp = $row['user_otp'];
            $randotp = rand(1000, 9999);
            $insert_qry = "INSERT INTO  `customer_registration` (user_id,fullname,mobile,password,user_otp) values ('$id','$fullname', '$mobile', '$password','$randotp')";
            $result = mysqli_query($conn, $insert_qry);
            if ($result) {
                header("location:verification.php");
                echo "<script>alert('your otp is:$randotp');</script>";
            } else {
                echo "error";
            }
        }
    }
}
