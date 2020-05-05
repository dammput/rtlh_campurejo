<?php

$koneksi = mysqli_connect('localhost','root','damm','rtlh_campurejo');

if (mysqli_connect_errno()){
    echo "database troble : " . mysqli_connect_errno();
}else{
    // echo "Database siap digunakan";
}

?>