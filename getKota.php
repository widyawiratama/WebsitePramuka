<?php

	require ('libs/init.php');
	require_once ('libs/Connection.php');
	require_once ('libs/function.php');
	redirectLogin();

	$action = $_REQUEST['action'];
	
	if($action=="showAll"){
		
		$stmt3=$conn->prepare('SELECT id_kota, nm_kota FROM kota ORDER BY nm_kota');
		$stmt3->execute();
		
	}else{
		
		$stmt3=$conn->prepare('SELECT id_kota, nm_kota FROM kota WHERE id_prop=:id_propinsi ORDER BY nm_kota');
		$stmt3->execute(array(':id_propinsi'=>$action));
	}
	
	?>
	<div class="countainer-fluid">
	<?php
	if($stmt3->rowCount() > 0){
		?>
			<label>Kwarcab <span class="text-danger">*</span></label>
			<select class="form-control" name="kwarcab">
			<option value="" selected="selected">-- Pilih Kota --</option>
		<?php
		while($row_kota=$stmt3->fetch(PDO::FETCH_ASSOC))
		{
			extract($row_kota);
			?>
				<option value="<?php echo $id_kota; ?>"><?php echo $nm_kota; ?></option>	
			<?php		
		}
		
	}else{
		?>
		<label>Kwarcab <span class="text-danger">*</span></label>
		<select class="form-control" name="kwarcab">
		<option value="" selected="selected">-- Pilih Kota --</option>
        <?php
		while($row_kota=$stmt3->fetch(PDO::FETCH_ASSOC))
		{
			extract($row_kota);
			?>
				<option value="<?php echo $id_kota; ?>"><?php echo $nm_kota; ?></option>	
			<?php		
		}		
	}
	
	
	?>
	</select>
	</div>