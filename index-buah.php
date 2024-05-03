<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>taman buah pakam</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<script src="https://unpkg.com/feather-icons"></script>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar">
	<a href="#" class="navbar-logo">taman buah pakam</a>
	<div class="navbar-nav">
		<a href="#home">home</a>
		<a href="#about">tentang kami</a>
		<a href="#fasilitas">fasilitas</a>
		<a href="#contact">kontak</a>
		<a href="#db_buah">jenis buah</a>
	</div>
</nav>

<section class="hero" id="home">
	<main class="content">
		<h1 color>SELAMAT DATANG DI WEBSITE TAMAN BUAH</h1>
		<p>TEMPATNYA BERSANTAI DI HARI WEEKEND</p>
	</main>
	
</section>
<section id="about" class="about">
	<h2>TENTANG KAMI</h2>
</section>
<section id="fasilitas" class="fasilitas">
	<h2>fasilitas</h2>
	<div class="row">
		<div class="fasilitas-card">
			<img src="IMG/taman3.jpg" alt="taman bermain" class="fasilitas-card-img">
			<h3 class="fasilitas-card-title">-taman bermain-</h3>
		</div>
	</div>
</section>
<section id="contact" class="contact">
	<h2>kontak kami</h2>
	<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.18600287737!2d98.86726647416121!3d3.5445290464297097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313dbe6d8de983%3A0x223540e117689e5d!2sTaman%20Buah%20Lubuk%20Pakam!5e0!3m2!1sid!2sid!4v1714638263500!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<i data-feather="instragram"></i>
	<i data-feather="mail"></i>
	<i data-feather="phone"></i>
	</div>
</section>

<section>
	<h2>jenis buah</h2>
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
			</tr>";
			$no++;}
	?>
</table>
</section>

<script>
      feather.replace();
</script>
</body>
</html>