<?php
  require ('libs/init.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Anggota</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css-account.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h1 class="title">Login Anggota</h1>
                    <hr />
                  </div>
              </div> 
        <div class="main-login main-center">
          <form class="form-horizontal" action="signin-proses.php" method="post">
          <?php
            showMessage();
          ?>
            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Username</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                  <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/ autofocus required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/ autofocus required>
                </div>
              </div>
            </div>
            <input type="checkbox" name="remember-me"> Remember Me
            <div class="form-group" align="center"><br><br>
              <input type="submit" name="login" class="btn btn-primary btn-lg btn-block login-button" value="Login">
            </div>
            <div class="login-register">
                    Belum Mendaftar Menjadi Anggota ? <a href="signup.php">Registrasi</a><br>
                    <a href="index.php">Beranda</a>
                 </div>
          </form>
          
        </div>
      </div>
    </div>
  </body>
</html>