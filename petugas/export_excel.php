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

	</head>

	<body id="page-top">
		<style type="text/css">
			body {
				font-family: sans-serif;
			}

			table {
				margin: 20px auto;
				border-collapse: collapse;
			}

			table th,
			table td {
				border: 1px solid #3c3c3c;
				padding: 3px 8px;

			}

			a {
				background: blue;
				color: #fff;
				padding: 8px 10px;
				text-decoration: none;
				border-radius: 2px;
			}
		</style>

		<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data Surve.xls");
		?>
		<div id="content-wrapper" class="d-flex flex-column">


			<table table rules="all" style="border: 1px black;">
				<thead>
					<tr>
						<th style="text-align:center">Nama Responden</th>
						<th style="text-align:center">Waktu Surve</th>
						<th style="text-align:center">NIK</th>
						<th style="text-align:center">No Telp</th>
						<th style="text-align:center">Sumber Data</th>
						<th style="text-align:center">Kordinat</th>
						<th style="text-align:center">Gender</th>
						<th style="text-align:center">Kecamatan</th>
						<th style="text-align:center">Desa</th>
						<th style="text-align:center">Dusun</th>
						<th style="text-align:center">RT</th>
						<th style="text-align:center">RW</th>
						<th style="text-align:center">Alamat Lengkap/Jln</th>
						<th style="text-align:center">Jumlah Tabungan</th>
						<th style="text-align:center">Tabungan/Bulan</th>
						<th style="text-align:center">Jumlah KK/rumah</th>
						<th style="text-align:center">Pekerjaan Utama</th>
						<th style="text-align:center">Jumlah Penghasilan</th>
						<th style="text-align:center">Range Penghasilan</th>
						<th style="text-align:center">Pendidikan</th>
						<th style="text-align:center">Status</th>
						<th style="text-align:center">Kesehatan</th>
						<th style="text-align:center">Aset Kepemilikan Tanah</th>
						<th style="text-align:center">Aset Kepemilikan Rumah</th>
						<th style="text-align:center">Aset Rumah Lain</th>
						<th style="text-align:center">Aset Tanah Lain</th>
						<th style="text-align:center">Menerima Bantuan Lain</th>
						<th style="text-align:center">Nama Bantuan Lain</th>
						<th style="text-align:center">Jenis Kawasan Rumah</th>
						<th style="text-align:center">Luas Rumah</th>
						<th style="text-align:center">Jumlah Penghuni Rumah</th>
						<th style="text-align:center">Kusen Rumah</th>
						<th style="text-align:center">Jendela Dan Ventilasi Rumah</th>
						<th style="text-align:center">Daun Pintu rumah</th>
						<th style="text-align:center">Kamar Mandi</th>
						<th style="text-align:center">Saluran Air</th>
						<th style="text-align:center">Pembuangan</th>
						<th style="text-align:center">Drainase Rumah</th>
						<th style="text-align:center">Tempat Sampah</th>
						<th style="text-align:center">Sumber Air Minum</th>
						<th style="text-align:center">Jarak Air Minum</th>
						<th style="text-align:center">Jarak Sumber Air Minum</th>
						<th style="text-align:center">Material Atap</th>
						<th style="text-align:center">Kondisi Atap</th>
						<th style="text-align:center">Material Dinding</th>
						<th style="text-align:center">Kondisi Dinding</th>
						<th style="text-align:center">Material Lantai</th>
						<th style="text-align:center">Kondisi Lantai</th>
						<th style="text-align:center">Struktur Lantai</th>
						<th style="text-align:center">Pondasi Material</th>
						<th style="text-align:center">Kondisi Material</th>
						<th style="text-align:center">Sloof Material</th>
						<th style="text-align:center">Kondisi Sloof</th>
						<th style="text-align:center">Material Kolom</th>
						<th style="text-align:center">Kondisi Kolom</th>
						<th style="text-align:center">Material Rangka Atap</th>
						<th style="text-align:center">Kondisi Rangka Atap</th>
						<th style="text-align:center">Proteksi Kebakaran</th>
						<th style="text-align:center">Sarana Proteksi Kebakaran</th>
						<th style="text-align:center">Prasarana Proteksi Kebakaran</th>

					</tr>
				</thead>
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
						echo "<td style=\"text-align:center\">" . $data["tanggal_surve"] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['nik_responden'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['no_telp'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['sumber_data'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['kordinat'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['jenis_kelamin'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['kecamatan'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['desa'] . "</td>";
						if ($data['dusun'] == 'karang tumpuk') {
							echo "<td style=\"text-align:center\">" . "karang_tumpuk" . "</td>";
						} else {
							echo "<td style=\"text-align:center\">" . $data['dusun'] . "</td>";
						};
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
						if ($data['status_perkawinan'] == 'Belum Menikah') {
							echo "<td style=\"text-align:center\">" . "Belum_Menikah" . "</td>";
						} else {
							echo "<td style=\"text-align:center\">" . $data['status_perkawinan'] . "</td>";
						};
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
					};
					?>
				</tbody>
			</table>

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

	</body>

	</html>