	<?php include 'header.php'; ?>
	<!-- bagian banner -->
	<div class="banner" style="background-image: url('uploads/identitas/<?= $d->foto_sekolah ?>');">
		<div class="banner-text">
			<div class="container">
				<h3>Selamat Datang di <?= $d->nama ?></h3>
				<p>Sekolah Madrasah Kejuruan dengan berbagai jurusan yang dapat Anda pilih sesuai minat dan bakat Anda.</p>
			</div>
		</div>
	</div>

	<!-- bagian sambutan -->
	<div class="section">
		<div class="row">
			<div class="panel panel-default"width="50%">
				<div class="panel-body"width="50%">
						<div class="container text-center">
						<h3>Sambutan Kepala Sekolah</h3>
						<img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="20%"height="10%">
						<h4><?= $d->nama_kepsek ?></h4>
						<p><?= $d->sambutan_kepsek ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- bagian jurusan -->
	<div class="section" id="jurusan">

		<div class="container text-center">
			<h3>Jurusan</h3>

			<?php
				$jurusan = mysqli_query($conn, "SELECT * FROM jurusan ORDER BY id DESC");
				if(mysqli_num_rows($jurusan) > 0){
					while($j = mysqli_fetch_array($jurusan)){
			?>

				<div class="col-4">
					<a href="detail-jurusan.php?id=<?= $j['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" style="background-image: url('uploads/jurusan/<?= $j['gambar'] ?>');">
						</div>

						<div class="thumbnail-text">
							<?= $j['nama'] ?>
						</div>

					</div>
					</a>
				</div>

			<?php }}else{ ?>

				Tidak ada data

			<?php } ?>
		</div>

	</div>

	<!-- bagian informasi -->
	<div class="section">

		<div class="container text-center">
			<h3>Informasi Terbaru</h3>

			<?php
				$informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC LIMIT 8");
				if(mysqli_num_rows($informasi) > 0){
					while($p = mysqli_fetch_array($informasi)){
			?>

				<div class="col-4">
					<a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" style="background-image: url('uploads/informasi/<?= $p['gambar'] ?>');">
						</div>

						<div class="thumbnail-text">
							<?= substr($p['judul'], 0, 50) ?>
						</div>

					</div>
					</a>
				</div>

			<?php }}else{ ?>

				Tidak ada data

			<?php } ?>
		</div>

	</div>
	<?php include 'footer.php'; ?>