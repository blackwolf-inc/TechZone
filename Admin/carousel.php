<?php
	include '../koneksi.php';
	if(isset($_POST['submit'])){
		$id_post = $_POST['forCarousel'];
		$no = $_POST['ddCarousel'];
		$query = mysqli_query($conn, "UPDATE carousel SET id_post=$id_post WHERE no=$no");
		if($query)
	 
		// croped whit swtch case
            switch ($no) {
    case "1":
        // switccase 1 
    $query = mysqli_query($conn, "SELECT id_gambar FROM utama WHERE id_post='$id_post'");



while ( $row = $query->fetch_array()) {
  

// echo $row[0];

// print_r($row);
  $image= $row[0];
  $image2 =substr($row[0],15);
  $target_dir = "../croped/$image2" ;
// memindahkan file utama ke folder crop 
  
// end meindahkan 

// echo $row[0];
  
  list( $width,$height ) = getimagesize( $image );
  // echo $width;
  //   echo $height;
  $newwidth = $width ;
  $newheight = $height *0.5;

  
  $thumb = imagecreatetruecolor( $width, $height );
  $source = imagecreatefromjpeg( $image);


  imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

  imagejpeg($thumb,"../data_gambar/$image",100);

  imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);




    // end save fariabel

}

	echo "<script>
	 			alert('Carousel Diupdate');
                location='index.php';
            </script>";
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error


    	// switcase1 end
        break;
    case "2":
        echo "Your favorite color is blue!";
        break;
    case "3":
        echo "Your favorite color is green!";
        break;
     case "4":
        echo "Your favorite color is green!";
        break;
     case "5":
        echo "Your favorite color is green!";
        break;
     case "6":
        echo "Your favorite color is green!";
        break;
     case "7":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";

        // croped end 
		



}






	}
?>