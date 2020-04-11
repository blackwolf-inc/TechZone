<?php 
session_start();
include 'koneksi.php';



if(isset($_POST["bacot"])) {
//print_r($_GET['id_post']);
$id_post = $_SESSION["id"];
$username = $_POST["insertbacotusername"];
$email = $_POST["insertbacotemail"];
$isi = $_POST["insertbacotisi"];

$query = mysqli_query($conn, "INSERT INTO coment ( id_post, nama_komen, isi_comen, id_user) VALUES ('$id_post', '$username','$isi','$email')");

echo "<script>location='view.php?id=$id_post' </script>";
}

 ?>