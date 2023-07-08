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
    <!-- shopping cart  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="fixed-bottom-bar">
    <?php
    include 'header.php';
    include 'mobheader.php';
    ?>
    <div class="osahan-checkout">

        <!-- cart  -->
        <div class="container position-relative">
            <div class="py-5 row">
                <div class="col-md-12 mb-3">
                    <div class="osahan-cart-item mb-3 rounded shadow-sm bg-white overflow-hidden">
                        <div class="osahan-cart-item-profile bg-white p-3">
                            <div class="shopping-cart">
                                <form action="checkout_form.php" method="POST">

                                    <div class="column-labels">
                                        <label class="product-image">Image</label>
                                        <label class="product-details">Product</label>
                                        <label class="product-price">Price</label>
                                        <label class="product-quantity">Quantity</label>
                                        <label class="product-removal">Remove</label>
                                        <label class="product-line-price">Total</label>
                                    </div>

                                    <div class="">
                                        <div class="column-labels">
                                            <label class="product-image">Image</label>
                                            <label class="product-details">Product</label>
                                            <label class="product-price">Price</label>
                                            <label class="product-quantity">Quantity</label>
                                            <label class="product-removal">Remove</label>
                                            <label class="product-line-price">Total</label>
                                        </div>

                                        <?php

                                        error_reporting(0);

                                        include "dbconnect.php";

                                        $id_cust = $_SESSION['login_user_id'];

                                        $i = 1;

                                        $retrieveQuery = "SELECT * FROM `cart` WHERE `customerId` = '$id_cust'";
                                        $result = mysqli_query($conn, $retrieveQuery);

                                        $gt = 0;

                                        if ($result && mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $serializedData = $row['products'];
                                                $unserializedProducts = unserialize($serializedData);

                                                // Accessing the individual values
                                                $productImg = $unserializedProducts['productImg'];
                                                $productName = $unserializedProducts['productName'];
                                                $productDesc = $unserializedProducts['productDesc'];
                                                $price = $unserializedProducts['price'];
                                                $quantity = $row['quantity'];
                                                $total = $price * $quantity;
                                                $gt = $gt + $total;

                                        ?>

                                                <div class="product">

                                                    <div class="product-image">
                                                        <img alt="Product" src="img/<?php echo $productImg; ?>" class="mr-3 rounded-circle img-fluid" width="41px" height="41px">
                                                    </div>

                                                    <div class="product-details">
                                                        <h6 class="mb-1 font-weight-bold"><?php echo $productName; ?></h6>
                                                        <p class="mb-0 small text-muted"><?php echo $productDesc; ?></p>
                                                    </div>

                                                    <div class="product-price"><?php echo $price; ?></div>

                                                    <div class="product-quantity">
                                                        <form action="update_cart.php?id=<?php echo $row['id']; ?>" method="POST">
                                                            <input type="number" name="quantity" onchange="this.form.submit()" value="<?php echo $row['quantity']; ?>" maxlength="2" min="1" max="10" size="1" id="quantity" />
                                                            <input type="hidden" name="itemId" value="<?php echo $row['id']; ?>" />
                                                        </form>
                                                    </div>

                                                    <div class="product-removal">
                                                        <a class="remove-product" href="remove_cart.php?id=<?php echo $row['id']; ?>">
                                                            Remove </a>
                                                    </div>
                                                    <div class="product-line-price" name="total" value=""><?php echo $total; ?> </div>
                                                </div>

                                        <?php $i++;
                                            }
                                            $subTotal = $gt;
                                            $tax = $subTotal * (5 / 100);
                                            $grantTotal = $subTotal + $tax;
                                        } else {
                                            echo "No Product Added.";
                                        }
                                        ?>

                                        <div class="accordion mb-3 rounded shadow-sm bg-white overflow-hidden" id="accordionExample">
                                            <div class="osahan-card bg-white border-bottom overflow-hidden">
                                                <div class="osahan-card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="d-flex p-3 align-items-center btn btn-link w-100" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Order Details <i class="feather-chevron-down ml-auto"></i></button>
                                                    </h2>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

                                                    <div class="osahan-card-body border-top p-3">
                                                        <h6 class="">Add Details</h6>

                                                        <?php

                                                        include "dbconnect.php";
                                                        $id = $_SESSION['login_id'];
                                                        $sql_cust = mysqli_query($conn, "SELECT * FROM customer_registration WHERE id='$id'");
                                                        $show_cust = mysqli_fetch_assoc($sql_cust);

                                                        ?>


                                                        <div class="form-row">
                                                            <div class="col-md-12 form-group">
                                                                <label class="form-label font-weight-bold small">Name:</label>
                                                                <input placeholder="Enter Name" type="text" name="name" class="form-control" value="<?php echo $show_cust['fullname']; ?>">
                                                            </div>

                                                            <div class="col-md-12 form-group">
                                                                <label class="form-label font-weight-bold small">Mobile No.:</label>
                                                                <input placeholder="Enter Mobile No." type="tel" name="mobile" class="form-control" value="<?php echo $show_cust['mobile']; ?>">
                                                            </div>

                                                            <div class="col-md-12 form-group">
                                                                <label class="form-label font-weight-bold small">Number of Persons</label>
                                                                <input placeholder="Number of Persons" type="number" min="1" name="personsNo" class="form-control" required>
                                                            </div>

                                                            <div class="col-md-12 form-group">
                                                                <label class="form-label font-weight-bold small">Dine-In-Time</label>
                                                                <input placeholder="Time" type="time" name="dineInTime" class="form-control" required>
                                                            </div>

                                                            <div class="col-md-12 form-group">
                                                                <label class="form-label font-weight-bold small">Remarks</label>
                                                                <input placeholder="Remarks" type="text" name="remark" class="form-control">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="bg-white p-3 clearfix border-bottom">

                                                    <div class="totals">
                                                        <div class="totals-item">
                                                            <label>Subtotal</label>
                                                            <div class="totals-value" id="cart-subtotal"><?php echo $subTotal; ?></div>
                                                        </div>
                                                        <div class="totals-item">
                                                            <label>Tax (5%)</label>
                                                            <div class="totals-value" id="cart-tax"><?php echo $tax; ?></div>
                                                        </div>
                                                        <div class="totals-item totals-item-total">
                                                            <label>Grand Total</label>
                                                            <div class="totals-value" id="cart-total"><?php echo $grantTotal; ?>
                                                                <input type="hidden" name="grantTotal" value="<?php echo $grantTotal; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 form-group">
                                                    <button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Place Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <script>
        /* Set rates + misc */
        var taxRate = 0.05;
        var shippingRate = 15.00;
        var fadeTime = 300;


        /* Assign actions */
        $('.product-quantity input').change(function() {
            updateQuantity(this);
        });

        $('.product-removal button').click(function() {
            removeItem(this);
        });


        /* Recalculate cart */
        function recalculateCart() {
            var subtotal = 0;

            /* Sum up row totals */
            $('.product').each(function() {
                subtotal += parseFloat($(this).children('.product-line-price').text());
            });

            /* Calculate totals */
            var tax = subtotal * taxRate;
            var shipping = (subtotal > 0 ? shippingRate : 0);
            var total = subtotal + tax;

            /* Update totals display */
            $('.totals-value').fadeOut(fadeTime, function() {
                $('#cart-subtotal').html(subtotal.toFixed(2));
                $('#cart-tax').html(tax.toFixed(2));
                $('#cart-shipping').html(shipping.toFixed(2));
                $('#cart-total').html(total.toFixed(2));
                if (total == 0) {
                    $('.checkout').fadeOut(fadeTime);
                } else {
                    $('.checkout').fadeIn(fadeTime);
                }
                $('.totals-value').fadeIn(fadeTime);
            });
        }


        /* Update quantity */
        function updateQuantity(quantityInput) {
            /* Calculate line price */
            var productRow = $(quantityInput).parent().parent();
            var price = parseFloat(productRow.children('.product-price').text());
            var quantity = $(quantityInput).val();
            var linePrice = price * quantity;

            /* Update line price display and recalc cart totals */
            productRow.children('.product-line-price').each(function() {
                $(this).fadeOut(fadeTime, function() {
                    $(this).text(linePrice.toFixed(2));
                    recalculateCart();
                    $(this).fadeIn(fadeTime);
                });
            });
        }


        /* Remove item from cart */
        function removeItem(removeButton) {
            /* Remove row from DOM and recalc cart total */
            var productRow = $(removeButton).parent().parent();
            productRow.slideUp(fadeTime, function() {
                productRow.remove();
                recalculateCart();
            });
        }
    </script>

    <?php

    include 'footer.php';
    include 'addressmodal.php';
    include 'sidemenu.php';
    include 'bottommenu.php';
    include 'extra.php';

    ?>
    <!-- modal delivery address -->

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slick Slider JS-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <!-- Sidebar JS-->
    <script type="text/javascript" src="vendor/sidebar/hc-offcanvas-nav.js"></script>
    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="js/osahan.js"></script>
    <!-- shopping cart js  -->
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./script.js"></script>


</body>

</html>