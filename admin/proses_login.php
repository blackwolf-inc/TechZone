<?php 
session_start();
include 'koneksi.php';


if (isset($_POST["login"])) {
    # code...
}


$username = $_POST["insertbacotusername"];
$pass $_POST["insertbacotusername"];




 $query = mysqli_query($conn, "SELECT username_admin , pass_admin ");

 ?>