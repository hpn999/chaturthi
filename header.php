<header class="section-header">
    <section class="header-main shadow-sm bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-1">
                    <a href="home.php" class="brand-wrap mb-0">
                        <img src="img/logo-green.png" alt="" style="width: 150px; height: auto; max-height: 100%; margin-left: -90px;">
                    </a>
                </div>
                <div class="col-3 d-flex align-items-center m-none">
                    <div class="mr-3">
                        <div class="text-dark d-flex align-items-center justify-content-between py-3">
                            <a href="https://goo.gl/maps/PtMAuVCRfSwYo5qg7" target="_blank" class="text-dark d-flex align-items-center py-3">
                                <div><i class="feather-map-pin mr-2 bg-light rounded-pill p-2 icofont-size"></i></div>
                                <div style="width: 230px;">
                                    <p class="m-0">Solapur-Pune Hwy, Kurkumbh, Maharashtra, 413802.</p>
                                </div>
                            </a>
                            <div class="text-dark d-flex align-items-center justify-content-end py-3">
                                <div><i class="feather-phone mr-2 bg-light rounded-pill p-2 icofont-size"></i></div>
                                <div>
                                    09393072424
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-menu p-0 drop-loc" aria-labelledby="">
                            <div class="osahan-country">
                                <div class="search_location bg-primary p-3 text-right">
                                    <div class="input-group rounded shadow-sm overflow-hidden">
                                        <div class="input-group-prepend">
                                            <button class="border-0 btn btn-outline-secondary text-dark bg-white btn-block"><i class="feather-search"></i></button>
                                        </div>
                                        <input type="text" class="shadow-none border-0 form-control" placeholder="Enter Your Location">
                                    </div>
                                </div>
                                <div class="p-3 border-bottom">
                                    <a href="home.php" class="text-decoration-none">
                                        <p class="font-weight-bold text-primary m-0"><i class="feather-navigation"></i> New York, USA</p>
                                    </a>
                                </div>
                                <div class="filter">
                                    <h6 class="px-3 py-3 bg-light pb-1 m-0 border-bottom">Choose your country</h6>
                                    <div class="custom-control  border-bottom px-0 custom-radio">
                                        <input type="radio" id="customRadio1" name="location" class="custom-control-input">
                                        <label class="custom-control-label py-3 w-100 px-3" for="customRadio1">Afghanistan</label>
                                    </div>
                                    <!-- Other location options -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="d-flex align-items-center justify-content-end pr-5 position-relative">
                        <a href="search.php" class="widget-header mr-4 text-dark">
                            <div class="icon d-flex align-items-center">
                                <i class="feather-search h6 mr-2 mb-0"></i> <span>Search</span>
                            </div>
                        </a>
                        <a href="offers.php" class="widget-header mr-4 text-white btn bg-primary m-none">
                            <div class="icon d-flex align-items-center">
                                <i class="feather-disc h6 mr-2 mb-0"></i> <span>Offers</span>
                            </div>
                        </a>
                        <?php

                        include "dbconnect.php";
                        $id = $_SESSION['login_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM customer_registration WHERE id='$id'");
                        $show = mysqli_fetch_assoc($sql);
                        $user = $show['user_id'];

                        $query_show_cart = mysqli_query($conn, "SELECT COUNT(*) AS cart_count FROM `cart` WHERE customerId='$user'");
                        $show_cart = mysqli_fetch_assoc($query_show_cart);

                        $cart_count = $show_cart['cart_count'];


                        ?>

                        <div class="dropdown mr-4 m-none">
                            <a href="#" class="dropdown-toggle text-dark py-3 d-block" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/cust.png" alt="" class="img-fluid rounded-circle header-user mr-2 header-user"><?php echo $show['fullname']; ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="profile.php">My account</a>
                                <a class="dropdown-item" href="faq.php">Delivery support</a>
                                <a class="dropdown-item" href="contact-us.php">Contact us</a>
                                <a class="dropdown-item" href="terms.php">Terms of use</a>
                                <a class="dropdown-item" href="privacy.php">Privacy policy</a>
                                <a class="dropdown-item" href="customerlogout.php">Logout</a>
                            </div>
                        </div>
                        <a href="checkout.php" class="widget-header mr-4 text-dark">
                            <div class="icon d-flex align-items-center position-relative">
                                <i class="feather-shopping-cart h6 mr-2 mb-0"></i>
                                <span>Cart</span>
                                <span class="badge bg-warning badge-number mb-3"><?php echo $cart_count; ?></span>
                            </div>
                        </a>
                        <a class="toggle" href="#">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>