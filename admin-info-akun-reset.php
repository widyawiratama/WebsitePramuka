<?php
	include 'header-admin.php';
	$id = @$_GET['id'];
	$password = md5('pramuka');

	try {
		$stmt = $conn->prepare("UPDATE akun SET password=? WHERE id=? ");
		$query = $stmt->execute(array($password,$id));
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