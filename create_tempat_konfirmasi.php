<?php
	include('koneksi.php');
    include('session_admin.php'); //perintah session harus selalu digunakan !!!!
?>
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

					<a class="" href="profil_admin.php">
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

<?php
	$image1 = $_FILES['image1']['tmp_name'];
	$no_foto1 = $_POST['no_foto1'];

	$image2 = $_FILES['image2']['tmp_name'];
	$no_foto2 = $_POST['no_foto2'];

	$image3 = $_FILES['image3']['tmp_name'];
	$no_foto3 = $_POST['no_foto3'];

	$id_tempat = $_POST['id_tempat'];
	$nama_tempat = $_POST['nama_tempat'];
	$kota = $_POST['kota'];
	$alamat = $_POST['alamat'];
	$fasilitas = $_POST['fasilitas'];
	$rate = $_POST['rate'];

	if(
	!isset($image1) &&
	!isset($no_foto1) &&
	!isset($image2) &&
	!isset($no_foto2) &&
	!isset($image3) &&
	!isset($no_foto3) &&
	!isset($id_tempat) &&
	!isset($nama_tempat) &&
	!isset($kota) &&
	!isset($alamat) &&
	!isset($fasilitas) &&
	!isset($rate))
	{
		echo 'Data harus diisi lengkap !';
	}
	else
	{
		$foto1 		= addslashes(file_get_contents($_FILES['image1']['tmp_name']));
		$nama_foto1	= addslashes($_FILES['image1']['name']);
		$ukuran_foto1	= getimagesize($_FILES['image1']['tmp_name']);

		$foto2		= addslashes(file_get_contents($_FILES['image2']['tmp_name']));
		$nama_foto2	= addslashes($_FILES['image2']['name']);
		$ukuran_foto2	= getimagesize($_FILES['image2']['tmp_name']);

		$foto3		= addslashes(file_get_contents($_FILES['image3']['tmp_name']));
		$nama_foto3	= addslashes($_FILES['image3']['name']);
		$ukuran_foto3	= getimagesize($_FILES['image3']['tmp_name']);

		if($ukuran_foto1 == false || $ukuran_foto2 == false || $ukuran_foto3 == false)
		{
			echo 'Ada file yang bukan format foto !!';
		}
		else
		{
			//kodingnya ditaruh disini !!
			mysqli_query($koneksi,"INSERT INTO tempat VALUES('$id_tempat', '$login_session', '$nama_tempat', '$kota', '$alamat', '$fasilitas', '$rate')");
			mysqli_query($koneksi,"INSERT INTO tempat_foto VALUES('$no_foto1', '$foto1', '$nama_foto1', '$id_tempat')");
			mysqli_query($koneksi,"INSERT INTO tempat_foto VALUES('$no_foto2', '$foto2', '$nama_foto2', '$id_tempat')");
			mysqli_query($koneksi,"INSERT INTO tempat_foto VALUES('$no_foto3', '$foto3', '$nama_foto3', '$id_tempat')");
			echo 'Gambar berhasil di upload';
			echo '<a href="profil_admin.php">Back to Admin Homepage</a>';
		}
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
