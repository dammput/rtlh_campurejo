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
							<a class="collapse-item active" href="view.php">Lihat Data</a>
							<a class="collapse-item" href="penilaian.php">Penilaian Data</a>

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
						<a target="_blank" href="export_excel.php" class="btn btn-success btn-icon-split btn-sm">
						<span class="text">EXPORT KE EXCEL</span>
						</a>


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
										Abd karim
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
												<th style="text-align:center">Nama_Responden</th>
												<th style="text-align:center">Waktu_Surve</th>
												<th style="text-align:center">NIK</th>
												<th style="text-align:center">No_Telp</th>
												<th style="text-align:center">Sumber_Data</th>
												<th style="text-align:center">Kordinat</th>
												<th style="text-align:center">Gender</th>
												<th style="text-align:center">Kecamatan</th>
												<th style="text-align:center">Desa</th>
												<th style="text-align:center">Dusun</th>
												<th style="text-align:center">RT</th>
												<th style="text-align:center">RW</th>
												<th style="text-align:center">Alamat_Lengkap/Jln</th>
												<th style="text-align:center">Jumlah_Tabungan</th>
												<th style="text-align:center">Tabungan/Bulan</th>
												<th style="text-align:center">Jumlah_KK/rumah</th>
												<th style="text-align:center">Pekerjaan_Utama</th>
												<th style="text-align:center">Jumlah_Penghasilan</th>
												<th style="text-align:center">Range_Penghasilan</th>
												<th style="text-align:center">Pendidikan</th>
												<th style="text-align:center">Status</th>
												<th style="text-align:center">Kesehatan</th>
												<th style="text-align:center">Aset_Kepemilikan_Tanah</th>
												<th style="text-align:center">Aset_Kepemilikan_Rumah</th>
												<th style="text-align:center">Aset_Rumah_Lain</th>
												<th style="text-align:center">Aset_Tanah_Lain</th>
												<th style="text-align:center">Menerima_Bantuan_Lain</th>
												<th style="text-align:center">Nama_Bantuan_Lain</th>
												<th style="text-align:center">Jenis_Kawasan_Rumah</th>
												<th style="text-align:center">Luas_Rumah</th>
												<th style="text-align:center">Jumlah_Penghuni_Rumah</th>
												<th style="text-align:center">Kusen_Rumah</th>
												<th style="text-align:center">Jendela_Dan_Ventilasi_Rumah</th>
												<th style="text-align:center">Daun_Pintu_rumah</th>
												<th style="text-align:center">Kamar_Mandi</th>
												<th style="text-align:center">Saluran_Air</th>
												<th style="text-align:center">Pembuangan</th>
												<th style="text-align:center">Drainase_Rumah</th>
												<th style="text-align:center">Tempat_Sampah</th>
												<th style="text-align:center">Sumber_Air_Minum</th>
												<th style="text-align:center">Jarak_Air_Minum</th>
												<th style="text-align:center">Jarak_Sumber_Air_Minum</th>
												<th style="text-align:center">Material_Atap</th>
												<th style="text-align:center">Kondisi_Atap</th>
												<th style="text-align:center">Material_Dinding</th>
												<th style="text-align:center">Kondisi_Dinding</th>
												<th style="text-align:center">Material_Lantai</th>
												<th style="text-align:center">Kondisi_Lantai</th>
												<th style="text-align:center">Struktur_Lantai</th>
												<th style="text-align:center">Pondasi_Material</th>
												<th style="text-align:center">Kondisi_Material</th>
												<th style="text-align:center">Sloof_Material</th>
												<th style="text-align:center">Kondisi_Sloof</th>
												<th style="text-align:center">Material_Kolom</th>
												<th style="text-align:center">Kondisi_Kolom</th>
												<th style="text-align:center">Material_Rangka_Atap</th>
												<th style="text-align:center">Kondisi_Rangka_Atap</th>
												<th style="text-align:center">Proteksi_Kebakaran</th>
												<th style="text-align:center">Sarana_Proteksi_Kebakaran</th>
												<th style="text-align:center">Prasarana_Proteksi_Kebakaran</th>
												<th style="text-align:center">Nama_Responden</th>
												<th style="text-align:center">Edit_&_Cetak_Dokumen</th>

											</tr>
										</thead>
										<tfoot>
											<tr>
												<th style="text-align:center">Nama_Responden</th>												
												<th style="text-align:center">Waktu_Surve</th>
												<th style="text-align:center">NIK</th>
												<th style="text-align:center">No_Telp</th>
												<th style="text-align:center">Sumber_Data</th>
												<th style="text-align:center">Kordinat</th>
												<th style="text-align:center">Gender</th>
												<th style="text-align:center">Kecamatan</th>
												<th style="text-align:center">Desa</th>
												<th style="text-align:center">Dusun</th>
												<th style="text-align:center">RT</th>
												<th style="text-align:center">RW</th>
												<th style="text-align:center">Alamat_Lengkap/Jln</th>
												<th style="text-align:center">Jumlah_Tabungan</th>
												<th style="text-align:center">Tabungan/Bulan</th>
												<th style="text-align:center">Jumlah_KK/rumah</th>
												<th style="text-align:center">Pekerjaan_Utama</th>
												<th style="text-align:center">Jumlah_Penghasilan</th>
												<th style="text-align:center">Range_Penghasilan</th>
												<th style="text-align:center">Pendidikan</th>
												<th style="text-align:center">Status</th>
												<th style="text-align:center">Kesehatan</th>
												<th style="text-align:center">Aset_Kepemilikan_Tanah</th>
												<th style="text-align:center">Aset_Kepemilikan_Rumah</th>
												<th style="text-align:center">Aset_Rumah_Lain</th>
												<th style="text-align:center">Aset_Tanah_Lain</th>
												<th style="text-align:center">Menerima_Bantuan_Lain</th>
												<th style="text-align:center">Nama_Bantuan_Lain</th>
												<th style="text-align:center">Jenis_Kawasan_Rumah</th>
												<th style="text-align:center">Luas_Rumah</th>
												<th style="text-align:center">Jumlah_Penghuni_Rumah</th>
												<th style="text-align:center">Kusen_Rumah</th>
												<th style="text-align:center">Jendela_Dan_Ventilasi_Rumah</th>
												<th style="text-align:center">Daun_Pintu_rumah</th>
												<th style="text-align:center">Kamar_Mandi</th>
												<th style="text-align:center">Saluran_Air</th>
												<th style="text-align:center">Pembuangan</th>
												<th style="text-align:center">Drainase_Rumah</th>
												<th style="text-align:center">Tempat_Sampah</th>
												<th style="text-align:center">Sumber_Air_Minum</th>
												<th style="text-align:center">Jarak_Air_Minum</th>
												<th style="text-align:center">Jarak_Sumber_Air_Minum</th>
												<th style="text-align:center">Material_Atap</th>
												<th style="text-align:center">Kondisi_Atap</th>
												<th style="text-align:center">Material_Dinding</th>
												<th style="text-align:center">Kondisi_Dinding</th>
												<th style="text-align:center">Material_Lantai</th>
												<th style="text-align:center">Kondisi_Lantai</th>
												<th style="text-align:center">Struktur_Lantai</th>
												<th style="text-align:center">Pondasi_Material</th>
												<th style="text-align:center">Kondisi_Material</th>
												<th style="text-align:center">Sloof_Material</th>
												<th style="text-align:center">Kondisi_Sloof</th>
												<th style="text-align:center">Material_Kolom</th>
												<th style="text-align:center">Kondisi_Kolom</th>
												<th style="text-align:center">Material_Rangka_Atap</th>
												<th style="text-align:center">Kondisi_Rangka_Atap</th>
												<th style="text-align:center">Proteksi_Kebakaran</th>
												<th style="text-align:center">Sarana_Proteksi_Kebakaran</th>
												<th style="text-align:center">Prasarana_Proteksi_Kebakaran</th>
												<th style="text-align:center">Nama_Responden</th>
												<th style="text-align:center">Edit_&_Cetak_Dokumen</th>

											</tr>
										</tfoot>
										<tbody>
											<?php
											include '../koneksi.php';
											$query = "SELECT * FROM tabel_identitas_responden 
											JOIN tabel_aspek ON tabel_aspek.nik_aspek = tabel_identitas_responden.nik_responden 
											JOIN tabel_waktu ON tabel_waktu.nik_waktu = tabel_identitas_responden.nik_responden
											JOIN tabel_foto_ktp ON tabel_foto_ktp.nik_ktp = tabel_identitas_responden.nik_responden";

										
											// $query_alamat = "SELECT * FROM tabel_alamat_responden";
											$tampil = mysqli_query($koneksi, $query);
											// $eks_alamat = mysqli_query($koneksi, $query_alamat);
											while ($data  = mysqli_fetch_array($tampil)) {
												echo "<tr>";
												echo "<td bgcolor=\"#f4f4f4\" style=\"text-align:center\">" . $data['nama_lengkap'] . "</td>";
												// echo "<td bgcolor=\"#f4f4f4\" style=\"text-align:center\">" . "<img src='../assets/img/ktp/".$data['nama']."'style='width:200px; height:100px;'>" . "</td>";
												echo "<td style=\"text-align:center\">" . date('d-m-Y', strtotime($data["tanggal_surve"])) . "</td>";
												echo "<td style=\"text-align:center\">" . $data['nik_responden'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['no_telp'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['sumber_data'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['kordinat'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['jenis_kelamin'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['kecamatan'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['desa'] . "</td>";
												if($data['dusun']=='karang tumpuk'){
													echo "<td style=\"text-align:center\">" . "karang_tumpuk" . "</td>";
												}else{
													echo "<td style=\"text-align:center\">" . $data['dusun'] . "</td>";
												} ;
												echo "<td style=\"text-align:center\">" . $data['rt'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['rw'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['jalan'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['jumlah_tabungan'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['tabungan_perbulan'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['jumlah_kk'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['pekerjaan_utama'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['jumlah_penghasilan'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['range_penghasilan'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['pendidikan_terakhir'] . "</td>";
												if($data['status_perkawinan']=='Belum Menikah'){
													echo "<td style=\"text-align:center\">" . "Belum_Menikah" . "</td>";
												}else{
													echo "<td style=\"text-align:center\">" . $data['status_perkawinan'] . "</td>";
												} ;
												echo "<td style=\"text-align:center\">" . $data['status_fisik'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['status_kepemilikan_tanah'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['status_kepemilikan_rumah'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['aset_rumah_lain'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['aset_tanah_lain'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['bantuan_lain'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['nama_bantuan_lain'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['jenis_kawasan_rumah'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['luas_rumah'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['penghuni'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['kusen'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['jendela'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['pintu'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['kamar_mandi'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['saluran_air'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['pembuangan'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['drainase'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['tempat_sampah'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['sumber_air_minum'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['jarak_air_minum'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['sumber_listrik'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['material_atap'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['kondisi_atap'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['material_dinding'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['kondisi_dinding'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['material_lantai'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['kondisi_penutup_lantai'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['struktur_lantai'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['pondasi_material'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['pondasi_kondisi'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['sloof_material'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['sloof_kondisi'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['material_kolom_ring'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['kondisi_kolom_ring'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['material_rangka_atap'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['kondisi_rangka_atap'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['proteksi_kebakaran'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['sarana_proteksi_kebakaran'] . "</td>";
												echo "<td style=\"text-align:center\">" . $data['prasarana_proteksi_kebakaran'] . "</td>";
												echo "<td bgcolor=\"#f4f4f4\" style=\"text-align:center\">" . $data['nama_lengkap'] . "</td>";
												// echo "<td bgcolor=\"#f4f4f4\" style=\"text-align:center\">" . "<img src='../assets/img/ktp/".$data['nama']."'style='width:200px; height:100px;'>" . "</td>";
												echo "<td style=\"text-align:center\">" . 
												"<a href=\"edit.php?nik=$data[nik_responden]\" class=\"btn btn-facebook btn-icon-split btn-sm\" target=\"_blank\">
												<span class=\"icon text-white-50\"><i class=\"fas fa-arrow-right\"></i></span>
												<span class=\"text\">Edit</span>
												</a>" ." ".
												"<a href=\"cetak.php?nik=$data[nik_responden]\" class=\"btn btn-danger btn-icon-split btn-sm\" target=\"_blank\">
												<span class=\"text\">Print Data</span>
												</a>" ."</td>";
												echo "</tr>";
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