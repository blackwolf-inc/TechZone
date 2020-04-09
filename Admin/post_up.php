
<?php

include '../koneksi.php';

// Funsi save file start


// contoh 1



// if(isset($_POST['btnEdit21']))
// {
  // $y1=$_POST['top'];
  // $x1=$_POST['left'];
  // $w=$_POST['right'];
  // $h=$_POST['bottom'];
  // $image="images/image1.jpg";

  // list( $width,$height ) = getimagesize( $image );
  // $newwidth = 600;
  // $newheight = 400;

  // $thumb = imagecreatetruecolor( $newwidth, $newheight );
  // $source = imagecreatefromjpeg($image);

  // imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
  // imagejpeg($thumb,$image,100); 


  // $im = imagecreatefromjpeg($image);
  // $dest = imagecreatetruecolor($w,$h);
    
  // imagecopyresampled($dest,$im,0,0,$x1,$y1,$w,$h,$w,$h);
  // imagejpeg($dest,"images/crop_image.jpg", 100);
// }


 // edn contoh 

print_r($_FILES);



if(isset($_POST["btnEdit21"])) {

$id_post = $_POST['btnEdit21'];

 $query = mysqli_query($conn, "SELECT id_gambar FROM utama WHERE id_post='$id_post'");



while ( $row = $query->fetch_array()) {
  

// echo $row[0];

// print_r($row);


  $y1=20;
  $x1=110;
  $w=267;
  $h=378;
  $image= $row[0];
  $image2 =substr($row[0],15);
  $target_dir = "../croped/$image2" ;
// memindahkan file utama ke folder crop 
  
// end meindahkan 
  echo $image2;
  echo $image;
// echo $row[0];
  
  list( $width,$height ) = getimagesize( $image );
  // echo $width;
  //   echo $height;
  $newwidth = $width ;
  $newheight = $height ;

  
  $thumb = imagecreatetruecolor( $width, $height );
  $source = imagecreatefromjpeg( $image);


  imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

  imagejpeg($thumb,"../data_gambar/$image",100);

  imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

copy($image, $target_dir);
  $im = imagecreatefromjpeg($target_dir);
  $dest = imagecreatetruecolor($w,$h);

  imagecopyresampled($dest,$im,0,0,$x1,$y1,$w,$h,$w,$h);
  imagejpeg($dest,"../croped/$image2 " , 100);
  


    // end save fariabel

}

 echo "<script>
  alert('berhasil Input Data');
   window.location.replace('content.php');
    </script>";
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error

} else {
    
    echo "Sorry, there was an error uploading your file.";
    }
      
  
        

// End fungsi safe file 
?>
