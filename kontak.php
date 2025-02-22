<?php include "header.php" ; ?>

<!-- Awal Page -->
<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
				<div class="panel panel-default">
					<div class="panel-body">
						<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Contact</h2>
						<?php 

						if(@$_GET['pesan']=="inputBerhasil"){

						?>
										<div class="alert alert-success">
										Terima kasih, pesan anda sudah terkirim!
										</div>
						<?php

						}

						?>

						<form action="proses-komentar.php" method="post">
						<table class="table table-hover">
							<tr>
								<td>Nama Lengkap
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Alamat Email
								<input type="email" name="email" class="form-control input-md" placeholder="Isikan alamat email yang masih aktif" required>
								</td>
							</tr>
							<tr>
								<td>Pesan
								<textarea name="pesan" class="form-control input-md" required> </textarea>
								</td>
							</tr>
							<tr>
								<td>
								<input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								</td>
							</tr>
						</table>
					</form>
				</div>
      		</div>
		</div><!-- Akhir Kolom Pertama -->
	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Peta Sekolah</h3>
			
			<div class="col-4">
				<p style="margin-bottom: 10px;"><b>Alamat :</b> <br><?= $d->alamat ?></p>
				<p style="margin-bottom: 10px;"><b>Telepon :</b> <br><?= $d->telepon ?></p>
				<p style="margin-bottom: 10px;"><b>Email :</b> <br><?= $d->email ?></p>
			</div>

			<div class="box-gmaps">
				<iframe src="<?= $d->google_maps ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			
		</div>
	</div>

	<?php include 'footer.php'; ?>