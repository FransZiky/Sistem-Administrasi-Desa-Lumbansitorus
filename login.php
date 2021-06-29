<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<h1>Selamat Datang</h1>
	<h1>Di</h1>
	<h1>Desa Lumban Sitorus</h1>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Login</p>

		<form action="aksi-login.php" method="post">
			<fieldset>
				<label>Username</label>
				<input type="text" name="username" class="form_login" placeholder="Masukkan username..">
				
				<br>
				<label>Password</label>
				<input type="password" name="password" class="form_login" placeholder="Masukkan password..">
				<br>
				
				<input type="submit" name="" value="Login">
			</fieldset>
		</form>
	</div>
</body>
</html>