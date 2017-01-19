<?php
$conn = new PDO('mysql:host=localhost;dbname=pramuka', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 include 'paging.php';
 $pag = new pag($conn);
?>