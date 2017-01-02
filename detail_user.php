<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Miradifa</title>

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

<body>

  <?php
  include('session.php');
  include('koneksi.php');
  $profile_user = mysqli_query($koneksi,"select * from user where email = '$login_session'");
  $row2 = mysqli_fetch_array($profile_user);
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

        <a class="" href="profil_user.php">
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
  <!--CONTENT-->
  <div class="contennt-section-ss">
    <br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
          <h1>Profile User</h1>
          <hr>
          <div class="form-group">
            <label>Email :</label> <label><?php echo $row2['email']; ?></label>
          </div>
          <div class="form-group">
            <label>First Name :</label> <label><?php echo $row2['first_name']; ?></label>
          </div>
          <div class="form-group">
            <label>Last Name :</label> <label><?php echo $row2['last_name']; ?></label>
          </div>
          <a class="btn baten wow tada btn-embossed btn-primary" href="detail_user_edit.php">Edit Profile</a>
        </div></div></div></div>
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
