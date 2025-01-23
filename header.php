<?php
	include 'koneksi.php';
	date_default_timezone_set("Asia/Jakarta");

	$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
	$d = mysqli_fetch_object($identitas);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
	<title>Website <?= $d->nama ?></title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet"href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<!-- box menu mobile -->
	<div class="box-menu-mobile" id="mobileMenu">
		<span onclick="hideMobileMenu()">Close</span>
		<ul class="text-center">
			<li><a href="index.php">Beranda</a></li>
			<li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
			<li><a href="jurusan.php">Jurusan</a></li>
			<li><a href="galeri.php">Galeri</a></li>
			<li><a href="informasi.php">Informasi</a></li>
			<li><a href="kontak.php">Kontak</a></li>
			<li><a href="login.php">login</a></li>
		</ul>
	</div>

	<!-- bagian header -->
	<div class="header">

		<div class="container">

			<div class="header-logo">
				<img src="uploads/identitas/<?= $d->logo ?>" width="50">
				<h2><a href="index.php"><?= $d->nama ?></a></h2>
			</div>

			<ul class="header-menu">
				<li><a href="index.php">Beranda</a></li>
				<li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
				<li><a href="jurusan.php">Jurusan</a></li>
				<li><a href="galeri.php">Galeri</a></li>
				<li><a href="informasi.php">Informasi</a></li>
				<li><a href="kontak.php">Kontak</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>

			<div class="mobile-menu-btn text-center">
				<a href="#" onclick="showMobileMenu()">Menu</a>
			</div>

		</div>

	</div>