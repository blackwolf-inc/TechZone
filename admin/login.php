<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Antri Sehat</title>
	 <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<link href="framework/css/bootstrap.css" rel="stylesheet">
<style type="text/css">

	body {
		background-color: #010b09;
		background-image: url("aset_gambar/bg.JPG");
		z-index: 0;
	}

    .background-wall {
		width: 100%;
		height: 100%;
		background-image: url("aset_gambar/bg.JPG");
		background-size: cover;
		filter: blur(3px);
		opacity: 0.5;
		position: absolute;
		z-index: 0;
    }

    .container {
    	opacity: 1;
    }
	
	.box {
		background-color: #fff;
		padding: 20px;
		border: 0px;
	}

	.box form .input-group input {
		border-radius: 0px;
	}

	.kiri {
		background-image: linear-gradient(to top left, #f8f9fa, #010b09);
		padding: 0px;
		height: 357px;
	}
	
	.kiri:hover {
		background-image: linear-gradient(to top left, #010b09, #f8f9fa);
	}

	.img_wall_left {
		opacity: 0.4;
		border-radius: 0px;
		height: 357px;
		padding: 0;
		position: absolute;
		z-index: 0;
		display: block;
		margin: auto;
	}

	ul li a img {
		width: 30px;
	}

	ul {
		z-index: 1;
		padding-top: 250px;
		position: relative;
	}
	
	<!-- CSS untuk Pengaturan Font Dan Text -->
	.box h4 {
		text-align: center;
		margin-bottom: 20px;
		color: #010b09;
	}

	.box h5 {
		text-align: center;
	}

	.box h5 b u {
		color: #010b09;
	}

	h6 {
		z-index: 1;
		position: relative;
		color: white;
		display: block;
	}

	h6 a {
		color: white;
		text-decoration: underline;
	}

	h6 a:hover {
		text-decoration: none;
		color: white;
	}

	h6.text-center.text1 {
		padding-top: 8px;
	}

	/* CSS untuk Box Kanan*/

	#form-login img.img-responsive {
		width: 88%;
		padding-bottom: 19px;
	}

	#form-login label.checkbox-inline {
		color: grey;
	}
	
	#form-login button.btn.login {
		color: white;
		background-color: #010b09; 
	}
	
	#form-login a {
		color: #010b09;
		text-decoration: underline;
	}

	#form-login a:hover {
		text-decoration: none;
		color: red;
	}
	
	.form-control {
		color: #010b09;
		font-weight: bolder;
		transition: border-bottom, 2s;
	}


	.form-control:hover {
		border-bottom: solid 1px #010b09;
		box-shadow: none;
		border-top: none;
		border-left: none;
		border-right: none;
		border-radius: 0px;

		color: #010b09;
	}

	.row {
		margin-top: 150px;
	}

	@media screen and (max-width: 728px) {
		.row {
			margin: 0;
			margin-top: 15px;			
		}

		img.img_wall_left {
			width: 100%;
		}
	}

</style>

</head>
<body>
	<div class="background-wall"></div>
		<div class="container">
			<div class="row">	
			</style>		
				<div></div>
				<!-- Awal Box sebelah Kiri -->
				<div class="box kiri col-sm-12 col-md-12 col-lg-4 col-lg-offset-2">

					<img src="aset_gambar/bg1.JPG" class="img_wall_left col-sm-12 col-md-12 col-lg-12">
					<ul class="list-inline center-block text-center">
					
					</ul>
					
					
				</div>
				<!-- Akhir Box Sebelah Kiri -->

				<!-- Awal Box Sebelah Kanan --><div class="box col-sm-12 col-lg-3 col-lg-offset-0">

					<form action="proses_login.php" method="post" id="form-login">
						<img class="img-responsive center-block" src="">
						<h1>Zone Tech</h1>

						<div class="form-group">
						<input type="text" name="username_pasien" class="form-control" placeholder="username" id="username_pasien" required>
						</div>
						<div class="form-group">
						<input type="password" name="password_pasien" class="form-control" placeholder="password" id="password_pasien" required>
						</div>
						<div class="form-group">
						<label class="checkbox-inline"><input type="checkbox" id="showpassword">show password</label>
						</div>
						<div class="form-group">
						<button class="btn login btn-block" type="submit" id="login">Login</button>
						</div>
						<div class="form-group">
							<a href="" class="form-inline text-center center-block"><h5>forgot password?</h5></a>
						</div>
					</form>

				</div>
				<!-- Akhir Box Sebelah Kanan -->
				<script src="framework/js/jquery-3.3.1.min.js"></script>
				<script src="framework/js/bootstrap.js"></script>

				<!-- script JS untuk merubah tampilan -->
				<script>
					$(document).ready(function(){
						$("#inputusername").change(function(){
							$(".form-control#inputusername").css({"border":"none"});
						});

						$("#inputpassword").change(function(){
							$(".form-control#inputpassword").css({"border":"none"});
						});
					});
				</script>
				<!-- Akhir Script -->

			<script>

				if (adminscr==true) {

                location='../login_AD.php';
           
				}

				var inputPassword = document.getElementById('inputpassword');
				var inputUsername = document.getElementById('inputusername');
				var showPassword = document.getElementById('showpassword');
				var formLogin = document.getElementById('form-login');
				inputPassword.type = showPassword.checked === true ? 'text' : 'password';

				showPassword.addEventListener('click', function() {
					console.log(this);
					inputPassword.type = this.checked === true ? 'text' : 'password';
				})

				formLogin.addEventListener('submit', function(e) {
					e.preventDefault();
					if(inputPassword.value.trim() === "" && inputUsername.value.trim() === "") {
						alert("anda belum mengisi form");
						return false;
					}
					if(inputUsername.value.trim() === "") {
						alert("username tidak boleh kosong");
						return false;
					}
					if(inputPassword.value.trim() === "") {
						alert("password tidak boleh kosong");
						return false;
					}
					if(inputUsername.value.trim() !== "" && inputPassword.value.trim() !== "") {
						this.submit();
						return true;
					} else {
						return false;
					}
				})
			</script>
			


			<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
</body>

</html>