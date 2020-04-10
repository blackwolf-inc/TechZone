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
 <img src="admin/aset_gambar/zonetech.PNG">
    <ul class="navbar-nav nav-justified w-50 m-auto">
       <li class="nav-item ">
        <a class="nav-link " href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link active" href="new_news.php">NEW NEWS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="future.php">FUTURE</a>
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
  <div class="row mt-3 carouselbox">
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
        <div class="carousel-item active">
            <img class="d-block w-100" src="..." alt="First slide">
       </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
       </div>
        <div class="carousel-item">
             <img class="d-block w-100" src="..." alt="Third slide">
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
    <div style="border: solid 2px; border-image:  linear-gradient(-90deg, #ff3399, #ff9900) 1;">
      <!-- button  -->
<div class="btn-group col-md-12" role="group" aria-label="Basic example">
  <button type="button" class="btn  " style="color:white">Tech</button>
  <button type="button" class="btn " style="color:white">Science</button>
  <button type="button" class="btn " style="color:white">Entertaiment</button>
  <button type="button" class="btn " style="color:white">Economy</button>
  <button type="button" class="btn " style="color:white">Health</button>
</div>
      <!-- button  -->



  

    </div><br><br>
<!-- End crousel -->

<!-- Content -->
<div class="row content" style="background-color: white;">

  <div class="col-lg-8 col-md-12 col-sm-12">
  <?php for ($i = 0; $i<5; $i++) { ?>
    <div class="row mt-3 mb-2 newpostcolumn">
      <div class="col-4 pr-0 pt-2 pt-lg-0"  style="border-top: solid 1px #e6e6e6;">
        <img src="assets/img/TopPost/1.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-8" style="border-top: solid 1px #e6e6e6;">
        <h5 class="font-weight-bold mt-2 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
        <h7 style="font-size: 11px;">By <a href="">ANONIMOUS</a> | 8 Minutes Ago | 2 Comments</h5> 
        </h5> 
      </div>
    </div>
  <?php } ?>

  <div class="row bigpost ml-lg-0 mr-lg-0 mb-lg-2">
    <div class="col-lg-12 bigposttitle p-lg-4 p-md-4 p-sm-4 p-4">
      <h5 class="text-uppercase text-white font-weight-bold">Lorem ipsum dolor sit amet, consectetur</h5>
      <h7 class="text-white"> Lorem ipsum dolor sit amet, consectetur adipisicing. </h7> <br>
      <h7 style="font-size: 11px;" class="text-white">By <a href="">ANONIMOUS</a> | 8 Minutes Ago | 2 Comments</h5> 
    </div>
     <div class="col-lg-12 pl-lg-0 pl-md-0 pr-sm-0 pr-lg-0 pr-md-0 pr-sm-0 p-0" id="kolom2">
       <img src="assets/img/TopPost/1.jpg" alt="" class="img-fluid w-100">
     </div> 
  </div>

  </div>

  <div class="col-lg-4 col-md-12 mt-3 pl-lg-5">
    <div class="col pl-lg-0" style="color: #ff3399;">
    <h5 class="text-center mb-2 font-weight-bold" style="color: #ff3399;">FEATURED VIDEO</h5>
    </div>
    <div class="row mr-3 ml-0 pt-3" style="border-top: solid 2px #6600ff; border-right: solid 2px #6600ff;" id="boxvideoscontent">


      <!-- loping vidio  -->
<?php 
include 'koneksi.php'; 
$query3 = mysqli_query($conn, "SELECT id_admin , tgl,titel_vidio, link_vidio FROM vidio ORDER BY id_vidio DESC");     
  $count=0;
if ($query3->num_rows > 0) {


 while ($row = $query3->fetch_array()) {
?>
<?php if ($count < 5) { $count++ ?>

   <div class="col-6 col-lg-12 col-md-6 col-sm-6 mb-2">
          <iframe width="269" height="197"
                <?php $vidio = substr($row[3],32); ?>
                 src='https://www.youtube.com/embed/<?php echo $vidio ; ?>'>
          </iframe> 
                    <h4> <?php echo$row[2] ; ?> </h4>
                    <h7><?php echo $row[1]; ?> <?php echo $row[0] ; ?></h7>

                          
      </div>
 
            <?php  } ?>
         <?php } ?>
      <?php }?>
<!-- loping vidio end  -->


    </div>
    <h6 class="text-right mt-lg-3 pr-lg-4 font-weight-bold pt-lg-2 pb-lg-1 pl-lg-0 ml-lg-5 mr-lg-3" id="titlemorevideous" style="color: #ff3399; border-bottom: solid 2px #6600ff;"><a href="">MORE IN FEATURED VIDEO</a></h6>
  </div>

  <!-- More Stories -->
    <div class="col pt-sm-3 pl-sm-0 pr-sm-0 pl-lg-3 pr-lg-3">
        <button class="btn btn-block p-lg-3 p-sm-3" style="background-color: #ff3399; border-radius: 0; color: white;"><h6 class="mb-0">MORE STORIES</h6></button>
    </div>
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
