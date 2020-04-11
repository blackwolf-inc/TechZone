<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Import CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--End-->
  
    <style>

      /*Jumbotron Top*/
      div#navbarToggleExternalContent > div.bg > div.row > div.col > h4 {
        text-shadow: 3px 3px 3px black;
      }

      #navbarToggleExternalContent .bg {
        background-image: url("assets/img/wall/1.jpg");
        padding: 100px;
      }

      /* Navbar */
      ul.navbar-nav > li.nav-item > a.nav-link.active {
        color: #f9db24;
        font-weight: bold;
      }

      ul.navbar-nav > li.nav-item > a.nav-link.active:hover {
        color: #f9db24;
        font-weight: normal;
      }

      ul.navbar-nav > li.nav-item > a.nav-link {
        color: #ffa500;
        font-weight: bold;
      }

       ul.navbar-nav > li.nav-item > a.nav-link:hover {
        color: #b29a05;
        font-weight: normal;
      }

      ul.navbar-nav > li.nav-item > a > i {
        font-size: 21px;
        color: #FF00BA;
      }

      ul.navbar-nav > li.nav-item > a > i:hover {
        color: #f9db24;
      }

      /* Carousel */

      div.row.mt-3.carouselbox > div.col-lg-8 > div.row > div.col.mt-2 > h5.text-white > a {
        color: #ffa500;
      }
      
      div.row.mt-3.carouselbox > div.col-lg-8 > div.row > div.col.mt-2 > h5.text-white > a:hover {
        color: #ff1ea7;
      }

      div.row.mt-3.carouselbox > div.col-lg-4 > div.row > div.col-lg-12 > h5.text-white > a {
        color: #ffa500;
        text-transform: lowercase;
      }

      div.row.mt-3.carouselbox > div.col-lg-4 > div.row > div.col-lg-12 > h5.text-white > a:hover {
        color: #ff1ea7;
      }

      div.row.mt-3.carouselbox > div.col-md-4 > div.row > div.col-lg-12 > h5.text-white > a {
        color: #ffa500;
      }

      div.row.mt-3.carouselbox > div.col-md-8 > div.row > div.col > h5.text-white > a {
        color: #ffa500;
        text-transform: lowercase;
      }

      div.row.mt-0.carouselbox > div.col-lg-4 > div.row > div.col-lg-12 > h5.text-white > a {
        color: #ffa500;
        text-transform: lowercase;
      }

       div.row.mt-0.carouselbox > div.col-lg-4 > div.row > div.col-lg-12 > h5.text-white > a:hover {
        color: #ff1ea7;
      }

      /* Jumbotron Mid */

      div.jumbotron > div.container > div.row > div.col-6 > h1 > a:hover {
        color: #a5126c;
        transition: 2s;
      }

      .jumbotron {
        background-image: linear-gradient(-90deg, #ff3399, #ff9900);
      }

      div.jumbotron:hover {
        background-image: linear-gradient(-90deg, #ff9900, #ff3399);
      }

      div.jumbotron > div.container > div.row > div.col-6 > h5 > a:hover {
        color: white;
      }

      /*Content*/
      div.row.content > div.col > button.btn.btn-block {
       background-color: #ff1ea7;
      }



      div.row.content > div.col > button.btn.btn-block:hover {
       background-color: #a5126c;
      }

      /* Post Content */
      
      div.row.newpostcolumn > div.col-4 > img.img-fluid {
        display: block;
      }
      
      div.row > div.col-8 > h5 > a > button {
        background-color: #FFF000;
        border: solid 1px #FF00FC;
        color: #FF00FC;
        letter-spacing: 2px;
        border-radius: 0;
      }

      div.row > div.col-8 > h5 > a > button:hover {
        background-color: white;
      }


      /* Footer */

      div#footerkiri > h1 {
        font-size: 20px;
        text-align: left;
      }

      div#footerkiri > hr {
        width: 75%;
        color: white;
        size: 10;
        border: 0;
      }

      div#footerkiri > h6 {
        color: #e6e6e6;
        font-weight: 100;
        padding-top: 10px;
        border-top: dashed 1px #ff9900;
      }

      div#footertengah > h1 {
        font-size: 20px;
      }

      div#footertengah > ul {
        font-size: 20px;
        font-weight: 100;
      }

      div#footertengah > ul > li > a {
        font-size: 16px;
      }

      div#footerkanan > a > i {
        font-size: 25px;
        color: #ff3399;
      }

      div#footerkanan > a > i:hover {
        font-size: 25px;
        color: #F8D200;
      }

      #footertengah > ul.list-inline > li.list-inline-item > a {
          color: #e6e6e6;
      }
      
      #footertengah > ul.list-inline > li.list-inline-item > a:hover {
          color: #ff3399 ;
      }

      #navbarToggleExternalContent h4 {
          font-size: 80px;
          font-weight: bolder;
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
        color: white;
      }

      a:hover {
        text-decoration: none;
        color: #ff3399;
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
      
      ul.navbar-nav > li.nav-item > a.nav-link:hover {
        color: #ff3399;
      }

      /* end Navbar */
      
      /* kolom content */
      div.row.bigpost > div.col-lg-12.bigposttitle {
        background-color: black;
      }

      div.row.newpostcolumn > div.col-8 > h5 > h7 > a {
        color: #ff3399;
      }

      div.row.newpostcolumn > div.col-8 > h5 > h7 > a:hover {
        color: #cc0099;
      }
      /* end kolom content */

      /* Box Videos*/

      div#boxvideoscontent > div.col-12 > h7 {
        font-size: 12px;
      }

      div#boxvideoscontent > div.col-12 > h7 > a {
        color: #ff3399;
      }

      div#boxvideoscontent > div.col-12 > h7 > a:hover {
        color: #cc0099;
      }
      
      div.col-lg-4 > div#titlekolfeaturedvideo > h6#titlefeaturedvideo {
        color: #ff3399; 
        border-bottom: solid 2px #6600ff; 
        border-left: solid 2px #6600ff;
      }

      h6#titlemorevideous > a {
        color: #ff3399;
      }

      h6#titlemorevideous > a:hover {
        color: #cc0099;
      }
      /* end Box Videos*/


      @media (max-width: 575px) {

        div.col-lg-4 > div#titlekolfeaturedvideo > h6#titlefeaturedvideo {
        border: none;
        }

        /*  Navbar Brand */

        .navbar-brand {
          display: none;
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

        div#footertengah > h1 {
            display: none;
        }

        div#footerkiri > h6 {
            display: none;
        }

        div#footerkiri > h1 {
            font-size: 30px;
            text-align: center;
            color: black;
            text-shadow: 2px 2px #FC00FF;
        }

        div#footerkanan > a > i {
            padding-right: 20px;
            padding-bottom: 20px;
        }
        
      }

      @media (max-width: 767px) {
        .jumbotron {
        background-color: white;
        background-image: none;
        }

        div.col-lg-4 > div#titlekolfeaturedvideo > h6#titlefeaturedvideo {
        border: none;
        }

        /* footer */

        div#footerkiri > h1 {
            font-size: 30px;
            text-align: center;
            color: black;
            text-shadow: 2px 2px #FC00FF;
        }

        div#footerkiri > h6 {
          display: none;
        }

        div#footerkiri > h6 {
          text-align: center;
        }

        div#footertengah > h1 {
            display: none;
        }

        div#footerkanan > a > i {
            padding-right: 20px;
            padding-left: 20px;
            padding-bottom: 30px;
        }


      }

      @media (max-width: 992px) {
        div.col-lg-4 > div#titlekolfeaturedvideo > h6#titlefeaturedvideo {
        border: none;
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

<body>
<!-- JumbNavbar -->
<div class="pos-f-t">
  <div id="navbarToggleExternalContent">
    <div class="bg">
      <div class="row" style="display: block;">
        <div class="col"><h4 class="text-center text-white"><i>TECHZONE</i></h4></div>
        <div class="col"><h7 class="text-center text-white" style="display: block;"><?php echo date("l M Y"); ?> <?php include 'jam.php'; ?> | THE MAC FOR MOST</h7></div>
      </div>
    </div>
  </div>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand font-weight-bold" href="#" style="display: none;"><i>TECHZONE</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav nav-justified w-50 m-auto">

      <li class="nav-item ">
        <a class="nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="new_news.php">NEW NEWS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="future.php">FREE GAME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="see_all.php">SEE ALL NEWS</a>
      </li>
       <li class="nav-item pt-2">
        <a href=""><i class="fa fa-facebook-f mr-lg-3"></i></a>
        <a href="https://twitter.com/techzone_05"><i class="fa fa-twitter mr-lg-3"></i></a>
        <a href=" https://www.instagram.com/techzone_05/"><i class="fa fa-instagram mr-lg-3"></i></a>
      </li>
    </ul>
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
    <div class="col-lg-8 col-md-8 col-sm-12" style="border: solid 2px; border-image:  linear-gradient(-90deg, #ff3399, #ff9900) 1;">
      <div class="row">
        <div class="col p-0" id="kolomcarousel1">
          <img src="assets/img/TopPost/1.jpg" alt="" class="img-fluid h-100">
        </div>
        <div class="col mt-2 p-lg-4 pl-lg-4">
          <h1 class="text-white font-weight-bold text-uppercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, earum!</a><br><h5 class="text-white" style="display: inline-block;">BY <a href="">Lorem ipsum dolor.</a></h5></h1>
          <hr style="border: 1px solid #ff3399; width: 50%; position: absolute; bottom: auto; right: 0; margin-top: 0px;">
        </div>
      </div>
    </div>
    <!-- end kolom 1 -->

    <!-- kolom 2 -->
    <div class="col-lg-4 col-md-4 col-sm-6" style="border: solid 2px; border-image:  linear-gradient(-90deg, #ff3399, #ff9900) 1;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="assets/img/TopPost/2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col p-lg-4 pl-lg-4">
          <h4 class="font-weight-bold text-lowercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a><br><h5 class="text-white">BY <a href="">ANONIM</a></h5></h4>
        </div>
      </div>
    </div>
    <!-- end kolom 2 -->

    <!-- kolom 3 -->
    <div class="col-md-4 col-sm-6 col-lg-4" style="border: solid 2px; border-image:  linear-gradient(-90deg, #ff3399, #ff9900) 1;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="assets/img/TopPost/3.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col p-lg-4 pl-lg-4">
          <h4 class="text-white font-weight-bold text-lowercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a><br><h5 class="text-white">BY <a href="" >ANONIM</a></h5></h4>
        </div>
      </div>
    </div>
    <!-- end kolom 3 -->

    <!-- kolom 4 -->
    <div class="col-md-8 col-lg-8" style="border: solid 2px; border-image:  linear-gradient(-90deg, #ff3399, #ff9900) 1;">
      <div class="row">
        <div class="col p-0" id="kolomcarousel2">
          <img src="assets/img/TopPost/3.jpg" alt="" class="img-fluid h-100">
        </div>
        <div class="col p-lg-4 pl-lg-4">
          <h1 class="text-white font-weight-bold text-uppercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, earum!</a><br><h5 class="text-white">BY <a href="">ANONIM</a></h5></h1>
          <hr style="border: 1px solid #ff3399; width: 50%; position: absolute; bottom: auto; right: 0; margin-top: 0px;">
        </div>
      </div>
    </div>
    <!-- end kolom 4 -->
  </div>
  <div class="row mt-0 carouselbox">
    <!-- kolom 5 -->
    <div class="col-lg-4 col-md-4 col-sm-4" style="border: solid 2px; border-image:  linear-gradient(-90deg, #ff3399, #ff9900) 1;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="assets/img/TopPost/5.jpg" alt="" class="img-fluid" style="width: 100%; max-height: 400px;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col p-lg-4 pl-lg-4">
           <h4 class="text-white font-weight-bold text-lowercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a><br><h5 class="text-white">BY <a href="" >ANONIM</a></h5></h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4" style="border: solid 2px; border-image:  linear-gradient(-90deg, #ff3399, #ff9900) 1;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="assets/img/TopPost/6.jpg" alt="" class="img-fluid" style="width: 100%; max-height: 400px;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col p-lg-4 pl-lg-4">
           <h4 class="text-white font-weight-bold text-lowercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a><br><h5 class="text-white">BY <a href="" >ANONIM</a></h5></h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4" style="border: solid 2px; border-image:  linear-gradient(-90deg, #ff3399, #ff9900) 1;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="assets/img/TopPost/7.jpg" alt="" class="img-fluid w-100" style="width: 100%; max-height: 400px;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col p-lg-4 pl-lg-4">
           <h4 class="text-white font-weight-bold text-lowercase"><a href="">
           Lorem ipsum dolor sit amet, consectetur adipisicing.</a><br><h5 class="text-white">BY <a href="" >ANONIM</a></h5></h4>
        </div>
      </div>
    </div>
    <!-- end kolom 5 -->
  </div>
<!-- end Carousel 1 -->

<!-- Jumbotron  -->
<div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 pl-0 pr-0">
          <div class="jumbotron jumbotron-fluid mb-0">
            <div class="container">
              <div class="row">
                <div class="col-6 mt-xs-5 mt-sm-5 mt-md-5 mt-lg-5 mt-4 pr-0 pr-5">
                  <h5 class="font-weight-bold text-right"><a href=""><img src="admin/aset_gambar/zonetech2.PNG"1></a><br><h7 class="text-white"></h7></h5>


                </div>
                <div class="col-6 pl-1">
                  <h1 class="text-uppercase font-weight-bold font-italic"><a href="">"information is everyone's property , is no longer a secret"</a></h1>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
<!-- End Jumbotron -->

<!-- Content -->
<div class="row content" style="background-color: white;">

  <div class="col-lg-8 col-md-12 col-sm-12">
  <?php include 'koneksi.php'; 
    $query = mysqli_query($conn, "SELECT id_post, id_gambar, titel_post, tgl_post, id_admin, isi_post, jmlh_comen FROM utama ORDER BY id_post DESC LIMIT 7");
      if ($query->num_rows > 0) {

      while ($row = $query->fetch_array()) {
      ?>
    <div class="row mt-3 mb-2 newpostcolumn">
      <div class="col-4 pr-0 pt-2 pt-lg-0"  style="border-top: solid 1px #e6e6e6;">
        <img src="<?php echo 'croped'.substr($row[1], 14) ;?>" alt="" class="img-fluid">
      </div>
      <div class="col-8" style="border-top: solid 1px #e6e6e6;">
        <h5 class="font-weight-bold mt-2 "><?php echo $row[2];?><br>
        <h7 style="font-size: 11px;">By <a href=""><?php echo $row[4] ; ?></a> | <?php echo $row[3] ; ?> | <?php echo $row[6] ; ?> Comments</h7><br> 
        <h7 style="font-size: 14px" class="d-block mt-2 mb-2 text-justify"><?php echo substr($row[5], 0, 250) ?></h7>
        <a href="view.php?id=<?php echo $row[0]?>"><button class="btn btn-primary btn-sm"> READ MORE... </button></a>
        </h5>
        
      </div>
    </div>
  <?php }} ?>

 

  </div>

    <div class="col-lg-4 col-md-12 mt-3 pl-lg-5 mb-0">
    <div class="col pl-lg-0 pl-0 pt-0 d-flex justify-content-lg-start justify-content-center" style="color: #ff3399;" id="titlekolfeaturedvideo">
    <h6 class="font-weight-bold pr-5 pl-1 pb-2 mr-3 ml-5 ml-lg-3 mt-0 pt-0 pl-3 d-inline-block mr-3 mb-0" id="titlefeaturedvideo">FEATURED VIDEO</h6>
    </div>
    <div class="row mr-3 ml-0 pt-3 mt-0" id="boxvideoscontent">


      <!-- loping vidio  -->
 <?php 
      include 'koneksi.php'; 
      $query3 = mysqli_query($conn, "SELECT id_admin , tgl,titel_vidio, link_vidio FROM vidio ORDER BY id_vidio DESC");
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
    <h6 class="pr-2 font-weight-bold pt-2 pb-2 pl-2 ml-3 mr-4 float-right" id="titlemorevideous" style="color: #ff3399; border-bottom: 1px solid #6600ff; border-right: 1px solid #6600ff;"><a href="">MORE VIDEO</a></h6>
  </div>



  <!-- More Stories -->
  <div class="col-md-12">
    <div class="col pt-sm-3 pl-sm-0 pr-sm-0 pl-lg-3 pr-lg-3">
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
        <div class="carousel-item active">
            <img class="d-block w-100" src="admin/aset_gambar/zonetech11.jpg" alt="First slide">
       </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="admin/aset_gambar/zonetech22.jpg" alt="Second slide">
       </div>
        <div class="carousel-item">
             <img class="d-block w-100" src="admin/aset_gambar/zonetech33.jpg" alt="Third slide">
       </div>
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
    </div>
    </div>
  <!-- End -->
  

    <!-- button  -->
 <!-- loping vidio  -->
 <?php 
      include 'koneksi.php'; 
      $query3 = mysqli_query($conn, "SELECT id_admin , tgl,titel_vidio, link_vidio FROM vidio ORDER BY id_vidio ASC");
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
<!-- end Content -->



<!-- Footer -->
<div class="row p-lg-5 p-md-5 p-sm-5 pt-3">
  <div class="col-lg-3 col-sm-12" id="footerkiri">
    <h1 class="text-white font-weight-bold"><i>TECHZONE</i></h1>
    <hr>
    <h6>About the company. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
  </div>
  <div class="col-lg-7 col-sm-12" id="footertengah">
  <h1 class="text-white font-weight-bold text-center"><i>QUICK LINK</i></h1>     
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
  <div class="col-lg-2 col-sm-12 d-flex justify-content-center" id="footerkanan">
    
    <a href="https://twitter.com/techzone_05"><i class="fa fa-twitter mr-lg-3 mr-md-3 mr-sm-3"></i></a>
    <a href="https://www.instagram.com/techzone_05/"><i class="fa fa-instagram mr-lg-3 mr-md-3 mr-sm-3"></i></a>
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
$(window).resize(function() {

if ($(this).width() < 575) {
    $(".navbar-brand").show();
    $("#boxvideoscontent").css("border","none");
    $("#kolomcarousel1").css("margin-bottom","0");
    $("#kolomcarousel2").css("margin-bottom","0");

    $("#titlekolfeaturedvideo").css("padding-left","0");
    
    
} else if ($(this).width() < 767) {
    $(".navbar-brand").show();
    $("#navbarToggleExternalContent").hide();

} else if ($(this).width() < 992) {
    $(".navbar-brand").hide();
    $("#navbarToggleExternalContent").show();

    $("#kolomcarousel1").css("margin-bottom","-80px");
    $("#kolomcarousel2").css("margin-bottom","-100px");

    $("#titlemorevideous").show();


} else if ($(this).width() < 1200) {
    $(".navbar-brand").hide();
    $("#navbarToggleExternalContent").show();

    $("#kolomcarousel1").css("margin-bottom","-80px");
    $("#kolomcarousel2").css("margin-bottom","-100px");
}
});
</script>
<!-- end -->
</html>

