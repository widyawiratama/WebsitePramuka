<?php
	require_once 'libs/init.php';
	require_once 'libs/Connection.php';
	redirectLogin();
	$id_agenda = @$_GET['id_agenda'];

	try {
		$stmt = $conn->prepare("DELETE FROM tb_agenda WHERE id_agenda=? ");
		$query = $stmt->execute(array($id_agenda));
		if($query){
			$_SESSION['message'][] = "Berhasil Menghapus agenda";
			header('location: admin-agenda.php');
			exit();
		}elsE{
			$_SESSION['error'] = "Gagal Menghapus agenda";
		header('location: admin-agenda.php');
 		exit();
		}	
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>
	<script type="text/javascript">
		window.location.href="admin-agenda.php";
	</script>