<?php

include '../koneksi.php';

// Funsi save file start
$target_file2 = "../croped/" .  date('dmyis').str_replace("", "", basename($_FILES["fileToUpload"]["name"]));
$target_file = "../data_gambar/". date('dmyis').str_replace("", "", basename($_FILES["fileToUpload"]["name"]));
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

if(isset($_POST["update"])) {

    $idp = $_POST["idp"];
    $imgLama = $_POST["gmbrLama"];
    $newtitle = $_POST["newtitle"];
    $admin = $_POST["ddAdmin"];
    $category = $_POST["ddCategory"];
    $isi = $_POST["isiText"];
    $tgl = date('D M Y');
    $imgLamaType = strtolower(pathinfo($imgLama,PATHINFO_EXTENSION));
    $cropLama = "../croped/".substr($imgLama, 15);

    if($_FILES["fileToUpload"]["name"]==""){
        $target_file= $imgLama;
    }
    else{
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check = false) {
            echo "<script>alert('File is not an image.');
            window.location.replace('index.php');</script>";
        } 
    // Allow certain file formats
        else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "bmp" ) {
            echo "<script>alert('Sorry, only JPG, JPEG, BMP, PNG & GIF files are allowed.');
            window.location.replace('index.php');</script>";
        }
        else if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "<script>alert('Sorry, your file is too large.');
            window.location.replace('index.php');</script>";
        }
        else if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {  
            if($imgLamaType == "jpg" && $imgLamaType == "png" && $imgLamaType == "jpeg" && $imgLamaType == "gif" && $imgLamaType == "bmp" ){
                unlink($cropLama);
                unlink($imgLama);

            }
            copy($target_file, $target_file2);
            
        }
        else{
            echo "<script>alert('Sorry, there was an error while uploadin your file.');
            window.location.replace('index.php');</script>";
        }
    }

    $query = mysqli_query($conn, "UPDATE utama SET titel_post='$newtitle' , id_admin='$admin' , jenis_post='$category' , isi_post='$isi' , id_gambar='$target_file' WHERE id_post ='$idp'");

    echo "<script>
        alert('Berhasil Update');
        window.location.replace('index.php');
    </script>";
}

// End fungsi safe file 
?>
