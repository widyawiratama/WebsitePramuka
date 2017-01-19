<?php
require_once('libs/init.php');
require_once 'libs/Connection.php';

if(isset($_POST['nama']) && isset($_POST['email']) &&  isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm'])){
	if($_POST['password'] != $_POST['confirm']){
		$_SESSION['error'] = "pasword dan confirm password berbeda";
		header('location: admin.php?page=admin-info-akun'); 
		exit();
	}
	if(strlen($_POST['password']) < 4 || strlen($_POST['password']) > 32 ){
		$_SESSION['error'] = "Panjang password harus 4-32 karakter";
		header('location: admin.php?page=admin-info-akun'); 
		exit();
	}
	if(strlen($_POST['nama']) < 4 || strlen($_POST['nama']) > 32 ){
		$_SESSION['error'] = "Panjang nama harus 4-32 karakter";
		header('location: admin.php?page=admin-info-akun'); 
		exit();
	}
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$_SESSION['error'] = "Format Email Salah";
		header('location: admin.php?page=admin-info-akun'); 
		exit();
	}

	$name = @$_POST['nama'];
	$email = @$_POST['email'];
	$username = @$_POST['username'];
	$password = md5(@$_POST['password']);
		
		$stmt = $conn->prepare('INSERT INTO akun (username, name, email, password) VALUES (?, ?, ?, ?)');
		$query = $stmt->execute(array($username, $name, $email, $password));
		if($query){
			$_SESSION['message'][] = "Berhasil Menambah Akun";
			header('location: admin.php?page=admin-info-akun');
			exit();
		}elsE{
			$_SESSION['error'][] = "Gagal Menambah Akun";
			header('location: admin.php?page=admin-info-akun');
			exit();
		}
	}
?>