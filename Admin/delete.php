<?php
include "../koneksi.php";
session_start();
$id_post = $_POST['btnDelete'];
$idgmbr = $_POST['idgmbr'];
$cropLama = "../croped/".substr($idgmbr, 15);

if($idgmbr !=""){
	unlink($idgmbr);
	unlink($cropLama);
}

$del = mysqli_query($conn, "DELETE FROM utama WHERE id_post = '$id_post'");
if($del)
	 echo "<script>
                location='index.php';
            </script>";
else echo "gagal";
	
?>