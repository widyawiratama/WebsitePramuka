<?php
	include 'header-admin.php';
	$id = @$_SESSION['id'];
	$stmt = $conn->prepare('SELECT * FROM akun WHERE id= :id');
	$stmt->execute([
		':id'=>$id
	]);

	$user = $stmt->fetch(PDO::FETCH_LAZY);
?>

<div class="container">
	<?php ShowMessage(); ?>
	<div class="page-header">
    <h1>Ubah Password</h1>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<form action="admin-ubah-password.php" method="POST">
				<div class="form-group">
				    <label>Password Lama <span class="text-danger">*</span></label>
				    <input class="form-control" type="password" name="old_pass"/ autofocus required>
				</div>
				<div class="form-group">
				    <label>Password Baru <span class="text-danger">*</span></label>
				    <input class="form-control" type="password" name="new_pass"/ autofocus required>
				</div>
				<div class="form-group">
				    <label>Ulangi Password Baru <span class="text-danger">*</span></label>
				    <input class="form-control" type="password" name="renew_pass"/ autofocus required>
				</div>
				<input type="submit" name="ubah_password" class="btn btn-primary" value="Simpan">
				<a class="btn btn-danger" href="admin.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
			</form>
		</div>
	</div>    
</div>

<?php
if(isset($_POST['old_pass']) && isset($_POST['new_pass']) && isset($_POST['renew_pass'])){
	if(strlen($_POST['new_pass']) < 5){
		$_SESSION['error'] = "Password Baru harus lebih dari 5 karakter";
 		exit(); 
	}
	elseif ($user['password'] != md5($_POST['old_pass'])) {
		$_SESSION['error'] = "Password Lama salah";
 		exit();
	}
	elseif ($_POST['new_pass'] != $_POST['renew_pass']) {
		$_SESSION['error'] = "Perulangan Password Baru Berbeda";
 		exit();
	}
	else{
		$a = md5($_POST['new_pass']);
		try {
			$stmt = $conn->prepare("UPDATE akun SET password=? WHERE id=? ");

			$query = $stmt->execute(array($a, $id));
			if($query){
				$_SESSION['message'][] = "Berhasil Mengubah Password, Silahkan tekan tombol 'kembali'";
				exit();
			}elsE{
				$_SESSION['message'][] = "Gagal Mengubah Password";
				exit();
			}	
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}
?>