<?php
require_once 'header-admin.php';

if(isset($_POST['judul_agenda']) && isset($_POST['agenda']) && isset($_POST['tgl_agenda'])){
	if(strlen($_POST['agenda']) < 10){
		$_SESSION['error'] = "Gagal Memposting agenda, Isi agenda Harus lebih dari 10 karakter";
		header('location: admin-agenda.php');
 		exit(); 
	}
	$id = @$_SESSION['id'];
	$judul_agenda = @$_POST['judul_agenda'];
	$agenda = @$_POST['agenda'];
	$tgl_agenda = @$_POST['tgl_agenda'];
		
	$stmt = $conn->prepare("INSERT INTO tb_agenda (id, judul_agenda, agenda, tgl_agenda, tgl_post_agenda) VALUES (?, ?, ?, ?, now())");
	$query = $stmt->execute(array($id, $judul_agenda, $agenda, $tgl_agenda));
	if($query){
		$_SESSION['message'][] = "Berhasil Memposting agenda";
		header('location: admin-agenda.php');
		exit();
	}elsE{
		$_SESSION['error'] = "Gagal Memposting agenda";
		header('location: admin-agenda.php');
 		exit();
	}
}
?>

