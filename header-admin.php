<?php 
require ('libs/init.php');
require_once ('libs/Connection.php');
require_once ('libs/function.php');
redirectLogin();

$stmt = $conn->prepare('SELECT * FROM akun WHERE id = :id');
$stmt->execute([
	':id'=>$_SESSION['id']
]);


$user = $stmt->fetch(PDO::FETCH_OBJ);
if(!$user){
	header('location: signin.php');
}

?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css-dashboard.css" rel="stylesheet">
    <link href="css/bootstrap-tagsinput.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="js/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="css/jquery.datetimepicker.css">
        <script src="js/dashboard.js"></script>
        <script src="ckeditor/ckeditor.js"></script>
        <script src="js/bootstrap-tagsinput.min.js"></script>
        <script type="text/javascript">
$(document).ready(function()
{       
    // function to get all records from table
    function getAll(){
        
        $.ajax
        ({
            url: 'getKota.php',
            data: 'action=showAll',
            cache: false,
            success: function(r)
            {
                $("#display").html(r);
            }
        });         
    }
    
    getAll();
    // function to get all records from table
    
    
    // code to get all records from table via select box
    $("#getKota").change(function()
    {               
        var id_propinsi = $(this).find(":selected").val();

        var dataString = 'action='+ id_propinsi;
                
        $.ajax
        ({
            url: 'getKota.php',
            data: dataString,
            cache: false,
            success: function(r)
            {
                $("#display").html(r);
            } 
        });
    })
    // code to get all records from table via select box
});
</script>
</head>
<body>
    <nav class="navbar-default">
        <div class="container-fluid">
            <button type="button" class="btn btn-default btn-lg" onclick="openNav()">
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </button>          
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $user->email?><span class="caret"></span></a>
                  <ul class="dropdown-menu forAnimate" role="menu">
                    <li><a href="admin-biodata.php">Biodata</a></li>
                    <li><a href="admin-ubah-password.php">Ubah Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>
            </ul>
        </div>
    </nav>   

    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="admin.php">Home</a>
        <a href="admin-info-akun.php">Info Akun</a>
        <a href="admin-berita.php">Berita</a>        
        <a href="admin-agenda.php">Agenda</a>
        <a href="admin-regu.php">Regu</a>
        <div >
            
        </div>
    </div>
    <div>
        <?php ShowMessage(); ?>
    </div>