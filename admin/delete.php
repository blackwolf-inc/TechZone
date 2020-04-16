<?php
include "../koneksi.php";
session_start();
$id_post = $_POST['btnDelete'];
$idgmbr = $_POST['idgmbr'];
$cropLama = "../croped/".substr($idgmbr, 15);
$tumbLama = "../tumb/".substr($idgmbr, 15);

if($idgmbr !=""){
	unlink($idgmbr);
	unlink($cropLama);
	unlink($tumbLama);
}

$del = mysqli_query($conn, "DELETE FROM utama WHERE id_post = '$id_post'");
$delcom = mysqli_query($conn, "DELETE FROM coment WHERE id_post = '$id_post'");
if($del)
	 echo "<script>
                location='index.php';
            </script>";
else echo "gagal";
	
?>