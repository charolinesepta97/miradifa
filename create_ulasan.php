<!DOCTYPE>
<HTML>
  <HEAD>
        <title>Miradiva</title>

    <!-- Skrip CSS -->
    <link rel="stylesheet" href="style.css"/>
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
<?php include('session.php'); ?>

<body>
  <!--NAVBAR-->
    <nav class="navbar-default stuckMenu " role="navigation" style="position:fixed;top:0px">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

                  <a class="" href="profil_user.php">
                      <img src="img/logo2.png" height="45px" style="margin-top:8px" id="logo"/>
                  </a>
              </div>

              <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                  <ul class="nav navbar-nav">
                      <li class="menuItem"><a><?php echo $login_session; ?></a></li>
                      <li class="menuItem"><a href="detail_user.php">Profil Anda</a></li>
                      <li class="menuItem"><a href="logout.php">Logout</a></li>
                  </ul>
              </div>
          </div>
    </nav>
  <div class="content-section-ss">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center wrap-title">
        </br>
      </br>
    </br>
          <h1>Create Ulasan</h1>
        </div>
    <hr>
    </br><br>
    </br><br>
    <?php
    include ('koneksi.php');
    $id = $_GET['id1'];
    ?>
  <form action="create_ulasan_konfirmasi.php?id_tempat=<?php echo $id; ?>" method="POST" enctype="multipart/form-data" class="form-inline">
    <div class="col-md-6">
    <table class="table" style="width:100%">
      <tr>
        <td >Bidang Landai</td>
        <td>: </td>
        <td><input  type="radio" name="bidang_landai" value="0">Tidak Ada</td>
        <td><input  type="radio" name="bidang_landai" value="1">Ada, kurang memadai </td>
        <td><input  type="radio" name="bidang_landai" value="2">Ada, memadai </td>

      </tr>
      <tr>
        <td>Lebar Jalan</td>
        <td>:</td>
        <td>
          <input  type="radio" name="lebar_jalan" value="1">Sempit</td>
        <td>
          <input  type="radio" name="lebar_jalan" value="2">Cukup Lebar</td>
        <td>
          <input  type="radio" name="lebar_jalan" value="3">Lebar </td>
      </tr>
      <tr>
        <td>Toilet Khusus Difabel</td>
        <td>:</td>
        <td>
          <input  type="radio" name="toilet_khusus" value="1">Ada </td>
        <td>
          <input  type="radio" name="toilet_khusus" value="0">Tidak Ada
        </td>
      </tr>
      <tr>
        <td width="35%">Fasilitas</td>
        <td width="5%">:</td>
        <td width="1o%">
          <input type="checkbox" name="kenyamanan1" value="1">Bantuan karyawan</td>
        <td width="15%">
          <input type="checkbox" name="kenyamanan2" value="1">Jalur khusus </td>
        <td width="15%">
          <input type="checkbox" name="kenyamanan3" value="1">Ruang tunggu khusus</td>
        <td width="15%">
          <input type="checkbox" name="kenyamanan4" value="1">Petunjuk fasilitas </td>
        <td>
        </td>
      </tr>
      <tr>
        <td>Komentar</td>
        <td>:</td>
        <td colspan="4">
          <textarea name="komentar" id="komentar" placeholder="Komentar" class="form-control" rows="3" cols="100" maxlength="50" required=""></textarea>
          <!--<textarea type="text" name="komentar" placeholder="Komentar" maxlength="50"></textarea>-->
        </td>
      </tr>
    </table>
<button type="submit" name="submit" id="submit" class="btn wow tada btn-embossed btn-primary pull-right animated animated" style="visibility: visible; animation-name: tada;">Submit</button>
    <!--<input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right animated animated" style="visibility: visible; animation-name: tada;">
    --></div>
  </form>
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
          $('.navbar-default').stickUp(); });});
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
