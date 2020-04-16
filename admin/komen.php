<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Zone Tech</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         
          
        </a>
       
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
     <a href="index.php" class="brand-link">
      <img src="aset_gambar/zonetechkecilbgt.png" alt="AdminLTE Logo" class=""
           style="opacity: .8">
          <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="">
        </div>
        <div class="info">
          <a href="#" class="d-block"> </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="content.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Conten</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="vidio.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Conten Vidio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="komen.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Coment</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Comment User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
          <!-- card 1 -->
    <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Best Post</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 360;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>ID post</th>
                      <th>jumlah coment</th>
                      
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php       $count=0; ?>
                    <?php
                      include '../koneksi.php';

                      $query = mysqli_query($conn, "SELECT id_coment, count(*)  from coment group by id_post order by count(*) desc   ");   
                    
                      // if pembatsasan
               
                        # code...
                     print_r($query);
                        for ($i=5; $query->num_rows > $i  ; ) {  
                        while ($row = $query->fetch_array()) {
                               if ( $count < 7) {                 

                     $count++;

                          echo "
                          <tr>
                            <td>".$row[0]."</td>
                            <td>".$row[1]."</td>
                            

                            <td><div class='row'>
                              <div class='col-sm-12'>
                                <form action='post_up.php' name='btnEdit21' method='post'><button class='btn btn-sm btn-warning'>Top News Update </button>
                                <input type='hidden' name='btnEdit21' value='".$row[0]."'>
                              </form></div>
                            </td>
                          </tr>
                          ";
                        }
                        $i++;
                      }
                      // pembatas
                       }
                      // pembatsasan 5
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- card 1 end -->


          <!-- card 2  -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">New Post</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 720px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>ID comment</th>
                      <th>ID post</th>
                      <th>ID User</th>
                      <th>user</th>
                      <th>Comment</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      include '../koneksi.php';

                      $query = mysqli_query($conn, "SELECT id_coment, id_post, nama_komen, isi_comen, id_user FROM coment");
                      if($query->num_rows > 0){
                        while ($row = $query->fetch_array()) {
                          echo "
                          <tr>
                            <td>".$row[0]."</td>
                            <td>".$row[1]."</td>
                            <td>".$row[4]."</td>
                            <td>".$row[2]."</td>
                            <td>".$row[3]."</td>
                            <td><div class='row'>
                            
                            </td>
                          </tr>
                          ";
                        }
                      }
                    ?>
                  </tbody>
                </table>
                <!-- script jaadi top news  -->
            



                <!-- end script -->
              </div>  
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
      <!-- /.row tabel -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-center d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; Zone Tech 2020 .</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
