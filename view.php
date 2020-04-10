<!DOCTYPE html>
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
		/*color: #ff3399;*/
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

	div.row.title > div.col-lg-12 > h6 > a {
		color: #ff3399;
	}

	div.row.title > div.col-lg-12 > h6 > a:hover {
		text-decoration: none;
		color: #830e60;
	}

	div.row.title > div.col-lg-12 > a > i {
		color: purple;
	}

	div.row.title > div.col-lg-12 > a > i:hover {
		color: #f9db24;
	}

	div.row.title > div.col-lg-12 > h7 > a > i {
		color: purple;
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

	div.row.image > div.col-lg-9 > button.mt-lg-3 {
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
		color: purple;
		letter-spacing: 8px;
	}
	
	div.row.image > div.col-lg-3 > .row > .col-lg-12 > h4.text-uppercase.font-weight-bold {
		letter-spacing: 4px;
		font-size: 18px;
		text-align: center;
		border-right: 2px solid purple;
		color: #ff3399;
	}

	div.row.image > div.col-lg-3 > .row > .col-lg-12 > h6.text-uppercase.font-weight-bold {
		letter-spacing: 4px;
		font-size: 12px;
		text-align: right;
		border-right: 2px solid purple;
		color: #ff3399;
		padding-right: 20px;
	}

	div.row.image > div.col-lg-3 > .row > .col-lg-12 > h6.text-uppercase.font-weight-bold  > a {
		color: #ff3399;
		text-decoration: none;
	}

	div.row.image > div.col-lg-3 > .row > .col-lg-12 > h6.text-uppercase.font-weight-bold  > a:hover {
		color: purple;
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
	}
	
	div.row.image > div.col-lg-9 > div#commentbox > form > button.btn.btn-primary {
		background-color: #ff3399;
		border: none;
	}
	</style>

	<!-- End Style CSS -->
</head>
<body>
	<!-- Navbar -->

		<nav class="navbar navbar-expand-lg navbar navbar-dark">
		 <div class="container">
		  <a class="navbar-brand font-weight-bold mr-5" href="#"><i>TECHZONE</i></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active pl-lg-4">
		        <a class="nav-link" href="#">New News <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item pl-lg-4">
		        <a class="nav-link" href="#">Future</a>
		      </li>
		      <li class="nav-item pl-lg-4">
		        <a class="nav-link" href="#">See All News</a>
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
				  <a class="breadcrumb-item dua" href="#">Library</a>
				  <a class="breadcrumb-item tiga" href="#">Data</a>
				</nav>
			</div>
		</div>

		<div class="row title">
			<div class="col-lg-12">
				<h2 class="text-uppercase">Lorem ipsum dolor sit amet, consectetur</h1>
				<h4><i>Lorem ipsum dolor sit amet, consectetur.</i></h4>
				<h6>By <a href="">Sam</a> | <a href="">ford@345triangle</a> | Apr 8, 2020 | 10:45 pm </h6>
				<a href=""><i class="fa fa-facebook-f mr-lg-3"></i></a>
				<a href=""><i class="fa fa-twitter mr-lg-3"></i></a>
				<h7><a href=""><i class="fas fa-share mr-2"></i>share</a> </h7>
			</div>
		</div>

		<div class="row image">
			<div class="col-lg-9">
				<img src="assets/img/TopPost/2.jpg" alt="" class="img-fluid mt-lg-3 mb-lg-3" width="100%">

				<h5 class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit veniam nemo doloribus adipisci esse sit, hic omnis quasi culpa voluptate laudantium dignissimos cum, ducimus perspiciatis. Omnis corporis minus veniam, natus in voluptatem explicabo odio. Totam culpa, esse aliquid voluptate suscipit rem at eligendi dicta dolores repudiandae, error ducimus architecto <p></p>doloribus ab recusandae tenetur iusto quia numquam iste sunt necessitatibus incidunt beatae! Assumenda nam nesciunt error quia aliquid odio quo, hic, magnam eius totam laborum quibusdam doloribus dolore labore facere voluptatem, esse. Iusto voluptatibus quis sapiente cum sunt placeat commodi architecto aut sequi consequatur veniam ipsum magnam magni veritatis, assumenda earum molestiae fugiatnesciunt sit. Repellat ipsa dignissimos dicta voluptatibus sit mollitia dolorem illum <p></p>error totam. Nobis voluptate porro consequatur aperiam commodi, amet ex ipsa minus praesentium nulla harum accusantium itaque voluptates veniam id illum, iusto ad assumenda dicta! Explicabo aperiam, unde, obcaecati tempore pariatur aliquam architecto consequatur vero quos consequuntur ut ducimus eligendi nulla sed amet possimus vel excepturi assumenda ex! Pariatur placeat assumenda ut, quam enim labore rem reprehenderit dolorum sit? Suscipit iusto reiciendis modi, <p></p>incidunt atque assumenda, voluptates nesciunt officiis accusantium vero obcaecati quas, praesentium consequatur, rerum laborum quia harum enim vel soluta vitae esse placeat! Ea, commodi!</h>

				<img src="assets/img/TopPost/1.jpg" alt="" class="img-fluid mt-lg-3 mb-lg-3" width="100%">
				<h5 class="text-justify">
					error totam. Nobis voluptate porro consequatur aperiam commodi, amet ex ipsa minus praesentium nulla harum accusantium itaque voluptates veniam id illum, iusto ad assumenda dicta! Explicabo aperiam, unde, obcaecati tempore pariatur aliquam architecto consequatur vero quos consequuntur ut ducimus eligendi nulla sed amet possimus vel excepturi assumenda ex! Pariatur placeat assumenda ut, quam enim labore rem reprehenderit dolorum sit? Suscipit iusto reiciendis modi, <p></p>incidunt atque assumenda, voluptates nesciunt officiis accusantium vero obcaecati quas, praesentium consequatur, rerum laborum quia harum enim vel soluta vitae esse placeat! Ea, commodi!
				</h5>

				<button class="mt-lg-3">NEXT ARTICLE</button>


				<h4 class="mt-lg-5 mb-lg-2">THERE ARE <span>1</span> COMMENTS.</h4>
				
				<?php for ($i = 0; $i < 3; $i++) { ?>
				<div class="col-lg-12 p-lg-3 mt-lg-3" style="border: 1px solid #EEEEEE; border-left: 5px solid #EEEEEE;">
					<h5>Fate</h5>
					<h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ut sed harum consequuntur dolor doloribus corrupti a debitis aliquam dolores.</h6>
					<h6>Posted On <a href="" class="font-weight-bold">Apr 10, 2020</a> |<a> 8:25 AM</a></h6>
				</div>
				<?php } ?>

				<div class="col-lg-12 mt-lg-4" id="commentbox">
					<form>
					 <div class="form-group">
					    <label for="exampleFormControlInput1">Username</label>
					    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="username">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Email address</label>
					    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Comment</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>

					  <button type="submit" class="btn btn-primary">Confirm To Bacot</button>
					</form>
				</div>

			</div>

			<div class="col-lg-3">
				<div class="row">
					<div class="col-lg-12">
						<h4 class="text-uppercase font-weight-bold">Other Article</h4>
					</div>
					<!-- Looping Post -->
					<?php for ($i = 0; $i < 3; $i++) { ?>
					<div class="col-lg-12 mt-lg-3">
						<img src="assets/img/TopPost/1.jpg" alt="" class="img-fluid mt-lg-0">

						<h6 class="text-justify mt-lg-1 mb-lg-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum.</h6>
					</div>
					<?php } ?>

					<div class="col-lg-12">
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