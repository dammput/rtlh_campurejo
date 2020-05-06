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




	</head>

	<body id="page-top">

		<!-- begin main content -->
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
							<a class="collapse-item active" href="input.php">Form Input</a>

							<h6 class="collapse-header">Data :</h6>
							<a class="collapse-item" href="view.php">View Data</a>
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
						<h6 class="m-3 font-weight-bold text-primary">FORM INPUT DATA RESPONDEN</h6>
						<!-- Sidebar Toggle (Topbar) -->
						<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
						</button>


						<!-- Topbar Navbar -->
						<ul class="navbar-nav ml-auto">


							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
							</li>



							<!-- Nav Item - Messages -->
							<li class="nav-item dropdown no-arrow mx-1">
								<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-envelope fa-fw"></i>
									<!-- Counter - Messages -->
									<span class="badge badge-danger badge-counter">1</span>
								</a>
								<!-- Dropdown - Messages -->
								<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
									<h6 class="dropdown-header">
										Message Center
									</h6>
									<a class="dropdown-item d-flex align-items-center" href="#">
										<div class="dropdown-list-image mr-3">
											<img class="rounded-circle" src="../assets/img/60x60.png" alt="">
											<div class="status-indicator bg-success"></div>
										</div>
										<div class="font-weight-bold">
											<div class="text-truncate">bakal diisi dengan pesan dari kades</div>
											<div class="small text-gray-500">menunjukan waktu pesan</div>
										</div>
									</a>

									<a class="dropdown-item text-center small text-gray-500" href="pesan.php">Read More Messages</a>
								</div>
							</li>

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
									<a class="dropdown-item" href="#">
										<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
										Edit Profile
									</a>
									<a class="dropdown-item" href="#">
										<i class="fas fa-envelope fa-fw mr-2 text-gray-400"></i>
										Pesan
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
					<!-- Content Row -->
					<div class="container-fluid">
						<!-- form input data -->
						<form action="input.php" method="post" class="needs-validation" novalidate>

							<!-- identitas responden -->
							<div class="row">
								<div class="col-xl-12 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-4">
										<!-- Card Header-->
										<div class="card-header py-3">
											<h6 class="m-3 font-weight-bold text-primary">IDENTITAS RESPONDEN</h6>
										</div>
									</div>
								</div>
							</div>
							<!-- row 1-->
							<div class="row">
								<div class="col-xl-6 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-4">
										<!-- Card Header-->
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Identitas Responden</h6>
										</div>
										<!-- isi kuisioner -->
										<div class="card-body">

											<div class="form-row">
												<div class="form-group col-md-5">
													<label>Nama Lengkap</label>
													<input type="text" class="form-control" placeholder="nama responden.." name="nama_lengkap" required>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>NIK</label>
													<input type="text" class="form-control" placeholder="01672.." name="nik" required>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Gender</label>
													<select class="form-control" name="jenis_kelamin" required>
														<option value="laki-laki" selected="selected">LK</option>
														<option value="perempuan">PR</option>
													</select>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-5">
													<label>Nomer Telp.</label>
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">+62</span>
														<input type="text" class="form-control" placeholder="nomer telp" name="no_telp" required>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-4">
													<label>Koordinat Rumah</label>
													<input type="text" class="form-control" placeholder="isi jika ada.." name="kordinat">
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Sumber Data</label>
													<select class="form-control" name="sumber_data" required>
														<option value="bdt">BDT</option>
														<option value="non bdt">NON BDT</option>
													</select>
												</div>
											</div>

										</div>

									</div>
								</div>
								<!-- end input-->

								<div class="col-xl-6 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-4">
										<!-- Card Header-->
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Upload Foto</h6>
										</div>
										<!-- isi kuisioner -->
										<div class="card-body">
											<label>Foto KTP</label>
											<div class="form-row">
												<div class="input-group mb-3">

													<div class="input-group-prepend">
														<span class="input-group-text">Upload</span>
													</div>
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="inputGroupFile01" name="foto_ktp">
														<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
													</div>
												</div>
											</div>
											<label>Foto Rumah</label>
											<div class="form-row">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">Upload</span>
													</div>
													<div class="custom-file">
														<input type="file" class="custom-file-input" id="inputGroupFile01" name="foto_rumah">
														<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
													</div>
												</div>

											</div>

										</div>
									</div>
									<!-- end -->
								</div>
								<!-- end pengisian foto-->
							</div>
							<!-- end row 1 -->

							<!-- row 2 -->
							<div class="row">
								<div class="col-xl-12 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-4">
										<!-- Card Header-->
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Alamat Responden</h6>
										</div>
										<!-- isi kuisioner -->
										<div class="card-body">

											<div class="form-row">
												<div class="form-group col-md-5">
													<label>Alamat</label>
													<input type="text" class="form-control" placeholder="jl. namajalan" name="jalan" required>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Dusun</label>
													<select class="form-control" name="dusun" required>
														<option value="campurejo" selected="selected">Campurejo</option>
														<option value="rejodadi">Dusun Rejodadi</option>
														<option value="sidorejo">Dusun Sidorejo</option>
														<option value="karang tumpuk"> Dusun Karang Tumpuk</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>

												<div class="form-group col-md-2">
													<label>Desa</label>
													<input type="text" name="desa" class="form-control" value="campurejo" disabled>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>

												<div class="form-group col-md-2">
													<label>Kecamatan</label>
													<input type="text" name="kecamatan" class="form-control" value="panceng" disabled>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>

												<div class="form-group col-md-8	">

												</div>

												<div class="form-group col-md-4">
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text" id="">RT</span>
														</div>
														<select class="form-control" name="rt" required>
															<option value="1" selected="selected">01</option>
															<option value="2">02</option>
															<option value="3">03</option>
															<option value="4">04</option>
															<option value="5">05</option>
															<option value="6">06</option>
															<option value="7">07</option>
															<option value="8">08</option>
															<option value="9">09</option>
															<option value="10">10</option>
														</select>
														<div class="input-group-prepend">
															<span class="input-group-text" id="">RW</span>
														</div>
														<select class="form-control" name="rw" required>
															<option value="1" selected="selected">01</option>
															<option value="2">02</option>
															<option value="3">03</option>
															<option value="4">04</option>
															<option value="5">05</option>
															<option value="6">06</option>
															<option value="7">07</option>
															<option value="8">08</option>
															<option value="9">09</option>
															<option value="10">10</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>

													</div>
												</div>



											</div>
											<!-- end row  -->

										</div>
									</div>
									<!-- end input-->
								</div>
							</div>
							<!-- end row 2 -->

							<!-- start row 3 -->
							<div class="row">
								<div class="col-xl-12 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-4">
										<!-- Card Header-->
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Detail Responden</h6>
										</div>
										<!-- isi kuisioner -->
										<div class="card-body">

											<div class="form-row">
												<div class="form-group col-md-2">
													<label>Jumlah Tabungan</label>
													<div class="input-group-prepend">
														<span class="input-group-text">Rp.</span>
														<input type="text" class="form-control" placeholder="1000000.." name="jumlah_tabungan" required>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Tabungan Perbulan</label>
													<div class="input-group-prepend">
														<select class="form-control" name="tabungan_perbulan" required>
															<option value="1" selected="selected">0 - 1.2 Juta</option>
															<option value="2">1.3 - 1.8 Juta</option>
															<option value="3">1.9 - 2.1 Juta</option>
															<option value="4">2.2 - 2.6 Juta</option>
															<option value="5">2.7 - 3.1 Juta</option>
															<option value="6">3.2 - 3.6 Juta</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Jumlah KK dalam 1 rumah</label>
													<div class="input-group-prerend">
														<input type="number" class="form-control" name="jumlah_kk" placeholder="1">
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Pekerjaan Utama</label>
													<div class="input-group-prepend">
														<select class="form-control" name="pekerjaan_utama" required>
															<option value="1" selected="selected">Lainnya</option>
															<option value="2">Tidak Bekerja</option>
															<option value="3">Wirausaha</option>
															<option value="4">Petani</option>
															<option value="5">Tukang/Montir</option>
															<option value="6">Buruh harian</option>
															<option value="7">karyawan</option>
															<option value="8">Honorer</option>
															<option value="9">Ojek/Supir</option>
															<option value="10">Pramuwisma</option>
															<option value="11">Nelayan</option>
															<option value="12">PNS</option>
															<option value="13">Pensiunan</option>
															<option value="14">BUMN/D</option>
															<option value="15">TNI/Polri</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Range Penghasilan</label>
													<div class="input-group-prepend">
														<select class="form-control" name="range_penghasilan" required>
															<option value="1" selected="selected">0 - 1.2 Juta</option>
															<option value="2">1.3 - 1.8 Juta</option>
															<option value="3">1.9 - 2.1 Juta</option>
															<option value="4">2.2 - 2.6 Juta</option>
															<option value="5">2.7 - 3.1 Juta</option>
															<option value="6">3.2 - 3.6 Juta</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-groub col-md-2">
													<label>Jumlah Penghasilan</label>
													<div class="input-group-prepend">
														<span class="input-group-text">Rp.</span>
														<input type="text" class="form-control" name="jumlah_penghasilan" placeholder="1000000.." required>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Pendidikan Terakhir</label>
													<div class="input-group-prepend">
														<select class="form-control" name="pendidikan_terakhir" required>
															<option value="1">Tidak Punya Ijazah</option>
															<option value="2">SD/Sederajat</option>
															<option value="3" selected="selected">SMP/Sederajat</option>
															<option value="4">SMA/Sederajat</option>
															<option value="5">D1/D2/D3</option>
															<option value="6">D4/S1</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Status Perkawinan</label>
													<div class="input-group-prepend">
														<select class="form-control" name="status_perkawinan" required>
															<option value="1">Belum Menikah</option>
															<option value="2" selected="selected">Menikah</option>
															<option value="3">Janda/Duda</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Status Fisik</label>
													<div class="input-group-prepend">
														<select class="form-control" name="status_fisik" required>
															<option value="1" selected="selected">Sehat</option>
															<option value="2">Sakit</option>
															<option value="3">Disabilita</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Sts Kepemilikan Tanah</label>
													<div class="input-group-prepend">
														<select class="form-control" name="status_kepemilikan_tanah" required>
															<option value="1" selected="selected">Milik Sendiri</option>
															<option value="2">Bukan Milik Sendiri</option>
															<option value="3">Tanah Negara</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Sts Kepemilikan Rumah</label>
													<div class="input-group-prepend">
														<select class="form-control" name="status_kepemilikan_rumah" required>
															<option value="1" selected="selected">Milik Sendiri</option>
															<option value="2">Bukan Milik Sendiri</option>
															<option value="3">Kontrak/Sewa</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Aset Rumah Lain</label>
													<div class="input-group-prepend">
														<select class="form-control" name="aset_rumah_lain" required>
															<option value="1" selected="selected">Ada</option>
															<option value="2">Tidak Ada</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Aset Tanah Lain</label>
													<div class="input-group-prepend">
														<select class="form-control" name="aset_tanah_lain" required>
															<option value="1" selected="selected">Ada</option>
															<option value="2">Tidak Ada</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-4">
													<label>Pernah Dapat bantuan Lain</label>
													<div class="input-group-prepend">
														<select class="form-control" name="bantuan_lain" required>
															<option value="1">Ya > 5 Tahun Yang Lalu</option>
															<option value="2">Ya < 5 Tahun Yang Lalu</option> <option value="3" selected="selected">Belum Pernah</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Nama bantuan Lain</label>
													<div class="input-group-prepend">
														<input type="text" class="form-control" name="nama_bantuan_lain" placeholder="isi jika dapat">
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-4">
													<label>Jenis Kawasan Rumah</label>
													<div class="input-group-prepend">
														<select class="form-control" name="jenis_kawasan_rumah" required>
															<option value="1">Lainnya</option>
															<option value="2">Kawasan Rawan Air</option>
															<option value="3" selected="selected">Kawasan Pesisir/Nelayan</option>
															<option value="4">Kawasan Perbatasan</option>
															<option value="5">Daerah Tertinggal/Terpencil</option>
															<option value="6">Kawasan Ekonomi Khusus</option>
															<option value="7">Kawasan Kumuh</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
											</div>
										</div>



									</div>
									<!-- end card  -->
								</div>
								<!-- end cols -->
							</div>
							<!-- end row 3-->

							<!-- konisi fisik rumah -->
							<div class="row">
								<div class="col-xl-12 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-4">
										<!-- Card Header-->
										<div class="card-header py-3">
											<h6 class="m-3 font-weight-bold text-primary">KONDISI FISIK RUMAH</h6>
										</div>
									</div>
								</div>
							</div>

							<!-- row 4 -->
							<div class="row">
								<div class="col-xl-12 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-4">
										<!-- Card Header-->
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Aspek Keselamatan</h6>
										</div>
										<!-- isi kuisioner -->
										<div class="card-body">
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Material Pondasi</label>
													<select class="form-control" name="pondasi_material" required>
														<option value="1" selected="selected">Tidak Ada</option>
														<option value="2">Kayu</option>
														<option value="3">Batu Kali</option>
														<option value="4">Batu Kambung</option>
														<option value="5">Bambu</option>
														<option value="6">Beton</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Pondasi</label>
													<select class="form-control" name="pondasi_kondisi" required>
														<option value="1" selected="selected">Kondisi Baik</option>
														<option value="2">Rusak Ringan</option>
														<option value="3">Rusak Sedang/Sebagian</option>
														<option value="4">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Material Sloof</label>
													<select class="form-control" name="sloof_material" required>
														<option value="1" selected="selected">Tidak Ada</option>
														<option value="2">Kayu</option>
														<option value="3">Beton Bertulang</option>
														<option value="4">Batu Bata</option>
														<option value="5">Bambu</option>
														<option value="6">Semen</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Sloof</label>
													<select class="form-control" name="sloof_kondisi" required>
														<option value="1" selected="selected">Kondisi Baik</option>
														<option value="2">Rusak Ringan</option>
														<option value="3">Rusak Sedang/Sebagian</option>
														<option value="4">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Material Kolom Dan Ring Balok</label>
													<select class="form-control" name="material_kolom_ring" required>
														<option value="1" selected="selected">Tidak Ada</option>
														<option value="2">Kayu</option>
														<option value="3">Beton Bertulang</option>
														<option value="4">Baja Ringan</option>
														<option value="5">Bambu</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Kolom Dan Ring Balok</label>
													<select class="form-control" name="kondisi_kolom_ring" required>
														<option value="1" selected="selected">Kondisi Baik</option>
														<option value="2">Rusak Ringan</option>
														<option value="3">Rusak Sedang/Sebagian</option>
														<option value="4">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Material Rangka Atap</label>
													<select class="form-control" name="material_rangka_atap" required>
														<option value="1" selected="selected">Tidak Ada</option>
														<option value="2">Kayu</option>
														<option value="3">Beton Bertulang</option>
														<option value="4">Baja Ringan</option>
														<option value="5">Bambu</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Rangka Atap</label>
													<select class="form-control" name="kondisi_rangka_atap" required>
														<option value="1" selected="selected">Kondisi Baik</option>
														<option value="2">Rusak Ringan</option>
														<option value="3">Rusak Sedang/Sebagian</option>
														<option value="4">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Proteksi Kebakaran</label>
													<select class="form-control" name="proteksi_kebakaran" required>
														<option value="1" selected="selected">Tidak Ada</option>
														<option value="2">Ada</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Sarana Proteksi</label>
													<select class="form-control" name="sarana_proteksi_kebakaran" required>
														<option value="1" selected="selected">Lainnya</option>
														<option value="2">PMK/APAR</option>
														<option value="3">Detektor Asap</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Prasarana Proteksi</label>
													<select class="form-control" name="prasarana_proteksi_kebakaran" required>
														<option value="1" selected="selected">Lainnya</option>
														<option value="2">Hidran/Tangki/Sumber Air</option>
														<option value="3">Jalan Untuk Damkar</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
											</div>
										</div>


									</div>
								</div>
								<!-- end input-->
							</div>
							<!-- end row 4 -->

							<!-- row 5 -->
							<div class="row">
								<div class="col-xl-12 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-4">
										<!-- Card Header-->
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Aspek Kesehatan</h6>
										</div>
										<!-- isi kuisioner -->
										<div class="card-body">
											<div class="form-row">
												<div class="form-group col-md-1">
													<label>Kusen</label>
													<select class="form-control" name="kusen" required>
														<option value="1" selected="selected">Tidak Ada</option>
														<option value="2">Ada</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Jendela Dan Ventilasi</label>
													<select class="form-control" name="jendela" required>
														<option value="1" selected="selected">Tidak Ada</option>
														<option value="2">Memenuhi, Kondisi Baik</option>
														<option value="3">Memenuhi, Kondisi Rusak</option>
														<option value="4">Tidak Memenuhi, Kondisi Baik</option>
														<option value="5">Tidak Memenuhi, Kondisi Rusak</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-1">
													<label>Daun Pintu</label>
													<select class="form-control" name="pintu" required>
														<option value="1">Tidak Ada</option>
														<option value="2" selected="selected">Ada</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Kamar Mandi</label>
													<select class="form-control" name="kamar_mandi" required>
														<option value="1" selected="selected">Tidak Ada</option>
														<option value="2">Sendiri</option>
														<option value="3">Bersama/Umum</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Saluran Air Kotor</label>
													<select class="form-control" name="saluran_air" required>
														<option value="1" selected="selected">Tidak Ada</option>
														<option value="2">Sendiri</option>
														<option value="3">Bersama/Umum</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Pembuangan Akhir Tinja</label>
													<select class="form-control" name="pembuangan" required>
														<option value="1" selected="selected">Lainnya</option>
														<option value="2">Septictank</option>
														<option value="3">SPAL</option>
														<option value="4">Lubang Tanah</option>
														<option value="5">Kolam/Sawah/Sungai/Daun</option>
														<option value="6">Pantai/Tanah Lapang/Kebun</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Drainase</label>
													<select class="form-control" name="drainase" required>
														<option value="1" selected="selected">Ada, Kondisi Baik</option>
														<option value="2">Ada, Kondisi Rusak</option>
														<option value="3">Tidak Ada</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Tempat Sampah</label>
													<select class="form-control" name="tempat_sampah" required>
														<option value="1">Tidak Ada</option>
														<option value="2" selected="selected">Ada</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Sumber Air Minum</label>
													<select class="form-control" name="sumber_air_minum" required>
														<option value="1" selected="selected">Air Kemasan/Isi Ulang</option>
														<option value="2">PDAM</option>
														<option value="3">Sumur</option>
														<option value="4">Mat Air</option>
														<option value="5">Lainnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Jarak Sumber Air Minum</label>
													<select class="form-control" name="jarak_air_minum" required>
														<option value="1" selected="selected">> 10m</option>
														<option value="2">< 10m</option>
													</select> 
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Sumber Listrik</label>
													<select class="form-control" name="sumber_listrik" required>
														<option value="1" selected="selected">Listrik PLN Dengan Meteran</option>
														<option value="2">Listrik PLN Tanpa Meteran</option>
														<option value="3">Listrik Non PLN</option>
														<option value="4">Bukan Listrik</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end row 5 -->

							<!-- row 6 -->
							<div class="row">
								<div class="col-xl-12 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-4">
										<!-- Card Header-->
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Aspek Persyaratan Luas & Kebutuhan Rumah</h6>
										</div>
										<!-- isi kuisioner -->
										<div class="card-body">
											<div class="form-row">
												<div class="form-group col-md-6	">
													<label>Luas Rumah</label>
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">M<sup>2</sup></span>
														<input type="text" name="luas_rumah" class="form-control" required>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-6	">
													<label>Jumlah Penghuni Rumah</label>
													<input type="number" name="jumlah_penghuni" class="form-control" required>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
											</div>
											<!-- end row  -->
										</div>
									</div>
									<!-- end input-->
								</div>
							</div>
							<!-- end row 6 -->

							<!-- row 7 -->
							<div class="row">
								<div class="col-xl-12 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-4">
										<!-- Card Header-->
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Aspek Komponen Bahan Bangunan Sesuai Konteks Lokal</h6>
										</div>
										<!-- isi kuisioner -->
										<div class="card-body">
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Material Penutup Atap</label>
													<select class="form-control" name="material_atap" required>
														<option value="1" selected="selected">Genteng</option>
														<option value="2">Esbes</option>
														<option value="3">Seng</option>
														<option value="4">Jerami/Rumbia</option>
														<option value="5">Metal Sheets</option>
														<option value="6">Sirap</option>
														<option value="7">Trileks</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Penutup Atap</label>
													<select class="form-control" name="kondisi_atap" required>
														<option value="1" selected="selected">Baik</option>
														<option value="2">Rusak Ringan</option>
														<option value="3">Rusak Sedang/Sebagian</option>
														<option value="4">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Material Dinding Pengisi</label>
													<select class="form-control" name="material_dinding" required>
														<option value="1" selected="selected">Tembok</option>
														<option value="2">GRC(Esbes)</option>
														<option value="3">Papan/Tripleks</option>
														<option value="4">Anyaman Bambu</option>
														<option value="5">Kayu</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Dinding Pengisi</label>
													<select class="form-control" name="kondisi_dinding" required>
														<option value="1" selected="selected">Kondisi Baik</option>
														<option value="2">Rusak Ringan</option>
														<option value="3">Rusak Sedang/Sebagian</option>
														<option value="4">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Material Penutup Lantai</label>
													<select class="form-control" name="material_lantai" required>
														<option value="1" selected="selected">Keramik</option>
														<option value="2">Marmer/Granit</option>
														<option value="3">Ubin/Tegel</option>
														<option value="4">Plesteran</option>
														<option value="5">Bambu</option>
														<option value="6">Kayu</option>
														<option value="7">Tanah</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Kondisi Penutup Lantai</label>
													<select class="form-control" name="kondisi_lantai" required>
														<option value="1" selected="selected">Kondisi Baik</option>
														<option value="2">Rusak Ringan</option>
														<option value="3">Rusak Sedang/Sebagian</option>
														<option value="4">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Struktur Bawah Lantai</label>
													<select class="form-control" name="struktur_lantai" required>
														<option value="1" selected="selected">Kondisi Baik</option>
														<option value="2">Rusak Ringan</option>
														<option value="3">Rusak Sedang/Sebagian</option>
														<option value="4">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end input-->
							</div>
							<!-- end row 7 -->

							<!-- input button -->
							<div class="col-xl-6 col-lg-5">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
									Simpan Data
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Simpan Data</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Periksa lagi, apakah data yang dimasukkan sudah benar. <br>
												tekan save untuk melanjutkan.
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary" name="submit">Save changes</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end button -->
							<?php
							include '../koneksi.php';
							if (isset($_POST['submit'])) {

								// tabel identitas responden
								$nama_lengkap	= $_POST['nama_lengkap'];
								$nik			= $_POST['nik'];
								$no_telp		= $_POST['no_telp'];
								$kordinat		= $_POST['sumber_data'];
								$jenis_kelamin	= $_POST['jenis_kelamin'];
								$sumber_data	= $_POST['sumber_data'];
								$jenis_kelamin	= $_POST['jenis_kelamin'];
								// tabel responden
								$jumlah_tabungan	= $_POST['jumlah_tabungan'];
								$jumlah_kk			= $_POST['jumlah_kk'];
								$pekerjaan_utama	= $_POST['pekerjaan_utama'];
								$jumlah_penghasilan	= $_POST['jumlah_penghasilan'];
								$range_penghasilan	= $_POST['range_penghasilan'];
								$pendidikan_terakhir= $_POST['pendidikan_terakhir'];
								$status_perkawinan	= $_POST['status_perkawinan'];
								$status_fisik		= $_POST['status_fisik'];
								$status_kepemilikan_tanah= $_POST['status_kepemilikan_tanah'];
								$status_kepemilikan_rumah= $_POST['status_kepemilikan_rumah'];
								$aset_rumah_lain	= $_POST['aset_rumah_lain'];
								$aset_tanah_lain	= $_POST['aset_tanah_lain'];
								$bantuan_lain		= $_POST['bantuan_lain'];
								$nama_bantuan_lain	= $_POST['nama_bantuan_lain'];
								$jenis_kawasan_rumah= $_POST['jenis_kawasan_rumah'];
								//tabel alamat responden
								$jalan		= $_POST['jalan'];
								$dusun		= $_POST['dusun'];
								$rt			= $_POST['rt'];
								$rw			= $_POST['rw'];
								$desa		= $_POST['desa'];
								$kecamatan	= $_POST['kecamatan'];
								//tabel foto ktp
								$nama_pemilik	= $_POST['nama_pemilik'];
								$nama_file		= $_POST['nama_file'];
								$size			= $_POST['size'];
								//tabel foto rumah
								$nama_pemilik	= $_POST['nama_pemilik'];
								$nama_file		= $_POST['nama_file'];
								$size			= $_POST['size'];
								//tabel aspek persyaratan
								$luas_rumah		= $_POST['luas_rumah'];
								$jumlah_penghuni= $_POST['jumlah_penghuni'];
								//tabel aspek kesehatan
								$kusen			= $_POST['kusen'];
								$jendela		= $_POST['jendela'];
								$pintu			= $_POST['pintu'];
								$kamar_mandi	= $_POST['kamar_mandi'];
								$saluran_air	= $_POST['saluran_air'];
								$pembuangan		= $_POST['pembuangan'];
								$drainase		= $_POST['drainase'];
								$tempat_sampah	= $_POST['tempat_sampah'];
								$sumber_air_minum	= $_POST['sumber_air_minum'];
								$jarak_air_minum	= $_POST['jarak_air_minum'];
								$jarak_sumber		= $_POST['jarak_sumber'];
								//tabel aspek bangunan
								$material_atap	= $_POST['material_atap'];
								$kondisi_atap	= $_POST['kondisi_atap'];
								$material_dinding = $_POST['material_dinding'];
								$kondisi_dinding  = $_POST['kondisi_dinding'];
								$material_lantai  = $_POST['material_lantai'];
								$penutup_lantai   = $_POST['penutup_lantai'];
								$struktur_lantai  = $_POST['struktur_lantai'];
								//tabel aspek keselamatan
								$pondasi_material		= $_POST['kondisi_material'];
								$pondasi_kondisi		= $_POST['pondasi_kondisi'];
								$sloof_material			= $_POST['sloof_material'];
								$sloof_kondisi			= $_POST['sloof_kondisi'];
								$material_kolom_ring	= $_POST['material_kolom_ring'];
								$kondisi_kolom_ring		= $_POST['kondisi_kolom_ring'];
								$material_rangka_atap	= $_POST['material_rangka_atap'];
								$kondisi_rangka_atap	= $_POST['kondisi_rangka_atap'];
								$proteksi_kebakaran		= $_POST['proteksi_kebakaran'];
								$sarana_proteksi_kebakaran		= $_POST['sarana_proteksi'];
								$prasarana_proteksi_kebakaran	= $_POST['prasarana_proteksi'];
								//waktu
								$tanggal_surve	= ['tanggal_surve'];






								$query = "INSERT INTO tabel_identitas_responden (nama_lengkap,nik,no_telp,kordinat,sumber_data,jenis_kelamin)
																			VALUE ('$nama_lengkap','$nik','$no_telp','$kordinat','$sumber_data','$jenis_kelamin')";
								$hasil = mysqli_query($koneksi, $query);

								//validasi data masuk
								if ($hasil) {
									echo "<script>alert('input data berhasil');</script>";
									echo '<meta http-equiv="refresh" content="0;url=input.php" />';
								} else {
									echo "input data gagal";
								}
							}
							?>
						</form>
						<!-- end form -->
						<br>	
				</div>
			</div>
		</div>
		<!-- End of Main Content -->

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

		<!-- upload Modal-->
		<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin menyimpan data ?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">data yang disimpan sudah bisa diedit lagi kecuali dengan persetujuan kepala desa.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<input class="btn btn-primary" type="button" value="simpan">

					</div>
				</div>
			</div>
		</div>

		<!-- validasi JS -->
		<script>
			// Disable form submissions if there are invalid fields
			(function() {
				'use strict';
				window.addEventListener('load', function() {
					// Get the forms we want to add validation styles to
					var forms = document.getElementsByClassName('needs-validation');
					// Loop over them and prevent submission
					var validation = Array.prototype.filter.call(forms, function(form) {
						form.addEventListener('submit', function(event) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
							form.classList.add('was-validated');
						}, false);
					});
				}, false);
			})();
		</script>
		<!-- end validasi js -->



		<!-- Bootstrap core JavaScript-->
		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="../assets/js/sb-admin-2.min.js"></script>

	</body>

	</html>