<?php
session_start();
include "connect.php";
$nama =  (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "" ;
$nohp =  (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "" ;
$alamat =  (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "" ;

if(!empty($_POST['ubah_profile_validate'])){
            $query = mysqli_query($conn,"UPDATE tb_user SET nama='$$nama', nohp='$nohp', alamat='$alamat' WHERE username = '$_SESSION[username_detoko]'");
            if(!$query){
                $message = '<script>alert("Data profile berhasil diubah");
                window.history.back()</script>';
            }else{
                $message = '<script>alert("Data profile gagal diubah");
                window.history.back()</script>';
            }
        }else{
            $message = '<script>alert("Terjadi Kesalahan");
            window.history.back()</script>';
            }
echo $message;
?>