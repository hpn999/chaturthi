<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>

<body>
    <?php
    include("dbconnect.php");
    session_start();
    $usermobile = $_SESSION['login_mobile'];
    if (!$usermobile) {
        header('location: login.php');
        exit();
    }
    ?>

    <?php
    include("dbconnect.php");

    $id_cust = $_SESSION['login_id'];
    $id_prod = $_GET['id'];

    $sql = "SELECT * FROM products WHERE id= '$id_prod'";
    $execute = mysqli_query($conn, $sql);
    $show = mysqli_fetch_assoc($execute);

    $sql_cust = "SELECT * FROM customer_registration WHERE id= '$id_cust'";
    $execute_cust = mysqli_query($conn, $sql_cust);
    $show_cust = mysqli_fetch_assoc($execute_cust);

    $customerId = $show_cust['user_id'];
    $productImg = $show['productImg'];
    $productName = $show['productName'];
    $productDesc = $show['productDesc'];
    $price = $show['price'];
    $quantity = 1;

    $products = array(
        'productImg' => $productImg,
        'productName' => $productName,
        'productDesc' => $productDesc,
        'price' => $price,
        'quantity' => $quantity,
        'total' => $quantity * $price,
    );

    $products = serialize($products);

    // Check if the product already exists in the cart
    $duplicateQuery = "SELECT * FROM cart WHERE customerId = '$customerId' AND products = '$products'";
    $duplicateResult = mysqli_query($conn, $duplicateQuery);

    if (mysqli_num_rows($duplicateResult) > 0) {
        echo "
        <script type='text/javascript'>
            Swal.fire({
                title: '',
                text: 'Product already exists in cart.',
                icon: 'warning',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.history.back();
            });
        </script>";
    } else {
        $query = "INSERT INTO `cart` (`customerId`, `products`) VALUES ('$customerId', '$products')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "
            <script type='text/javascript'>
                Swal.fire({
                    title: '',
                    text: 'Product added to cart.',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.history.back();
                });
            </script>";
        } else {
            echo "
            <script type='text/javascript'>
                Swal.fire({
                    title: '',
                    text: 'Unable to add product.',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.history.back();
                });
            </script>";
        }
    }
    ?>
</body>

</html>