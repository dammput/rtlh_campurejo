<?php
    session_start();
    if ($_SESSION['level'] !== "admin") {
        header("location:../index.php?pesan=belum_login");
    }
?>

<?php
  // defenisikan koneksi
  include "../koneksi.php";
  // cek apakah ada parameter ID dikirim
  if (isset($_GET['id'])) {
    // jika ada, ambil nilai id
    $id     = $_GET['id'];
    // query SQL menghapus data berdasarkan id yg dipilih
    $sql     = "DELETE from tabel_user WHERE id_user=$id";
    $sql2    = "DELETE from tabel_profile_user WHERE id_profile=$id";
    // hapus data pada database
    $query  = mysqli_query($koneksi,$sql);
    $query2  = mysqli_query($koneksi,$sql2);

    echo $id;
    // cek apakah proses hapus data berhasil
    if(mysqli_affected_rows($koneksi)) {
      // jika berhasil, redirect kehalaman index.php
      header("Location:akun_user.php");
   } else {
      // jika tidak redirect juga kehalaman index.php
      header("Location:akun_user.php");
      
      
    }
  }
 ?>