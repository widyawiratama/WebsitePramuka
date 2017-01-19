<?php 
	require_once 'header-admin.php';

	$id_berita = @$_GET['id_berita'];
	$stmt = $conn->prepare('SELECT * FROM tb_berita WHERE id_berita = :id_berita');
	$stmt->execute([
		':id_berita'=>$id_berita
	]);

	$user = $stmt->fetch(PDO::FETCH_LAZY);
?>
<div class="container">
	<div class="page-header">
    <h1>Edit Berita</h1>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<form action="admin-berita-edit.php" method="POST">
				<div class="form-group">
				    <label>Judul Berita <span class="text-danger">*</span></label>
				    <input class="form-control" type="hidden" name="id_berita" value="<?php echo $user->id_berita;?>"/ autofocus required>
				    <input class="form-control" type="text" name="judul_berita" value="<?php echo $user->judul_berita;?>"/ autofocus required>
				</div>
				<div class="form-group">
				    <label>Isi Berita <span class="text-danger">*</span></label>
				    
				    <textarea class="form-control" name="berita" autofocus required><?php echo $user->berita;?></textarea>
				</div>
				<input type="submit" name="posting" class="btn btn-primary" value="Simpan">
				<a class="btn btn-danger" href="admin-berita.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
			</form>
		</div>
	</div>    
</div>

<?php
if(isset($_POST['judul_berita']) && isset($_POST['berita'])){
	if(strlen($_POST['berita']) < 10){
		$_SESSION['error'] = "Gagal Mengedit berita, Isi Berita Harus lebih dari 10 karakter";
		header('location: admin-berita.php');
 		exit(); 
	}
	$id_berita = @$_POST['id_berita'];
	$judul_berita = @$_POST['judul_berita'];
	$berita = @$_POST['berita'];
	try {
		$stmt = $conn->prepare("UPDATE tb_berita SET judul_berita=?, berita=? WHERE id_berita=? ");

		$query = $stmt->execute(array($judul_berita, $berita, $id_berita));
		if($query){
			$_SESSION['message'][] = "Berhasil Mengedit Berita";
			header('location: admin-berita.php');
			exit();
		}elsE{
			header('location: admin-berita.php');
			exit();
		}	
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}
?>