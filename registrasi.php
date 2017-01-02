<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Sign Up Miradifa ">
    <meta name="author" content="">

    <title>Sign Up Miradifa</title>

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
<nav class="navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <a class="" href="form_login.php">
      <img src="img/logo2.png" height="45px" style="margin-top:8px" id="logo"/>
    </a>

    <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li class="menuItem"><a href="form_login.php">Login</a></li>
      </ul>
    </div>

  </div>
</nav>

    <body id="home">
    <form action="konfirmasi.php" method="POST">
    <div id="contact" class="content-section-a">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Daftar</h2>
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
						<label for="InputFirstName">First Name</label>
						<div class="input-group">
                    <input type="text" class="form-control" name="first_name" id="InputFirstName" maxlength="50" placeholder="Enter First Name" required>
      							<span class="input-group-addon"><!--<i class="glyphicon glyphicon-ok form-control-feedback"></i>--></span>
					  </div>
          </div>

          <div class="form-group">
						<label for="InputLastName">Last Name</label>
						<div class="input-group">
                    <input type="text" class="form-control" name="last_name" id="InputLastName" maxlength="50" placeholder="Enter Last Name" required>
      							<span class="input-group-addon"><!--<i class="glyphicon glyphicon-ok form-control-feedback"></i>--></span>
					  </div>
          </div>

					<div class="form-group">
						<label for="InputEmail">Your Email</label>
						<div class="input-group">
							<input type="email" class="form-control" id="InputEmail" name="email" maxlength="50" placeholder="Enter Email" required  >
							<span class="input-group-addon"><!--<i class="glyphicon glyphicon-ok form-control-feedback"></i>--></span>
						</div>
					</div>

					<div class="form-group">
						<label for="InputPassword">Password</label>
						<div class="input-group">
							<input type="password" name="password" id="InputPass" class="form-control" required placeholder="Enter Password" maxlength="15"></input>
							<span class="input-group-addon"><!--<i class="glyphicon glyphicon-ok form-control-feedback"></i>--></span>
						</div>
          </div>

          <div class="form-group">
						<label for="InputPassword">Confirm Password</label>
						<div class="input-group">
							<input type="password" name="repassword" id="InputConPass" class="form-control" required placeholder="Connfirm Password" maxlength="15"></input>
							<span class="input-group-addon"><!--<i class="glyphicon glyphicon-ok form-control-feedback"></i>--></span>
						</div>
          </div>

          </br>
        </br>
          <input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary text-center pull-right" style="margin-right: 42.5%">
        </br>
      </br>
        <p style="text-align:center"> Sudah Punya Akun? <a style="color:#27ad60" href="form_login.php">Login</a></p>
        </br>
        <p style="text-align:center"><a href="index.php" style="text-align:center"> <span class="glyphicon glyphicon-home " style="text-align:center"> </span>Kembali ke Halaman Utama</a></p>
        </br>

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

<!-- <html>
    <head>
        <title>Registrasi</title>
    </head>
    <body>
        <form action="konfirmasi.php" method="POST">
        <table>
            <tr>
                <td>First Name</td><td>:</td><td><input type="text" name="first_name" placeholder="First Name" /></td>
            </tr>
            <tr>
                <td>Last Name</td><td>:</td><td><input type="text" name="last_name" placeholder="Last Name" maxlength="50"/></td>
            </tr>
            <tr>
                <td>E-mail</td><td>:</td><td><input type="text" name="email" placeholder="E-mail" maxlength="50"/></td>
            </tr>
            <tr>
                <td>Password</td><td>:</td><td><input type="password" name="password" placeholder="Kata Sandi Anda" maxlength="15"/></td>
            <tr/>
            <tr>
                <td>Ulangi Password</td><td>:</td><td><input type="password" name="repassword" placeholder="ulangi kata sandi" maxlength="15"/></td>
            <tr/>
        </table>
        <input type="submit" value="Submit"/><br/>

        </form>
    </body>
</html>
-->
