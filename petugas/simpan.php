<?php
$koneksi = mysqli_connect("localhost","root","","latihan");

//ambil variabel yang dikirrin oleh form
$nama1 = $_GET['user1'];
$alamat1 = $_GET['alamat1'];
// $nama2 = $_GET['user2'];
// $alamat2 = $_GET['alamat2'];

$sql1 = "INSERT INTO user(nama,alamat) VALUE ('$nama1','$alamat1')";
// $sql2 = "INSERT INTO user2(nama,alamat) VALUE ('$nama2','$alamat2')";
$hasil = mysqli_query($koneksi,$sql1);
// $hasil2 = mysqli_query($koneksi,$sql2);

if($hasil){
    echo "data berhasil di update";
    header("location:index.php");
    } else{
    echo "data tidak berhasil di update";
    }
// if($hasi2){
//     echo "data berhasil di update";
//     header("location:index.php");
//     } else{
//     echo "data tidak berhasil di update";
//     }

?>		
