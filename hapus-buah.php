<?php
include 'koneksi-buah.php';
$query="DELETE FROM jenis_buah where id_buah='$id_buah'";
mysqli_query($koneksi, $query);
header("location:backend.php");
?>