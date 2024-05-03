<!doctype html>
<html>
<title>jenis buah</title>
<head>
	<body>
<h2>jenis buah</h2>
<p>
	<a href='form-input-buah.php'>tambah data</a>
</p>
<table border="1">
	<tr>
		<th>no</th><th>nama_buah</th><th>nama_latin</th>
	</tr>
	<?php
	include 'koneksi-buah.php';
	$jenis_buah = mysqli_query($koneksi, "SELECT * FROM jenis_buah");
		$no=1;
		foreach($jenis_buah as $row){
			echo"<tr>
			<td>$no</td>
			<td>".$row['nama_buah']."</th>
			<td>".$row['nama_latin']."</td>
			<td><a href='form-edit-buah1.php?id_buah='>edit</a>
			<td><a href='hapus-buah.php?id_buah'>delete</a>
			</td>
			</tr>";
			$no++;
		}
		?>
		</table>
	</body>
</head>
</html>