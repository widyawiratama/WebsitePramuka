<?php
require_once 'header-admin.php';

if(isset($_POST['berita'])){
	if(strlen($_POST['berita']) < 10){
		$_SESSION['error'] = "Gagal Memposting berita, Isi Berita Harus lebih dari 10 karakter";
		/*header('location: admin-berita.php');*/
 		exit(); 
	}
	
	$id = @$_SESSION['id'];
	$judul_berita = @$_POST['judul_berita'];
	$berita = @$_POST['berita'];
	$tags_berita = $_POST['tags_berita'];
	$tags = explode(",", $tags_berita);



	$stmt = $conn->prepare("INSERT INTO tb_berita (id, judul_berita, berita, tgl_berita) VALUES (?, ?, ?, now())");
	$query = $stmt->execute(array($id, $judul_berita, $berita));
	if($query){
		

		$stmt2 = $conn->prepare("SELECT id_berita FROM tb_berita where id_berita = (SELECT max(id_berita) FROM tb_berita)");
		$stmt2->execute();
		$data = $stmt2->fetch(PDO::FETCH_LAZY);

		if ($data) {
			$id_berita = $data->id_berita;
		}

		foreach ($tags as $tag) {
			$stmt3 = $conn->prepare("INSERT INTO tb_tags (nm_tags) VALUES (?)");
			if (!getTags($conn, $tag)) {
				$query2 = $stmt3->execute(array($tag));
			}
			$stmt4 = $conn->prepare("INSERT INTO tags_berita (id_berita, id_tags) VALUES (?, ?)");
			$query3 = $stmt4->execute(array($id_berita, getIdTags($conn, $tag)));	
		}
		
		$_SESSION['message'][] = "Berhasil Memposting Berita";
		header('location: admin-berita.php');
		exit();
	}elsE{
		$_SESSION['error'] = "Gagal Memposting berita";
		header('location: admin-berita.php');
 		exit();
	}
}
?>

