<?php 
	require_once 'header-admin.php';

	$id_agenda = @$_GET['id_agenda'];
	$stmt = $conn->prepare('SELECT * FROM tb_agenda WHERE id_agenda = :id_agenda');
	$stmt->execute([
		':id_agenda'=>$id_agenda
	]);

	$user = $stmt->fetch(PDO::FETCH_LAZY);
?>
<div class="container">
	<div class="page-header">
    <h1>Edit agenda</h1>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<form method="POST">
				<div class="form-group">
				    <label>Judul Agenda <span class="text-danger">*</span></label>
				    <input class="form-control" type="hidden" name="id_agenda" value="<?php echo $user->id_agenda;?>"/ autofocus required>
				    <input class="form-control" type="text" name="judul_agenda" value="<?php echo $user->judul_agenda;?>"/ autofocus required>
				</div>
				<div class="form-group">
				    <label>Tanggal Agenda <span class="text-danger">*</span></label> 
				    <input type="text" class="form-control" name="tgl_agenda" id="datetimepicker_dark" value="<?php echo $user->tgl_agenda;?>"/ autofocus required>
				</div>
				<div class="form-group">
				    <label>Isi Agenda <span class="text-danger">*</span></label> 
				    <textarea class="form-control" name="agenda" autofocus required><?php echo $user->agenda;?></textarea>
				</div>
				<input type="submit" name="posting" class="btn btn-primary" value="Simpan">
				<a class="btn btn-danger" href="admin-agenda.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
			</form>
		</div>
	</div>    
</div>

<?php
if(isset($_POST['judul_agenda']) && isset($_POST['agenda']) && isset($_POST['tgl_agenda'])){
	if(strlen($_POST['agenda']) < 10){
		$_SESSION['error'] = "Gagal Mengedit agenda, Isi agenda Harus lebih dari 10 karakter";
		header('location: admin-agenda.php');
 		exit(); 
	}
	$id_agenda = @$_POST['id_agenda'];
	$judul_agenda = @$_POST['judul_agenda'];
	$tgl_agenda = @$_POST['tgl_agenda'];
	$agenda = @$_POST['agenda'];
	try {
		$stmt = $conn->prepare("UPDATE tb_agenda SET judul_agenda=?, agenda=?, tgl_agenda=? WHERE id_agenda=? ");

		$query = $stmt->execute(array($judul_agenda, $agenda, $tgl_agenda, $id_agenda));
		if($query){
			$_SESSION['message'][] = "Berhasil Mengedit agenda";
			header('location: admin-agenda.php');
			exit();
		}elsE{
			header('location: admin-agenda.php');
			exit();
		}	
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}
?>
<script src="js/jquery.datetimepicker.full.js"></script>
    <script src="js/dashboard.js"></script>
    <script type="text/javascript" language="JavaScript">
  		$('#datetimepicker_dark').datetimepicker({theme:'dark'})
	</script>