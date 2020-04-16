<?php
	include '../koneksi.php';
	if(isset($_POST['submit'])){
		$id_post = $_POST['forCarousel'];
		$no = $_POST['ddCarousel'];
		$query = mysqli_query($conn, "UPDATE carousel SET id_post=$id_post WHERE no=$no");
		

	echo "<script>
	 			alert('Carousel Diupdate');
                location='index.php';
            </script>";
	}
?>