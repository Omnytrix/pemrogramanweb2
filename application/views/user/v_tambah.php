
	<div class="alert alert-primary" role="alert">
		<h3 class="font-weight-bolder" align="center">Tambah Data User</h3>
	</div>
	<div class=row>
		<div class=col-md-6>
			<form action="<?= site_url('pengguna/simpan_data') ?>" method="post">
				<div class=form-group>
					<label>Usernama</label>
					<input type=text name="username" class=form-control>
				</div>
				<div class=form-group>
					<label>Password</label>
					<input type=text name="password" class=form-control>
				</div>
				<div class=form-group>
					<label>Nama Lengkap</label>
					<input type=text name="nama_lengkap" class=form-control>
				</div>
				<div class=form-group>
					<label>Hak Akses</label>
					<input type=text name="hak_akses" class=form-control>
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
