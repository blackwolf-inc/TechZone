<?php

include '../koneksi.php';

// Funsi save file start
$target_file = "../data_gambar/". date('dmyis').str_replace("", "", basename($_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(isset($_POST["update"])) {

    $idp = $_POST["idp"];
    $newtitle = $_POST["newtitle"];
    $admin = $_POST["ddAdmin"];
    $category = $_POST["ddCategory"];
    $isi = $_POST["isiText"];
    $tgl = date('D M Y');

    // Check file size
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "bmp" ) {
        echo "<script>alert('Sorry, only JPG, JPEG, BMP, PNG & GIF files are allowed.');
        window.location.replace('index.php');</script>";
    }
    else if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "<script>alert('Sorry, your file is too large.');
        window.location.replace('index.php');</script>";
    }

    else if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $query = mysqli_query($conn, "UPDATE utama SET titel_post='$newtitle' , id_admin='$admin' , jenis_post='$category' , isi_post='$isi' , id_gambar='$target_file' WHERE id_post ='$idp'");

            echo "<script>
                alert('berhasil Input Data');
                window.location.replace('index.php');
            </script>";
    }
    else{
        echo "<script>alert('Sorry, there was an error while uploadin your file.');
        window.location.replace('index.php');</script>";
    }
}

// End fungsi safe file 
?>
