<?php
	include 'header.php';
	include 'libs/connection.php';
?>
<div id="isi">
<br><br><br><br>
<div class="container">
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
          		date_format(tgl_agenda, '%d %M %Y') as tanggal, date_format(tgl_agenda, '%H:%i') as waktu, date_format(tgl_post_agenda, '%d %M %Y') as tanggal_post from tb_agenda INNER JOIN akun USING(id) order by id_agenda desc";
		$records_per_page=3;
  			$newquery = $pag->paging($query,$records_per_page);
  			$pag->dataview_agenda_index($newquery);
  		?>
		<tr>
    		<td colspan="7">
			<div class="pagination-wrap" align="center">
        		<?php $pag->paginglink($query,$records_per_page); ?>
     		</div>
    		</td>
		</tr>
		<?php
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	?>
</div>
</div>
<?php
	include 'footer.php';
?>