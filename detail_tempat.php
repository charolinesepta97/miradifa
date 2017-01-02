s<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
include('session.php');
include('koneksi.php');

 ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="Sign Up Miradifa ">
  <meta name="author" content="">

  <title>Miradifa - Detail Tempat</title>

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





 <?php

    if (!isset($login_session))//KLO GA LOGIN
    {
      echo'
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

      <li class="menuItem"><a><?php echo $login_session; ?></a></li>
      <li class="menuItem"><a href="registrasi.php">Sign Up</a></li>
      <li class="menuItem"><a href="form_login.php">Login</a></li>
      </ul>
      </div>

      </div>
      </nav>';

    }
    else
    {
      echo'
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
      <li class="menuItem"><a><?php echo $login_session; ?></a></li>
      <li class="menuItem"><a href="profil_user.php">Profil Anda</a></li>
      <li class="menuItem"><a href="logout.php">Logout</a></li>
      </ul>
      </div>

      </div>
      </nav>
      ';
    }
  ?>


          <body>
            <?php echo $login_session; ?>
            <?php


            $id1 = $_GET['id1'];
            $detail_tempat = mysqli_query($koneksi,"select * from tempat where id_tempat = '$id1'");
            $row2 = mysqli_fetch_array($detail_tempat);

            ?>

            <div id ="useit" class="content-section-a">

              <div class="container">


               <div class="row">
                <div class="col-sm-8  wow fadeInLeftBig"  data-animation-delay="200">
                  <h3 class="section-heading">Detail Tempat</h3>
                  <!--<div class="sub-title lead3">Ini nama tempat</div>-->
                  <p class="lead">
                    Nama Tempat :
                    <?php echo $row2['nama_tempat']; ?>
                  </p>
                  <p class="lead">
                    Alamat :
                    <?php echo $row2['alamat']; ?>
                  </p>
                  <p class="lead">
                    <?php echo $row2['kota']; ?>
                  </p>
                  <p class="lead">
                    <?php echo $row2['fasilitas']; ?>
                  </p>
                  <p class="lead">
                    <?php echo $row2['rate']; ?>
                  </p>

                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-1">
                 <?php echo'<a href="create_ulasan.php?id1='.$row2['id_tempat'].'" class="btn wow tada btn-embossed btn-primary text-center pull-right" style="margin-right: 42.5%">
                 Tambah Review
                  </a>

                 ' ?>


                </div>
              </div>
              <div class="row">
                <div class="row wow bounceInUp" >
                  <div id="owl-demo" class="owl-carousel">

                   <?php
                   $ambil_foto = mysqli_query($koneksi,"SELECT * FROM tempat_foto WHERE id_tempat ='$id1'");
                   while($row2 = mysqli_fetch_array($ambil_foto))
                   {
                     echo'<div class="item">';
                     echo '<img class="img-responsive " width="120" src="data:image/jpeg;base64,'.base64_encode( $row2['foto'] ).'"/>';
                     echo'</div>';
                     echo'<div class="item">';
                     echo '<img class="img-responsive " width="120" src="data:image/jpeg;base64,'.base64_encode( $row2['foto'] ).'"/>';
                     echo'</div>';
                   }?>
                 </div>
               </div>
             </div>
                   <?php

                   echo "KOMENTAR <br><br>";
                   $ambil_komentar = mysqli_query($koneksi,"SELECT * FROM review WHERE id_tempat ='$id1'");
                   while($baris_komentar = mysqli_fetch_array($ambil_komentar))
                   {
                     echo'<div class="container"><div class="row"> <div class=col-md-3></div><div class="col-md-6>"';
                     echo "Nama = {$baris_komentar['email']}<br> <br>";
                     echo "Komentar = {$baris_komentar['komentar']}<br>";
                     echo "<hr><br></div></div></div>";
                   }
                   ?>

                 </div>
               </div>
             </div>
           </div>
         </br>

       </div>
       <!-- /.container -->
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
   <?php
   include('koneksi.php');
   $id1 = $_GET['id1'];
   $detail_tempat = mysqli_query($koneksi,"select * from tempat where id_tempat = '$id1'");
   $row2 = mysqli_fetch_array($detail_tempat);
   ?>
   </html>
