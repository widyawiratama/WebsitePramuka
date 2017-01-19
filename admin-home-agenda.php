<?php
	try {
		$query="SELECT *, DATE_FORMAT(tgl_agenda, '%W') AS 'Nama_Hari_Eng',
				CASE DAYOFWEEK(tgl_agenda)
                WHEN 1 THEN 'Minggu'
                WHEN 2 THEN 'Senin'
                WHEN 3 THEN 'Selasa'
                WHEN 4 THEN 'Rabu'
                WHEN 5 THEN 'Kamis'
                WHEN 6 THEN 'Jumat'
                WHEN 7 THEN 'Sabtu'
          		END AS 'Nama_Hari_ID',
          		date_format(tgl_agenda, '%d %M %Y') as tanggal, date_format(tgl_agenda, '%H:%i') as waktu, date_format(tgl_post_agenda, '%d %M %Y') as tanggal_post from tb_agenda INNER JOIN akun USING(id) ORDER BY id_agenda DESC";
		$records_per_page=3;
  			$newquery = $pag->paging($query,$records_per_page);
  			$pag->dataview_agenda_home($newquery);
  		?>
		<a href="admin-agenda.php">lihat agenda sebelumnya</a>
		<?php
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	?>