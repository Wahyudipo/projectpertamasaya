<?php
include 'koneksi-buah.php';
$nama_buah = $_POST['nama_buah'];
$nama_latin = $_POST['nama_latin'];
$query="INSERT INTO jenis_buah SET nama_buah='$nama_buah', nama_latin='$nama_latin'";
mysqli_query($koneksi, $query);
header("location:backend.php");
?>