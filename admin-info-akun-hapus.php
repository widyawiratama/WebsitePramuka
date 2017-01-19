<?php
	include 'header-admin.php';
	$id = @$_GET['id'];

	try {
		$stmt = $conn->prepare("DELETE FROM akun WHERE id=? ");
		$query = $stmt->execute(array($id));
		if($query){
			header('location: admin-info-akun.php');
			exit();
		}elsE{
			header('location: admin-info-akun.php');
			exit();
		}	
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>
	<script type="text/javascript">
		window.location.href="admin-info-akun.php";
	</script>