<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="Miradifa">
	<meta name="author" content="">

	<title>Miradifa-admin</title>
	<!--CSS-->
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
</head>
<body>
<?php
include('session_admin.php');
include('koneksi.php');
?>

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


					<li class="menuItem"><a href='create_tempat.php'>Add Tempat</a></li>



					<li class="menuItem"><a href="logout.php">Logout</a></li>
				</ul>
			</div>

		</div>
	</nav>

>


<?php
	$input_cari = @$_POST['cari_kota'];
	$cari = @$_POST['cari'];

	// jika tombol cari di klik
		if($cari)
		{

	    // jika kotak pencarian tidak sama dengan kosong
			if($input_cari != "")
				//kalo di klik
			{
	    	// cari berdasarkan nama kota

					$input_cari = @$_POST['cari_kota'];
					$cari = @$_POST['cari'];

				$sql = mysqli_query($koneksi, "SELECT * FROM tempat WHERE kota like '%$input_cari%' order by rate DESC") or die (mysqli_error());
				if(!$sql )
				{
					die('Gagal ambil data: ' . mysqli_error());
				}
			echo'
			</br></br>
				<div class="content-section-ss">
				</br>
				</br>
				<div class="container">
				<div class="row">
				<div class="col-md-3 col-sm-3"></div>
				<div class="col-md-6 col-sm-6" margin="0">
				<input data-wow-delay="0.75s" style="display:inline-block; " width="200" height="250" class="wow text-center fadeInDown form-control " type="text" name = "cari_kota" placeholder="Cari Kota" style="width:250px;" />
				</div>
				<div class="col-md-1" margin="0" padding="0">
				<input data-wow-delay="1.3s" type="submit"
				class="btn baten wow tada btn-embossed btn-primary"
				name = "cari" width="35" height="20" value="&nbsp &nbsp Cari &nbsp &nbsp " style="padding:3px;" margin="6px;" width="50px;"  />
				</div>
				</div>
				</br>
				<div  class="content-section-ss">
				<div class="container">
				<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h3>Hasil Pencarian</h3>
				<p class="lead" style="margin-top:0">Miradifa</p>
				</div>
				</div>
				';

				while($row = mysqli_fetch_array($sql))
				{

					//HASIL CARI
					echo'
					<div class="row">
					<div class="col-md-1">
					</div>

					<div class="col-md-1">
					</div>

					<div class="col-sm-9  block wow bounceIn">
					<div class="row">


					';

				//AMBIL FOTO

					echo '

					<div class="col-md-4 box-icon rotate">
					<a href=""> ';

					$id_tempat = $row['id_tempat'];
					$ambil_foto = mysqli_query($koneksi,"SELECT * FROM tempat_foto WHERE id_tempat ='$id_tempat' group by id_tempat");
					while($baris = mysqli_fetch_array($ambil_foto))
					{
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $baris['foto'] ).'" width="120"/>';
					}
					echo'</a>



					</div>';


				//AMBIL DATA
					echo '<div class="col-md-8 box-ct">'.

					'<a href="detail_tempat.php?id1='.$row['id_tempat'].'"> <h3> '.
					"{$row['nama_tempat']}".
					' </h3> </a>'.

					"<p> {$row['kota']}</br> ".
					"{$row['alamat']} <br> ".
					"{$row['fasilitas']} <br> ".
					"";
					$rating = $row['rate'];
					for($i=1; $i<=$rating; $i++)
					{
						echo "*";
					}
					echo "</p>";

					/*echo "Id Tempat :{$row['id_tempat']}  <br> ".
					"Creator :{$row['email']}  <br> ".
					"Nama Tempat : {$row['nama_tempat']} <br> ".
					"Kota : {$row['kota']} <br> ".
					"Alamat : {$row['alamat']} <br> ".
					"Fasilitas : {$row['fasilitas']} <br> ".
					"Rate :  ";
					$rating = $row['rate'];
					for($i=1; $i<=$rating; $i++)
					{
						echo "*";
					}*/
					echo '<br><br></div></div> <div class="col-md-1">
	                    </div></DIV></DIV>';



					echo "<br><hr/><br><br></div></div>";
				}
                echo"</div></div></div></div>";
			}
			else
			{
				$ambildata = mysqli_query($koneksi,"SELECT * FROM tempat WHERE kota like '%$input_cari%' order by rate DESC");
				if(!$ambildata )
				{
					die('Gagal ambil data: ' . mysqli_error());
				}
			echo'
			</br></br>
				<div class="content-section-ss">
				</br>
				</br>
				<div class="container">
				<div class="row">
				<div class="col-md-3 col-sm-3"></div>
				<div class="col-md-6 col-sm-6" margin="0">
				<input data-wow-delay="0.75s" style="display:inline-block; " width="200" height="250" class="wow text-center fadeInDown form-control " type="text" name = "cari_kota" placeholder="Cari Kota" style="width:250px;" />
				</div>
				<div class="col-md-1" margin="0" padding="0">
				<input data-wow-delay="1.3s" type="submit"
				class="btn baten wow tada btn-embossed btn-primary"
				name = "cari" width="35" height="20" value="&nbsp &nbsp Cari &nbsp &nbsp " style="padding:3px;" margin="6px;" width="50px;"  />
				</div>
				</div>
				</br>
				<div  class="content-section-ss">
				<div class="container">
				<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h3>Hasil Pencarian</h3>
				<p class="lead" style="margin-top:0">Miradifa</p>
				</div>
				</div>
				';

		//HASIL cari
			while($row = mysqli_fetch_array($ambildata))
				{
				//HASIL CARI
					echo'
					<div class="row">
					<div class="col-md-1">
					</div>

					<div class="col-md-1">
					</div>

					<div class="col-sm-9  block wow bounceIn">
					<div class="row">';

				//AMBIL FOTO

					echo '

					<div class="col-md-4 box-icon rotate">
					<a href=""> ';

					$id_tempat = $row['id_tempat'];
					$ambil_foto = mysqli_query($koneksi,"SELECT * FROM tempat_foto WHERE id_tempat ='$id_tempat' group by id_tempat");
					while($baris = mysqli_fetch_array($ambil_foto))
					{
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $baris['foto'] ).'" width="120"/>';
					}
					echo'</a>



					</div>';

				//AMBIL DATA
					echo '<div class="col-md-8 box-ct">'.

					'<a href="detail_tempat.php?id1='.$row['id_tempat'].'"> <h3> '.
					"{$row['nama_tempat']}".
					' </h3> </a>'.

					"<p> {$row['kota']}</br> ".
					"{$row['alamat']} <br> ".
					"{$row['fasilitas']} <br> ".
					"";
					$rating = $row['rate'];
					for($i=1; $i<=$rating; $i++)
					{
						echo "*";
					}
					echo "</p>";

					/*echo "Id Tempat :{$row['id_tempat']}  <br> ".
					"Creator :{$row['email']}  <br> ".
					"Nama Tempat : {$row['nama_tempat']} <br> ".
					"Kota : {$row['kota']} <br> ".
					"Alamat : {$row['alamat']} <br> ".
					"Fasilitas : {$row['fasilitas']} <br> ".
					"Rate :  ";
					$rating = $row['rate'];
					for($i=1; $i<=$rating; $i++)
					{
						echo "*";
					}*/
					echo '<br><br></div><div class="col-md-1">
	                    </div>';



					echo "<br><hr/><br><br></div>";

				}
				echo"</div></div>";
		}

		}
		else
		{
			//KONDISI AWAL (GA NYARI APA APA)
			echo '

			<div class="intro-header">
			<div class="main col-md-12 text-center abcen1">
			</br> </br>
			<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s"><span class="glyphicon glyphicon-apple"> </span>Miradifa</h1>


			<div class="col-md-3 col-sm-3"></div>
			<div class="col-md-6 col-sm-6" margin="0">
			<form action="" method="post">
			<input data-wow-delay="0.75s" style="display:inline-block; " width="200" height="250" class="wow text-center fadeInDown form-control " type="text" name = "cari_kota" placeholder="Cari Kota" style="width:250px;" />
			</div>

			<div class="col-md-1" margin="0" padding="0">
			<input data-wow-delay="1.3s" type="submit"
			class="btn baten wow tada btn-embossed btn-primary"
			name = "cari" width="35" height="20" value="&nbsp &nbsp Cari &nbsp &nbsp " style="padding:3px;" margin="6px;" width="50px;"  />
			</div>
			</form>


			';
			/*$ambildata = mysqli_query($koneksi,"SELECT * FROM tempat order by rate DESC");
			if(!$ambildata )
			{
				die('Gagal ambil data: ' . mysqli_error());
			}
			while($row = mysqli_fetch_array($ambildata))
			{
				echo "Id Tempat :{$row['id_tempat']}  <br> ".
				"Creator :{$row['email']}  <br> ".
				"Nama Tempat : {$row['nama_tempat']} <br> ".
				"Kota : {$row['kota']} <br> ".
				"Alamat : {$row['alamat']} <br> ".
				"Fasilitas : {$row['fasilitas']} <br> ".
				"Rate :  ";
				$rating = $row['rate'];
				for($i=1; $i<=$rating; $i++)
				{
					echo "*";
				}
				echo "<br><br>";
				echo "Foto : ";
				$id_tempat = $row['id_tempat'];
				$ambil_foto = mysqli_query($koneksi,"SELECT * FROM tempat_foto WHERE id_tempat ='$id_tempat'");
				while($baris = mysqli_fetch_array($ambil_foto))
				{
					echo '<img src="data:image/jpeg;base64,'.base64_encode( $baris['foto'] ).'"/>';
				}
				echo "<br><a href=''>Tambahkan Ulasan</a>";
				echo "<br><hr /><br><br>";
			}*/
		}
	/*
		// jika tombol cari di klik
		            if($cari)
		            {

		    // jika kotak pencarian tidak sama dengan kosong
		            	if($input_cari != "") {
		    // cari berdasarkan nama tempat
		            		$sql = mysqli_query($koneksi, "SELECT * FROM tempat WHERE kota like '%$input_cari%' order by rate DESC") or die (mysqli_error());
		            		if(!$sql )
		            		{
		            			die('Gagal ambil data: ' . mysqli_error());
		            		}
		            		while($row = mysqli_fetch_array($sql))
		            		{

		            			echo "Id Tempat :{$row['id_tempat']}  <br> ".
		            			"Creator :{$row['email']}  <br> ".
		            			"Nama Tempat : {$row['nama_tempat']} <br> ".
		            			"Kota : {$row['kota']} <br> ".
		            			"Alamat : {$row['alamat']} <br> ".
		            			"Fasilitas : {$row['fasilitas']} <br> ".
		            			"Rate :  ";
		            			$rating = $row['rate'];
		            			for($i=1; $i<=$rating; $i++)
		            			{
		            				echo "*";
		            			}
		            			echo "<br><br>";
		            			echo "Foto : ";
		            			$id_tempat = $row['id_tempat'];
		            			$ambil_foto = mysqli_query($koneksi,"SELECT * FROM tempat_foto WHERE id_tempat ='$id_tempat'");
		            			while($baris = mysqli_fetch_array($ambil_foto))
		            			{
		            				echo '<img src="data:image/jpeg;base64,'.base64_encode( $baris['foto'] ).'"/>';
		            			}
		            			echo "<br><a href='create_ulasan.php?id=".$row['id_tempat']."'>Tambahkan Ulasan</a>";
		            			echo "<br><hr /><br><br>";
		            			echo "KOMENTAR <br><br>";
		            			$ambil_komentar = mysqli_query($koneksi,"SELECT * FROM review WHERE id_tempat ='$id_tempat'");
		            			while($baris_komentar = mysqli_fetch_array($ambil_komentar))
		            			{
		            				echo "Nama = {$baris_komentar['email']}<br>";
		            				echo "Komentar = {$baris_komentar['komentar']}<br>";
		            				echo "<hr><br>";
		            			}
		            		}
		            	}
		            	else
		            	{
		            		$ambildata = mysqli_query($koneksi,"SELECT * FROM tempat order by rate DESC");
		            		if(!$ambildata )
		            		{
		            			die('Gagal ambil data: ' . mysqli_error());
		            		}
		            		while($row = mysqli_fetch_array($ambildata))
		            		{

		            			echo "Id Tempat :{$row['id_tempat']}  <br> ".
		            			"Creator :{$row['email']}  <br> ".
		            			"Nama Tempat : {$row['nama_tempat']} <br> ".
		            			"Kota : {$row['kota']} <br> ".
		            			"Alamat : {$row['alamat']} <br> ".
		            			"Fasilitas : {$row['fasilitas']} <br> ".
		            			"Rate :  ";
		            			$rating = $row['rate'];
		            			for($i=1; $i<=$rating; $i++)
		            			{
		            				echo "*";
		            			}
		            			echo "<br><br>";
		            			echo "Foto : ";
		            			$id_tempat = $row['id_tempat'];
		            			$ambil_foto = mysqli_query($koneksi,"SELECT * FROM tempat_foto WHERE id_tempat ='$id_tempat'");
		            			while($baris = mysqli_fetch_array($ambil_foto))
		            			{
		            				echo '<img src="data:image/jpeg;base64,'.base64_encode( $baris['foto'] ).'"/>';
		            			}
		            			echo "<br><a href='create_ulasan.php?id=".$row['id_tempat']."'>Tambahkan Ulasan</a>";
		            			echo "<br><hr /><br><br>";
		            			echo "KOMENTAR<br>";
		            			$ambil_komentar = mysqli_query($koneksi,"SELECT * FROM review WHERE id_tempat ='$id_tempat'");
		            			while($baris_komentar = mysqli_fetch_array($ambil_komentar))
		            			{
		            				echo "Nama = {$baris_komentar['email']}<br>";
		            				echo "Komentar = {$baris_komentar['komentar']}<br>";
		            				echo "<hr><br>";
		            			}
		            		}
		            	}
		            }
		            else
		            {

		            	echo'

							<div class="intro-header">
								<div class="main col-md-12 text-center abcen1">
								</br> </br>
								<h1 class="h1_home wow fadeIn" data-wow-delay="0.4s"><span class="glyphicon glyphicon-apple"> </span>Miradifa</h1>


								<div class="col-md-3 col-sm-3"></div>
								<div class="col-md-6 col-sm-6" margin="0">
									<input data-wow-delay="0.75s" style="display:inline-block; " width="200" height="250" class="wow text-center fadeInDown form-control " type="text" name = "cari_kota" placeholder="Cari Kota" style="width:250px;" />

								</div>
								<div class="col-md-1" margin="0" padding="0">
									<input data-wow-delay="1.3s" type="submit"
									class="btn baten wow tada btn-embossed btn-primary"
									name = "cari" width="35" height="20" value="&nbsp &nbsp Cari &nbsp &nbsp " style="padding:3px;" margin="6px;" width="50px;"  />
								</div>
							</form>




					            	';
					            	/*$ambildata = mysqli_query($koneksi,"SELECT * FROM tempat order by rate DESC");
					            	if(!$ambildata )
					            	{
					            		die('Gagal ambil data: ' . mysqli_error());
					            	}
					            	while($row = mysqli_fetch_array($ambildata))
					            	{
					            		echo "Id Tempat :{$row['id_tempat']}  <br> ".
					            		"Creator :{$row['email']}  <br> ".
					            		"Nama Tempat : {$row['nama_tempat']} <br> ".
					            		"Kota : {$row['kota']} <br> ".
					            		"Alamat : {$row['alamat']} <br> ".
					            		"Fasilitas : {$row['fasilitas']} <br> ".
					            		"Rate :  ";
					            		$rating = $row['rate'];
					            		for($i=1; $i<=$rating; $i++)
					            		{
					            			echo "*";
					            		}
					            		echo "<br><br>";
					            		echo "Foto : ";
					            		$id_tempat = $row['id_tempat'];
					            		$ambil_foto = mysqli_query($koneksi,"SELECT * FROM tempat_foto WHERE id_tempat ='$id_tempat'");
					            		while($baris = mysqli_fetch_array($ambil_foto))
					            		{
					            			echo '<img src="data:image/jpeg;base64,'.base64_encode( $baris['foto'] ).'"/>';
					            		}
					            		echo "<br><a href='create_ulasan.php?id=".$row['id_tempat']."'>Tambahkan Ulasan</a>";
					            		echo "<br><hr /><br><br>";
					            		echo "KOMENTAR<br>";
					            		$ambil_komentar = mysqli_query($koneksi,"SELECT * FROM review WHERE id_tempat ='$id_tempat'");
					            		while($baris_komentar = mysqli_fetch_array($ambil_komentar))
					            		{
					            			echo "Nama = {$baris_komentar['email']}<br>";
					            			echo "Komentar = {$baris_komentar['komentar']}<br>";
					            			echo "<hr><br>";
					            		}
					            	}*/

?>


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
