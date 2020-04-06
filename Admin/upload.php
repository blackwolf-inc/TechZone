
<?php

include '../koneksi.php';

// Funsi save file start

$target_dir = "../data_gambar/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {


  // safe varibel to  sql
    $title = $_POST["title"];
    $admin = $_POST["ddAdmin"];
    $category = $_POST["ddCategory"];
    $isi = $_POST["isiText"];
    $tgl = date('D M Y');

    $query = mysqli_query($conn, "INSERT INTO utama(id_tumbinal, id_admin, tgl_post, jenis_post, isi_post, id_gambar) VALUES ('$title', '$admin','$tgl','$category','$isi','$target_file')");


    // end save fariabel

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "<script>
                alert('berhasil Input Data');
                window.location.replace('content.php');
            </script>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
// End fungsi safe file 
?>
