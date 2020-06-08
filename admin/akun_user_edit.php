	<!-- cek apakah sudah login -->
	<?php
	session_start();
	if ($_SESSION['level'] !== "admin") {
		header("location:../index.php?pesan=belum_login");
	}
	?>
	<?php
	include '../koneksi.php';
	$id_update     		= $_GET['id'];
	$query_tampil   = "SELECT * FROM tabel_user
	JOIN tabel_profile_user ON tabel_profile_user.id_profile = tabel_user.id_user
	WHERE tabel_user.id_user=$id_update";
	$hasil          = mysqli_query($koneksi, $query_tampil);
	while ($data = mysqli_fetch_array($hasil)) {
		$level = $data['level'];
		$username = $data['username'];
		$nama = $data['nama'];
		$alamat = $data['alamat'];
		$rt = $data['rt'];
		$rw = $data['rw'];
		$usia = $data['usia'];
		$email = $data['email'];
		$kelamin = $data['jk'];
		$nip = $data['nip'];
		$no_telp = $data['no_telp'];
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

							<h6 class="collapse-header">Data Akun :</h6>
							<a class="collapse-item active" href="akun_user.php">Akun User</a>

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

						<!-- Topbar Search -->
						<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
							<div class="input-group">

							</div>
						</form>

						<!-- Topbar Navbar -->
						<ul class="navbar-nav ml-auto">

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

						<!-- DataTales Example -->
						<div class="card shadow mb-4">
							<div class="card-body">
								<div class="card-header py-3">
									<h1 class="h3 mb-2 text-gray-800">Edit Data User</h1>
								</div><br>
								<form action="update.php" method="post" >
									<div class="form-row">
										<div class="form-group col-md-4">
											<label>Nama Lengkap</label>
											<input type="text" class="form-control" value="<?php echo $nama; ?>" name="nama">
											<input type="text" class="form-control" value="<?php echo $id_update; ?>" name="id" hidden>
										</div>
										<div class="form-group col-md-4">
											<label>Jenis Kelamin</label>
											<input type="text" class="form-control" value="<?php echo $kelamin; ?>" name="kelamin">
										</div>
										<div class="form-group col-md-4">
											<label>Alamat</label>
											<input type="text" class="form-control" value="<?php echo $alamat; ?>" name="alamat">
										</div>
										<div class="form-group col-md-4">
											<label>RT</label>
											<input type="text" class="form-control" value="<?php echo $rt; ?>" name="rt">
										</div>
										<div class="form-group col-md-4">
											<label>RW</label>
											<input type="text" class="form-control" value="<?php echo $rw; ?>" name="rw">
										</div>
										<div class="form-group col-md-4">
											<label>USIA</label>
											<input type="text" class="form-control" value="<?php echo $usia; ?>" name="usia">
										</div>
										<div class="form-group col-md-4">
											<label>NIP</label>
											<input type="text" class="form-control" value="<?php echo $nip; ?>" name="nip">
										</div>
										<div class="form-group col-md-4">
											<label>No. Telp</label>
											<input type="text" class="form-control" value="<?php echo $no_telp; ?> "name="telp">
										</div>
										<div class="form-group col-md-4">
											<label>Email</label>
											<input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
										</div>

										<!-- input button -->
										<div class="col-xl-12 col-lg-5">
											<!-- Button trigger modal -->

											<button type="button" class="btn btn-facebook btn-block" data-toggle="modal" data-target="#simpan">
												Simpan Perubahan
											</button>

											<!-- Modal -->
											<div class="modal fade" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpanLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="simpanLabel">Simpan Perubahan</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															Data akan di perbarui, tekan Update untuk melanjutkan
														</div>
														<div class="modal-footer">
															<button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button type="submit" class="btn btn-primary" name="submit">Update</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- end button -->
									</div>

								</form>
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

	</body>

	</html>