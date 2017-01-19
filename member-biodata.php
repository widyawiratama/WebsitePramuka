<?php
    include 'header-member.php';
?>
<div class="container">
	<div class="page-header">
    <h1>Biodata</h1>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<form action="member-biodata-proses.php" class="form-horizontal" method="POST">
				<div class="form-group">
				    <label>Nama Lengkap <span class="text-danger">*</span></label>
				    <input class="form-control" type="text" name="nama" value="<?php echo getBiodataKolom($conn, $_SESSION['id'], 'nama')?>"/ autofocus required>
				</div>
				<div class="form-group">
				    <label>Nomor Tanda Anggota <span class="text-danger">*</span></label>
				    <input class="form-control" type="text" name="nta" value="<?php echo getBiodataKolom($conn, $_SESSION['id'], 'nta') ?>"/ autofocus required>
				</div>
				<div class="form-group">
				    <label>Tempat Tanggal Lahir <span class="text-danger">*</span></label>
				    <input class="form-control" type="text" name="tmpt_lahir" value="<?php echo getBiodataKolom($conn, $_SESSION['id'], 'tmpt_lahir') ?>"/ autofocus required>
				</div>
				<div class="form-group">
				    <label>Tanggal Lahir <span class="text-danger">*</span></label> 
				    <input type="text" class="form-control" name="tgl_lahir" id="datetimepicker2" placeholder="Input tanggal agenda Anda...."/  value="<?php echo getBiodataKolom($conn, $_SESSION['id'], 'tgl_lahir'); ?>" required>
				</div>
				<div class="form-group">
				    <label>Alamat <span class="text-danger">*</span></label> 
				    <input type="text" class="form-control" name="alamat" value="<?php echo getBiodataKolom($conn, $_SESSION['id'], 'alamat'); ?>"/ autofocus required>
				</div>
				<div class="form-group">
				    <label>Golongan Darah <span class="text-danger">*</span></label> 
				    <select class="form-control" name="gol_darah">
				    	<option value="" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'gol_darah') == '') { echo "selected"; } ?>>-- Pilih Golongan Darah --</option>
				    	<option value="A" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'gol_darah') == 'A') { echo "selected"; } ?>>A</option>
				    	<option value="B" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'gol_darah') == 'B') { echo "selected"; } ?>>B</option>
				    	<option value="AB" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'gol_darah') == 'AB') { echo "selected"; } ?>>AB</option>
				    	<option value="O" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'gol_darah') == 'O') { echo "selected"; } ?>>O</option>
				    </select>
				</div>
				<div class="form-group">
				    <label>Agama <span class="text-danger">*</span></label> 
				    <select class="form-control" name="agama">
				    	<option value="" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'agama') == '') { echo "selected"; } ?>>-- Pilih Agama --</option>
				    	<option value="Islam" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'agama') == 'Islam') { echo "selected"; } ?>>Islam</option>
				    	<option value="Kristen" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'agama') == 'Kristen') { echo "selected"; } ?>>Kristen</option>
				    	<option value="Katolik" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'agama') == 'Katolik') { echo "selected"; } ?>>Katolik</option>
				    	<option value="Budha" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'agama') == 'Budha') { echo "selected"; } ?>>Budha</option>
				    	<option value="Hindu" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'agama') == 'Hindu') { echo "selected"; } ?>>Hindu</option>
				    	<option value="Khonghucu" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'agama') == 'Khonghucu') { echo "selected"; } ?>>Khonghucu</option>
				    </select>
				</div>
				<div class="form-group">
				    <label>Jabatan <span class="text-danger">*</span></label> 
				    <select class="form-control" name="jabatan">
				    	<option value="" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'jabatan') == '') { echo "selected"; } ?>>-- Pilih Jabatan --</option>
				    	<option value="Siaga" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'jabatan') == 'Siaga') { echo "selected"; } ?>>Siaga</option>
				    	<option value="Penggalang" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'jabatan') == 'Penggalang') { echo "selected"; } ?>>Penggalang</option>
				    	<option value="Penegak" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'jabatan') == 'Penegak') { echo "selected"; } ?>>Penegak</option>
				    	<option value="Pembina" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'jabatan') == 'Pembina') { echo "selected"; } ?>>Pembina</option>
				    	<option value="Pelatih" <?php if(getBiodataKolom($conn, $_SESSION['id'], 'jabatan') == 'Pelatih') { echo "selected"; } ?>>Pelatih</option>
				    </select>
				</div>
				<div class="form-group">
				    <label>Pangkalan <span class="text-danger">*</span></label> 
				    <input type="text" class="form-control" name="pangkalan" value="<?php echo getBiodataKolom($conn, $_SESSION['id'], 'pangkalan'); ?>"/ autofocus required>
				</div>
				<div class="form-group">
				    <label>Kwarda <span class="text-danger">*</span></label>
					<select class="form-control" name="kwarda" id="getKota">
			        <option value="" selected="selected">-- Pilih Daerah --</option>
			        <?php
			        $stmt2 = $conn->prepare('SELECT * FROM propinsi');
			        $stmt2->execute();
			        while($row_prop=$stmt2->fetch(PDO::FETCH_ASSOC))
			        {
			            extract($row_prop);
			            ?>
			            <option value="<?php echo $id_prop; ?>"><?php echo $nm_prop; ?></option>
			            <?php
			        }
			        ?>
			        </select>
				</div>
				<div class="form-group" id="display">
       				<!-- Records will be displayed here -->
    			</div>
				<input type="submit" name="ubah_bio" class="btn btn-primary" value="Simpan">
				<a class="btn btn-danger" href="member.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
			</form>
		</div>
	</div>    
</div>
<script src="js/jquery.datetimepicker.full.js"></script>
 <script type="text/javascript" language="JavaScript">
  		$('#datetimepicker2').datetimepicker({
	lang:'ch',
	timepicker:false,
	format:'Y-m-d',
	formatDate:'Y-m-d',
	startDate:1970
});
	</script>