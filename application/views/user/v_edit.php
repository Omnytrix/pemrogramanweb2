<div class="alert alert-primary" role="alert">
	<h3 class="font-weight-bolder" align="center">Edit Data Pengguna</h3>
</div>
<div class=row>
	<div class=col-md-6>
		<form action="<?= site_url('pengguna/simpan_edit') ?>" method="post">
			<div class=form-group>
				<label>Username</label>
				<input type=text readonly value="<?= $data_user->username ?>" name="username" class=form-control>
			</div>
			<div class=form-group>
				<label>Password</label>
				<input type=text value="<?= $data_user->password ?>" name="password" class=form-control>
			</div>
			<div class=form-group>
				<label>Nama Lengkap</label>
				<input type=text value="<?= $data_user->nama_lengkap ?>" name="nama_lengkap" class=form-control>
			</div>

			<div class=form-group>
				<label>Hak Akses</label>
				<input type=text readonly value="<?= $data_user->hak_akses ?>" name="hak_akses" class=form-control>
			</div>

			<div class=form-group>
				<button type=submit name="submit" class=btn-primary>
					Simpan Data
				</button>
				<a href="<?= site_url('pengguna/index') ?>"
				   class="btn btn-info btn-sm">Batal</a>
			</div>
		</form>
	</div>
</div>

</div>
</body>
</html>
