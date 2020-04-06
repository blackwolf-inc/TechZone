
asdsad
<?php


    // ini_set('display_errors', '1');
    // echo $_POST['username_pasien'];
    if(isset($_POST['id_admin']) && isset($_POST['pass_admin'])){
        require_once '/koneksi.php';

        $uname = $conn->real_escape_string($_POST['id_admin']);
        $pass = $conn->real_escape_string($_POST['pass_admin']);
        
        // query mysql
        $kolom = "id_admin, pass_admin, nama, job, kode, jumlah_post, ";
        $where = "WHERE id_admin='$uname' AND pass_admin='$pass'";
        $sql = "SELECT $kolom FROM admin $where";

        $hasil = $conn->query($sql);
        $data = array();
        $data_antrian_user = "";
        $is_login = false;
        $is_antri = false;

        if($hasil->num_rows > 0) {
            $is_login = true;
            echo "asdasdasd";
            while($row = $hasil->fetch_assoc()) {
                $data = $row;
            }
            $kolom = "id_user_temp,pin_temp,lokasi, no_antrian, jam_ambil_antrian, tgl, status_temp ";
            $sql = "SELECT $kolom FROM temp WHERE id_user_temp='". $data['ID_pasien'] ."'";
            $query = $conn->query($sql);

            if($query->num_rows > 0) {
                while($row = $query->fetch_assoc()) {
                    $data_antrian_user = $row;
                }
                $is_antri = true;
            } else {
                echo "tidak ada data";
            }
        }
        $conn->close();
        
        if($is_login == true) {
            session_start();
            $_SESSION['u'] = 'pasien';
            $_SESSION['u_id_pasien'] = $data['ID_pasien'];
            $_SESSION['u_username'] = $data['username_pasien']; 
            $_SESSION['u_nama'] = $data['nama_pasien'];
            if($is_antri) {
                $_SESSION['u_antrian_pin'] = $data_antrian_user['pin_temp'];
                $_SESSION['u_antrian_lokasi'] = $data_antrian_user['lokasi'];
                $_SESSION['u_antrian_nomor'] = $data_antrian_user['no_antrian']; 
            }
            header("Location: /AntrianOnlineAlpha/user_antrian.php");

        } else {
            echo "<script>alert('Password / Username  salah  !!');history.go(-1);</script>";
        }

    }
?>