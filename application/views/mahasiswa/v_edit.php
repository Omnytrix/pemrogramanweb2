<div class="alert alert-primary" role="alert">
	<h3 class="font-weight-bolder" align="center">Edit Data Mahasiswa</h3>
</div>
<div class=row>
	<div class=col-md-6>
		<form action="<?= site_url('mahasiswa/simpan_edit') ?>" method="post">
			<div class=form-group>
				<label>NIM</label>
				<input type=text readonly value="<?= $data_NIM->NIM ?>" name="NIM" class=form-control>
			</div>
			<div class=form-group>
				<label>Nama Mahasiswa</label>
				<input type=text value="<?= $data_NIM->Nama ?>" name="Nama" class=form-control>
			</div>
			<div class=form-group>
				<label>Alamat</label>
				<textarea class=form-control name="Alamat"><?= $data_NIM->Alamat ?>
					</textarea>
			</div>
			<div class=form-group>
				<button type=submit name="submit" class=btn-primary>
					Simpan Data
				</button>
				<a href="<?= site_url('mahasiswa/index') ?>"
				   class="btn btn-info btn-sm">Batal</a>
			</div>
		</form>
	</div>
</div>

</div>
</body>
</html>
