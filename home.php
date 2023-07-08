<?php
include "dbconnect.php";
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
	<title style=>चतुर्थी-व्हेज</title>
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
	<!-- dropdown css  -->
	<link rel="stylesheet" href="css/dropdown.css">
	<!-- Fuentes de Google -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- Iconos -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./dropdown.css">
</head>

<body class="fixed-bottom-bar">

	<?php

	include 'header.php';
	include 'mobheader.php';

	?>
	<div class="offer-section">
		<div class="container">
			<div class="py-2 d-flex align-items-center">
				<div>
					<p class="h6 text-white">Lunch Time - 11:00 AM to 03:30 PM</p>
				</div>
				<div style="margin-left: auto;">
					<p class="h6 text-white">Dinner Time - 07:00 PM to 11:30 PM</p>
				</div>
			</div>
		</div>
	</div>
	<div class="osahan-home-page">
		<!-- carousel  -->



		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/pro4.jpg" alt="First slide" height=600; width=600;>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/pro2.jpg" alt="Second slide" height=600; width=600;>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/pro5.jpg" alt="Third slide" height=600; width=600;>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/pro1.jpg" alt="fourth slide" height=600; width=600;>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/pro3.jpg" alt="fifth slide" height=600; width=600;>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


		<!-- offer section slider -->

		<div class="container">
			<!-- Most popular -->
			<div class="py-1 title d-flex align-items-center mt-3">
				<h3 class="m-0">Choose Category </h3>
				<a class="font-weight-bold ml-auto" href="view_all.php">View All<i class="feather-chevrons-right"></i></a>
			</div>
			<!-- Most popular -->
			<div class="most_popular">
				<div class="row">
					<ul id="accordion" class="accordion">

						<?php

						include "dbconnect.php";

						$i = 1;

						$query_show = mysqli_query($conn, "SELECT * FROM category");

						while ($show = mysqli_fetch_array($query_show)) {

						?>
							<li> <a href="<?php echo $show['categoryLink']; ?>">
									<div class="link">
										<img alt="osahan" src="img/<?php echo $show['categoryImg']; ?>" class="mr-3 rounded-circle img-fluid" width="50px" height="50px"><?php echo $show['categoryName']; ?><i class="fa fa-chevron-right"></i>
									</div>
								</a>
							</li>
						<?php $i++;
						}
						?>
					</ul>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php
		include 'footer.php';
		include 'sidemenu.php';
		include 'bottommenu.php';
		include 'extra.php';
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
		<!-- dropdown  -->
		<script type="text/javascript" src="js/dropdown.js"></script>
		<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>