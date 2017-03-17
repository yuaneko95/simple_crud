<?php  
	include 'koneksi.php';
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$sql = mysqli_query($conn, "UPDATE uji_coba SET nama = '$nama', alamat = '$alamat'") or die(mysqli_error($conn));
	header("location: index.php");
?>
<!-- <meta http-equiv="refresh" content="0;URL='index.php'" /> -->