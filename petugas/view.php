	<!-- cek apakah sudah login -->
	<?php
  session_start();
  if ($_SESSION['level'] !== "petugas") {
    header("location:../index.php?pesan=belum_login");
  }
  ?>

	<!DOCTYPE html>
	<html lang="en">

	<head>

	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="">
	  <meta name="author" content="">

	  <title>RTLH CAMPUREJO</title>

	  <!-- Favicon -->
	  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">

	  <!-- Custom fonts for this template-->
	  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	  <!-- Custom styles for this template-->
	  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

	  <!-- Favicon -->
	  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
	  <!-- Custom styles for this page -->
	  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">




	</head>

	<body id="page-top">

	  <!-- Page Wrapper -->
	  <div id="wrapper">

	    <!-- Sidebar -->
	    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	      <!-- Sidebar - Brand -->
	      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
	        <div class="sidebar-brand-icon rotate-n-15">
	          <img class="rounded-circle" src="../assets/img/logo-n-blue.png" alt="">
	        </div>
	        <div class="sidebar-brand-text mx-3">RTLH CAMPUREJO</div>
	      </a>

	      <!-- Divider -->
	      <hr class="sidebar-divider my-0">

	      <!-- Nav Item - Dashboard -->
	      <li class="nav-item ">
	        <a class="nav-link" href="index.php">
	          <i class="fas fa-fw fa-chart-area"></i>
	          <span>Beranda</span></a>
	      </li>

	      <!-- Nav Item - Pages Collapse Menu -->
	      <!-- kasih class active apabila masuk -->
	      <li class="nav-item active">
	        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
	          <i class="fas fa-fw fa-folder"></i>
	          <span>Menu</span>
	        </a>
	        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
	          <div class="bg-white py-2 collapse-inner rounded">
	            <h6 class="collapse-header">Input Data :</h6>
	            <a class="collapse-item" href="input.php">Form Input</a>

	            <h6 class="collapse-header">Data :</h6>
	            <a class="collapse-item active" href="view.php">View Data</a>
	            <a class="collapse-item" href="penilaian_edit.php">Penilaian & Edit</a>
	            <a class="collapse-item" href="backup.php">Backup Data</a>
	            <a class="collapse-item" href="panduan.php">Panduan Penggunaan</a>

	          </div>
	        </div>
	      </li>

	      <!-- Nav Item - Tables -->
	      <li class="nav-item">
	        <a class="nav-link" data-toggle="modal" data-target="#logoutModal" href="">
	          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
	          <span>Log Out</span></a>
	      </li>

	      <!-- Divider -->
	      <hr class="sidebar-divider d-none d-md-block">

	      <!-- Sidebar Toggler (Sidebar) -->
	      <div class="text-center d-none d-md-inline">
	        <button class="rounded-circle border-0" id="sidebarToggle"></button>
	      </div>

	    </ul>
	    <!-- End of Sidebar -->

	    <!-- Content Wrapper -->
	    <div id="content-wrapper" class="d-flex flex-column">

	      <!-- Main Content -->
	      <div id="content">

	        <!-- Topbar -->
	        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

	          <!-- Sidebar Toggle (Topbar) -->
	          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	            <i class="fa fa-bars"></i>
	          </button>



	          <!-- Topbar Navbar -->
	          <ul class="navbar-nav ml-auto">

	            <div class="topbar-divider d-none d-sm-block"></div>

	            <!-- Nav Item - User Information -->
	            <li class="nav-item dropdown no-arrow">
	              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                <span class="mr-2 d-none d-lg-inline text-gray-600 small">PETUGAS</span>
	                <img class="img-profile rounded-circle" src="../assets/img/60x60.png">
	              </a>
	              <!-- Dropdown - User Information -->
	              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
	                <a class="dropdown-item" href="#">
	                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
	                  Petugas
	                </a>
	                <div class="dropdown-divider"></div>
	                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
	                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
	                  Logout
	                </a>
	              </div>
	            </li>

	          </ul>

	        </nav>
	        <!-- End of Topbar -->

	        <!-- Begin Page Content -->
	        <div class="container-fluid">


	          <!-- DataTales -->
	          <div class="card shadow mb-4">
	            <div class="card-body">
	              <div class="table-responsive">
	                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	                  <thead>
	                    <tr>
	                      <th>No</th>
	                      <th>Nama_Responden</th>
	                      <th>NIK</th>
	                      <th>No Telp</th>
	                      <th>Sumber_Data</th>
	                      <th>Kordinat</th>
	                      <th>Gender</th>
	                      <th>Kecamatan</th>
	                      <th>Desa</th>
	                      <th>Dusun</th>
	                      <th>RT</th>
	                      <th>RW</th>
	                      <th>Alamat_Lengkap/Jln</th>
	                      <th>Jumlah_Tabungan</th>
	                      <th>Tabungan/Bulan</th>
	                      <th>Jumlah_KK/rumah</th>
	                      <th>Pekerjaan_Utama</th>
	                      <th>Jumlah_Penghasilan</th>
	                      <th>Range_Penghasilan</th>
	                      <th>Pendidikan</th>
	                      <th>Status</th>
	                      <th>Kesehatan</th>
	                      <th>Aset_Tanah</th>
	                      <th>Aset_Rumah</th>
	                      <th>Aset_Rumah_Lain</th>
	                      <th>Aset_Tanah_Lain</th>
	                      <th>Menerima_Bantuan_Lain</th>
	                      <th>Nama_Bantuan_Lain</th>
	                      <th>Jenis_Kawasan_Rumah</th>
	                      <th>Luas_Rumah</th>
	                      <th>Jumlah_Penghuni_Rumah</th>
	                      <th>Kusen_Rumah</th>
	                      <th>Jendela_Dan_Ventilasi</th>
	                      <th>Daun_Pintu_rumah</th>
	                      <th>Kamar_Mandi</th>
	                      <th>Saluran_Air</th>
	                      <th>Pembuangan</th>
	                      <th>Drainase_Rumah</th>
	                      <th>Tempat_Sampah</th>
	                      <th>Sumber_Air_Minum</th>
	                      <th>Jarak_Air_Minum</th>
	                      <th>Jarak_Sumber_Air_Minum</th>
	                      <th>Material_Atap</th>
	                      <th>Kondisi_Atap</th>
	                      <th>Material_Dinding</th>
	                      <th>Kondisi_Dinding</th>
	                      <th>Material_Lantai</th>
	                      <th>Kondisi_Lantai</th>
	                      <th>Struktur_Lantai</th>
	                      <th>Pondasi_Material</th>
	                      <th>Kondisi_Material</th>
	                      <th>Sloof_Material</th>
	                      <th>Kondisi_Sloof</th>
	                      <th>Material_Kolom</th>
	                      <th>Kondisi_Kolom</th>
	                      <th>Material_Rangka_Atap</th>
	                      <th>Kondisi_Rangka_Atap</th>
	                      <th>Proteksi_Kebakaran</th>
	                      <th>Sarana_Proteksi_Kebakaran</th>
                        <th>Prasarana_Proteksi_Kebakaran</th>
                        <th>Nama_Responden</th>
                        <th>No</th>

	                    </tr>
	                  </thead>
	                  <tfoot>
	                    <tr>
	                      <th>No</th>
	                      <th>Nama_Responden</th>
	                      <th>NIK</th>
	                      <th>No Telp</th>
	                      <th>Sumber_Data</th>
	                      <th>Kordinat</th>
	                      <th>Gender</th>
	                      <th>Kecamatan</th>
	                      <th>Desa</th>
	                      <th>Dusun</th>
	                      <th>RT</th>
	                      <th>RW</th>
	                      <th>Alamat_Lengkap/Jln</th>
	                      <th>Jumlah_Tabungan</th>
	                      <th>Tabungan/Bulan</th>
	                      <th>Jumlah_KK/rumah</th>
	                      <th>Pekerjaan_Utama</th>
	                      <th>Jumlah_Penghasilan</th>
	                      <th>Range_Penghasilan</th>
	                      <th>Pendidikan</th>
	                      <th>Status</th>
	                      <th>Kesehatan</th>
	                      <th>Aset_Tanah</th>
	                      <th>Aset_Rumah</th>
	                      <th>Aset_Rumah_Lain</th>
	                      <th>Aset_Tanah_Lain</th>
	                      <th>Menerima_Bantuan_Lain</th>
	                      <th>Nama_Bantuan_Lain</th>
	                      <th>Jenis_Kawasan_Rumah</th>
	                      <th>Luas_Rumah</th>
	                      <th>Jumlah_Penghuni_Rumah</th>
	                      <th>Kusen_Rumah</th>
	                      <th>Jendela_Dan_Ventilasi</th>
	                      <th>Daun_Pintu_rumah</th>
	                      <th>Kamar_Mandi</th>
	                      <th>Saluran_Air</th>
	                      <th>Pembuangan</th>
	                      <th>Drainase_Rumah</th>
	                      <th>Tempat_Sampah</th>
	                      <th>Sumber_Air_Minum</th>
	                      <th>Jarak_Air_Minum</th>
	                      <th>Jarak_Sumber_Air_Minum</th>
	                      <th>Material_Atap</th>
	                      <th>Kondisi_Atap</th>
	                      <th>Material_Dinding</th>
	                      <th>Kondisi_Dinding</th>
	                      <th>Material_Lantai</th>
	                      <th>Kondisi_Lantai</th>
	                      <th>Struktur_Lantai</th>
	                      <th>Pondasi_Material</th>
	                      <th>Kondisi_Material</th>
	                      <th>Sloof_Material</th>
	                      <th>Kondisi_Sloof</th>
	                      <th>Material_Kolom</th>
	                      <th>Kondisi_Kolom</th>
	                      <th>Material_Rangka_Atap</th>
	                      <th>Kondisi_Rangka_Atap</th>
	                      <th>Proteksi_Kebakaran</th>
	                      <th>Sarana_Proteksi_Kebakaran</th>
                        <th>Prasarana_Proteksi_Kebakaran</th>
                        <th>Nama_Responden</th>
                        <th>No</th>

	                    </tr>
	                  </tfoot>
	                  <tbody>
	                    <?php
                      include '../koneksi.php';
                      $query = "SELECT * FROM tabel_identitas_responden
                      JOIN tabel_detail_responden ON tabel_detail_responden.id_detail = tabel_identitas_responden.id_responden
                      JOIN tabel_alamat_responden ON tabel_alamat_responden.id_alamat = tabel_identitas_responden.id_responden
                      JOIN tabel_aspek_persyaratan ON tabel_aspek_persyaratan.id_aspek_persyaratan = tabel_identitas_responden.id_responden
                      JOIN tabel_aspek_bangunan ON tabel_aspek_bangunan.id_aspek_bangunan = tabel_identitas_responden.id_responden
                      JOIN tabel_aspek_kesehatan ON tabel_aspek_kesehatan.id_aspek_kesehatan = tabel_identitas_responden.id_responden
                      JOIN tabel_aspek_keselamatan ON tabel_aspek_keselamatan.id_aspek_keselamatan = tabel_identitas_responden.id_responden";
                      // $query_alamat = "SELECT * FROM tabel_alamat_responden";
                      $tampil = mysqli_query($koneksi, $query);
                      $no = 1;
                      // $eks_alamat = mysqli_query($koneksi, $query_alamat);
                      while ($data  = mysqli_fetch_array($tampil)) {
                        echo "<tr>";
                        echo "<th>" . $no . "</th>";
                        echo "<td>" . $data['nama_lengkap'] . "</td>";
                        echo "<td>" . $data['nik'] . "</td>";
                        echo "<td>" . $data['no_telp'] . "</td>";
                        echo "<td>" . $data['sumber_data'] . "</td>";
                        echo "<td>" . $data['kordinat'] . "</td>";
                        echo "<td>" . $data['jenis_kelamin'] . "</td>";
                        echo "<td>" . $data['kecamatan'] . "</td>";
                        echo "<td>" . $data['desa'] . "</td>";
                        echo "<td>" . $data['dusun'] . "</td>";
                        echo "<td>" . $data['rt'] . "</td>";
                        echo "<td>" . $data['rw'] . "</td>";
                        echo "<td>" . $data['jalan'] . "</td>";
                        echo "<td>" . $data['jumlah_tabungan'] . "</td>";
                        echo "<td>" . $data['tabungan_perbulan'] . "</td>";
                        echo "<td>" . $data['jumlah_kk'] . "</td>";
                        echo "<td>" . $data['pekerjaan_utama'] . "</td>";
                        echo "<td>" . $data['jumlah_penghasilan'] . "</td>";
                        echo "<td>" . $data['range_penghasilan'] . "</td>";
                        echo "<td>" . $data['pendidikan_terakhir'] . "</td>";
                        echo "<td>" . $data['status_perkawinan'] . "</td>";
                        echo "<td>" . $data['status_fisik'] . "</td>";
                        echo "<td>" . $data['status_kepemilikan_tanah'] . "</td>";
                        echo "<td>" . $data['status_kepemilikan_rumah'] . "</td>";
                        echo "<td>" . $data['aset_rumah_lain'] . "</td>";
                        echo "<td>" . $data['aset_tanah_lain'] . "</td>";
                        echo "<td>" . $data['bantuan_lain'] . "</td>";
                        echo "<td>" . $data['nama_bantuan_lain'] . "</td>";
                        echo "<td>" . $data['jenis_kawasan_rumah'] . "</td>";
                        echo "<td>" . $data['luas_rumah'] . "</td>";
                        echo "<td>" . $data['jumlah_penghuni'] . "</td>";
                        echo "<td>" . $data['kusen'] . "</td>";
                        echo "<td>" . $data['jendela'] . "</td>";
                        echo "<td>" . $data['pintu'] . "</td>";
                        echo "<td>" . $data['kamar_mandi'] . "</td>";
                        echo "<td>" . $data['saluran_air'] . "</td>";
                        echo "<td>" . $data['pembuangan'] . "</td>";
                        echo "<td>" . $data['drainase'] . "</td>";
                        echo "<td>" . $data['tempat_sampah'] . "</td>";
                        echo "<td>" . $data['sumber_air_minum'] . "</td>";
                        echo "<td>" . $data['jarak_air_minum'] . "</td>";
                        echo "<td>" . $data['sumber_listrik'] . "</td>";
                        echo "<td>" . $data['material_atap'] . "</td>";
                        echo "<td>" . $data['kondisi_atap'] . "</td>";
                        echo "<td>" . $data['material_dinding'] . "</td>";
                        echo "<td>" . $data['kondisi_dinding'] . "</td>";
                        echo "<td>" . $data['material_lantai'] . "</td>";
                        echo "<td>" . $data['kondisi_penutup_lantai'] . "</td>";
                        echo "<td>" . $data['struktur_lantai'] . "</td>";
                        echo "<td>" . $data['pondasi_material'] . "</td>";
                        echo "<td>" . $data['pondasi_kondisi'] . "</td>";
                        echo "<td>" . $data['sloof_material'] . "</td>";
                        echo "<td>" . $data['sloof_kondisi'] . "</td>";
                        echo "<td>" . $data['material_kolom_ring'] . "</td>";
                        echo "<td>" . $data['kondisi_kolom_ring'] . "</td>";
                        echo "<td>" . $data['material_rangka_atap'] . "</td>";
                        echo "<td>" . $data['kondisi_rangka_atap'] . "</td>";
                        echo "<td>" . $data['proteksi_kebakaran'] . "</td>";
                        echo "<td>" . $data['sarana_proteksi_kebakaran'] . "</td>";
                        echo "<td>" . $data['prasarana_proteksi_kebakaran'] . "</td>";
                        echo "<td>" . $data['nama_lengkap'] . "</td>";
                        echo "<th>" . $data['id_responden'] . "</th>";
                        echo "</tr>";
                        $no++;
                      };
                      ?>
	                  </tbody>
	                </table>
	              </div>
	            </div>
	          </div>

	        </div>
	        <!-- /.container-fluid -->

	      </div>
	      <!-- End of Main Content -->

	      <!-- Footer -->
	      <footer class="sticky-footer bg-white">
	        <div class="container my-auto">
	          <div class="copyright text-center my-auto">
	            <span>Copyright &copy; RTLH Campurejo</span>
	          </div>
	        </div>
	      </footer>
	      <!-- End of Footer -->

	    </div>
	    <!-- End of Content Wrapper -->

	  </div>
	  <!-- End of Page Wrapper -->

	  <!-- Scroll to Top Button-->
	  <a class="scroll-to-top rounded" href="#page-top">
	    <i class="fas fa-angle-up"></i>
	  </a>

	  <!-- Logout Modal-->
	  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
	          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">×</span>
	          </button>
	        </div>
	        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
	        <div class="modal-footer">
	          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
	          <a class="btn btn-primary" href="../logout.php">Logout</a>
	        </div>
	      </div>
	    </div>
	  </div>

	  <!-- Bootstrap core JavaScript-->
	  <script src="../vendor/jquery/jquery.min.js"></script>
	  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	  <!-- Core plugin JavaScript-->
	  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

	  <!-- Custom scripts for all pages-->
	  <script src="../assets/js/sb-admin-2.min.js"></script>

	  <!-- Page level plugins -->
	  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
	  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

	  <!-- Page level custom scripts -->
	  <script src="../assets/js/demo/datatables-demo.js"></script>
	</body>

	</html>