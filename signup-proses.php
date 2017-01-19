<?php
require_once('libs/init.php');
require_once 'libs/Connection.php';

if(isset($_POST['email']) &&  isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm'])){
	if($_POST['password'] != $_POST['confirm']){
		$_SESSION['error'] = "pasword dan confirm password berbeda"; 
	}
	if(strlen($_POST['password']) < 4 || strlen($_POST['password']) > 32 ){
		$_SESSION['error'] = "Panjang password harus 4-32 karakter"; 
	}
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$_SESSION['error'] = "Format Email Salah"; 
	}

	$email = @$_POST['email'];
	$username = @$_POST['username'];
	$password = md5(@$_POST['password']);

	if(count($_SESSION['error']) == 0 ){
		$stmt = $conn->prepare("SELECT * FROM akun WHERE username=:username");
		$stmt->execute([':username'=>$username]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$stmt2 = $conn->prepare("SELECT * FROM akun WHERE email=:email");
		$stmt2->execute([':email'=>$email]);
		$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
		
		if($stmt->rowCount() > 0){
			$_SESSION['error'] = "Username Sudah dipakai dimohon menggunakan yang lain";
			header('location: signup.php');
			exit();
		}else if($stmt2->rowCount() > 0){
			$_SESSION['error'] = "Email Sudah dipakai dimohon menggunakan yang lain";
			header('location: signup.php');
			exit();
		}else{
			$stmt3 = $conn->prepare('INSERT INTO akun (username, email, password) VALUES (?, ?, ?)');
			$stmt3->bindParam(1, $username);
			$stmt3->bindParam(2, $email);
			$stmt3->bindParam(3, $password);
			$query = $stmt3->execute();
		
			if($query){
				$_SESSION['message'][] = "Berhasil Mendaftar. Silahkan Login";
				header('location: signin.php');
				exit();
			}elsE{
				$_SESSION['error'][] = "Gagal dalam menyimpan user";
			}
			header('location: signup.php');
		}
	}
}
?>

