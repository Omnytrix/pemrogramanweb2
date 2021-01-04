<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<link rel="stylesheet"
		  href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="container-md">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Pemrograman Web II</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= site_url('mahasiswa/index') ?>">Data Mahasiswa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('pengguna/tambah') ?>">Tambah Data</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('login/logout') ?>">Logout</a>
				</li>
			</ul>
			<a><?php echo $this->session->userdata('nama_pengguna');?> </a>
		</div>
	</nav>
