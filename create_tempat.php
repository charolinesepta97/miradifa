<?php
include('session_admin.php');
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Create Tempat Miradifa ">
    <meta name="author" content="">

    <title>Miradifa - Create Tempat</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">

	 <!-- Owl-Carousel -->
  <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">

	<!-- Magnific Popup core CSS file -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<script src="js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
	<!--[if IE 9]>
		<script src="js/PIE_IE9.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/PIE_IE678.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>


<body id="home">
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


					<li class="menuItem"><a href="logout.php">Logout</a></li>

				</ul>
			</div>

		</div>
	</nav>
	<form action="create_tempat_konfirmasi.php" method="POST" enctype="multipart/form-data" class="form-inline">
	 <div id="contact" class="content-section-a">
<div class="container">
	<div class="row">
	<div class="col-md-6 col-md-offset-3 text-center wrap_title">
		<h2>Create Tempat</h2>
		<p class="lead" style="margin-top:0">Miradifa</p>
				</div>
				</div>
</div>

		<div class="container">
 <div class="row">
						<form role="form" action="" method="post" >
						<div class="col-md-3">
						</div>
		<div class="col-md-6">
			<form class="form-horizontal">
			<div class="form-group">

				<label for="InputID">ID</label>
				<div class="input-group">
								<input type="text" class="form-control" name="id" id="id" placeholder="Enter ID" required>
								<span class="input-group-addon"></span>
				</div>
			</div>

			<div class="form-group">
				<label for="InputTempat">Nama Tempat</label>
				<div class="input-group">
					<input type="text" class="form-control" id="nama_tempat" name="nama_tempat" placeholder="Enter Nama Tempat" required  >
					<span class="input-group-addon"></span>
				</div>
			</div>

			<div class="form-group">
				<label for="InputKota">Kota</label>
				<div class="input-group">
					<input type="text" class="form-control" id="kota" name="kota" placeholder="Enter Kota" required  >
					<span class="input-group-addon"></i></span>
				</div>
			</div>

			<div class="form-group">
				<label for="InputAlamat">Alamat</label>
				<div class="input-group">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat" required  >
					<span class="input-group-addon"></span>
				</div>
			</div>

			<div class="form-group">
				<label for="InputFasilitas">Fasilitas</label>
				<div class="input-group">
					<input type="text" class="form-control" id="fasilitas" name="fasilitas" placeholder="Enter Fasilitas" required  >
					<span class="input-group-addon"></span>
				</div>
			</div>

			<div class="form-group">
				<label for="InputRate">Rate</label>
				<div class="input-group">
					<input type="text" class="form-control" id="Rate" name="Rate" placeholder="Enter Rate" required  >
					<span class="input-group-addon"></span>
				</div>
			</div>

			<div class="form-group">
				<label for="InputMessage">Upload Foto 1</label>
				<div class="input-group">
					<input type="text" name="no_foto1" id="no_foto1" class="form-control" required placeholder="No Foto 1"></input>
					<span class="input-group-addon"></i></span>
				</div>
					<input type="file" name="image1">
			</div>

			<div class="form-group">
				<label for="InputMessage">Upload Foto 2</label>
				<div class="input-group">
					<input type="text" name="no_foto2" id="no_foto2" class="form-control" required placeholder="No Foto 2"></input>
					<span class="input-group-addon"></i></span>
				</div>
					<input type="file" name="image2">
			</div>

			<div class="form-group">
				<label for="InputMessage">Upload Foto 3</label>
				<div class="input-group">
					<input type="text" name="no_foto3" id="no_foto3" class="form-control" required placeholder="No Foto 3"></input>
					<span class="input-group-addon"></i></span>
				</div>
					<input type="file" name="image3">
				</br>
						<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary text-center pull-right" style="margin-right: 42.5%">
			</div>
	</form>
</div>

			<div class="col-md-3">
			</div>
 </div>

 </div>


	 </br>
	 </br>
</body>
</html>


<!--<body>
	<h1>Create tempat</h1>
    <hr>
    <b id="logout"><a href="logout.php">Log Out</a></b>

	<form action="create_tempat_konfirmasi.php" method="POST" enctype="multipart/form-data">
    <table>
            <tr>
                <td>Id Tempat</td><td>:</td><td><input type="text" name="id_tempat" placeholder="ID" maxlength="50"/></td>
            </tr>
            <tr>
                <td>Nama Tempat</td><td>:</td><td><input type="text" name="nama_tempat" placeholder="Nama Tempat" maxlength="50"/></td>
            </tr>
            <tr>
                <td>Kota</td><td>:</td><td><input type="text" name="kota" placeholder="Kota" maxlength="50"/></td>
            </tr>
            <tr>
                <td>Alamat</td><td>:</td><td><input type="text" name="alamat" placeholder="Alamat" maxlength="50"/></td>
            </tr>
            <tr>
                <td>Fasilitas</td><td>:</td><td><input type="text" name="fasilitas" placeholder="Fasilitas" maxlength="50"/></td>
            <tr/>
            <tr>
                <td>Rate</td><td>:</td><td><input type="text" name="rate" placeholder="Rate" maxlength="50"/></td>
            <tr/>
            <tr>
                <td>No Foto 1</td><td>:</td><td><input type="text" name="no_foto1" placeholder="No Foto" maxlength="50"/></td>
            <tr/>
            <tr>
            <td>Upload Foto 1</td><td>:</td><td>Pilih File : <input type="file" name="image1"></td>
            </tr>
            <tr>
                <td>No Foto 2</td><td>:</td><td><input type="text" name="no_foto2" placeholder="No Foto" maxlength="50"/></td>
            <tr/>
            <tr>
            <td>Upload Foto 2</td><td>:</td><td>Pilih File : <input type="file" name="image2"></td>
            </tr>
            <tr>
                <td>No Foto 3</td><td>:</td><td><input type="text" name="no_foto3" placeholder="No Foto" maxlength="50"/></td>
            <tr/>
            <tr>
            <td>Upload Foto 3</td><td>:</td><td>Pilih File : <input type="file" name="image3"></td>
            </tr>
        </table>
		<input type="submit" value="Submit"/><br/>
	</form>
</body>
</html>
