<?php
$koneksi = mysqli_connect('localhost','root','','trlh_campurejo');

if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_errno();
}

?>