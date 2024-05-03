<?php
include'koneksi-buah.php';
$id_buah = $_GET['id_buah'];
$jenis_buah = mysqli_query($koneksi, "SELECT * FROM jenis_buah where id_buah='$id_buah'");
$row = mysqli_fetch_array($jenis_buah);
?>
<!DOCTYPE html>
<html>
<head>
	<title>jenis buah</title>
</head>
<body>
<form method="post" action="edit-buah.php">
	<input type="hidden" value="<?php echo $row ['id_buah']; ?>" name="id_buah">
	<table>
		<tr><td>nama_buah</td><td><input type="text" value="<?php echo $row['nama_buah'];?>"name="nama_buah"></td></tr>
		<tr><td>nama_latin</td><td><input type="text" value="<?php echo $row['nama_latin'];?>"name="nama_latin"></td></tr>
	</table>
<tr><td colspan="2"><button type="submit" value="simpan-buah">simpan perubahan</button>
	<a href="backend.php">Kembali</a></td></tr>
</form>
</body>
</html>