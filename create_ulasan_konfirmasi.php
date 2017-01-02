	<?php
	include('koneksi.php');
	include('session.php'); //perintah session harus selalu digunakan !!!!?>
	<!DOCTYPE>
	<html>
	<head>
		<title>Miradiva</title>

		<!-- Skrip CSS -->
		<link rel="stylesheet" href="style.css"/>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/general.css" rel="stylesheet">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link href="css/custom.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">

		<!-- Magnific Popup core CSS file -->
		<link rel="stylesheet" href="css/magnific-popup.css">

		<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	</head>
	<body>

		<!-- NavBar-->
		<nav class="navbar-default stuckMenu" role="navigation" style="position:fixed;top:0px">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="" href="#home">
						<img src="img/logo2.png" height="45px" style="margin-top:8px" id="logo"/>
					</a>
				</div>

				<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
					<ul class="nav navbar-nav">

						<li class="menuItem"><a href="registrasi.php">Sign Up</a></li>
						<li class="menuItem"><a href="form_login.php">Login</a></li>

					</ul>
				</div>

			</div>
		</nav>

		<div class="content-section-ss">
			<br><BR><BR>
	<br><BR><BR>

			<div class="container">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-3">






<?php

/*	$kenyamanan1 = $_POST['kenyamanan1'];
	$kenyamanan2 = $_POST['kenyamanan2'];
	$kenyamanan3 = $_POST['kenyamanan3'];
	$kenyamanan4 = $_POST['kenyamanan4'];
	if(
	!isset($kenyamanan1) ||
	!isset($kenyamanan2) ||
	!isset($kenyamanan3) ||
	!isset($kenyamanan4))
	{$kenyamanan1=0;$kenyamanan2=0;$kenyamanan3=0;$kenyamanan4=0;}*/

	$id_tempat = $_GET['id_tempat'];
	$bidang_landai = $_POST['bidang_landai'];
	$lebar_jalan = $_POST['lebar_jalan'];
	$toilet_khusus = $_POST['toilet_khusus'];
	$kenyamanan = $_POST['kenyamanan1'] + $_POST['kenyamanan2'] + $_POST['kenyamanan3'] + $_POST['kenyamanan4'];
	$komentar = $_POST['komentar'];


	if($bidang_landai == 0)
		{$bl = 0;}
	else if($bidang_landai == 1)
		{$bl = 0.5;}
	else
		{$bl = 1;}

	if($lebar_jalan == 1)
		{$lj = 0.3;}
	else if ($lebar_jalan == 2)
		{$lj = 0.5;}
	else
		{$lj = 1;}

	if($toilet_khusus == 0)
		{$tk = 0;}
	else
		{$tk = 1;}

	if($kenyamanan == 1)
		{$k = 0.5;}
	else if($kenyamanan == 2)
		{$k = 1;}
	else if($kenyamanan == 3)
		{$k = 1.5;}
	else
		{$k = 2;}

	$rate = $bl + $lj + $tk + $k;

	if(
		!isset($bidang_landai) &&
		!isset($lebar_jalan) &&
		!isset($toilet_khusus) &&
		!isset($kenyamanan) &&
		!isset($komentar))
	{
		echo '<div class="alert alert-danger">Data harus diisi lengkap !</div>';
	}
	else
	{
			//kodingnya ditaruh disini !!
		$ambil_row_review = mysqli_query($koneksi,"SELECT avg(rate) FROM review WHERE id_tempat='$id_tempat'");
		$row = mysqli_fetch_array($ambil_row_review);
		$update_rate_tempat = mysqli_query($koneksi,"UPDATE tempat SET rate='$row[0]' WHERE id_tempat='$id_tempat'");
		mysqli_query($koneksi,"INSERT INTO review VALUES('$id_tempat', '$login_session', '$bidang_landai', '$lebar_jalan', '$kenyamanan', '$toilet_khusus', '$komentar', '$rate')");
		echo '<div class="alert alert-success text-center"> Ulasan berhasil di upload </div>';
		echo '<a href="profil_user.php">Back to User Homepage</a>';

	}
	?>
		<br><BR><BR>
	<br><BR><BR>
	<br><BR><BR>	<br><BR><BR><br><BR><BR>

					</div>
				</div>
			</div>
		</div>
    <!-- JavaScript -->
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/script.js"></script>
		<!-- StikyMenu -->
		<script src="js/stickUp.min.js"></script>
		<script type="text/javascript">
		jQuery(function($) {
			$(document).ready( function() {
				$('.navbar-default').stickUp();

			});
		});

		</script>
		<!-- Smoothscroll -->
		<script type="text/javascript" src="js/jquery.corner.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
		new WOW().init();
		</script>
		<script src="js/classie.js"></script>
		<script src="js/uiMorphingButton_inflow.js"></script>
		<!-- Magnific Popup core JS file -->
		<script src="js/jquery.magnific-popup.js"></script>
	</body>
	</html>
