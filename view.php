<!DOCTYPE html>
<?php session_start() ?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<link href="assets/css/font-awesome.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- Style CSS -->

	<style>
	
	/* navbar */
	nav {
		background-color: black;
	}

	.navbar-brand {
		text-shadow: 2px 2px #ff3399;
	}

	a.navbar-brand > i {
		color: black;
	}

	ul.navbar-nav > li.nav-item > a.nav-link {
		color: #ff3399;
	}

	ul.navbar-nav > li.nav-item > a.nav-link:hover {
		color: #f9db24;
	}
	
	ul.navbar-nav > li.nav-item.active > a.nav-link {
		color: #f9db24;
	}


	/* breadcrumb */
	.breadcrumb {
		background-color: transparent;
	}

	.breadcrumb > .breadcrumb-item.satu {
		text-decoration: none;
		border: 1px solid #f25d8a;
		padding-left: 7px;
		padding-right: 7px;
		color: #f25d8a;
	}

	.breadcrumb > .breadcrumb-item.dua {
		text-decoration: none;
		border: 1px solid #762b94;
		border-left: none;
		padding-left: 7px;
		padding-right: 7px;
		color: #762b94;
	}

	.breadcrumb > .breadcrumb-item.tiga {
		text-decoration: none;
		border: 1px solid #f02d25;
		padding-left: 7px;
		padding-right: 7px;
		border-left: none;
		color: #f02d25;
	}

	.breadcrumb > .breadcrumb-item.tiga.active {
		background-color: #f02d25;
		color: white;
	}
	
	/* Title Post / Content */

	div.row.title > div.col-lg-12 > h2.text-uppercase {
		font-weight: 600;
	}

	div.row.title > div.col-lg-12 > h4 > i {
		font-size: 22px;
		color: grey;
	}

	div.row.title > div.col-lg-12 > h6 {
		font-size: 15px;
	}

	div.row.title > div.col-lg-12 > h6 > a {
		color: #ff3399;
	}

	div.row.title > div.col-lg-12 > h6 > a:hover {
		text-decoration: none;
		color: #830e60;
	}

	div.row.title > div.col-lg-12 > a > i {
		color: purple;
		font-size: 24px;
	}

	div.row.title > div.col-lg-12 > a > i:hover {
		color: #f9db24;
	}

	div.row.title > div.col-lg-12 > h7 > a > i {
		color: purple;
		font-size: 24px;
		padding-top: 10px;
	}

	div.row.title > div.col-lg-12 > h7 > a > i:hover {
		color: #f9db24;
	}

	div.row.title > div.col-lg-12 > h7 > a {
		color: purple;
		text-decoration: none;
	}

	div.row.title > div.col-lg-12 > h7 > a:hover {
		color: #f9db24;
		text-decoration: none;
	}

	div.row.image > div.col-lg-9 > button#next.mt-lg-3 {
		padding: 10px;
		background-color: white;
		font-weight: bolder;
		box-shadow: none;
		border-left: 2px solid purple;
		border-bottom: 2px solid purple;
		border-top: none;
		border-right: none;
		padding-right: 50px;
		padding-left: 15px;
	}

	div.row.image > div.col-lg-9 > button#next.mt-lg-3 > a {
		background-color: white;
		font-weight: bolder;
		box-shadow: none;
		border-right: none;
		letter-spacing: 8px;
		text-decoration: none;
		color: #ff3399;
	}

	div.row.image > div.col-lg-9 > button#next.mt-lg-3 > a:hover {
		color: purple;
	}
	
	div.row.image > div.col-lg-3 > .row > .col-lg-12 > h4.text-uppercase.font-weight-bold {
		letter-spacing: 4px;
		font-size: 18px;
		text-align: center;
		border-right: 2px solid purple;
		color: #ff3399;
	}

	div.row.image > div.col-lg-3 > .row > .col-lg-12 > .col-lg-12  > h6.text-uppercase.font-weight-bold {
		letter-spacing: 4px;
		font-size: 12px;
		text-align: right;
		border-right: 2px solid purple;
		color: #ff3399;
		padding-right: 20px;
	}

	div.row.image > div.col-lg-3 > .row > .col-lg-12 > .col-lg-12 > h6.text-uppercase.font-weight-bold  > a {
		color: #ff3399;
		text-decoration: none;
	}

	div.row.image > div.col-lg-3 > .row > .col-lg-12 > .col-lg-12 > h6.text-uppercase.font-weight-bold  > a:hover {
		color: purple;
	}

	div.row > div.col-6 > h5 > h7 > a {
		color: purple;
		text-decoration: none;
	}

	div.row > div.col-6 > h5 > h7 > a:hover {
		color: #ff3399;
	}
	
	div.row.image > div.col-lg-9 > h5 {
		line-height: 1.8;

	}


	/* Comment Box*/

	div.row.image > div.col-lg-9 > div.col-lg-12 > h5 {
		color: #ff3399;
	}

	div.row.image > div.col-lg-9 > div.col-lg-12 > h6 {
		font-size: 13px;
	}

	div.row.image > div.col-lg-9 > div.col-lg-12 > h6 > a.font-weight-bold {
		color: #ff3399;
	}

	div.row.image > div.col-lg-9 > div.col-lg-12 > h6 > a.font-weight-bold:hover {
		color: purple;
		text-decoration: none;
	}

	div.row.image > div.col-lg-9 > div#commentbox {
		background-color: #EEEEEE;
		padding: 20px;
		border: dashed 2px purple;
		margin-bottom: 20px;
	}
	
	div.row.image > div.col-lg-9 > div#commentbox > form > button.btn.btn-primary {
		background-color: #ff3399;
		border: none;
	}
	
	div.row.image > div.col-lg-9 > h4 > span {
		color: purple;
		font-weight: bolder;
	}

	</style>

	<!-- End Style CSS -->
</head>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e93dfbef4621e00127d1902&product=inline-share-buttons" async="async"></script>

<?php
  include 'koneksi.php';
  if (isset($_GET['id'])) {
  	$id_post = $_GET['id']; 
  	$query = mysqli_query($conn, "SELECT * FROM utama WHERE id_post=$id_post");
  	$result = mysqli_fetch_array($query);
  	$i=1;
  	if (is_null($result)) {
  		
  		$id_post=$id_post+$i;
  		echo "<script>location='view.php?id=$id_post' </script>";
  		
  		if ($i==100) {
  			echo "<script>
  			alert('Sorry, there was no artikel yet .'); 
  			location='index.php' </script>";
  		}
  	}
  	$tgl = $result[1];
  	$ktgr = $result[2];
  	$judul = $result[3];
  	$isi = $result[4];
  	$admin = $result[6];
  	$jmlComent = $result[7];
  	$gmbr = $result[8];
  	$link = $result[9];
  	$_SESSION["id"]=$id_post;
  	$_SESSION["adm"]=$result[6];
  	$_SESSION["jmlcmn"]=$jmlComent;
  }
?>

<body>
	<!-- Navbar -->

		<nav class="navbar navbar-expand-lg navbar navbar-dark">
		 <div class="container">
		  <a class="navbar-brand font-weight-bold mr-5" href="index.php">ZONETECH</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active pl-lg-4">
		        <a class="nav-link" href="new_news.php">New News <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item pl-lg-4">
		        <a class="nav-link" href="future.php">Future</a>
		      </li>
		      <li class="nav-item pl-lg-4">
		        <a class="nav-link" href="see_all.php">See All News</a>
		      </li>
		    </ul>
		  </div>
		 </div>
		</nav>

	<!-- end Navbar -->

	<!-- Content -->
	
	<div class="container">
		<div class="row breadcrumbb">
			<div class="col-lg-12 mt-lg-5 pl-0">
				<nav class="breadcrumb">
				  <a class="breadcrumb-item satu" href="#">Home</a>
				  <a class="breadcrumb-item dua" href="#">New News</a>
				  <a class="breadcrumb-item tiga" href="#"><?php echo $_SESSION["id"]; ?></a>
				</nav>
			</div>
		</div>

		<div class="row title">
			<div class="col-lg-12">
				<h2 class="text-uppercase"><?php echo $judul; ?></h1>
				<h4><i>This Day : <?php echo date("l M Y"); ?> <?php include 'jam.php'; ?></i></h4>
				<h6>By <a href=""><?php echo $admin; ?></a> | <a href="">ford@345triangle</a> | <?php echo $tgl ?></h6>	
			</div>
			<div class="sharethis-inline-share-buttons pl-3"></div><br>
		</div>

		<div class="row image">
			<div class="col-lg-9">
				<img src="<?php echo substr($gmbr, 3) ;?>" alt="" class="img-fluid mt-lg-3 mb-lg-3" width="100%">

				<h5 class="text-justify"><?php echo $isi; ?></h5>

				<button class="mt-lg-3" id="next"><a href="view.php?id=<?php echo $id_post+1?>">NEXT POST</a></button>
								

				<h4 class="mt-lg-5 mb-lg-2">THERE ARE <span><?php echo $jmlComent ?></span> COMMENTS.</h4>
				<!-- awal -->
				
			<!-- looping coment -->
				<?php
					$query3 = mysqli_query($conn, "SELECT * FROM coment WHERE id_post=$id_post ORDER BY id_coment DESC");
					if (mysqli_num_rows($query3) > 0){
					  while ($data = mysqli_fetch_array($query3)){ ?>
						<div class="col-lg-12 p-lg-3 mt-lg-3" style="border: 1px solid #EEEEEE; border-left: 5px solid #EEEEEE;">
						  <h5><?php echo $data[2]; ?></h5>
						  <h6><?php echo $data[3]; ?></h6>
						</div>
				<?php }
					} else echo "<h5>Belum ada komentar.</h5>";
				 ?>

				
		
<!-- akhir -->
				<div class="col-lg-12 mt-lg-4" id="commentbox">
					<form action="komen.php" method="POST">
					 <div class="form-group">
					    <label for="insertbacotusername">Username</label>
					    <input type="text" class="form-control" name="insertbacotusername" placeholder="username" required>
					  </div>
					  <div class="form-group">
					    <label for="insertbacotemail">Email address</label>
					    <input type="email" class="form-control" name="insertbacotemail" placeholder="name@example.com">
					  </div>
					  <div class="form-group">
					    <label for="insertbacotisi">Comment</label>
					    <textarea class="form-control" name="insertbacotisi" rows="3"></textarea>
					  </div>

					  <button type="submit" class="btn btn-primary" name="bacot">Comment</button>
					</form>
				</div>

				
			</div>

			<div class="col-lg-3">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="text-uppercase font-weight-bold">Other Article</h4>
					</div>
					<!-- Looping Post -->


	<div class="col-lg-12 mt-lg-3">
		  <?php include 'koneksi.php'; 
		  $adm=$_SESSION['adm'];
	
		   	 $query = mysqli_query($conn, "SELECT id_post, id_gambar, titel_post, tgl_post, id_admin, isi_post, jmlh_comen FROM utama WHERE id_admin = '$adm' ORDER BY id_post DESC LIMIT 7 ");
		      			if ($query->num_rows > 0) {

		      			while ($row = $query->fetch_array()) {
		     ?>
		    				<div class="row mt-3 mb-2 newpostcolumn d-flex align-content-stretch">
		   					  <div class="col-6 pr-0 pt-2 pt-lg-0"  style="border-top: solid 1px #e6e6e6;">
		        					<a href="view.php?id=<?php echo $row[0]?>"><img src="<?php echo substr($row[1], 3) ;?>" alt="" class="img-fluid mt-lg-0 h-100 w-100" style="object-fit: contain;"></a>
		      				</div>
		     			 <div class="col-6" style="border-top: solid 1px #e6e6e6;">
		        				<h5 class="text-justify mt-lg-1 mb-lg-0" style="font-size: 17px; word-break: break-all;"><?php echo substr($row[2],0,25);?><br>
		        				<h7 style="font-size: 14px; letter-spacing: 3px; word-break: break-all;" class="d-block mt-lg-2 text-justify"><?php echo substr($row[5], 0, 50) ?></h7>
		        				<h7 style="font-size: 11px;">By <a href=""><?php echo $row[4] ; ?></a></h7>
		        				</h5>
		        
		      </div>
	 </div>
		  <?php }} ?>
					<!-- end -->
				

					<div class="col-lg-12 d-flex justify-content-end pr-lg-0">
						<h6 class="text-uppercase font-weight-bold mt-lg-3"><a href="">More Article</a></h6>
					</div>
				
				</div>
			</div>




	</div>


	<!-- end Content -->


</body>
<!-- Import Javascript -->

	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>

<!-- end javascript -->
</html>