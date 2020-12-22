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
				<span class="navbar-toggler-icon"></span>
			</button>
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
			<h3 class="font-weight-bolder" align="center">Tambah Data </h3>
		</div>
		<div class=row>
			<div class=col-md-6>
				<form action="<?= site_url('acontroller/simpan_data') ?>" method="post">
					<div class=form-group>
						<label>Merek</label>
						<input type=text name="merek" class=form-control>
					</div>
					<div class=form-group>
						<label>Jenis</label>
						<input type=text name="jenis" class=form-control>
					</div>
					<div class=form-group>
						<label>Stok</label>
						<textarea class=form-control name="stok"></textarea>
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

