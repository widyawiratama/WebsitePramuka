<?php
require_once('libs/init.php');

if(isset($_POST['username']) && isset($_POST['password'])){
	require_once 'libs/Connection.php';
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	/*$stmt = $conn->prepare('SELECT * FROM akun WHERE username = :username AND password = :password');*/
	$stmt = $conn->prepare('SELECT * FROM akun WHERE username = :username AND password = :password');
	//$stmt->bind_param([':username' => $username, ':password' => $password]);
	$query = $stmt->execute([
		':username'=>$username,
		':password'=>$password
	]);

	if($query){
		/*$stmt->store_result();
		$stmt->bind_result($id, $level, $username, $name, $email);
		$stmt->fetch(PDO::FETCH_ASSOC);*/
		$user = $stmt->fetch(PDO::FETCH_OBJ);
		if($user){
			if($user->level == "User"){
				$_SESSION['id'] = $user->id;
				$_SESSION['member'] = $user->level;
				$_SESSION['message'][] = "Selamat Datang di Halaman Member";
				header('location: member.php');
				exit();
			} else if($user->level == "Admin"){
				$_SESSION['id'] = $user->id;
				$_SESSION['admin'] = $user->id;
				$_SESSION['message'][] = "Selamat Datang di Halaman Admin";
				header('location: admin.php');
				exit();
			} 
		}elsE{
			$_SESSION['error'] = "User tidak ditemukan.";
		}
		
		header('location: signin.php');
	}elsE{
		$_SESSION['error'][] = "User tidak ditemukan.";
	}
}
header('location: signin.php');
?>