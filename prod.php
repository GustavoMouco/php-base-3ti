<?php
include 'connect.php';
include 'checkLogin.php';
if (isset($_POST['sub-add']) || isset($_POST['sub-edit'])) {
  $t = $_POST['text'];
  $u = $_POST['user'];
  $p = $_POST['pass'];
  if ($_FILES['f1']['name']) {
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/" . $_FILES['f1']['name']);
    $img = "image/" . $_FILES['f1']['name'];
  } else {
    $img = $_POST['img1'];
  }
if (isset($_POST['sub-edit'])){
  $m = "update produtos set produto='$t',preco='$u',quantidade='$p',fProduto='$img' where id='$_SESSION[id]'";
  mysqli_query($con, $m);
}
if (isset($_POST['sub-add'])) {
  $i = "insert into produtos(produto,preco,quantidade,fProduto)values('$t','$u','$p','$img')";
  mysqli_query($con, $i);
}

}
$s = "select*from produtos where id='$_SESSION[id]'";
$qu = mysqli_query($con, $s);
$prod = mysqli_fetch_assoc($qu);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
     
      </ul>

      <!-- Right navbar links -->
      <?php include 'componentes/nav.php';?>
        <!-- Navbar Search -->
    


    <!-- Main Sidebar Container -->
    <?php include 'componentes/aside.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Produtos cadastrados</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item"><a href="registroProduto.php">Registrar Produto</a></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
        
              <!-- /.card -->

            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Usuarios cadastrados</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body p-0">
                <table class="table table-striped projects">
                  <div class="tab-content">
                 
                  <div class="active tab-pane" id="activity">
                    
                    <?php
                  $sq="select * from produtos";
                  $qu=mysqli_query($con,$sq);
                  while($prod=  mysqli_fetch_assoc($qu)){
                    ?>
                    
                  <tr>
                      <td>
                          Produto    
                      </td>
                      <td>
                          <a>
                          <?php echo $prod['produto'];?>
                          </a>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="img-circle img-size-32 mr-2" src="<?php echo $prod['fProduto'];?>">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          
                              <?php echo $prod['preco'];?>
                          
                        
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success"><?php echo $prod['quantidade'];?></span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="RegProd.php?idProd=<?php echo $prod['id'];?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>
                          <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $prod['id'];?>">
                              <i class="fas fa-trash">
                              </i>
                              Deletar
                          </a>
                      </td>
                  </tr>
                  
                  <?php
                  }
                  ?>
                  </table>
                    </div>


                 

                    <!-- edit abaixo -->

                 

                  </div>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="./AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="./AdminLTE-3.2.0/addist/js/demo.js"></script>
</body>

</html>
