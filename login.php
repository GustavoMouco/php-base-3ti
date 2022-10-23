<?php

include'connect.php';

$Error_message = '';
if(isset($_POST['sub'])){
    $u=$_POST['Email'];
    $p=$_POST['Password'];
    $s= "select * from reg where Email='$u' and password= '$p'";   
   $qu= mysqli_query($con, $s);
   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['id']=$f['id'];
      header ('location:home.php');
   }
   else{
       $Error_message = 'Username or password does not exist';
   }
  
}
?>
<!-- <html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/commun.css">
    </head>
    <body>
        <div class="container-login">
            
            <h1>Login</h1>
            <form method="POST" enctype="multipart/form-data">

                <div class="dados-container">
                    <label>Username</label> 
                    <br>
                    <input type="text" name="user" class="username">
                    <br>
                    <br>
                    <label>Password</label> 
                    <br>
                    <input type="password" name="pass" class="password">
                            
                    <br>
                    <br>
                    <input type="submit" name="sub" value="submit" class="submit">

                    <p>
                        <?//php echo $Error_message ?>
                    </p>
                </div>            
            </form>

        </div>
    </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Sapori</b>D'Italia</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Faça seu login</p>

      <form enctype="multipart/form-data" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" name="Email"> 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <!-- compo -->
          <input type="password" name="Password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          </div>
 	<div class="col-4">
            <button type="submit" name="sub" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
        <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./registro.php" class="nav-link active">
                  <p>Registre-se aqui
                  </p>
                </a>
              </li>
      </form>

 
      <!-- /.social-auth-links -->

     
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<!-- <script src="./AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="./AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="./AdminLTE-3.2.0/dist/js/adminlte.min.js"></script> -->
</body>
</html>
