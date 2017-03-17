<?php  
	include 'koneksi.php';

	$id = $_GET['id'];

	$SQL = mysqli_query($conn, "DELETE FROM uji_coba WHERE id = '$id' ") or die(mysqli_error($conn));
	$row = mysqli_num_rows($SQL);

	if ($row > 0 ) {
		echo '<script>alert("data berhasil di hapus")</script>';
	} else {
		echo '<script>alert("data gagal di hapus")</script>';
	}
?>
<meta http-equiv="refresh" content="0;URL='index.php'" />