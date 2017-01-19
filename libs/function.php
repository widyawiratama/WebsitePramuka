<?php

	function isDataBiodataNull($conn, $id_akun){
		$stmt = $conn->prepare('SELECT * FROM biodata WHERE id = :id');
		$stmt->execute([
			':id'=>$id_akun
		]);

		$biodata = $stmt->fetch(PDO::FETCH_LAZY);
		if($biodata == null){
			return true;
		}
		else{
			return false;
		}
	}
	function getBiodataKolom($conn, $id_akun, $kolom){
		$stmt = $conn->prepare("SELECT $kolom FROM biodata INNER JOIN propinsi ON biodata.id_prop=propinsi.id_prop INNER JOIN kota ON biodata.id_kota=kota.id_kota WHERE id = :id");
		$stmt->execute([
			':id'=>$id_akun
		]);

		$biodata = $stmt->fetch(PDO::FETCH_LAZY);
		if(count($biodata) > 0){
			return $biodata[0];
		}
		else {
			return '';
		}
	}

	function getTags($conn, $nm_tags){
		$stmt = $conn->prepare("SELECT * FROM tb_tags WHERE nm_tags = :nm_tags");
		$stmt->execute([
			':nm_tags'=>$nm_tags
		]);

		$tags = $stmt->fetch(PDO::FETCH_LAZY);
		if($tags){
			return true;
		}
		else {
			return false;
		}		
	}

	function getIdTags($conn, $nm_tags){
		$stmt = $conn->prepare("SELECT id_tags FROM tb_tags WHERE nm_tags = :nm_tags");
		$stmt->execute([
			':nm_tags'=>$nm_tags
		]);

		$tags = $stmt->fetch(PDO::FETCH_LAZY);
		if($tags){
			return $tags->id_tags;
		}
		else {
			return 'gagal';
		}		
	}
	
?>