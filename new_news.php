<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Import CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--End-->
  
    <style>
      /* navbar */
      nav {
        background-color: black;
      }

      .navbar-brand {
        text-shadow: 2px 2px #ff3399;
        display: none;
      }

      a.navbar-brand > i {
        color: black;
      }

      ul.navbar-nav > li.nav-item > a.nav-link {
        color: #ff3399;
        font-size: 13px;
      }

      ul.navbar-nav > li.nav-item > a.nav-link:hover {
        color: #00E4FF;
      }
      
      ul.navbar-nav > li.nav-item.active > a.nav-link {
        color: #f9db24;
      }

      ul.navbar-nav > li.nav-item.active > a.nav-link:active {
        color: purple;
      }

      #navbarToggleExternalContent h4 {
          font-size: 80px;
          font-weight: bolder;
      }

       #navbarToggleExternalContent .bg {
          background-image: url("assets/img/wall/1.jpg");
      }


      .dropdown-menu.show {
        left: auto;
      }

      .carousel-caption {
        top: 30%;
      }

      .carousel {
        height: 600px;
        width: 100%;
        display: inline-block;
      }

      body {
        background-color: black;
      }

      .list-group-item {
        background-color: transparent;
        border: none;
      }

      .filter {
        background-color: black;
        height: 100%;
        width: 100%;
        opacity: 0.5;
        position: absolute;
        z-index: 1;
      }

      .card {
        background-color: transparent;
      }

      .card-title, .card-text {
        color: white;
      }

      a {
        color: #ff3399;
      }

      a:hover {
        text-decoration: none;
        color: #ff3399;
      }

      .jumbotron {
        background-image: linear-gradient(-90deg, #ff3399, #ff9900);
      }

      .jumbotron a {
        color: black;
      }

      .jumbotron a:hover {
        color: #ff3399;
      }

      .content h5 {
        color: #404040;
      }

      .content h7 {
        color: grey;
      }

      .content a {
        color: color: #ff3399;
      }

      /* Navbar */
      nav.navbar > a.navbar-brand:hover {
        color: black;
        font-weight: bolder;
        text-shadow: 2px 2px #ff3399;
      }

      /* end Navbar */
      

      /* Box Featured */
      div.row > div.col-lg-4 > h6#titlemorevideous {
        border-bottom: solid 2px #6600ff;
        border-right: solid 2px #6600ff;
      }  

      /* kolom content */
      div.row.bigpost > div.col-lg-12.bigposttitle {
        background-color: black;
      }

      div.row.newpostcolumn > div.col-8 > h5 > h7 {
        word-break: keep-all;
        text-overflow: ellipsis;
      }

      div.row.newpostcolumn > div.col-8 > h5 > h7 > a {
        color: #ff3399;
        font-weight: bolder;
        text-decoration: underline;
      }

      div.row.newpostcolumn > div.col-8 > h5 > h7 > a:hover {
        color: #cc0099;
      }
      /* end kolom content */


      /* footer */

      #footertengah > ul.list-inline > li.list-inline-item > a {
          color: #ff3399;
      }
      
      #footertengah > ul.list-inline > li.list-inline-item > a:hover {
          color: #ff0066 ;
      }

      /* end footer*/


      @media (max-width: 575px) {

        .carousel {
          height: auto;
        }

        .jumbotron {
        background-color: white;
        background-image: none;
        }

        .jumbotron h1 {
          font-size: 20px;
        }

        h1 {
          font-size: 14px;
        }

        h4 {
          font-size: 14px;
        }

        h5 {
          font-size: 11px;
        }

        #navbarToggleExternalContent {
          display: none;
        }

        /* carousel column*/
        .carouselbox {
          margin-left: 0px;
          margin-right: 0px;
        }

        hr {
          display: none;
        }
        /* end carousel */

        /* featured videos column */
          #boxvideoscontent h7 {
          font-size: 12px;
        }

        /* end featured*/

        /* more stories column*/
        button {
          font-size: 11px;
        }
        /* end stories */

        /* footer */

          #footerkiri > h1 {
          font-size: 40px;
        }

          #footertengah > ul.list-inline > li.list-inline-item > a {
          font-size: 12px;
        }

        /* end footer */
        .navbar-brand {
          display: block;
        }

        #logoimg {
          display: none;
        }
        
      }

      @media (max-width: 767px) {
        .jumbotron {
        background-color: white;
        background-image: none;
        }

        .carousel {
          height: auto;
        }

      }

      @media (min-width: 992px and max-width: 1200px) {
        .jumbotron {
        background-color: white;
        background-image: none;
        }
      }

    </style>
</head>

<?php
  include 'koneksi.php';

  if (isset($_GET['id'])) {
    $btnValue = $_GET['id'];
    if($btnValue=='TEKNOLOGI'){$ctrg=1;}
    else if($btnValue=='ESPORTS'){$ctrg=2;}
    else if($btnValue=='CULTURE'){$ctrg=3;}
    else if($btnValue=='NETIZEN'){$ctrg=4;}
  }
  $query = mysqli_query($conn, "SELECT id_post, id_gambar, titel_post, tgl_post, id_admin, isi_post, jmlh_comen FROM utama WHERE jenis_post=$ctrg ORDER BY id_post DESC ");
  $slide = mysqli_query($conn, "SELECT id_gambar FROM utama WHERE jenis_post=$ctrg ORDER BY id_post DESC LIMIT 3");
?>

<body>
<!-- JumbNavbar -->
<div class="pos-f-t">
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar navbar-dark">
     <div class="container">
      <a class="navbar-brand font-weight-bold mr-5" href="index.php">ZONETECH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a href="index.php"><img src="admin/aset_gambar/zonetechkecil.PNG" id="logoimg"></a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item pl-lg-4">
            <a class="nav-link text-center" href="new_news.php?id=TEKNOLOGI">TEKNOLOGI</a>
          </li>
          <li class="nav-item pl-lg-4">
            <a class="nav-link text-center" href="new_news.php?id=ESPORTS">E-SPORTS</a>
          </li>
          <li class="nav-item pl-lg-4">
            <a class="nav-link text-center" href="new_news.php?id=CULTURE">CULTURE</a>
          </li>
        <li class="nav-item pl-lg-4">
            <a class="nav-link text-center" href="new_news.php?id=NETIZEN">NETIZEN</a>
          </li>
          <li class="nav-item pl-lg-4">
            <a class="nav-link text-center" href="future.php">FREE GAME</a>
          </li>
           <li class="nav-item pl-lg-4">
            <a class="nav-link text-center" href="see_all.php">ALL NEWS</a>
          </li>
        </ul>
      </div>
     </div>
    </nav>
  <!-- end Nav -->
</div>
<!-- end JumbNavbar -->
<!-- Container -->
<div class="container">
  <!-- Carousel 1 -->
  <div class="row mt-3 carouselbox">
    <!-- kolom 1 -->
    <div class="col-lg-8 col-md-8 col-sm-12">
  </div>
  
    
    <!-- end kolom 5 -->
  </div>
<!-- end Carousel 1 -->

<!-- crousel  -->
<div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 pl-0 pr-0">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <!-- isi crousel  -->
    <div class="carousel-inner">
      <?php
      $i=1;
      if($slide->num_rows>0){
        while($img = $slide->fetch_array()){
          if($i==1){
          echo "
            <div class='carousel-item active'>
            <img class='img-fluid h-100 w-100' src='".substr($img[0],3)."' alt='First slide' style='object-fit: cover;'>
            </div>";
          }else if($i==2){
            echo "
              <div class='carousel-item'>
              <img class='img-fluid h-100 w-100' src='".substr($img[0],3)."' alt='Second slide' style='object-fit: cover;'>
              </div>";
          }else{
            echo "
              <div class='carousel-item'>
              <img class='img-fluid h-100 w-100' src='".substr($img[0],3)."' alt='Third slide' style='object-fit: cover;'>
            </div>";
          }
          $i++;
        }
      }?>
    </div>
  <!-- item crousel end -->
  <!-- crousel button -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!-- crousel buto end -->
</div>
      </div>
    </div>
    <div style="border: solid 2px; border-image:  linear-gradient(-90deg, #ff3399, #ff9900) 1;">
    </div><br><br>
<!-- End crousel -->

<!-- Content -->
<div class="row content">

  <div class="col-lg-8 col-md-12 col-sm-12">
  <?php include 'koneksi.php'; 
    $query2 = mysqli_query($conn, "SELECT id_post, id_gambar, titel_post, tgl_post, id_admin, isi_post, jmlh_comen FROM utama WHERE jenis_post=$ctrg ORDER BY id_post DESC LIMIT 14");
      if ($query2->num_rows > 0) {

      while ($row = $query2->fetch_array()) {
      ?>
    <div class="row mt-3 mb-2 newpostcolumn d-flex align-content-stretch">
      <div class="col-4 pr-0 pt-2 pt-lg-0"  style="border-top: solid 1px #e6e6e6;">
        <img src="<?php echo 'tumb'.substr($row[1], 14) ;?>" alt="" class="img-fluid mt-lg-3 h-100 w-100" style="object-fit: cover;">
      </div>
      <div class="col-8" style="border-top: solid 1px #e6e6e6;">
        <h5 class="font-weight-bold mt-2 text-justify" style="color: white;"><?php echo $row[2];?><br>
        <h7 style="font-size: 11px;">By <a href=""><?php echo $row[4] ; ?></a> | <?php echo $row[3] ; ?> | <?php echo $row[6] ; ?> Comments</h7><br> 
        <h7 style="font-size: 14px" ><?php echo substr($row[5], 0, 250) ?><a href="view.php?id=<?php echo $row[0]?>"> <br>READ MORE</a></h7> 
        </h5>
        
      </div>
    </div>
  <?php }} ?>

 

  </div>
    <div class="col-lg-4 col-md-12 mt-3 pl-lg-5 mb-0">
    <div class="col pl-lg-0 pt-0" style="color: #ff3399;">
    <h6 class="text-left font-weight-bold pr-5 pl-1 pb-2 mr-3 ml-3 mt-0 pt-0 pl-3 d-inline-block mr-3 mb-0" style="color: #ff3399; border-bottom: solid 2px #6600ff; border-left: solid 2px #6600ff;">FEATURED VIDEO</h6>
    </div>
    <div class="row mr-3 ml-0 pt-3 mt-0" id="boxvideoscontent">


      <!-- loping vidio  -->
 <?php 
      include 'koneksi.php'; 
      $query3 = mysqli_query($conn, "SELECT id_admin , tgl,titel_vidio, link_vidio FROM vidio where category = $ctrg LIMIT 10");
      if ($query3->num_rows > 0) {

      while ($row = $query3->fetch_array()) {
      ?>

      <div class="col-12 col-lg-12 col-md-6 col-sm-6 mb-2">
      <iframe
      <?php $vidio = substr($row[3],32);?>
      src='https://www.youtube.com/embed/<?php echo $vidio ; ?>' style="width: 100%;">
      </iframe> 

      <h6 class="text-left font-weight-bold mb-0"> " <?php echo$row[2] ; ?> "</h6>
      <h7><?php echo $row[1]; ?> BY <a href=""><?php echo $row[0] ; ?> </a></h7>
      </div>
        <?php } ?>


<?php 
  
  // end1 if
}

// end while
 ?>
<!-- loping vidio end  -->


  </div>
      <h6 class="text-right pr-lg-2 font-weight-bold pt-lg-2 pb-lg-2 pl-lg-2 ml-lg-3 mr-lg-3 float-right pull-right" id="titlemorevideous"><a href="">MORE VIDEO</a></h6>
  </div>

  <!-- More Stories -->
    <div class="col pt-sm-3 pl-sm-0 pr-sm-0 pl-lg-3 pr-lg-3">
        <button class="btn btn-block p-lg-3 p-sm-3" style="background-color: #ff3399; border-radius: 0; color: white;"><h6 class="mb-0">MORE STORIES</h6></button>

         <div class="row bigpost ml-lg-0 mr-lg-0 mb-lg-2">
  <div class="card-body table-responsive p-0" style="height: 720px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>ID Post</th>
                      <th>Title</th>
                      <th>Date</th>
                      <th>Admin Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      
                      if($query->num_rows > 0){
                        while ($row = $query->fetch_array()) {
                          echo "
                          <tr>
                            <td>".$row[0]."</td>
                            <td>".$row[2]."</td>
                            <td>".$row[3]."</td>
                            <td>".$row[4]."</td>
                            <td><div class='row'>
                              <div class='col-sm-6'>
                                <form action='view.php?id=".$row[0]."' method='post'><button class='btn btn-sm btn-warning'>Open</button>
                                <input type='hidden' name='btnEdit' value='".$row[0]."'>
                              </form></div>
                              </div>
                            </td>
                          </tr>
                          ";
                        }
                      }
                    ?>
                  </tbody>
                </table>
              </div> 
  </div>
    </div>
  <!-- End -->

</div>
<!-- end Content -->



<!-- Footer -->
<div class="row p-lg-5 p-md-5 p-sm-5 pt-3">
  <div class="col-lg-3 col-sm-12" id="footerkiri">
    <h1 class="text-white text-center font-weight-bold"><img src=""></h1>
  </div>
  <div class="col-lg-7 col-sm-12" id="footertengah">     
    <ul class="list-inline text-center">
      <li class="list-inline-item"><a href="#">Therm of Use</a></li>
      <li class="list-inline-item"><a href="#">Privacy Notice</a></li>
      <li class="list-inline-item"><a href="#">Cookie Policy</li>
      <li class="list-inline-item"><a href="">Do not Sell my info</a></li>
      <li class="list-inline-item"><a href="">Coomunication Preferences</a></li>
      <li class="list-inline-item"><a href="">Licensing FAQ</a></li>
      <li class="list-inline-item"><a href="">Accessbility</a></li>
      <li class="list-inline-item"><a href="">Platform Status</a></li>
      <li class="list-inline-item"><a href="">Contact</a></li>
      <li class="list-inline-item"><a href="">Tip US</a></li>
    </ul>
  </div>
  <div class="col-lg-2 col-sm-12" id="footerkanan">
    
  </div>
</div>
<!-- End Footer -->


</div>
<!-- end Container -->
</body>
<!-- import javascript -->
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/popper.js"></script> 
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>

<!-- javascript menyembunyikan navbar brand -->
<script>

</script>
<!-- end -->
</html>

