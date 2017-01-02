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
			<div class="container">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-3">




<body>
<?php
    include('koneksi.php');

        $email   = $_GET['email'];
		$first_name   = $_POST['first_name'];
		$last_name   = $_POST['last_name'];
        $password_lama  = $_POST['password_lama'];
        $password_baru = $_POST['password_baru'];
		$password_rebaru = $_POST['password_rebaru'];
		$cari_user = mysqli_query($koneksi, "select password from user where password = '$password_lama'");
		$row = mysqli_num_rows($cari_user);

if($row ==  1 && $password_baru == $password_rebaru)
{
      mysqli_query($koneksi,"UPDATE user SET first_name='$first_name', last_name='$last_name', password='$password_baru' WHERE email=$email");
	echo '<div class="alert alert-success text-center"> Edit berhasil</div>';
		echo "<a href='profil_user.php'>Back to Home Edit berhasil <a href='detail_user.php'>Kembali ke halaman profile</a>";  
}
else
{
	echo"Password Not Match <br>";
    echo "<a href='detail_user_edit.php'>Kembali ke halaman edit profile</a>";
}
?>

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