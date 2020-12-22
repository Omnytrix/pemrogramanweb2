<?php

?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>UTS Pemrograman Web II</title>
		<link rel="stylesheet"
			  href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	</head>
	<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">UTS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?= site_url('acontroller/index') ?>">Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('acontroller/tambah') ?>">Tambah Data</a>
					</li>
				</ul>
				<a>Himawan Fitriadi</a>
			</div>
		</nav>
		<div class="alert alert-primary" role="alert">
			<h3 class="font-weight-bolder" align="center">UTS Pemrograman Web II</h3>
		</div>
		<div class="card">
			<div class="card-body">
				<p class="card-title">Data UTS Pemrograman Web II</p>
				<table class="table table-bordered">
					<thead>
					<tr>
						<th scope="col">Nomor</th>
						<th scope="col">Merek</th>
						<th scope="col">Jenis</th>
						<th scope="col">Stok</th>
						<th scope="col">Aksi</th>
					</tr>
					</thead>
					<tbody>
					<?php $id_021 = 1; ?>
					<?php foreach ($tabel_a as $key) { ?>
						<tr>
							<td><?= $id_021++ ?></td>
							<td><?= $key->merek ?></td>
							<td><?= $key->jenis ?></td>
							<td><?= $key->stok ?></td>
							<td class="text-center">
								<button type="button" class="btn btn-warning">Edit</button>
								<button type="button" class="btn btn-danger">Delete</button>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</body>
	</html>

