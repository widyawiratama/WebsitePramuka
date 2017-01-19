	<?php
	include 'libs/Connection.php';
	try {
		$query="SELECT *,date_format(tgl_berita, '%d %M %Y') as tanggal from tb_berita INNER JOIN akun USING(id) order by id_berita desc";
		$records_per_page=3;
  			$newquery = $pag->paging($query,$records_per_page);
  			$pag->dataview_berita_index($newquery);
  		?>
		<tr>
    		<td colspan="7">
			<div class="pagination-wrap" align="center">
        		<?php $pag->paginglink($query,$records_per_page); ?>
     		</div>
    		</td>
		</tr>
		<font style="font-size: 11px; font-style: italic; color:red ;">NB: Apa bila ingin melihat berita dengan versi penuh silahkan klik tombol disebelah judul</font>
		<?php
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	?>