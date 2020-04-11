
<?php

include '../koneksi.php';

//print_r($_FILES["fileToUpload"]);
// Funsi save file start
$target_file3 = "../tumb/" .  date('dmyis').str_replace("", "", basename($_FILES["fileToUpload"]["name"]));
$target_file2 = "../croped/" .  date('dmyis').str_replace("", "", basename($_FILES["fileToUpload"]["name"]));
$target_file = "../data_gambar/". date('dmyis').str_replace("", "", basename($_FILES["fileToUpload"]["name"]));
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {


  // safe varibel to  sql
    $title = $_POST["title"];
    $admin = $_POST["ddAdmin"];
    $category = $_POST["ddCategory"];
    $isi = $_POST["isiText"];
    $tgl = date('D M Y');
    $link = $_POST["link_post"];


    // end save fariabel

    if($_FILES["fileToUpload"]["name"]!=""){
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
            copy($target_file, $target_file2);
        }
            
        
        else{
            echo "<script>alert('Sorry, there was an error while uploadin your file.');
            window.location.replace('index.php');</script>";
        }
    }
 copy($target_file, $target_file2);
 copy($target_file, $target_file3);
// auto widht

$im_src = imagecreatefromjpeg($target_file3);
   $src_width = imageSX($im_src);
   $src_height = imageSY($im_src);

    $dst_width =$src_width ;
    $dst_height = $src_width * 75 /100;

     $im = imagecreatetruecolor($dst_width,$dst_height);
        imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

    imagejpeg($im,$target_file3 ,100);
    imagejpeg($im,$target_file3 ,100);
// end

    $query = mysqli_query($conn, "INSERT INTO utama(titel_post, id_admin, tgl_post, jenis_post, isi_post, id_gambar, link_post) VALUES ('$title', '$admin','$tgl','$category','$isi','$target_file','$link')");
    echo "<script>
            alert('Berhasil Input Data');
            window.location.replace('content.php');
    </script>";
}


// End fungsi safe file 
?>
