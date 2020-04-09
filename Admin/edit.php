<!DOCTYPE html>
<?php session_start(); ?>
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

<?php
  include '../koneksi.php'; 
  $id_post = $_POST['btnEdit'];

  $s = mysqli_query($conn, "(SELECT * FROM utama WHERE id_post='$id_post')");
  $result = mysqli_fetch_array($s);
  $title = $result[3];
  $ctgr = $result[2];
  $admin = $result[6];
  $isi = $result[4];
  $gmbr = $result[8]; 

  switch ($ctgr) {
    case 1:
      $ctgrName = "Tech";
      break;
    case 2:
      $ctgrName = "Science";
      break;
    case 3:
      $ctgrName = "Entertaiment";
      break;
    case 4:
      $ctgrName = "Economy";
      break;
    default:
      $ctgrName = "Health";
      break;
  }
?>


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
          <i class="far fa-comments"></i>
          
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
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Zone Tech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      < <a href="index.php" class="brand-link">
      <img src="aset_gambar/zonetech.PNG" alt="AdminLTE Logo" class=""
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
                <a href="content.php" class="nav-link active">
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
                <a href="komen.php" class="nav-link">
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
            <h1 class="m-0 text-dark">Update Content</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <form action="update.php" method="post" enctype="multipart/form-data">
             <div class="col-sm-12">
                
                <label style="text-align: center;">Title Content</label>
                  <input type="text" class="form-control" name="newtitle" id="newtitle" value="<?php echo $title ;?>" required>
                  <input type="hidden" name="idp" value="<?php echo $id_post;?>">
              </div><br>
              <!-- end div titel content -->
        <div class="row col-md-12">
                 <div class="col-md-6"> 
                    <div class="card">
                       <div class="custom-file">
                      <input type="file" class="custom-file-input" accept=".png, .jpg, .gif, .bmp, .jpeg" name="fileToUpload" id="fileToUpload">
                      <label class="custom-file-label" for="fileToUpload">Choose file</label>                      
                    </div>
                     </div>
                 </div>
                 <!-- div 1 -->
                 <div class=" col-md-6">    
                    </div>
                 </div>
                 <!-- div 211 -->
        
              <!-- end row -->
<div class="row col-md-12">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Admin</label>
                        <select class="form-control" name="ddAdmin" id="ddAdmin">
                          <option value="<?php echo $admin ;?>"><?php echo $admin ;?></option>
                          <option value="admin1">admin 1</option>
                          <option value="admin2">admin 2</option>
                          <option value="admin3">admin 3</option>
                          <option value="admin4">admin 4</option>
                          <option value="admin5">admin 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Select category</label>
                        <select class="form-control" name="ddCategory" id="ddCategory">
                          <option value="<?php echo $ctgr ;?>"><?php echo $ctgrName ;?></option>
                          <option value="1">Tech</option>
                          <option value="2">Science</option>
                          <option value="3">Entertaiment</option>
                          <option value="4">Economy</option>
                          <option value="5">Health</option>
                        </select>
                      </div>
                    </div>
                  </div>

        <div class="row col-md-12">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <label style="align-self: center;">Isi Content</label>
                </div>
                 <div class="card-body pad">
              <div class="mb-3">
                <textarea class="textarea" name="isiText" id="isiText"
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $isi ;?></textarea>
              </div>
              </div><button class="btn btn-primary" name="update" id="update">Update</button>
            </div>
            <div class="col-md-12">
            
            </div><br>
            <!-- col -->
        </div>
          <!-- ./col -->
        </div>
   

       
      </div><!-- /.container-fluid -->
      </form>


    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
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

</body>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="/plugins/summernote/summernote-bs4.min.js"></script>

<script>
// Add the following code if you want the name of the file appear on select

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</html>
