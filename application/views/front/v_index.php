<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

	<title>Pemrograman WEB II</title>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/softy/') ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/softy/') ?>css/font-awesome.css">
	<link rel="stylesheet" href="<?= base_url('assets/softy/') ?>css/templatemo-softy-pinko.css">

</head>

<body>

<header class="header-area header-sticky">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav class="main-nav">
					
					<a href="#" class="logo">
						<img src="<?= base_url('assets/softy/') ?>/images/logo.png" alt="Softy Pinko"/>
					</a>

					<ul class="nav">
						<li><a href="#welcome" class="active">Home</a></li>

						<li><a href="#contact-us">Contact Us</a></li>
					</ul>
					<a class='menu-trigger'>
						<span>Menu</span>
					</a>

				</nav>
			</div>
		</div>
	</div>
</header>

<div class="welcome-area" id="welcome">

	<div class="header-text">
		<div class="container">
			<div class="card-body">
				<p class="font-weight-bolder">TABEL DATA MAHASISWA</p>
				<table class="table table-bordered">
					<thead>
					<tr>
						<th scope="col">Nomor</th>
						<th scope="col">NIM</th>
						<th scope="col">Nama</th>
						<th scope="col">Alamat</th>

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

						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<a class="main-button-slider" href="<?= site_url('login/index') ?>">LOGIN</a>
		</div>
	</div>
</div>
</div>

</div>

<section class="section colored" id="contact-us">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<div class="center-heading">
					<h2 class="section-title">Hubungi Kami</h2>
				</div>
			</div>
			<div class="offset-lg-3 col-lg-6">
				<div class="center-text">
					<p>Silahkan isi form di bawah ini untuk menghubungi admin. Admin akan merespon pesan anda
						secepatnya.</p>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-lg-4 col-md-6 col-sm-12">
				<h5 class="margin-bottom-30">Alamat Kami</h5>
				<div class="contact-text">
					<p>Universitas Bumigora Mataram
						<br>Jl. Ismail Marzuki No. 22
						<br>Kota Mataram
						<br>Nusa Tenggara Barat</p>
				</div>
			</div>

			<div class="col-lg-8 col-md-6 col-sm-12">
				<div class="contact-form">
					<form id="contact" action="" method="get">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12">
								<fieldset>
									<input name="name" type="text" class="form-control" id="name"
										   placeholder="Nama Lengkap" required="">
								</fieldset>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">
								<fieldset>
									<input name="email" type="email" class="form-control" id="email"
										   placeholder="Alamat E-Mail" required="">
								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset>
									<textarea name="message" rows="6" class="form-control" id="message"
											  placeholder="Pesan" required=""></textarea>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset>
									<button type="submit" id="form-submit" class="main-button">Kirim Pesan</button>
								</fieldset>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
			</div>
		</div>

	</div>
</footer>
</body>
</html>
