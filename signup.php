<?php
	require_once ('libs/init.php');
	require_once ('libs/Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/css-account.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		<title>Registrasi Anggota</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	            	<div class="panel-title text-center">
	               		<h1 class="title">Registrasi Anggota</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form action="signup-proses.php" class="form-horizontal" method="post">
						<?php 
							showMessage();
						?>
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email, ex:widyawiratama@gmail.com"/ required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
									<input type="text" class="form-control" pattern="[a-zA-Z0-9]+" name="username" id="username"  placeholder="Enter your Username"/ autofocus required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
									<input type="password" class="form-control" pattern="[a-zA-Z0-9]+" name="password" id="password"  placeholder="Enter your Password"/ autofocus required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
									<input type="password" class="form-control" pattern="[a-zA-Z0-9]+" name="confirm" id="confirm"  placeholder="Confirm your Password"/ required>
								</div>
							</div>
						</div>

						<div class="form-group" align="center">
							<input type="submit" name="registrasi" class="btn btn-primary btn-lg btn-block login-button" value="Register">
						</div>
						<div class="login-register">
				            Jika sudah bergabung silahkan <a href="signin.php">Login</a><br>
				            <a href="index.php">Beranda</a>
				         </div>
					</form>
					
				</div>
			</div>
		</div>
	</body>
	<script src="js/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="js/bootstrap.js"></script>
</html>