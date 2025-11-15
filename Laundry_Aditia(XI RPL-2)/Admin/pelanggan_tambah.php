<?php include 'header.php'; ?>

<div class="container">
	<br/>
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4 style="text-align: center;">Tambah Pelanggan Baru</h4>
			</div>
			<div class="panel-body">

				<form method="post" action="pelanggan_aksi.php">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input id="nama" type="text" class="form-control" name="nama" placeholder="Masukkan nama ..">
					</div>

					<div class="form-group">
						<label for="nohp">No hp</label>
						<input id="nohp" type="tel" class="form-control" name="hp" placeholder="Masukkan No hp ..">
					</div>

					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input id="alamat" type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat..">
					</div>
					<br/>
					<input type="submit" class="btn btn-primary" value="simpan">
					<a href="pelanggan.php" class="btn btn-primary">Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>