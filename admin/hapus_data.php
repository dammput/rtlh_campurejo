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
    $sql     = "DELETE from tabel_aspek WHERE nik_aspek=$id";
    $sql2    = "DELETE from tabel_identitas_responden WHERE nik_responden=$id";
    $sql3    = "DELETE from tabel_foto_ktp WHERE nik_foto_ktp=$id";
    $sql4    = "DELETE from tabel_foto_rumah WHERE nik_foto_rumah=$id";
    $sql5    = "DELETE from tabel_waktu WHERE nik_waktu=$id";
    $sql6    = "DELETE from tabel_score WHERE nik_score=$id";
    // hapus data pada database
    $query  = mysqli_query($koneksi,$sql);
    $query2  = mysqli_query($koneksi,$sql2);
    $query3  = mysqli_query($koneksi,$sql3);
    $query4  = mysqli_query($koneksi,$sql4);
    $query5  = mysqli_query($koneksi,$sql5);
    $query6  = mysqli_query($koneksi,$sql6);

    echo $id;
    // cek apakah proses hapus data berhasil
    if(mysqli_affected_rows($koneksi)) {
      // jika berhasil, redirect kehalaman index.php
      header("Location:view.php");
   } else {
      // jika tidak redirect juga kehalaman index.php
      header("Location:view.php");
      
      
    }
  }
 ?>