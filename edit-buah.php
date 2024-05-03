<?php
include 'koneksi-buah.php';
$nama_buah = $_POST['nama_buah'];
$nama_latin = $_POST['nama_latin'];
$query="UPDATE jenis_buah SET nama_buah='$nama_buah', nama_latin='$nama_latin' WHERE $id_buah='$id_buah'";
mysqli_query($koneksi, $query);
header("location:backend.php");
?>