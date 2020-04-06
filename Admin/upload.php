<?php
  include '../koneksi.php';
  
  if(isset($_POST["upload"])){
  	$title = $_POST["title"];
  	$gmbr = $_POST["customFile"];
  	$admin = $_POST["ddAdmin"];
  	$category = $_POST["ddCategory"];
  	$isi = $_POST["isiText"];
  	$tgl = date('D M Y');

  	$query = mysqli_query($conn, "INSERT INTO utama(id_tumbinal, id_admin, tgl_post, jenis_post, isi_post, id_gambar) VALUES ('$title', '$admin','$tgl','$category','$isi','$gmbr')");

    if($query){
      echo "<script>
                alert('berhasil Input Data');
                window.location.replace('content.php');
            </script>";
    }
  }
?>