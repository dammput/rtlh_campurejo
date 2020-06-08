	<!-- cek apakah sudah login -->
	<?php
	session_start();
	if ($_SESSION['level'] !== "kades") {
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


			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th style="text-align:center">NO</th>
						<th style="text-align:center">NAMA LENGKAP</th>
						<th style="text-align:center">NIK</th>
						<th style="text-align:center">DESA</th>
						<th style="text-align:center">KECAMATAN</th>
						<th style="text-align:center">DUSUN</th>
						<th style="text-align:center">SUMBER DATA</th>
						<th style="text-align:center">JENIS KELAMIN</th>
						<th style="text-align:center">RT</th>
						<th style="text-align:center">RW</th>
						<th style="text-align:center">VEKTOR_S</th>
						<th style="text-align:center">VEKTOR_V</th>
						<th style="text-align:center">KELAYAKAN</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include '../koneksi.php';
					$query = "SELECT * FROM tabel_identitas_responden 
													JOIN tabel_aspek ON tabel_aspek.nik_aspek = tabel_identitas_responden.nik_responden
													JOIN tabel_score ON tabel_score.nik_score = tabel_identitas_responden.nik_responden";
					$tampil = mysqli_query($koneksi, $query);
					$no = 1;
					$query_vektor = "SELECT SUM(vektor_s) AS hasil_vektor FROM tabel_score";
					$hasil_vektor = mysqli_query($koneksi, $query_vektor);
					$array_vektor_v  = mysqli_fetch_array($hasil_vektor);
					$sum_vektor_v = $array_vektor_v['hasil_vektor'];
					//   print_r($sum_vektor_v);

					//   $query_v = "SELECT `vektor_s` FROM `tabel_score`";
					//   $hasil_v = mysqli_query($koneksi,$query_v);
					//   $ar = mysqli_fetch_array($hasil_v);
					//   print_r($ar);
					//   exit;
					//   $total_vektor_v = $vektor_v['total_fix'];

					while ($data  = mysqli_fetch_array($tampil)) {
						echo "<tr>";
						echo "<th style=\"text-align:center\">" . $no . "</th>";
						echo "<td style=\"text-align:center\">" . $data['nama_lengkap'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['nik_responden'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['desa'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['kecamatan'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['dusun'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['sumber_data'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['jenis_kelamin'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['rt']  . "</td>";
						echo "<td style=\"text-align:center\">" . $data['rw']  . "</td>";
						echo "<td style=\"text-align:center\">" . $data['vektor_s'] . "</td>";
						echo "<td style=\"text-align:center\">" . $data['vektor_s'] / $sum_vektor_v . "</td>";
						if ($data['vektor_s'] / $sum_vektor_v > 0.24) {
							echo "<td style=\"text-align:center\">" . "<div class=\"btn btn-success btn-icon-split btn-sm\">
													<span class=\"text\">Layak</span>
													</div> " . "</td>";
						} else {
							echo "<td style=\"text-align:center\">" . "<div class=\"btn btn-danger btn-icon-split btn-sm\">
													<span class=\"text\">Tidak</span>
													</div> " . "</td>";
						};

						$no++;
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