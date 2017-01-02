<?php
include('koneksi.php');
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_admin'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql = mysqli_query($koneksi,"select email from user where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
	mysqli_close($koneksi); // Menutup koneksi
	header('Location: index.php'); // Mengarahkan ke Home Page
}
?>