<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet"
		  href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>">
</head>
<body>
<div class ="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Tugas</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tambah Data</a>
				</li>
			</ul>
				<a>Himawan Fitriadi</a>
		</div>
	</nav>
	<div class="alert alert-primary" role="alert">
		<h3 class = "font-weight-bolder" align="center" >Himawan Fitriadi/1901050021</h3>
	</div>
	<div class="card">
		<div class="card-body">
			<p class="card-title">Data Mahasiswa</p>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">Nomor</th>
						<th scope="col">Nama</th>
						<th scope="col">NIM</th>
						<th scope="col">Alamat</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Himawan Fitriadi</td>
						<td>1901050021</td>
						<td>BTN Citra Persada Medas - Gunungsari</td>
						<td>
							<button type="button" class="btn btn-warning">Edit</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Moh. Iqbal</td>
						<td>1901050022</td>
						<td>Pengkelak Mas - Sakra</td>
						<td>
							<button type="button" class="btn btn-warning">Edit</button>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
