<!doctype html>
<!--<link href="coba.css" rel="stylesheet" type="text/css">
<?php
    include('koneksi.php');
session_start(); // Memulai Session
$error=''; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
	}
	else
	{
		// Variabel username dan password
		$email=$_POST['email'];
		$password=$_POST['password'];
		// Mencegah MySQL injection
		$email = stripslashes($email);
		$password = stripslashes($password);
		$email = mysqli_real_escape_string($koneksi,$email);
		$password = mysqli_real_escape_string($koneksi,$password);
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysqli_query($koneksi,"select * from user where password='$password' AND email='$email'");
		$query_role_admin = mysqli_query($koneksi,"select * from user where password='$password' AND email='$email' AND role='1'");
		$rows = mysqli_num_rows($query);
		$rows_role_admin = mysqli_num_rows($query_role_admin);
			if ($rows == 1 && $rows_role_admin == 0) {
				$_SESSION['login_user']=$email; // Membuat Sesi/session
				header("location: profil_user.php"); // Mengarahkan ke halaman profil
				//echo "<h1>Login Berhasil !</h1>";
				}
				else if($rows == 1 && $rows_role_admin == 1)
				{
				 $_SESSION['login_admin']=$email; // Membuat Sesi/session
				header("location: profil_admin.php");
				}
				else
				{
				//echo "Login gagal!";
				echo "<font color='#FF0000'>Username atau Password belum terdaftar</font>";
				}
				mysqli_close($koneksi); // Menutup koneksi
	}
}
?>
</html>
