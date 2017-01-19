<?php
require_once 'header-member.php';

if(isset($_POST['nama']) && isset($_POST['nta']) && isset($_POST['tgl_lahir']) && isset($_POST['alamat']) && isset($_POST['gol_darah']) && isset($_POST['agama']) && isset($_POST['jabatan']) && isset($_POST['pangkalan']) && isset($_POST['kwarcab']) && isset($_POST['kwarda'])){
	/*if(strlen($_POST['agenda']) < 10){
		$_SESSION['error'] = "Gagal Memposting agenda, Isi agenda Harus lebih dari 10 karakter";
		header('location: admin-agenda.php');
 		exit(); 
	}*/
	$id = @$_SESSION['id'];
	$nama = @$_POST['nama'];
	$nta = @$_POST['nta'];
	$tmpt_lahir = @$_POST['tmpt_lahir'];
	$tgl_lahir = @$_POST['tgl_lahir'];
	$alamat = @$_POST['alamat'];
	$gol_darah = @$_POST['gol_darah'];
	$agama = @$_POST['agama'];
	$jabatan = @$_POST['jabatan'];
	$pangkalan = @$_POST['pangkalan'];
	$kwarda = @$_POST['kwarda'];
	$kwarcab = @$_POST['kwarcab'];
	if(isDataBiodataNull($conn, $id)){
		$stmt = $conn->prepare("INSERT INTO biodata (id, nama, nta, tmpt_lahir, tgl_lahir, alamat, gol_darah, agama, jabatan, pangkalan, id_prop, id_kota) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
		$query = $stmt->execute(array($id, $nama, $nta, $tmpt_lahir, $tgl_lahir, $alamat, $gol_darah, $agama, $jabatan, $pangkalan, $kwarda, $kwarcab));
		if($query){
			$_SESSION['message'][] = "Berhasil Menyimpan Biodata";
			header('location: member.php');
			exit();
		}elsE{
			$_SESSION['error'] = "Gagal  Menyimpan Biodata";
			header('location: member.php');
			exit();
		}	
	} else {
		$stmt = $conn->prepare("UPDATE biodata SET nama=?, nta=?, tmpt_lahir=?, tgl_lahir=?, alamat=?, gol_darah=?, agama=?, jabatan=?, pangkalan=?, id_prop=?, id_kota=? WHERE id=?");
		$query = $stmt->execute(array($nama, $nta, $tmpt_lahir, $tgl_lahir, $alamat, $gol_darah, $agama, $jabatan, $pangkalan, $kwarda, $kwarcab,$id));
		if($query){
			$_SESSION['message'][] = "Berhasil Menyimpan Biodata";
			header('location: member.php');
			exit();
		}elsE{
			$_SESSION['error'] = "Gagal  Menyimpan Biodata";
			header('location: member.php');
			exit();
		}
	}	
	
}
?>