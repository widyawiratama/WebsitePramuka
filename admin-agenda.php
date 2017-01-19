<?php
	include "header-admin.php";

?>

 <br>
	<div class="container-fluid">
		<div id="tampildata" style="margin-bottom: 10px;">
		<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
			  <tr>
			    <th width="25%">Judul agenda</th>
			    <th width="35%">Isi agenda</th>
			    <th width="10%">Tanggal agenda</th>
			    <th width="10%">Action</th>
			  </tr>
			</thead>
			<tbody>
		<?php
		try {
			$query="SELECT * FROM tb_agenda INNER JOIN akun USING(id) ORDER BY id_agenda DESC";
  		/*$query = "SELECT * FROM tbl_users";*/       
  		$records_per_page=10;
  		$newquery = $pag->paging($query,$records_per_page);
  		$pag->dataview_agenda($newquery);
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
		      		<h2>Membuat agenda Baru</h2>
		    	</div>
		    	<div class="container-fluid">
			    	<div class="modal-body">
				    	<form action="admin-agenda-proses.php" class="form-horizontal" method="post">			
							<div class="form-group">
								<br>
								<input type="text" class="form-control" name="tgl_agenda" id="datetimepicker_dark" placeholder="Input tanggal agenda Anda...."/ required>
								<!-- <input type="text" class="form-control" id="datetimepicker" name="tgl_agenda" placeholder="Input tanggal agenda Anda...."/ required> -->
								<br>
								<input type="text" class="form-control" name="judul_agenda" id="judul_agenda"  placeholder="Judul agenda"/ autofocus required>
								<br>
								<textarea class="form-control" id="agenda" name="agenda" placeholder="Tuliskan agenda Anda...."/ required></textarea>
							</div>
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
    <script src="js/jquery.datetimepicker.full.js"></script>
    <script src="js/dashboard.js"></script>
    <script type="text/javascript" language="JavaScript">
		function konfirmasi() {
			tanya = confirm("Yakin akan Menghapus Postingan agenda anda ?");
			if (tanya == true) return true;
			else return false;
		}
  		$('#datetimepicker_dark').datetimepicker({theme:'dark'})
  		CKEDITOR.replace( 'agenda' );
	</script>