<?php 
	
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$hasil = mysqli_query($data, "SELECT * FROM account WHERE username = '$username' AND password = '$password'");

	if(mysqli_num_rows($hasil) > 0){
		
		// header("Location: indexa.php");
		if($username == 'admin' && $password == 'admin'){
			$_SESSION['username'] = $username;
			header('location:indexa.php');
		}elseif($username == 'penduduk' && $password=='penduduk'){
			$_SESSION['username'] = $username;
			header('location:index.php');
		}
	}
	else{
		header('location:login.php');
	}

 ?>