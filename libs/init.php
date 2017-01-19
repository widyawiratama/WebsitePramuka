<?php
session_start();

function redirectLogin(){
	if(!isset($_SESSION['id']) && !isset($_SESSION['level'])){
		header('location: masuk.php');
	}
}

function showMessage(){
	if(isset($_SESSION['message']) && is_array($_SESSION['message'])){
		foreach($_SESSION['message'] as $k=>$err){
			echo '<div class="alert alert-info"><center>'.$err.'</center></div>';
			unset($_SESSION['message'][$k]);
		}
	}
	/*if(isset($_SESSION['error']) && is_array($_SESSION['error'])){
		foreach($_SESSION['error'] as $k=>$err){
			echo '<div class="alert alert-danger">'.$err.'</div>';
			unset($_SESSION['error'][$k]);
		}
	}*/
	if(isset($_SESSION['error'])){
		echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
			unset($_SESSION['error']);
	}
}

?>
