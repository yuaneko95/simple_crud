<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
	</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
		include 'koneksi.php';
		if (isset($_POST['simpan'])) {
			$error = array();
			$nama  = $_POST['nama'];
			$alamat = $_POST['alamat'];
			if (empty($nama)) {
				$error['nama'] = "nama tidak boleh kosong";
			} elseif (empty($alamat)) {
				$error['alamat'] = "alamat harus di isi";
			} else {
				$sql = mysqli_query($conn, "INSERT INTO uji_coba VALUES ('','$nama','$alamat')") or die(mysqli_error($conn));	
			}
			
		}
	?>

	<!-- form untuk input data -->
	<form action="#" method="POST">
		<table>
			<tr>
				<td>nama</td>
				<td>:</td>
				<td style="color: red"><input type="text" name="nama" value="" placeholder=""><?php echo ($error['nama']); ?></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td style="color: red"><input type="text" name="alamat" value="" placeholder=""><?php echo ($error['alamat']); ?></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</table>
	</form>
	<!-- akhir form untuk input data -->

	<!-- awal form untuk lihat data -->
	<form action="#" method="POST">
		<table border="1">
			<tr>
				<th><strong>NO</strong></th>
				<th><strong>NAMA</strong></th>
				<th><strong>ALAMAT</strong></th>
				<th colspan="2"><strong>ACTION</strong></th>
			</tr>
			<?php  
				include 'koneksi.php';
				$no = 0;
				$sql = mysqli_query($conn, "SELECT * FROM uji_coba") or die(mysqli_error($conn));
				while ( $ambil_data_dr_query = mysqli_fetch_assoc($sql)) {
					$no++
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $ambil_data_dr_query['nama']; ?></td>
				<td><?php echo $ambil_data_dr_query['alamat']; ?></td>
				<td><a href="formedit.php?&id=<?php echo $ambil_data_dr_query['id']; ?>" >edit</a></td>
				<td><a href="delete.php?&id=<?php echo $ambil_data_dr_query['id']; ?>" >hapus</a></td>
			</tr>
			<?php } ?> <!-- akhir while -->
		</table>
	</form>
	<!-- akhir form lihat data -->

	
</body>
</html>