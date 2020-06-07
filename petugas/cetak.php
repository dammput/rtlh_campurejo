	<?php
    session_start();
    if ($_SESSION['level'] !== "petugas") {
        header("location:../index.php?pesan=belum_login");
    }
    ?>
    <?php
    include '../koneksi.php';
    $nik_update     = $_GET['nik'];
    $query_tampil   = "SELECT * FROM tabel_identitas_responden 
						JOIN tabel_identitas_responden_backup ON tabel_identitas_responden_backup.nik_identitas = tabel_identitas_responden.nik_responden
						JOIN tabel_aspek ON tabel_aspek.nik_aspek = tabel_identitas_responden.nik_responden
						JOIN tabel_waktu ON tabel_waktu.nik_waktu = tabel_identitas_responden.nik_responden 
						JOIN tabel_foto_ktp ON tabel_foto_ktp.nik_ktp = tabel_identitas_responden.nik_responden 
						JOIN tabel_foto_rumah ON tabel_foto_rumah.nik_rumah = tabel_identitas_responden.nik_responden 
						WHERE tabel_identitas_responden.nik_responden = $nik_update";				

	$hasil          = mysqli_query($koneksi,$query_tampil);
    while($data = mysqli_fetch_array($hasil))
    {	
		$usia = $data['usia'];
		$no	= $data['id_identitas'];
		$nik_awal = $data['nik_awal'];
		$nik_waktu = $data['nik_waktu'];
		$nik_aspek = $data['nik_aspek'];
        $nama_lengkap = $data['nama_lengkap'];
        $tanggal = $data['tanggal_surve'];
        $nik_responden = $data['nik_responden'];
        $no_telp = $data['no_telp'];
        $sumber_data = $data['sumber_data'];
        $kordinat = $data['kordinat'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $kecamatan = $data['kecamatan'];
        $desa = $data['desa'];
        $dusun = $data['dusun'];
        $rt = $data['rt'];
        $rw = $data['rw'];
        $jalan = $data['jalan'];
        $jumlah_tabungan = $data['jumlah_tabungan'];
        $tabungan_perbulan = $data['tabungan_perbulan'];
        $jumlah_kk = $data['jumlah_kk'];
        $pekerjaan_utama = $data['pekerjaan_utama'];
        $jumlah_penghasilan = $data['jumlah_penghasilan'];
        $range_penghasilan = $data['range_penghasilan'];
        $pendidikan_terakhir = $data['pendidikan_terakhir'];
        $status_perkawinan = $data['status_perkawinan'];
        $status_fisik = $data['status_fisik'];
        $status_kepemilikan_tanah = $data['status_kepemilikan_tanah'];
        $status_kepemilikan_rumah = $data['status_kepemilikan_rumah'];
        $aset_rumah_lain = $data['aset_rumah_lain'];
        $aset_tanah_lain = $data['aset_tanah_lain'];
        $bantuan_lain = $data['bantuan_lain'];
        $nama_bantuan_lain = $data['nama_bantuan_lain'];
        $jenis_kawasan_rumah = $data['jenis_kawasan_rumah'];
        $luas_rumah = $data['luas_rumah'];
        $jumlah_penghuni = $data['penghuni'];
        $kusen = $data['kusen'];
        $jendela = $data['jendela'];
        $pintu = $data['pintu'];
        $kamar_mandi = $data['kamar_mandi'];
        $saluran_air = $data['saluran_air'];
        $pembuangan = $data['pembuangan'];
        $drainase = $data['drainase'];
        $tempat_sampah = $data['tempat_sampah'];
        $sumber_air_minum = $data['sumber_air_minum'];
        $jarak_air_minum = $data['jarak_air_minum'];
        $sumber_listrik = $data['sumber_listrik'];
        $material_atap = $data['material_atap'];
        $kondisi_atap = $data['kondisi_atap'];
        $material_dinding = $data['material_dinding'];
        $kondisi_dinding = $data['kondisi_dinding'];
        $material_lantai = $data['material_lantai'];
        $kondisi_penutup_lantai = $data['kondisi_penutup_lantai'];
        $struktur_lantai = $data['struktur_lantai'];
        $pondasi_material = $data['pondasi_material'];
        $pondasi_kondisi = $data['pondasi_kondisi'];
        $sloof_material = $data['sloof_material'];
        $sloof_kondisi = $data['sloof_kondisi'];
        $material_kolom_ring = $data['material_kolom_ring'];
        $kondisi_kolom_ring = $data['kondisi_kolom_ring'];
        $material_rangka_atap = $data['material_rangka_atap'];
        $kondisi_rangka_atap = $data['kondisi_rangka_atap'];
        $proteksi_kebakaran = $data['proteksi_kebakaran'];
        $sarana_proteksi_kebakaran = $data['sarana_proteksi_kebakaran'];
        $prasarana_proteksi_kebakaran = $data['prasarana_proteksi_kebakaran'];
        $nama_foto_ktp = $data['nama_ktp'];
        $nama_foto_rumah = $data['nama_rumah'];
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

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">

		<style>
			.a4 {
				height: 297mm;
				width: 210mm;
				/* to centre page on screen*/
				margin-left: auto;
				margin-right: auto;
				font-size: 10pt;
				font-family: Arial, Helvetica, sans-serif;
			}

			table .nama1 {
				width: 270px;
			}
			table .isi1 {
				width: 500px;
			}
			table .isi2 {
				width: 150px;
			}
			td .foto {
				width: 400px;
			}
			td .nama2 {
				width: 240px;
			}
			td .no {
				width: 10px;
				text-align: center;
			}
			td .sarana {
				width: 70px;

			}
			td .rt {
				width: 100px;
				text-align: center;
			}
		</style>


	</head>

	<body>
		<div class="a4">
			<table id="table1" style="border: 1px solid black;">
				<tr>
					<th colspan="8"><img src="../assets/img/head.jpg" alt="head" style="width:100%;"></th>
				</tr>
				<tr>
					<th colspan="8"><img src="../assets/img/head2.png" alt="head2" style="width:100%; text-align: center; border-top: 1px solid black;"></th>
				</tr>
				<tr>
					<td class="table1">
						<table rules="all" style="border: 1px black;" cellpadding="6" cellspacing="0">
							<tr>
								<td class="nama1" colspan="2">Tanggal Suevei</td>
								<td class="isi1" colspan="4">&nbsp; <?php echo $tanggal; ?> </td>
							</tr>
							<tr>
								<td class="nama1" colspan="2">Desa Atau Kelurahan</td>
								<td class="isi1" colspan="4">&nbsp; <?php echo $desa; ?> </td>
							</tr>
							<tr>
								<td class="nama1" colspan="2">Kecamatan</td>
								<td class="isi1" colspan="4">&nbsp; <?php echo $kecamatan; ?> </td>
							</tr>
							<tr>
								<td class="nama1" colspan="2">Kabupaten</td>
								<td class="isi1" colspan="4">&nbsp; Gresik</td>
							</tr>
							<tr>
								<td class="nama1" colspan="2">Kordinat (LONG ATT)</td>
								<td class="isi1" colspan="4">&nbsp; <?php echo $kordinat; ?> </td>
							</tr>
							<tr>
								<td class="nama1" colspan="2">Nama Responden</td>
								<td class="isi1" colspan="4">&nbsp; <?php echo $nama_lengkap ?> </td>
							</tr>
							<tr>
								<td class="nama1" colspan="2">Nik Responden</td>
								<td class="isi1" colspan="4">&nbsp; <?php echo $nik_responden; ?> </td>
							</tr>
							<tr>
								<td class="nama1" colspan="2">No. Handphone</td>
								<td class="isi1" colspan="4">&nbsp; <?php echo $no_telp; ?> </td>
							</tr>
							<tr>
								<td class="nama1" colspan="2">Nama File Foto Rumah</td>
								<td class="isi1" colspan="4">&nbsp; <?php echo $nama_foto_rumah; ?>  </td>
							</tr>
							<tr>
								<td class="nama1" colspan="2">Nama File Foto KTP</td>
								<td class="isi1" colspan="4">&nbsp; <?php echo $nama_foto_ktp ?> </td>
							</tr>
						</table>
						<table rules="all" style="border: 1px black;" cellpadding="10" cellspacing="0" >
							<tr>
								<td class="foto" colspan="3">
								<?php echo "<img src='../assets/img/ktp/".$nama_foto_ktp."'style='width:350px; height:350px;'>"; ?>
								</td>
								<td class="foto" colspan="3">
								<?php echo "<img src='../assets/img/rumah/".$nama_foto_rumah."'style='width:350px; height:350px;'>"; ?>
								</td>
							</tr>
						</table>
						<table rules="all" style="border: 1px black;" cellpadding="6" cellspacing="0" >
							<tr>
								<th class="no" >No</th>
								<th class="nama2" >Identitas</th>
								<th colspan="4" >Keterangan</th>
							</tr>
							<tr>
								<td  class="no" ><b>I</b></td>
								<td  class="" colspan="5" ><b>Identitas Target</b></td>
							</tr>
							<tr>
								<td class="no" >1</td>
								<td class="nama2" > Nomor Urut </td>
								<td class="isi1" colspan="4" > <?php echo $no; ?> </td>
							</tr>
							<tr>
								<td class="no" >2</td>
								<td class="nama2" > Nama Lengkap </td>
								<td class="isi1" colspan="4" > <?php echo $nama_lengkap; ?> </td>
							</tr>
							<tr>
								<td class="no" >3</td>
								<td class="nama2" > Sumber Data </td>
								<td class="isi1" colspan="4" > <?php echo $sumber_data; ?> </td>
							</tr>
							<tr>
								<td class="no" >4</td>
								<td class="nama2" > Jenis Kelamin </td>
								<td class="isi1" colspan="4" > <?php echo $jenis_kelamin; ?> </td>
							</tr>
							<tr>
								<td class="no" rowspan="3" >5</td>
								<td class="nama2" rowspan="3"> Alamat Lengkap Responden </td>
								<td class="no" > Jalan : </td>
								<td class="isi2" colspan="3" > <?php echo $jalan; ?> </td>
							</tr>
							<tr>
								<td class="no" >Dusun</td>
								<td class="isi2" > <?php echo $dusun; ?> </td>
								<td class="no" > Desa </td>
								<td class="isi1" colspan="4" > <?php echo $desa; ?> </td>
							</tr>
							<tr>
								<td style="width: 100px; text-align: center;" >RT / RW</td>
								<td class="isi2" > <?php echo $rt." / ".$rw; ?> </td>
								<td class="no" > Kecamatan </td>
								<td class="isi1" colspan="4" > <?php echo $kecamatan; ?> </td>
							</tr>
							<tr>
								<td class="no" >6</td>
								<td class="nama2" > Usia </td>
								<td class="isi1" colspan="4" > <?php echo $usia; ?> </td>
							</tr>
							<tr>
								<td class="no" >7</td>
								<td class="nama2" > No. KTP (NIK) </td>
								<td class="isi1" colspan="4" > <?php echo $nik_responden; ?> </td>
							</tr>
							<tr>
								<td class="no" >8</td>
								<td class="nama2" > Tabungan Perbulan </td>
								<td class="isi1" colspan="4" > <?php echo $tabungan_perbulan; ?> </td>
							</tr>
							<tr>
								<td class="no" >9</td>
								<td class="nama2" > Jumlah Tabungan </td>
								<td class="isi1" colspan="4" > Jumlah Nominal (Rp.) : <?php echo $jumlah_tabungan; ?></td>
							</tr>
							<tr>
								<td class="no" >10</td>
								<td class="nama2" > Jumlah KK Dalam 1 Rumah </td>
								<td class="isi1" colspan="4" > <?php echo $jumlah_kk; ?> </td>
							</tr>
							<tr>
								<td class="no" >11</td>
								<td class="nama2" > Pekerjaan Utama </td>
								<td class="isi1" colspan="4" > <?php echo $pekerjaan_utama; ?> </td>
							</tr>
							<tr>
								<td class="no" >12</td>
								<td class="nama2" > Penghasilan </td>
								<td class="isi1" colspan="4" > <?php echo $jumlah_penghasilan; ?> </td>
							</tr>
							<tr>
								<td class="no" >13</td>
								<td class="nama2" > Pendidikan Terakhir </td>
								<td class="isi1" colspan="4" > <?php echo $pendidikan_terakhir; ?> </td>
							</tr>
							<tr>
								<td class="no" >14</td>
								<td class="nama2" > Status Perkawianan </td>
								<td class="isi1" colspan="4" > <?php echo $status_perkawinan; ?> </td>
							</tr>
							<tr>
								<td class="no" >15</td>
								<td class="nama2" > Status Fisik </td>
								<td class="isi1" colspan="4" > <?php echo $status_perkawinan; ?> </td>
							</tr>
							<tr>
								<td class="no" >16</td>
								<td class="nama2" > Status kepemilikan Tanah </td>
								<td class="isi1" colspan="4" > <?php echo $status_kepemilikan_tanah; ?> </td>
							</tr>
							<tr>
								<td class="no" >17</td>
								<td class="nama2" > Status Kepemilikan Rumah </td>
								<td class="isi1" colspan="4" > <?php echo $status_kepemilikan_rumah; ?> </td>
							</tr>
							<tr>
								<td class="no" >18</td>
								<td class="nama2" > Aset Tanah Ditempat Lain </td>
								<td class="isi1" colspan="4" > <?php echo $aset_tanah_lain; ?> </td>
							</tr>
							<tr>
								<td class="no" >19</td>
								<td class="nama2" > Aset Rumah Ditempat Lain </td>
								<td class="isi1" colspan="4" > <?php echo $aset_rumah_lain; ?> </td>
							</tr>
							<tr>
								<td class="no" >20</td>
								<td class="nama2" > Pernah Mendapat Bantuan Lain </td>
								<td class="isi1" colspan="4" > <?php echo $bantuan_lain; ?> </td>
							</tr>
							<tr>
								<td class="no" ></td>
								<td class="nama2" > Nama Bantuan Lain (Jika Pernah) </td>
								<td class="isi1" colspan="4" > <?php echo $nama_bantuan_lain; ?> </td>
							</tr>
							<tr>
								<td class="no" >21</td>
								<td class="nama2" > Jenis Kawasan Rumah Yang ditempati </td>
								<td class="isi1" colspan="4" > <?php echo $jenis_kawasan_rumah; ?> </td>
							</tr>
							<tr>
								<td class="no" ><b>II</b></td>
								<td colspan="5"><b>Kondisi Fisik Rumah</b></td>
							</tr>
							<tr>
								<td class="no" ><b>A</b></td>
								<td colspan="5"><b>ASPEK KESELAMATAN</b></td>
							</tr>
							<tr>
								<td class="no" >1</td>
								<td class="nama2" > Material Pondasi </td>
								<td class="isi1" colspan="4" > <?php echo $pondasi_material; ?> </td>
							</tr>
							<tr>
								<td class="no" >2</td>
								<td class="nama2" > Kondisi Pondasi </td>
								<td class="isi1" colspan="4" > <?php echo $pondasi_kondisi; ?> </td>
							</tr>
							<tr>
								<td class="no" >3</td>
								<td class="nama2" > Material Sloof </td>
								<td class="isi1" colspan="4" > <?php echo $sloof_material; ?> </td>
							</tr>
							<tr>
								<td class="no" >4</td>
								<td class="nama2" > Kondisi Sloof </td>
								<td class="isi1" colspan="4" > <?php echo $sloof_kondisi; ?> </td>
							</tr>
							<tr>
								<td class="no" >5</td>
								<td class="nama2" > Material Kolom Dan Ring </td>
								<td class="isi1" colspan="4" > <?php echo $material_kolom_ring; ?> </td>
							</tr>
							<tr>
								<td class="no" >6</td>
								<td class="nama2" > Kondisi Kolom Dan Ring</td>
								<td class="isi1" colspan="4" > <?php echo $kondisi_kolom_ring; ?> </td>
							</tr>
							<tr>
								<td class="no" >7</td>
								<td class="nama2" > Material Rangka Atap </td>
								<td class="isi1" colspan="4" > <?php echo $material_rangka_atap; ?> </td>
							</tr>
							<tr>
								<td class="no" >8</td>
								<td class="nama2" > Kondisi Rangka Atap </td>
								<td class="isi1" colspan="4" > <?php echo $kondisi_rangka_atap; ?> </td>
							</tr>
							<tr>
								<td class="no" >9</td>
								<td class="nama2" > Proteksi Kebakaran </td>
								<td class="sarana" >Sarana : <br> <?php echo $proteksi_kebakaran; ?> </td>
								<td class="isi2" > <?php echo $sarana_proteksi_kebakaran; ?> </td>
								<td class="sarana" > Prasarana : <br> <?php echo $proteksi_kebakaran; ?></td>
								<td class="isi2" > <?php echo $prasarana_proteksi_kebakaran; ?></td>
							</tr>
							<tr>
								<td class="no"><b>B</b></td>
								<td colspan="5"><b>ASPEK KESEHATAN</b></td>
							</tr>
							<tr>
								<td class="no" >1</td>
								<td class="nama2" > Kusen </td>
								<td class="isi1" colspan="4" > <?php echo $kusen; ?> </td>
							</tr>
							<tr>
								<td class="no" >2</td>
								<td class="nama2" > Jendela Dan Ventilasi </td>
								<td class="isi1" colspan="4" > <?php echo $jendela; ?> </td>
							</tr>
							<tr>
								<td class="no" >3</td>
								<td class="nama2" > Daun Pintu </td>
								<td class="isi1" colspan="4" > <?php echo $pintu; ?> </td>
							</tr>
							<tr>
								<td class="no" >4</td>
								<td class="nama2" > Kepemilikan Kamar Mandi Dan Jamban </td>
								<td class="isi1" colspan="4" > <?php echo $kamar_mandi; ?> </td>
							</tr>
							<tr>
								<td class="no" >5</td>
								<td class="nama2" > Saluran Kotor </td>
								<td class="isi1" colspan="4" > <?php echo $saluran_air; ?> </td>
							</tr>
							<tr>
								<td class="no" >6</td>
								<td class="nama2" > Tempat Pembuangan Akhir Tinja </td>
								<td class="isi1" colspan="4" > <?php echo $pembuangan; ?> </td>
							</tr>
							<tr>
								<td class="no" >7</td>
								<td class="nama2" > Ketersediaan Saluran Lingkungan Permukiman (DRAINASE) </td>
								<td class="isi1" colspan="4" > <?php echo $drainase; ?> </td>
							</tr>
							<tr>
								<td class="no" >8</td>
								<td class="nama2" > Tempat Sampah </td>
								<td class="isi1" colspan="4" > <?php echo $tempat_sampah; ?> </td>
							</tr>
							<tr>
								<td class="no" >9</td>
								<td class="nama2" > Sumber Air Minum </td>
								<td class="isi1" colspan="4" > <?php echo $sumber_air_minum; ?> </td>
							</tr>
							<tr>
								<td class="no" >10</td>
								<td class="nama2" > Jarak Sumber Air Minum </td>
								<td class="isi1" colspan="4" > <?php echo $jarak_air_minum; ?> </td>
							</tr>
							<tr>
								<td class="no" >11</td>
								<td class="nama2" > Sumber Listrik </td>
								<td class="isi1" colspan="4" > <?php echo $sumber_listrik; ?> </td>
							</tr>
							<tr>
								<td class="no"><b>C</b></td>
								<td colspan="5"><b>ASPEK PERSYARATAN LUAS DAN KEBUTUHAN RUMAH</b></td>
							</tr>
							<tr>
								<td class="no" >1</td>
								<td class="nama2" > Luas Rumah </td>
								<td class="isi1" colspan="4" > <?php echo $luas_rumah; ?> M<sup>2</sup> </td>
							</tr>
							<tr>
								<td class="no" >2</td>
								<td class="nama2" > Jumlah Penghuni </td>
								<td class="isi1" colspan="4" > <?php echo $jumlah_penghuni; ?> </td>
							</tr>
							<tr>
								<td class="no"><b>D</b></td>
								<td colspan="5"><b>ASPEK KOMPONEN BAHAN BANGUNAN SESUAI KONTEKS</b></td>
							</tr>
							<tr>
								<td class="no" >1</td>
								<td class="nama2" > Material Penutup Atap </td>
								<td class="isi1" colspan="4" > <?php echo $material_atap; ?> </td>
							</tr>
							<tr>
								<td class="no" >2</td>
								<td class="nama2" > Kondisi Penutup Atap </td>
								<td class="isi1" colspan="4" > <?php echo $kondisi_atap; ?> </td>
							</tr>
							<tr>
								<td class="no" >3</td>
								<td class="nama2" > Material Dinding Pengisi </td>
								<td class="isi1" colspan="4" > <?php echo $material_dinding; ?> </td>
							</tr>
							<tr>
								<td class="no" >4</td>
								<td class="nama2" > Kondisi Dinding Pengisi </td>
								<td class="isi1" colspan="4" > <?php echo $kondisi_dinding; ?> </td>
							</tr>
							<tr>
								<td class="no" >5</td>
								<td class="nama2" > Material Penutup Lantai </td>
								<td class="isi1" colspan="4" > <?php echo $material_lantai; ?> </td>
							</tr>
							<tr>
								<td class="no" >6</td>
								<td class="nama2" > Kondisi Penutup Lantai </td>
								<td class="isi1" colspan="4" > <?php echo $kondisi_penutup_lantai; ?> </td>
							</tr>
							<tr>
								<td class="no" >7</td>
								<td class="nama2" > Struktur Bawah Lantai </td>
								<td class="isi1" colspan="4" > <?php echo $struktur_lantai; ?> </td>
							</tr>
							<tr>
								<td colspan="6">&nbsp;</td>
							</tr>

						</table>
					</td>
				</tr>
			</table>
			</table>
		</div>
	</body>

	<script>
		window.print();
	</script>
	
	</html>