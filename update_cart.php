
<?php
include "dbconnect.php";

if (isset($_POST['itemId']) && isset($_POST['quantity'])) {
    $itemId = $_POST['itemId'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE `cart` SET `quantity` = '$quantity' WHERE `id` = '$itemId'";
    $execute = mysqli_query($conn, $sql);

    if ($execute) {
        echo "<script type='text/javascript'>
            window.history.back();
        </script>";
    } else {
        echo "Error updating cart quantity: " . mysqli_error($conn);
    }
}
?>