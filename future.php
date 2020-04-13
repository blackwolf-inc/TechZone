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
        color: white;
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


      /* footer */

      #footertengah > ul.list-inline > li.list-inline-item > a {
          color: #ff3399;
      }
      
      #footertengah > ul.list-inline > li.list-inline-item > a:hover {
          color: #ff0066 ;
      }

      /* end footer*/


      @media (max-width: 575px) {

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
        
      }

      @media (max-width: 767px) {
        .jumbotron {
        background-color: white;
        background-image: none;
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
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand font-weight-bold" href="#" style="display: none;"><i>TECHZONE</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
 <img src="admin/aset_gambar/zonetechkecil.PNG">
    <ul class="navbar-nav nav-justified w-50 m-auto">
       <li class="nav-item ">
        <a class="nav-link " href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="new_news.php">NEW NEWS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link active" href="future.php">FREE GAME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="see_all.php">SEE ALL NEWS</a>
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
  <div class="row mt-3 carouselbox ">
    <!-- kolom 1 -->
    <div class="col-lg-8 col-md-8 col-sm-12" style="border: solid 2px; border-image:  linear-gradient(-90deg, #ff3399, #ff9900) 1;">
  
    <!-- end kolom 1 -->

    <!-- kolom 2 -->
    
    <!-- end kolom 2 -->

    <!-- kolom 3 -->
    
    <!-- end kolom 3 -->

    <!-- kolom 4 -->
    
    <!-- end kolom 4 -->
  </div>
  
    
    <!-- end kolom 5 -->
  </div>
<!-- end Carousel 1 -->

<!-- Jumbotron  -->

<!-- End Jumbotron -->


<div class="embed-responsive embed-responsive-4by3">
<iframe src="https://www.gamearter.com/game/pizza-ninja-mania/" width="100%" height="100%" allow="fullscreen"></iframe> </div>
<!-- Content -->
<div class="row content" style="background-color: white;">

  

  <!-- More Stories -->
    
  <!-- End -->

</div>
<!-- end Content -->



<!-- Footer -->
<div class="row p-lg-5 p-md-5 p-sm-5 pt-3">
  <div class="col-lg-3 col-sm-12" id="footerkiri">
    <h1 class="text-white text-center font-weight-bold"><i>TECHZONE</i></h1>
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
$(window).resize(function() {

if ($(this).width() < 575) {
    $(".navbar-brand").show();
    $("#titlemorevideous").hide();
    $("#boxvideoscontent").css("border","none");

    $("#kolomcarousel1").css("margin-bottom","0");
    $("#kolomcarousel2").css("margin-bottom","0");
    
} else if ($(this).width() < 767) {
    $(".navbar-brand").show();
    $("#navbarToggleExternalContent").hide();

} else if ($(this).width() < 992) {
    $(".navbar-brand").hide();
    $("#navbarToggleExternalContent").show();

    $("#kolomcarousel1").css("margin-bottom","-80px");
    $("#kolomcarousel2").css("margin-bottom","-100px");

    $("#titlemorevideous").show();
    $("#boxvideoscontent").css("border-top","solid 2px #6600ff");
    $("#boxvideoscontent").css("border-right","solid 2px #6600ff");


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

