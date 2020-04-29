<?php


// mengaktifkan session
session_start();
if($_SESSION['level']==""){
    header("location:index.php");
}
// menghapus semua session
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
echo 'alert("Berhasil Logout.")';
header("location:index.php?pesan=logout");

?>