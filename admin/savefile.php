<?php 
include '../koneksi.php';

if(isset($_POST["uploadvid"])) {


  // safe varibel to  sql
    $title = $_POST["title"];
    $admin = $_POST["ddAdmin"];
    $category = $_POST["ddCategory"];
    $isi = $_POST["isiText"];
    $tgl = date('D M Y');
    $link = $_POST["link_post"];

    $query = mysqli_query($conn, "INSERT INTO vidio(id_admin,tgl, titel_vidio,category, link_vidio, isi_vidio) VALUES ( '$admin','$tgl','$title','$category','$link','$isi')");

    if($query){
     echo "<script>
                alert('berhasil Input Data');
                window.location.replace('vidio.php');
            </script>";
    }else{
        echo "error";
    }
}



 ?>