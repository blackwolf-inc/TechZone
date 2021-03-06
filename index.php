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
    @font-face {font-family: "Veneer Clean Reg"; src: url("//db.onlinewebfonts.com/t/a344dbfc4625e1c3a7cc4bacad51f757.eot"); src: url("//db.onlinewebfonts.com/t/a344dbfc4625e1c3a7cc4bacad51f757.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/a344dbfc4625e1c3a7cc4bacad51f757.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/a344dbfc4625e1c3a7cc4bacad51f757.woff") format("woff"), url("//db.onlinewebfonts.com/t/a344dbfc4625e1c3a7cc4bacad51f757.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/a344dbfc4625e1c3a7cc4bacad51f757.svg#Veneer Clean Reg") format("svg"); } 

      /*Jumbotron Top*/
      div#navbarToggleExternalContent > div.bg > div.row > div.col > h4 {
        text-shadow: 3px 3px 3px black;
      }

      #navbarToggleExternalContent .bg {
        background-image: url("assets/img/wall/1.jpg");
        padding: 100px;
      }

      /* Navbar */
      

      .navbar-brand {
        display: none;
      }
        
      ul.navbar-nav > li.nav-item > a.nav-link {
        color: #A71A1A;
      }

      ul.navbar-nav > li.nav-item > a.nav-link:hover {
        color: red;
      }

      ul.navbar-nav > li.nav-item.active > a.nav-link {
        color: red;
      }

      ul.navbar-nav > li.nav-item > a > i {
        color: #A81313;
      }

      ul.navbar-nav > li.nav-item > a > i:hover {
        color: red;
      }

      .fa {
        font-size: 24px;
        padding-left: 5px;
      }

      #logoimg {
          display: none;
      }

      /* Carousel */
      div.row.mt-3.carouselbox > div.col-lg-8 > div.row > div.col.mt-2 > h1 {
        font-family: Veneer Clean Reg;
      }

      div.row.mt-3.carouselbox > div.col-lg-4 > div.row > div.col-lg-12 > h4 {
        font-family: Veneer Clean Reg;
      }

      div.row.mt-3.carouselbox > div.col-md-8 > div.row > div.col > h1 {
        font-family: Veneer Clean Reg;
      }

      div#cl > div.row > div.col-lg-12 > h4 {
        font-family: Veneer Clean Reg;
      }


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


      div.row.mt-3 > div.col-lg-8 {
        border: solid 2px;
        border-image:  linear-gradient(-90deg, #C20005, #C20005) 1;
      }

       div.row.mt-3 > div.col-lg-4 {
        border: solid 2px;
        border-image:  linear-gradient(-90deg, #C20005, #860309) 1;
       }
      
       div.row > div#cl.col-lg-4 {
        border: solid 2px;
        border-image:  linear-gradient(-90deg, #C20005, #860309) 1;
       }


      /* Jumbotron Mid */

      div.jumbotron > div.container > div.row > div.col-6 > h1 > a:hover {
        color: #a5126c;
        transition: 2s;
      }

      div.jumbotron > div.container > div.row > div.col-6 > h1 {
        font-family: Veneer Clean Reg;
      }

      .jumbotron {
        background-image: linear-gradient(-90deg, #f0f3f4, #283747);
      }

      div.jumbotron:hover {
        background-image: linear-gradient(-90deg,  #ffc107 , #f0f3f4);
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
        background-color: #FFFFFF;
        border: solid 1px #FF0000;
        color: #FF0000;
        letter-spacing: 2px;
        border-radius: 0;
      }

      div.row > div.col-8 > h5 > a > button:hover {
        background-color: #ffc107;
        color: #FFFFFF;
      }

      div.row > div.col-lg-8 > div.row > div.col-4 > img {
        object-fit: cover;
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
        color: #C20005;
      }

      div#footerkanan > a > i:hover {
        font-size: 25px;
        color: #F8D200;
      }

      #footertengah > ul.list-inline > li.list-inline-item > a {
          color: #e6e6e6;
      }
      
      #footertengah > ul.list-inline > li.list-inline-item > a:hover {
          color: #C20005;
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



      body {
        background-color: black;
      }

      .list-group-item {
        background-color: transparent;
        border: none;
      }


      a {
        color: white;
      }

      a:hover {
        text-decoration: none;
        color: #FF9900;
      }

      
      .jumbotron a {
        color: black;
      }

      .jumbotron a:hover {
        color: #F5F15E;
      }

      .content h5 {
        color: #282923;
      }

      .content h7 {
        color: grey;
      }

      .content a {
        color: color: #F5F15E;
      }


      div.row.bigpost > div.col-lg-12.bigposttitle {
        background-color: black;
      }

      div.row.newpostcolumn > div.col-8 > h5 > h7 > a {
        color: #FF0000;
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
        color: #FF9900;
      }

      div#boxvideoscontent > div.col-12 > h7 > a:hover {
        color: #F5F15E;
      }
      
      div.col-lg-4 > div#titlekolfeaturedvideo > h6#titlefeaturedvideo {
        color: #dc3545;
        border-bottom: solid 2px #6600ff; 
        border-left: solid 2px #6600ff;
      }

      h6#titlemorevideous > a {
        color: #dc3545;
      }

      h6#titlemorevideous > a:hover {
        color: #cc0099;
      }
      /* end Box Videos*/


      @media (max-width: 575px) {

        div.col-lg-4 > div#titlekolfeaturedvideo > h6#titlefeaturedvideo {
        border: none;
        }

        /*  Navbar */

        .navbar-brand {
          display: block;
        }
        
        div.jumbotron {
          background-image: linear-gradient(-90deg, #ffc107, #ffc107);
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
        
        nav.navbar {
          padding-right: 0px;
          padding-left: 0px;
        }

        #logoimg {
          width: 75%;
          height: 75%;
          display: block;
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

        /*  Carousel */

        div.row.mt-3 > div.col-lg-8 > div.row > div#kolomcarousel1 {
            margin-bottom: 0px;
        }
        
      }

      @media (max-width: 767px) {

        /* Jumbotron Top */

        #navbarToggleExternalContent {
          display: none;
        }

        /* Navbar */

        .navbar-brand {
          display: block;
        }

        .jumbotron {
        background-color: white;
        background-image: none;
        }

        div.col-lg-4 > div#titlekolfeaturedvideo > h6#titlefeaturedvideo {
        border: none;
        }

        #logoimg {
          width: 75%;
          height: 75%;
          display: block;
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

        /* Carousel */

      }

      @media (max-width: 992px) {
        div.col-lg-4 > div#titlekolfeaturedvideo > h6#titlefeaturedvideo {
        border: none;
        }

        /* carousel */

        div.row.mt-3 > div.col-lg-8 > div.row > div#kolomcarousel1 {
        margin-bottom: 0px;
        }

        /* Navbar */

      }

      @media (max-width: 1200px) {
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
        <div class="col"><h4 class="text-center text-white"><img src="admin/aset_gambar/zonetech.PNG" class="img-fluid"></h4></div>
        <div class="col"><h7 class="text-center text-white" style="display: block;"><?php echo date("l M Y"); ?> <?php include 'jam.php'; ?></h7></div>
      </div>
    </div>

  </div>

<div class="container">
<!-- Nav -->

<nav class="navbar navbar-expand-lg navbar-dark">
  <a href="index.php"><img src="admin/aset_gambar/zonetechkecil.png" id="logoimg" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
          <li class="nav-item pl-lg-4 text-center">
            <a class="nav-link" href="new_news.php?id=TEKNOLOGI">TEKNOLOGI</a>
          </li>
          <li class="nav-item pl-lg-4 text-center">
            <a class="nav-link" href="new_news.php?id=ESPORTS">E-SPORTS</a>
          </li>
          <li class="nav-item pl-lg-4 text-center">
            <a class="nav-link" href="new_news.php?id=CULTURE">CULTURE</a>
          </li>
        <li class="nav-item pl-lg-4 text-center">
            <a class="nav-link" href="new_news.php?id=NETIZEN">NETIZEN</a>
          </li>
          <li class="nav-item pl-lg-4 text-center">
            <a class="nav-link" href="future.php">FREE GAME</a>
          </li>
           <li class="nav-item pl-lg-4 text-center">
            <a class="nav-link" href="see_all.php">ALL NEWS</a>
          </li>
          <li class="nav-item pl-lg-4 pt-lg-2 text-center">
            <a href="https://twitter.com/techzone_05"><i class="fa fa-twitter mr-lg-3"></i></a></button>
          </li>
          <li class="nav-item pl-lg-4 pt-lg-2 text-center">
            <a href=" https://www.instagram.com/techzone_05/"><i class="fa fa-instagram mr-lg-3"></i></a></button>
          </li>
        </ul>
  </div>
</nav>

<!-- end JumbNavbar -->
  <!-- Carousel 1 -->

  <div class="row mt-3 carouselbox">
    <!-- kolom 1 -->
    <div class="col-lg-8 col-md-8 col-sm-12">
      <?php
        include 'koneksi.php';
        $sql = mysqli_query($conn, "SELECT u.titel_post, u.id_admin, u.id_gambar, u.id_post FROM utama AS u, carousel as c WHERE u.id_post = c.Id_post AND c.no=1 ");
        $data = mysqli_fetch_array($sql);
      ?>
      <div class="row d-flex flex-wrap align-items-stretch h-100">
        <div class="col p-0" id="kolomcarousel1">
          <img src="<?php echo substr($data[2], 3) ;?>" alt="" class="img-fluid h-100">
        </div>
        <div class="col mt-2 p-lg-4 pl-lg-4">
          <h1 class="text-white font-weight-bold text-uppercase"><a href="view.php?id=<?php echo $data[3]?>"><?php echo $data[0]?></a><br><h5 class="text-white">BY <a href=""><?php echo $data[1]?></a></h5></h1>
          <hr style="border: 1px solid #39050D; width: 50%; position: absolute; bottom: auto; right: 0; margin-top: 0px;">
        </div>
      </div>
    </div>
    <!-- end kolom 1 -->

    <!-- kolom 2 -->
    <div class="col-lg-4 col-md-4 col-sm-6">
      <?php
        $sql = mysqli_query($conn, "SELECT u.titel_post, u.id_admin, u.id_gambar, u.id_post FROM utama AS u, carousel as c WHERE u.id_post = c.Id_post AND c.no=2 ");
        $data = mysqli_fetch_array($sql);
      ?>
      <div class="row d-flex flex-wrap align-items-stretch h-100">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="<?php echo substr($data[2], 3) ;?>" alt="" class="img-fluid">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col p-lg-4 pl-lg-4">
          <h4 class="font-weight-bold text-lowercase"><a href="view.php?id=<?php echo $data[3]?>"><?php echo $data[0]?></a><br><h5 class="text-white">BY <a href=""><?php echo $data[1]?></a></h5></h4>
        </div>
      </div>
    </div>
    <!-- end kolom 2 -->

    <!-- kolom 3 -->
    <div class="col-md-4 col-sm-6 col-lg-4">
      <?php
        $sql = mysqli_query($conn, "SELECT u.titel_post, u.id_admin, u.id_gambar, u.id_post FROM utama AS u, carousel as c WHERE u.id_post = c.Id_post AND c.no=3 ");
        $data = mysqli_fetch_array($sql);
      ?>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="<?php echo substr($data[2], 3) ;?>" alt="" class="img-fluid">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col p-lg-4 pl-lg-4">
          <h4 class="text-white font-weight-bold text-lowercase"><a href="view.php?id=<?php echo $data[3]?>"><?php echo $data[0]?></a><br><h5 class="text-white">BY <a href="" ><?php echo $data[1]?></a></h5></h4>
        </div>
      </div>
    </div>
    <!-- end kolom 3 -->

    <!-- kolom 4 -->
    <div class="col-md-8 col-lg-8">
      <?php
        $sql = mysqli_query($conn, "SELECT u.titel_post, u.id_admin, u.id_gambar, u.id_post FROM utama AS u, carousel as c WHERE u.id_post = c.Id_post AND c.no=4 ");
        $data = mysqli_fetch_array($sql);
      ?>
      <div class="row d-flex flex-wrap align-items-stretch h-100">
        <div class="col p-0" id="kolomcarousel2">
          <img src="<?php echo substr($data[2], 3) ;?>" alt="" class="img-fluid h-100">
        </div>
        <div class="col p-lg-4 pl-lg-4">
          <h1 class="text-white font-weight-bold text-uppercase"><a href="view.php?id=<?php echo $data[3]?>"><?php echo $data[0]?></a><br><h5 class="text-white">BY <a href=""><?php echo $data[1]?></a></h5></h1>
          <hr style="border: 1px solid #39050D; width: 50%; position: absolute; bottom: auto; right: 0; margin-top: 0px;">
        </div>
      </div>
    </div>
    <!-- end kolom 4 -->
  </div>
  <div class="row mt-0 carouselbox">
    <!-- kolom 5 -->
    <div class="col-lg-4 col-md-4 col-sm-4" id="cl">
      <?php
        $sql = mysqli_query($conn, "SELECT u.titel_post, u.id_admin, u.id_gambar, u.id_post FROM utama AS u, carousel as c WHERE u.id_post = c.Id_post AND c.no=5 ");
        $data = mysqli_fetch_array($sql);
      ?>
      <div class="row d-flex flex-wrap align-items-stretch h-100">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="<?php echo substr($data[2], 3) ;?>" alt="" class="img-fluid w-100 h-100">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col p-lg-4 pl-lg-4">
           <h4 class="text-white font-weight-bold text-lowercase"><a href="view.php?id=<?php echo $data[3]?>"><?php echo $data[0]?></a><br><h5 class="text-white">BY <a href="" ><?php echo $data[1]?></a></h5></h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4" id="cl">
      <?php
        $sql = mysqli_query($conn, "SELECT u.titel_post, u.id_admin, u.id_gambar, u.id_post FROM utama AS u, carousel as c WHERE u.id_post = c.Id_post AND c.no=6 ");
        $data = mysqli_fetch_array($sql);
      ?>
      <div class="row d-flex flex-wrap align-items-stretch h-100">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="<?php echo substr($data[2], 3) ;?>" alt="" class="img-fluid h-100 w-100">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col p-lg-4 pl-lg-4">
           <h4 class="text-white font-weight-bold text-lowercase"><a href="view.php?id=<?php echo $data[3]?>"><?php echo $data[0]?></a><br><h5 class="text-white">BY <a href="" ><?php echo $data[1]?></a></h5></h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4" id="cl">
      <?php
        $sql = mysqli_query($conn, "SELECT u.titel_post, u.id_admin, u.id_gambar, u.id_post FROM utama AS u, carousel as c WHERE u.id_post = c.Id_post AND c.no=7 ");
        $data = mysqli_fetch_array($sql);
      ?>
      <div class="row d-flex flex-wrap align-items-stretch h-100">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="<?php echo substr($data[2], 3) ;?>" alt="" class="img-fluid w-100 h-100">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col p-lg-4 pl-lg-4">
           <h4 class="text-white font-weight-bold text-lowercase"><a href="view.php?id=<?php echo $data[3]?>">
           <?php echo $data[0]?></a><br><h5 class="text-white">BY<a href=""><?php echo $data[1]?></a></h5></h4>
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
                  <!-- <h5 class="font-weight-bold text-right"><a href=""> -->
                    <img src="admin/aset_gambar/zonetech2.PNG" class="img-fluid"><!-- </a><br><h7 class="text-white"></h7></h5> -->
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
<div class="row content">

  <div class="col-lg-8 col-md-12 col-sm-12">
  <?php include 'koneksi.php'; 
    $query = mysqli_query($conn, "SELECT id_post, id_gambar, titel_post, tgl_post, id_admin, isi_post, jmlh_comen FROM utama ORDER BY id_post DESC LIMIT 10");
      if ($query->num_rows > 0) {

      while ($row = $query->fetch_array()) {
      ?>
    <div class="row mt-3 mb-2 newpostcolumn d-flex align-content-stretch">
      <div class="col-4 pr-0 pt-2 pt-lg-0"  style="border-top: solid 1px #e6e6e6;">
        <img src="<?php echo substr($row[1], 3) ;?>" alt="" class="img-fluid h-100 w-100">
      </div>
      <div class="col-8" style="border-top: solid 1px #e6e6e6;">
        <h5 class="font-weight-bold mt-2" style="color: white;"><?php echo $row[2];?><br>
        <h7 style="font-size: 11px; color: white;">By <a href=""><?php echo $row[4] ; ?></a> | <?php echo $row[3] ; ?> | <?php echo $row[6] ; ?> Comments</h7><br> 
        <h7 style="font-size: 14px" class="d-block mt-2 mb-2 text-justify"><?php echo substr($row[5], 0, 250) ?></h7>
        <a href="view.php?id=<?php echo $row[0]?>"><button class="btn btn-primary btn-sm"> READ MORE... </button></a>
        </h5>
        
      </div>
    </div>
  <?php }} ?>

 

  </div>

    <div class="col-lg-4 col-md-12 mt-3 pl-lg-5 mb-0">
    <div class="col pl-lg-0 pl-0 pt-0 d-flex justify-content-lg-start justify-content-center" style="color: #C20005;" id="titlekolfeaturedvideo">
    <h6 class="font-weight-bold pr-5 pl-1 pb-2 mr-3 ml-5 ml-lg-3 mt-0 pt-0 pl-3 d-inline-block mr-3 mb-0" id="titlefeaturedvideo">FEATURED VIDEO</h6>
    </div>
    <div class="row mr-3 ml-0 pt-3 mt-0" id="boxvideoscontent">


      <!-- loping vidio  -->
 <?php 
      include 'koneksi.php'; 
      $query3 = mysqli_query($conn, "SELECT id_admin , tgl,titel_vidio, link_vidio FROM vidio ORDER BY id_vidio DESC LIMIT 3");
      if ($query3->num_rows > 0) {

      while ($row = $query3->fetch_array()) {
      ?>

      <div class="col-12 col-lg-12 col-md-6 col-sm-6 mb-2">
      <iframe allowfullscreen
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
    <h6 class="pr-2 font-weight-bold pt-2 pb-2 pl-2 ml-3 mr-4 float-right" id="titlemorevideous" style="color: #C20005; border-bottom: 1px solid #6600ff; border-right: 1px solid #6600ff;"><a href="">MORE VIDEO</a></h6>
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
    </div><br>
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
      <iframe allowfullscreen
      <?php $vidio = substr($row[3],32);?>
      src='https://www.youtube.com/embed/<?php echo $vidio ; ?>'  style="width:100%; ">
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
    <h6>#UP TO DATE</h6>
  </div>
  <div class="col-lg-7 col-sm-12" id="footertengah">
  <h1 class="text-white font-weight-bold text-center"><img src="admin/aset_gambar/zonetechkecil.png"></h1>     
    <ul class="list-inline text-center">
      <li class="list-inline-item"><a href="#">Therm of Use</a></li>
      <li class="list-inline-item"><a href="#">Privacy Notice</a></li>
      <li class="list-inline-item"><a href="#">Cookie Policy</li>
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

</script>
<!-- end -->
</html>