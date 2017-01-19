	<?php
	try {
		$query="SELECT *,date_format(tgl_berita, '%d %M %Y') as tanggal from tb_berita INNER JOIN akun USING(id) ORDER BY id_berita DESC";
		$records_per_page=3;
  			$newquery = $pag->paging($query,$records_per_page);
  			$pag->dataview_berita_home($newquery);
  		?>
  		<a href="admin-berita.php">lihat berita sebelumnya</a>
		<?php
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	?>