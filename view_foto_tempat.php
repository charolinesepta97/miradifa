<?php
include('koneksi.php');
    if(isset($_GET['image_id'])) {
        $sql = "SELECT * FROM tempat_foto WHERE no_foto=" . $_GET['image_id'];
  		$result = mysqli_query($koneksi, "$sql")
        or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error());
 		$row = mysql_fetch_array($result);
        header("Content-type: " . $row["imageType"]);
        echo $row['image'];
 }
 mysql_close($koneksi);
?>