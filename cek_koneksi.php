<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

//get data dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);

//menyeleksi data yang masuk
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// print_r($cek);
if($cek > 0){
    // echo 'masuk';
    $data = mysqli_fetch_assoc($login);
    // print_r($data);
    // cek jika user login sebagai admin
    if($data['level'] =="admin"){

        //buat session login dengan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        $_SESSION['logged'] = 1;
        // alihkan ke halaman dashboard admin
        header("location:admin/index.php");


    // cek jika login user sebagai kades
    }else if($data['level']=="kades"){
        //buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "kades";
        $_SESSION['logged'] = 1;
        //alihkan ke halaman kades.php
        header("location:kades/index.php");


    }else if($data['level']=="petugas"){
        //buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "petugas";
        $_SESSION['logged']  = 1;
        //alihkan ke halaman petugas.php
        header("location:petugas/index.php");

    }else{
        header("location:index.php?pesan=gagal");
    }
}else{
    header("location:index.php?pesan=gagal");
}


?>