<?php
require_once('libs/init.php');

unset($_SESSION['id']);
unset($_SESSION['message']);
unset($_SESSION['error']);
header('location: signin.php');
?>