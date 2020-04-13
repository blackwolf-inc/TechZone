<?php 
session_start();
include 'koneksi.php';



if(isset($_POST["bacot"])) {
//print_r($_GET['id_post']);
$id_post = $_SESSION["id"];
$jmlcmn = $_SESSION["jmlcmn"];
$username = $_POST["insertbacotusername"];
$email = $_POST["insertbacotemail"];
$isi = $_POST["insertbacotisi"];

$query = mysqli_query($conn, "INSERT INTO coment ( id_post, nama_komen, isi_comen, id_user) VALUES ('$id_post', '$username','$isi','$email')");
$jmlcmn++;
$update = mysqli_query($conn, "UPDATE utama SET jmlh_comen='$jmlcmn' WHERE id_post='$id_post'");

echo "<script>location='view.php?id=$id_post' </script>";
}

 ?>