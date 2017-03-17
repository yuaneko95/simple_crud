<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		include 'koneksi.php';
		$id = $_GET['id'];
		$sql = mysqli_query($conn, "SELECT * FROM uji_coba WHERE id = '$id'");
		$temp = mysqli_fetch_assoc($sql);
	?>
	<form action="edit.php" method="POST">
		<table>
			<tr>
				<td>nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $temp['nama']; ?>" placeholder=""></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $temp['alamat']; ?>" placeholder=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="" value="simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>