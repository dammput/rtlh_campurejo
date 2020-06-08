	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['level']!=="admin"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
    <?php
    	if($_SESSION['logged'] == 1)
    	{
        echo '<script type="text/javascript">';
        echo 'alert("Berhasil Login.")';
        echo '</script>';
        $_SESSION['logged'] = '';
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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- kasih class active apabila masuk -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Menu</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <h6 class="collapse-header">Data Akun :</h6>
            <a class="collapse-item" href="akun_user.php">Akun User</a>

            <h6 class="collapse-header">Keamanan Data :</h6>
            <a class="collapse-item" href="view.php">Lihat Data</a>
            <a class="collapse-item " href="penilaian.php">Penilaian Data</a>

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
          <div class="col-xl-3 col-md-1 ">
								<div class="card border-bottom-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-1"><br><br>
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-9">Tanggal</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">
													<?php
													date_default_timezone_set('Asia/Jakarta');
													echo  date('d-m-Y') ."<br>";
													include '../koneksi.php';
															$query_jumlah_data = "SELECT nik_responden FROM tabel_identitas_responden";
															$hasil_id_responden = mysqli_query($koneksi, $query_jumlah_data);
															$total_id_responden = mysqli_num_rows($hasil_id_responden);
															echo "Jumlah Data : ".$total_id_responden ;
													// echo '<br>' . date('H:i:s');
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>




          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">



            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                <img class="img-profile rounded-circle" src="../assets/img/1.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Adam Ahmad
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

						<div class="container-fluid">

							<div class="container">

								<br><br><br>
								<center>
									<h3><b>PANDUAN SISTEM PENENTU PENERIMA BANTUAN</b></h3>
								</center>
								<hr>

								<strong>Menu</strong> terdapat 3 (empat) menu, antara lain :
								<ul class="list-unstyled">
									<li><strong>Akun User</strong></li>Semua data akun pengguna sistem ada di dalan menu ini. menghapus dan mengedit data user juga 
									<li><strong>Lihat Data </strong></li>Hasil dari pada form input akan masuk kedalam menu ini, serta bisa melakukan <b>edit</b> dan <b>cetak form</b>.
									<li><strong>Penilaian Data </strong></li>Menu ini terdapat rekap dari hasil input, dan sudah di beri sistem penilaian, jadi pada menu ini yang layak dan tidak layak untuk mendapatkan bantuan akan terlihat.
								</ul>

								<hr>



							</div>
							<br><br><br><br>
						</div>
						<!-- /.container-fluid -->



</div>
<!-- End of Content Wrapper -->

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
  <script src="../vendor/chart.js/Chart.min.js"></script>


</body>

</html>