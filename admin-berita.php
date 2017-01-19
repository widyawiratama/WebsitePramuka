<?php
	include "header-admin.php";
?>
<br>
	<div class="container-fluid">

		<div id="tampildata" style="margin-bottom: 10px;">
		<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
			  <tr>
			    <th width="30%">Judul Berita</th>
			    <th width="42%">Isi Berita</th>
			    <th width="13%">Tanggal Berita</th>
			    <th width="20%">Action</th>
			  </tr>
			</thead>
			<tbody>
		<?php
		try {
			$query="SELECT * FROM tb_berita INNER JOIN akun USING(id) ORDER BY id_berita DESC";
			$records_per_page=10;
  			$newquery = $pag->paging($query,$records_per_page);
  			$pag->dataview_berita($newquery);
  		?>
		<tr>
    		<td colspan="7" align="center">
			<div class="pagination-wrap">
        		<?php $pag->paginglink($query,$records_per_page); ?>
     		</div>
    		</td>
		</tr>
    	<?php
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		?>
			</tbody>
			</table>
		</div>
		
		<!-- Trigger/Open The Modal -->
		<button class="button" id="myBtn"><span>Baru </span></button>

		<!-- The Modal -->
		<div id="myModal" class="modal">

		  <!-- Modal content -->
		  	<div class="modal-content">
		    	<div class="modal-header">
		      		<span class="close">×</span>
		      		<h2>Membuat Berita Baru</h2>
		    	</div>
		    	<div class="container-fluid">
			    	<div class="modal-body">
				    	<form action="admin-berita-proses.php" class="form-horizontal" method="post">			
							<div class="form-group">
								<br>
								<input type="text" class="form-control" name="judul_berita" id="judul_berita"  placeholder="Judul Berita"/ autofocus required>
								<br>
								<textarea class="form-control" id="berita" name="berita" placeholder="Tuliskan Berita Anda...."/ required></textarea><br>
								<input type="text" name="tags_berita" data-role="tagsinput">
							</div>
							<br>
					    	<div class="form-group" align="right">
								<!-- <button class="button" type="submit" name="posting"><span>Post </span></button> -->
								<input type="submit" name="posting" class="button" value="Posting">
							</div>
						</form>	
			    	</div>
		    	</div>
		  	</div>
		</div>
    </div>

    <script type="text/javascript" language="JavaScript">
		function konfirmasi() {
			tanya = confirm("Yakin akan Menghapus Postingan Berita anda ?");
			if (tanya == true) return true;
			else return false;
		}
    	CKEDITOR.replace( 'berita' );
	</script>

    <script src="js/dashboard.js"></script>