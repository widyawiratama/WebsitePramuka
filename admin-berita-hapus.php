<?php
	require_once 'header-admin.php';
	$id_berita = @$_GET['id_berita'];

	try {
		$stmt = $conn->prepare("DELETE FROM tb_berita WHERE id_berita=? ");
		$query = $stmt->execute(array($id_berita));
		if($query){
			try {
				$stmt2 = $conn->prepare("DELETE FROM tags_berita WHERE id_berita=? ");
				$query2 = $stmt->execute(array($id_berita));
				if($query2){
					$_SESSION['message'][] = "Berhasil Menghapus Berita";
					header('location: admin-berita.php');
					exit();
				}elsE{
					$_SESSION['error'] = "Gagal Menghapus berita";
					header('location: admin-berita.php');
 					exit();
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}elsE{
			$_SESSION['error'] = "Gagal Menghapus berita";
			header('location: admin-berita.php');
 			exit();
		}	
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>
	<script type="text/javascript">
		window.location.href="admin-berita.php";
	</script>