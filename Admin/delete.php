<?php
include "../koneksi.php";
session_start();
$id_post = $_POST['btnDelete'];

$del = mysqli_query($conn, "DELETE FROM utama WHERE id_post = '$id_post'");
if($del)
	 echo "<script>
                location='index.php';
            </script>";
else echo "gagal";
	
?>