<?php
    include 'connect.php';
    include 'checkLogin.php';
    include 'componentes/reg.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'componentes/head.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
    <?php include 'componentes/nav.php';?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php include 'componentes/aside.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item"><a href="Produto.php">Produtos</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Welcome</h3>

                <p><?php echo $f['name'];?></p>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
         
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                
                <?php

              // $queryone="SELECT COUNT(id) as total FROM reg";
              // $result = mysqli_query($con,$queryone);
              // $row = mysqli_fetch_assoc($result, MYSQLI_NUM);
              // echo $row['total'];

              $query = $con->query("SELECT count(`id`) as `total` FROM reg");
              $row = $query->fetch_assoc();
              echo $row['total'];

                    ?>
      
                </h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="profile.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
            <div class="card-body pb-0">
          <div class="row">
          
        
            
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Produto
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Pizza</b></h2>
                      <p class="text-muted text-sm"><b>Pizzas </b> de varios sabores com muito recheio e crocancia </p>
                     
                    </div>
                    <div class="col-5 text-center">
                      <img src="Pizza.jfif" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="cardapio.php" class="btn btn-sm btn-primary">
                      <i ></i> Ver Cardapio
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Produto
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Spaghetti</b></h2>
                      <p class="text-muted text-sm"><b>Spaghettis </b> com diversos molhos </p>
                     
                    </div>
                    <div class="col-5 text-center">
                      <img src="spaghetti.jfif"  class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="cardapio.php" class="btn btn-sm btn-primary">
                      <i ></i> Ver Cardapio
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Produto
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Pasta Italiana</b></h2>
                      <p class="text-muted text-sm"><b>Pastas </b> com os melhores molhos</p>
                     
                    </div>
                    <div class="col-5 text-center">
                      <img src="pasta.jfif"  class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="cardapio.php" class="btn btn-sm btn-primary">
                      <i ></i> Ver Cardapio
                    </a>
                  </div>
                </div>
              </div>
            </div>
       
           
           
          
       
        
            
          </div>
        </div>
                <!-- /.d-flex -->

            <!-- /.card -->

           
          </div>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->

            <!-- TO DO List -->
           
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
    <?php include 'componentes/footer.php';?>
</body>
</html>