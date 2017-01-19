<?php 
	include 'header.php';
	include 'libs/Connection.php';

	$id_agenda = @$_GET['id_agenda'];
	$stmt = $conn->prepare("SELECT *, DATE_FORMAT(tgl_agenda, '%W') AS 'Nama_Hari_Eng',
				CASE DAYOFWEEK(tgl_agenda)
                WHEN 1 THEN 'Minggu'
                WHEN 2 THEN 'Senin'
                WHEN 3 THEN 'Selasa'
                WHEN 4 THEN 'Rabu'
                WHEN 5 THEN 'Kamis'
                WHEN 6 THEN 'Jumat'
                WHEN 7 THEN 'Sabtu'
          		END AS 'Nama_Hari_ID',
          		date_format(tgl_agenda, '%d %M %Y') as tanggal, date_format(tgl_agenda, '%H:%i') as waktu, date_format(tgl_post_agenda, '%d %M %Y') as tanggal_post from tb_agenda INNER JOIN akun USING(id) WHERE id_agenda = :id_agenda");
	$stmt->execute([
		':id_agenda'=>$id_agenda
	]);

	$data = $stmt->fetch(PDO::FETCH_LAZY);
?>
<div id="isi">
<br><br><br><br>
<div class="container-fluid">
<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-default">
	        <div class="panel-heading" style="text-align: center;"><h4><?php echo $data['judul_agenda'];?></h4></div>
	            <div class="panel-body">
	<font><b>Hari : <?php echo $data['Nama_Hari_ID']?>, <?php echo $data['tanggal']?></b></font><br>
	<font><b>Jam : <?php echo $data['waktu']?> WIB</b></font>
	<p><?php echo $data['agenda'];?></p>
	<table width="100%">
		<tr>
			<td width="50%">posted by <?php echo $data['level'];?></td>
			<td width="50%" align="right"><?php echo $data['tanggal_post'];?></td>
		</tr>
	</table>
	<br>
	<a class="btn btn-info" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
</div>
</div>
</div>
</div>
<br>
</div>
</div>
<?php
	include 'footer.php';
?>