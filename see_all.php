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

      nav.navbar {
        padding-left: 0;
        padding-right: 0;
      }

      #logoimg {
          display: none;
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

      ul.navbar-nav > li.nav-item > a.nav-link {
        color:#A81E1E;
        font-size: 15px;
      }
      
      ul.navbar-nav > li.nav-item > a.nav-link:hover {
        color: red;
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

        #logoimg {
          width: 75%;
          height: 75%;
          display: block;
        }

        #logoimglg {
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

        #logoimg {
          width: 75%;
          height: 75%;
          display: block;
        }

        #logoimglg {
          display: none;
        }

      }

      @media (max-width: 992px) {
        .jumbotron {
        background-color: white;
        background-image: none;
        }

          #logoimg {
          width: 75%;
          height: 75%;
          display: block;
        }

        #logoimglg {
          display: none;
        }

      }

      @media (max-width: 1200px) {
        .jumbotron {
        background-color: white;
        background-image: none;
        }


        #logoimglg {
          width: 75%;
          height: 75%;
        }


      }

    </style>
</head>

<body>
<!-- JumbNavbar -->
<div class="pos-f-t">
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar navbar-dark">
     <div class="container pl-md-0">
      <a href="index.php"><img src="admin/aset_gambar/zonetechkecil.png" id="logoimg" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a href="index.php"><img src="admin/aset_gambar/zonetechkecil.png" id="logoimglg" class="img-fluid"></a>
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
    <div class="col-12 pl-0 pr-0">
      
            <div class="card">
              <div class="card-header pl-lg-0 pl-md-2 pl-sm-3 pl-0">
                <h3 class="card-title">New Post Search By ID Post</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" id="table_search" name="table_search" onkeyup="myFunction()" class="form-control float-right dropdown-toggle" placeholder="Search">

                  </div>
                </div>
              </div>


    </div>
        
  </div>
<div class="col-12">

<div class="row content" style="background-color: white;">
   <div class="card-body table-responsive p-0" style="height: 720px;">
                <table class="table table-head-fixed" id="myTable">
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
                      include 'koneksi.php';

                      $query = mysqli_query($conn, "SELECT id_post, titel_post, tgl_post, id_admin, id_gambar FROM utama GROUP BY id_post DESC" );
                      if($query->num_rows > 0){
                        while ($row = $query->fetch_array()) {
                          echo "
                          <tr>
                            <td>".$row[0]."</td>
                            <td>".$row[1]."</td>
                            <td>".$row[2]."</td>
                            <td>".$row[3]."</td>
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
<!-- loping vidio end  -->


    </div>
    <h6 class="text-right mt-lg-3 pr-lg-4 font-weight-bold pt-lg-2 pb-lg-1 pl-lg-0 ml-lg-5 mr-lg-3" id="titlemorevideous" style="color: #ff3399; border-bottom: solid 2px #6600ff;"><a href=""></a></h6>
  </div>

  <!-- More Stories -->
   
  <!-- End -->

</div>
<!-- end Content -->



<!-- Footer -->

  <div class="col-lg-12" id="footertengah">     
    <ul class="list-inline text-center">
      <li class="list-inline-item"><a href="#">Therm of Use</a></li>
      <li class="list-inline-item"><a href="#">Privacy Notice</a></li>
      <li class="list-inline-item"><a href="">Coomunication Preferences</a></li>
      <li class="list-inline-item"><a href="">Licensing FAQ</a></li>
      <li class="list-inline-item"><a href="">Accessbility</a></li>
      <li class="list-inline-item"><a href="">Platform Status</a></li>
      <li class="list-inline-item"><a href="">Contact</a></li>
      <li class="list-inline-item"><a href="">Tip US</a></li>
    </ul>
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
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("table_search");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
</script>
<!-- end -->
</html>

