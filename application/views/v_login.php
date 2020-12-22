<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<title>Login</title>

</head>
<body>
<div class ="container mt-5">
	<div class = "col-md-4">
		<div class ="card">
			<div class = "card-header">
				Form Login
			</div>
			<div class ="card-body">
				
				<form action="<?=site_url('login/proses')?>" method="post">
					<div class ="form-group">
						<label for="">Username :</label>
						<input type="text" name ="txtusername" class="form-control">
					</div>

					<div class ="form-group">
						<label for="">Password :</label>
						<input type="password" name ="txtpassword" class="form-control">
					</div>
					<input type="submit" class ="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
