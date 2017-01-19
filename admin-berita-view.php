<?php
	include "header-admin.php";

	$id_berita = @$_GET['id_berita'];
	$stmt = $conn->prepare("SELECT *,date_format(tgl_berita, '%d %M %Y') as tanggal FROM tb_berita INNER JOIN akun USING(id) WHERE id_berita = :id_berita");
	$stmt->execute([
		':id_berita'=>$id_berita
	]);
	$data = $stmt->fetch(PDO::FETCH_LAZY);

	$stmt2 = $conn->prepare('SELECT nm_tags FROM tags_berita INNER JOIN tb_tags ON tags_berita.id_tags = tb_tags.id_tags INNER JOIN tb_berita ON tags_berita.id_berita = tb_berita.id_berita WHERE tb_berita.id_berita = :id_berita');
	$stmt2->execute([
		':id_berita'=>$id_berita
	]);
?>
<div id="isi">
<br>
<div class="container">
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-default">
	            <div class="panel-heading" style="text-align: center;"><h4><?php echo $data['judul_berita'];?></h4></div>
	            <div class="panel-body">
	                <p><?php echo $data['berita'];?></p>
					Tags : 
					<?php
					while ($data2 = $stmt2->fetch(PDO::FETCH_LAZY)) {
				      ?>
				      <span class="label label-info"><?php echo $data2['nm_tags'];?></span>
				      <?php
				   }
				   ?>
				   <br>
				   <br>
					<table width="100%">
						<tr>
							<td width="50%">posted by <?php echo $data['level'];?></td>
							<td width="50%" align="right"><?php echo $data['tanggal'];?></td>
						</tr>
					</table>
	            </div>
	        </div>
	    </div>
		<br>
		<a class="btn btn-danger" href="admin-berita.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
	</div>
</div>
</div>