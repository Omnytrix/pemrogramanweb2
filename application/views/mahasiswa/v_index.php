	<div class="alert alert-primary" role="alert">
		<h3 class="font-weight-bolder" align="center">Data Mahasiswa</h3>
	</div>
	<div class="card">
		<div class="card-body">
			<p class="card-title">Tabel Data Mahasiswa</p>
			<table class="table table-bordered">
				<thead>
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">NIM</th>
					<th scope="col">Nama</th>
					<th scope="col">Alamat</th>
					<th scope="col">Aksi</th>
				</tr>
				</thead>
				<tbody>
				<?php $no = 1; ?>
				<?php foreach ($tbl_mhs as $key) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $key->NIM ?></td>
						<td><?= $key->Nama ?></td>
						<td><?= $key->Alamat ?></td>
						<td class="text-center">
							<a href = "<?=site_url('mahasiswa/edit/' . $key->NIM)?>"
							   class ="btn btn-info btn-sm">Edit</a>
							<a href = "<?=site_url('mahasiswa/hapus/' . $key->NIM)?>"
							   onclick="return confirm('Yakin ingin menghapus?')"
							   class ="btn btn-danger btn-sm">Delete</a>

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
		$(document).ready(function() {
			$('.table').DataTable();
		} );
	</script>
</body>
</html>
