<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
</head>

<body>
    <?php
    include("dbconnect.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM cart WHERE id= '$id' ";
    $execute = mysqli_query($conn, $sql);

    if ($execute) {
        echo "
        <script type='text/javascript'>
            Swal.fire({
                title: '',
                text: 'Product removed from cart.',
                icon: 'success',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location.replace('checkout.php');
            });
        </script>";
    } else {
        echo "
        <script type='text/javascript'>
            Swal.fire({
                title: '',
                text: 'Unable to remove product.',
                icon: 'error',
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location.replace('checkout.php');
            });
        </script>";
    }
    ?>
</body>

</html>