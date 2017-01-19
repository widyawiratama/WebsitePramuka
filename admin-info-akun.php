<?php
	include "header-admin.php";
?>
<br>
	<div class="container-fluid">

		<div id="tampildata" style="margin-bottom: 10px;">
		<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
			  <tr>
			    <th>Id</th>
			    <th>Level</th>
			    <th>Username</th>
			    <th>Nama</th>
			    <th>Email</th>
			    <th>Password</th>
			    <th>Action</th>
			  </tr>
			</thead>
			<tbody>
		<?php
		try {
			$query="SELECT * FROM akun";
			$records_per_page=3;
  			$newquery = $pag->paging($query,$records_per_page);
  			$pag->dataview_akun($newquery);
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
			<font style="font-size: 11px; font-style: italic; color:blue ;">*Tombol biru untuk melihat biodata member</font><br>
			<font style="font-size: 11px; font-style: italic; color:red ;">*Tombol kuning untuk mereset password akun menjadi 'pramuka'</font>
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
				    	<form action="admin-info-akun-proses.php" class="form-horizontal" method="post">			
							<div class="form-group">
								<br>
								<input type="text" class="form-control" name="username" id="username"  placeholder="Username"/ autofocus required>
								<br>
								<input type="text" class="form-control" name="nama" id="nama"  placeholder="Name"/ autofocus required>
								<br>
								<input type="text" class="form-control" name="email" id="email"  placeholder="Email"/ autofocus required>
								<br>
								<input type="text" class="form-control" name="password" id="password"  placeholder="Password"/ autofocus required>
								<br>
								<input type="text" class="form-control" name="confirm" id="confirm"  placeholder="Confirm Password"/ autofocus required>
								<br>
							</div>
					    	<div class="form-group" align="right">
								<!-- <button class="button" type="submit" name="posting"><span>Post </span></button> -->
								<input type="submit" name="posting" class="button btn-primary" value="Simpan">
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
		function reset() {
			tanya = confirm("Yakin akan Mereset Password Akun ?");
			if (tanya == true) return true;
			else return false;
		}
	</script>

    <script src="js/dashboard.js"></script>