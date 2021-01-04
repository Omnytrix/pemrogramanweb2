<div class="alert alert-primary" role="alert">
	<h3 class="font-weight-bolder" align="center"> DATA USER </h3>
</div>
<div class="card">
	<div class="card-body">
		<p class="card-title">Tabel Data User</p>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th scope="col">Nomor</th>
				<th scope="col">Username</th>
				<th scope="col">Password</th>
				<th scope="col">Nama Lengkap</th>
				<th scope="col">Hak Akses</th>
				<th scope="col">Aksi</th>
			</tr>
			</thead>
			<tbody>
			<?php $no = 1; ?>
			<?php foreach ($tbl_user as $key) { ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $key->username ?></td>
					<td><?= $key->password ?></td>
					<td><?= $key->nama_lengkap ?></td>
					<td><?= $key->hak_akses ?></td>
					<td class="text-center">
						<?php if ($this->session->userdata('hak_pengguna') == 'admin') { ?>
							<a href="<?= site_url('pengguna/edit/' . $key->username) ?>"
							   class="btn btn-info btn-sm">Edit</a>
							<a href="<?= site_url('pengguna/hapus/' . $key->username) ?>"
							   onclick="return confirm('Yakin ingin menghapus?')"
							   class="btn btn-danger btn-sm">Delete</a>
						<?php } ?>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function () {
		$('.table').DataTable();
	});
</script>
</body>
</html>
<?php
