<?php 
session_start();
include 'koneksi.php';



if(isset($_POST["bacot"])) {
//print_r($_GET['id_post']);
$id_post = 160;
$username = $_POST["insertbacotusername"];
$email = $_POST["insertbacotemail"];
$isi = $_POST["insertbacotisi"];



 $query = mysqli_query($conn, "INSERT INTO coment ( id_post, nama_komen, isi_comen, id_user) VALUES ('$id_post', '$username','$isi','$email')");

}

 ?>