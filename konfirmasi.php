<?php
    //include berfungsi untuk mengkoneksikan kodingan dengan localhost
    include('koneksi.php');

    if( isset($_POST['first_name'])  &&
		isset($_POST['last_name'])  &&
		isset($_POST['email'])  &&
		isset($_POST['password'])     &&
        isset($_POST['repassword'])
      )
    {
        $first_name   = $_POST['first_name'];
		$last_name   = $_POST['last_name'];
		$email   = $_POST['email'];
        $password      = $_POST['password'];
        $repassword = $_POST['repassword'];
		$role = '0'; //role 0 adalah role user
    }
	else
	{
        //otomatis mengalihkan ke halaman pendaftaran jika terjadi undefined index
        header("location:registrasi.php");
    }

    if  (
        empty($first_name) ||  
        empty($last_name)    ||
		empty($email)    ||
		empty($password)    ||  
        empty($repassword)   
        )
    {
        //pernyataan yang keluar jika salah satu atau beberapa kemungkinan di atas terjadi
        echo "ada kolom yang belum diisi";
        echo "<a href='index.php'>Kembali ke halaman pendaftaran</a>";
    }
	else
	{
        //jika user telah memasukkan semua data yang dibutuhkan, koreksi kata sandi
        if($password == $repassword)
		{
            //jika kata sandi sama

            //mengambil informasi dari nama tabel "informasi_pengguna" pada kolom "namaPengguna"
            $ambilDataSql     = mysqli_query($koneksi,"SELECT * FROM user WHERE email = '$email'");
            //mengambil informasi dari seluruh kolom namaPengguna
            $cek_namapengguna = mysqli_num_rows($ambilDataSql);
            //mengecek ketersediaan identitas
            if($cek_namapengguna == 0){//jika nama pengguna tidak ditemukan/belum terdaftar
                //lakukan penambahan data
                mysqli_query($koneksi,"INSERT INTO user VALUES('$email','$first_name','$last_name','$password','$role')");
                echo "pendaftaran berhasil";
                echo "<a href='index.php'>Kembali ke halaman utama</a>";
            }
			else
			{
                echo "Pengguna sudah terdaftar";
                echo "<a href='index.php'>Kembali ke halaman utama</a>";
            }
        }
		else
		{
            //jika kata sandi tidak sama
            echo "kata sandi tidak sama";
            echo "<a href='registrasi.php'>Kembali ke halaman pendaftaran</a>";
        }
    }
?>