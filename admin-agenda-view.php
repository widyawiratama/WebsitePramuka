<?php 
	include 'header-admin.php';

	$id_agenda = @$_GET['id_agenda'];
	$stmt = $conn->prepare('SELECT * FROM tb_agenda INNER JOIN akun USING(id) WHERE id_agenda = :id_agenda');
	$stmt->execute([
		':id_agenda'=>$id_agenda
	]);

	$data = $stmt->fetch(PDO::FETCH_LAZY);
?>
<div class="container-fluid">
	<h2><?php echo $data['judul_agenda'];?></h2>
	<font><b>Waktu : <?php echo $data['tgl_agenda'];?></b></font>
	<p><?php echo $data['agenda'];?></p>
	<table width="100%">
		<tr>
			<td width="50%">posted by <?php echo $data['level'];?></td>
			<td width="50%" align="right"><?php echo $data['tgl_post_agenda'];?></td>
		</tr>
	</table>
	<br>
	<a class="btn btn-danger" href="admin-agenda.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
</div>