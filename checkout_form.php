<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>

<body>

    <?php

    session_start();

    $userprofile = $_SESSION['user_name'];
    if ($userprofile == true) {
    } else {
        header('location:adminlogin.php');
    }

    include "dbconnect.php";

    $id = $_SESSION['login_id'];
    $sql_cust = mysqli_query($conn, "SELECT * FROM customer_registration WHERE id='$id'");
    $show_cust = mysqli_fetch_assoc($sql_cust);

    $id_cust = $_SESSION['login_user_id'];

    $retrieveQuery = "SELECT * FROM `cart` WHERE `customerId` = '$id_cust'";
    $result = mysqli_query($conn, $retrieveQuery);

    $serializedArray = array(); // Array to hold serialized products

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $serializedData = $row['products'];
            $unserializedProducts = unserialize($serializedData);
            $unserializedProducts['quantity'] = $row['quantity'];
            $unserializedProducts['total'] = $row['quantity'] * $unserializedProducts['price'];

            // Append unserialized products to the serialized array
            $serializedArray[] = $unserializedProducts;
        }
    } else {
        // echo "No data found.";
    }

    // Serialize the array of products
    $serializedResult = serialize($serializedArray);

    if ($result && mysqli_num_rows($result) > 0) {
        if (isset($_POST['submit'])) {
            $customerId =  $show_cust['user_id'];
            $customerName =  $show_cust['fullname'];
            $customerMob =  $show_cust['mobile'];
            $personsNo = $_POST["personsNo"];
            $dineInTime = $_POST["dineInTime"];
            $remark = $_POST["remark"];
            $grantTotal = $_POST["grantTotal"];

            $checkorderId = "SELECT * FROM  `order_details` ORDER BY id DESC LIMIT 1";
            $checkresult = mysqli_query($conn, $checkorderId);
            if (mysqli_num_rows($checkresult) > 0) {
                if ($row = mysqli_fetch_assoc($checkresult)) {
                    $orderId = $row['orderId'];
                    $get_number = str_replace("CVO", "", $orderId);
                    $id_increase = $get_number + 1;
                    $get_string = str_pad($id_increase, 4, 0, STR_PAD_LEFT);
                    $id = "CVO" . $get_string;
                    $insert_qry = "INSERT INTO order_details (orderId, customerId, customerName, customerMob, personsNo, dineInTime, remark, grantTotal, products_odr)
            VALUES ('$id', '$customerId', '$customerName', '$customerMob', '$personsNo', '$dineInTime', '$remark', '$grantTotal', '$serializedResult')";
                    $result = mysqli_query($conn, $insert_qry);
                    if ($result) {
                        $deleteQuery = "DELETE FROM `cart` WHERE `customerId` = '$id_cust'";
                        $result = mysqli_query($conn, $deleteQuery);

                        $query_session = "SELECT * FROM  `order_details` ORDER BY id DESC LIMIT 1";
                        $result_session = mysqli_query($conn, $query_session);
                        $counts = mysqli_fetch_object($result_session);
                        if ($counts->status == '0') {
                            $_SESSION['order_id'] = $counts->orderId;

                            echo "<script type='text/javascript'>
            window.location.replace('successful.php');
    </script>";
                        } else {
                            echo "Unable to proceed.";
                        }
                    }
                }
            } else {
                $id = "CVO0001";
                $insert_qry = "INSERT INTO order_details (orderId, customerId, customerName, customerMob, personsNo, dineInTime, remark, grantTotal, products_odr)
    VALUES ('$id', '$customerId', '$customerName', '$customerMob', '$personsNo', '$dineInTime', '$remark', '$grantTotal', '$serializedResult')";
                $result = mysqli_query($conn, $insert_qry);
                if ($result) {
                    $deleteQuery = "DELETE FROM `cart` WHERE `customerId` = '$id_cust'";
                    $result = mysqli_query($conn, $deleteQuery);

                    $query_session = "SELECT * FROM  `order_details` ORDER BY id DESC LIMIT 1";
                    $result_session = mysqli_query($conn, $query_session);
                    $counts = mysqli_fetch_object($result_session);
                    if ($counts->status == '0') {
                        $_SESSION['order_id'] = $counts->orderId;

                        echo "<script type='text/javascript'>
            window.location.replace('successful.php');
    </script>";
                    } else {
                        echo "Unable to proceed.";
                    }
                }
            }
        }
    } else {
        echo "
        <script type='text/javascript'>
            Swal.fire({
                title: '',
                text: 'Unable to proceed, Your cart is empty.',
                icon: 'error',
                showConfirmButton: false,
                timer: 3000
            }).then(function() {
                window.location.replace('checkout.php');
            });
        </script>";
    }

    ?>
</body>

</html>