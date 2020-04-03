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
        color: #ff3399;
      }

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
        
      }

      @media (max-width: 767px) {
        .jumbotron {
        background-color: white;
        background-image: none;
        }

      }

      @media (max-width: 992px) {

      }

      @media (max-width: 1199px) {

      }

    </style>
</head>
<body>
<!-- JumbNavbar -->
<div class="pos-f-t">
  <div id="navbarToggleExternalContent">
    <div class="bg p-4 pt-5 pb-5">
      <div class="row" style="display: block;">
        <div class="col"><h4 class="text-center text-white">ZONE TECH</h4></div>
        <div class="col"><h7 class="text-center text-white" style="display: block;">Friday, March 27, 2020 | THE MAC FOR MOST</h7></div>
      </div>
    </div>
  </div>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">ZONE TECH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav nav-justified w-50 m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
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
  <div class="row mt-3">
    <!-- kolom 1 -->
    <div class="col-lg-8 col-md-8 col-sm-12" style="border: solid 1px #ff9900;">
      <div class="row">
        <div class="col p-0">
          <img src="assets/img/TopPost/1.jpg" alt="" class="img-fluid">
        </div>
        <div class="col mt-2">
          <h1 class="text-white font-weight-bold text-uppercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, earum!</a><br><h5 class="text-white">BY <a href="" style="color: #ff3399;">ANONIM</a></h5></h1>
        </div>
      </div>
    </div>
    <!-- end kolom 1 -->

    <!-- kolom 2 -->
    <div class="col-lg-4 col-md-4 col-sm-6" style="border: solid 1px #ff9900;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="assets/img/TopPost/2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col">
          <h4 class="font-weight-bold text-lowercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a><br><h5 class="text-white">BY <a href="" style="color: #ff3399;">ANONIM</a></h5></h4>
        </div>
      </div>
    </div>
    <!-- end kolom 2 -->

    <!-- kolom 3 -->
    <div class="col-md-4 col-sm-6 col-lg-4" style="border: solid 1px #ff9900;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="assets/img/TopPost/3.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col">
          <h4 class="text-white font-weight-bold text-lowercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a><br><h5 class="text-white">BY <a href="" style="color: #ff3399;">ANONIM</a></h5></h4>
        </div>
      </div>
    </div>
    <!-- end kolom 3 -->

    <!-- kolom 4 -->
    <div class="col-md-8 col-lg-8" style="border: solid 1px #ff9900;">
      <div class="row">
        <div class="col p-0">
          <img src="assets/img/TopPost/3.jpg" alt="" class="img-fluid">
        </div>
        <div class="col">
          <h1 class="text-white font-weight-bold text-uppercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, earum!</a><br><h5 class="text-white">BY <a href="" style="color: #ff3399;">ANONIM</a></h5></h1>
        </div>
      </div>
    </div>
    <!-- end kolom 4 -->
  </div>
  <div class="row mt-0">
    <!-- kolom 5 -->
    <div class="col-lg-4 col-md-4 col-sm-4" style="border: solid 1px #ff9900;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="assets/img/TopPost/5.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col">
           <h4 class="text-white font-weight-bold text-lowercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a><br><h5 class="text-white">BY <a href="" style="color: #ff3399;">ANONIM</a></h5></h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4" style="border: solid 1px #ff9900;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="assets/img/TopPost/6.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col">
           <h4 class="text-white font-weight-bold text-lowercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a><br><h5 class="text-white">BY <a href="" style="color: #ff3399;">ANONIM</a></h5></h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4" style="border: solid 1px #ff9900;">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col p-0">
          <img src="assets/img/TopPost/7.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col">
           <h4 class="text-white font-weight-bold text-lowercase"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing.</a><br><h5 class="text-white">BY <a href="" style="color: #ff3399;">ANONIM</a></h5></h4>
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
                <div class="col-6 mt-xs-5 mt-sm-5 mt-md-5 mt-lg-5 mt-4 pr-0">
                  <h5 class="font-weight-bold"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, esse!</a><br><h7 class="text-white">BY <a href="" style="color: #ff3399;">ANONIM</a></h7></h5>
                </div>
                <div class="col-6 pl-1">
                  <h1 class="text-uppercase font-weight-bold font-italic"><a href="">"Lorem ipsum dolor sit amet, consectetur adipisicing elit"</a></h1>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
<!-- End Jumbotron -->

<!-- Content -->
<div class="row content" style="background-color: white;">
  <div class="col-lg-7 col-md-8 col-sm-12 ml-lg-5">

  <?php for ($i = 0; $i<5; $i++) { ?>
    <div class="row mt-3 mb-2">
      <div class="col-4 pr-0 pt-2 pt-lg-0"  style="border-top: solid 1px #e6e6e6;">
        <img src="assets/img/TopPost/1.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-8" style="border-top: solid 1px #e6e6e6;">
        <h5 class="font-weight-bold mt-2 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
        <h7 style="font-size: 11px;">BY <a href="">ANONIMOUS</a> | 8 Minutes Ago | 2 Comments</h5> 
        </h5> 
      </div>
    </div>
<?php } ?>
     

  </div>
  <div class="col-lg-4 col-md-4 mt-3 pr-lg-5">
    <div class="col pl-lg-0" style="color: #ff3399;">
    <h5 class="text-center mb-2 font-weight-bold" style="color: #ff3399;">FEATURED VIDEO</h5>
    </div>
    <div class="row mr-3 ml-0 pt-3" style="border-top: solid 2px #6600ff; border-right: solid 2px #6600ff;">
    <?php for ($i = 0; $i < 3; $i++) {?>
      <div class="col-12 mb-2">
        <img src="assets/img/TopPost/3.jpg" alt="" class="img-fluid">
        Lorem ipsum dolor sit amet, consectetur adipisicing.
      </div>
        <?php } ?>
    </div>
    <h6 class="text-right mt-lg-3 pr-lg-4 font-weight-bold pt-lg-2 pb-lg-1 pl-lg-0 ml-lg-5 mr-lg-3" style="color: #ff3399; border-bottom: solid 2px #6600ff;"><a href="">MORE IN FEATURED VIDEO</a></h6>
  </div>
</div>
<!-- end Content -->

</div>
<!-- end Container -->
</body>
<!-- import javascript -->
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/popper.js"></script> 
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script>
$(window).resize(function() {
if ($(this).width() > 992) {
    $(".navbar-brand").hide();
} else {
  $(".navbar-brand").show();
}
});
</script>
<!-- end -->
</html>

