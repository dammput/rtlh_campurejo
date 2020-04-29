<?php
 
session_start();
if($_SESSION['level']==""){
    header("location:index.php");
}

$koneksi = mysqli_connect('localhost','root','','rtlh_campurejo');

if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_errno();
}else{
    echo "berhasil koneksi";
}

?>