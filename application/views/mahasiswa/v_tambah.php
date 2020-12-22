
	<div class="alert alert-primary" role="alert">
		<h3 class="font-weight-bolder" align="center">Tambah Data Mahasiswa</h3>
	</div>
	<div class=row>
		<div class=col-md-6>
			<form action="<?= site_url('mahasiswa/simpan_data') ?>" method="post">
				<div class=form-group>
					<label>NIM</label>
					<input type=text name="NIM" class=form-control>
				</div>
				<div class=form-group>
					<label>Nama Mahasiswa</label>
					<input type=text name="Nama" class=form-control>
				</div>
				<div class=form-group>
					<label>Alamat</label>
					<textarea class=form-control name="Alamat"></textarea>
				</div>
				<div class=form-group>
					<button type=submit name="submit" class=btn-primary>
						Simpan Data
					</button>

				</div>
			</form>
		</div>
	</div>

</div>
</body>
</html>
