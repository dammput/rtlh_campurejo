	<!-- cek apakah sudah login -->
	<?php
	session_start();
	if ($_SESSION['level'] !== "petugas") {
		header("location:../index.php?pesan=belum_login");
	}
	?>
		<?php
	include '../koneksi.php';
	if (isset($_POST['submit'])) {

		// tabel identitas responden
		$nama_lengkap	= $_POST['nama_lengkap'];
		$nik			= $_POST['nik'];
		$no_telp		= $_POST['no_telp'];
		$kordinat		= $_POST['kordinat'];
		$jenis_kelamin	= $_POST['jenis_kelamin'];
		$sumber_data	= $_POST['sumber_data'];
		$jenis_kelamin	= $_POST['jenis_kelamin'];
		// tabel detail responden
		$jumlah_tabungan	= $_POST['jumlah_tabungan'];
		$tabungan_perbulan	= $_POST['tabungan_perbulan'];
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
		$nama_bantuan_lain	= 'Belum Pernah';
		$nama_bantuan_lain	= $_POST['nama_bantuan_lain'];
		$jenis_kawasan_rumah= $_POST['jenis_kawasan_rumah'];
		//tabel alamat responden
		$jalan		= $_POST['jalan'];
		$dusun		= $_POST['dusun'];
		$rt			= $_POST['rt'];
		$rw			= $_POST['rw'];
		$desa		= $_POST['desa'];
		$kecamatan	= $_POST['kecamatan'];
		//tabel aspek persyaratan
		$luas_rumah		= $_POST['luas_rumah'];
		$penghuni		= $_POST['jumlah_penghuni'];
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
		$sumber_listrik		= $_POST['sumber_listrik'];
		//tabel aspek bangunan
		$material_atap	= $_POST['material_atap'];
		$kondisi_atap	= $_POST['kondisi_atap'];
		$material_dinding = $_POST['material_dinding'];
		$kondisi_dinding  = $_POST['kondisi_dinding'];
		$material_lantai  = $_POST['material_lantai'];
		$kondisi_penutup_lantai   = $_POST['kondisi_penutup_lantai'];
		$struktur_lantai  = $_POST['struktur_lantai'];
		//tabel aspek keselamatan
		$pondasi_material		= $_POST['pondasi_material'];
		$pondasi_kondisi		= $_POST['pondasi_kondisi'];
		$sloof_material			= $_POST['sloof_material'];
		$sloof_kondisi			= $_POST['sloof_kondisi'];
		$material_kolom_ring	= $_POST['material_kolom_ring'];
		$kondisi_kolom_ring		= $_POST['kondisi_kolom_ring'];
		$material_rangka_atap	= $_POST['material_rangka_atap'];
		$kondisi_rangka_atap	= $_POST['kondisi_rangka_atap'];
		$proteksi_kebakaran		= $_POST['proteksi_kebakaran'];
		$sarana_proteksi_kebakaran		= $_POST['sarana_proteksi_kebakaran'];
		$prasarana_proteksi_kebakaran	= $_POST['prasarana_proteksi_kebakaran'];
		//waktu
		$tanggal_surve	= date('Y-m-d H:i:s');
		
		// CONVERT VALUE

		// DETAIL RESPONDEN
		// TABUNGAN PERBULAN
		if($tabungan_perbulan === '0 - 1.2 Juta'){$tabungan_perbulan_value = 10;
		}else if($tabungan_perbulan === '1.3 - 1.8 Juta'){$tabungan_perbulan_value = 20;
		}else if($tabungan_perbulan === '1.9 - 2.1 Juta'){$tabungan_perbulan_value = 30;
		}else if($tabungan_perbulan === '2.2 - 2.6 Juta'){$tabungan_perbulan_value = 40;
		}else if($tabungan_perbulan === '2.7 - 3.1 Juta'){$tabungan_perbulan_value = 50;
		}else{$tabungan_perbulan_value = 60;};
		// PEKERJAAN UTAMA
		if($pekerjaan_utama === 'Lainnya'){$pekerjaan_utama_value = 10;
		}else if($pekerjaan_utama === 'Tidak Bekerja'){$pekerjaan_utama_value = 20;
		}else if($pekerjaan_utama === 'Wirausaha'){$pekerjaan_utama_value = 30;
		}else if($pekerjaan_utama === 'Petani'){$pekerjaan_utama_value = 40;	
		}else if($pekerjaan_utama === 'Tukang/Montir'){$pekerjaan_utama_value = 50;	
		}else if($pekerjaan_utama === 'Buruh harian'){$pekerjaan_utama_value = 60;	
		}else if($pekerjaan_utama === 'Karyawan'){$pekerjaan_utama_value = 70;	
		}else if($pekerjaan_utama === 'Honorer'){$pekerjaan_utama_value = 80;	
		}else if($pekerjaan_utama === 'Ojek/Supir'){$pekerjaan_utama_value = 90;	
		}else if($pekerjaan_utama === 'Pramuwiswa'){$pekerjaan_utama_value = 100;	
		}else if($pekerjaan_utama === 'Nelayan'){$pekerjaan_utama_value = 110;	
		}else if($pekerjaan_utama === 'PNS'){$pekerjaan_utama_value = 120;	
		}else if($pekerjaan_utama === 'Pensiunan'){$pekerjaan_utama_value = 130;	
		}else if($pekerjaan_utama === 'BUMN/D'){$pekerjaan_utama_value = 140;	
		}else{$pekerjaan_utama_value = 150;};	
		// RANGE PENGHASILAN
		if($range_penghasilan === '0 - 1.2 Juta'){$range_penghasilan_value = 10;
		}else if($range_penghasilan === '1.3 - 1.8 Juta'){$range_penghasilan_value = 20;
		}else if($range_penghasilan === '1.9 - 2.1 Juta'){$range_penghasilan_value = 30;
		}else if($range_penghasilan === '2.2 - 2.6 Juta'){$range_penghasilan_value = 40;
		}else if($range_penghasilan === '2.7 - 3.1 Juta'){$range_penghasilan_value = 50;
		}else{$range_penghasilan_value = 60;};
		// PENDIDIKAN TERAKHIR
		if($pendidikan_terakhir === 'Tidak Punya Ijazah'){$pendidikan_terakhir_value = 10;
		}else if($pendidikan_terakhir === 'SD/Sederajat'){$pendidikan_terakhir_value = 20;
		}else if($pendidikan_terakhir === 'SMP/Sederajat'){$pendidikan_terakhir_value = 30;
		}else if($pendidikan_terakhir === 'SMA/Sederajat'){$pendidikan_terakhir_value = 40;
		}else if($pendidikan_terakhir === 'D1/D2/D3'){$pendidikan_terakhir_value = 50;
		}else{$pendidikan_terakhir_value = 60;};
		// STATUS PERKAWINAN
		if($status_perkawinan === 'Belum Menikah'){$status_perkaeinan_value = 10;
		}else if($status_perkawinan === 'Menikah'){$status_perkawinan_value = 20;
		}else{$status_perkawinan_value = 30;};
		// STATUS FISIK
		if($status_fisik === 'Sehat'){$status_fisik_value = 10;
		}else if($status_fisik === 'Sakit'){$status_fisik_value = 20;
		}else {$status_fisik_value = 30;};
		// STATUS KEPEMILIKAN TANAH
		if($status_kepemilikan_tanah === 'Milik Sendiri'){$status_kepemilikan_tanah_value = 10;
		}else if($status_kepemilikan_tanah === 'Bukan Milik Sendiri'){$status_kepemilikan_tanah_value = 20;
		}else{$status_kepemilikan_tanah_value = 30;};
		// STATUS KEPEMILIKAN RUMAH
		if($status_kepemilikan_rumah === 'Milik Sendiri'){$status_kepemilikan_rumah_value = 10;
		}else if($status_kepemilikan_rumah === 'Bukan Milik Sendiri'){$status_kepemilikan_rumah_value = 20;
		}else{$status_kepemilikan_rumah_value = 30;};
		// ASET RUMAH LAIN
		if($aset_rumah_lain === 'Ada'){$aset_rumah_lain_value = 10;
		}else{$aset_rumah_lain_value = 20;};
		// ASET TANAH LAIN
		if($aset_tanah_lain === 'Ada'){$aset_tanah_lain_value = 10;
		}else{$aset_tanah_lain_value = 20;};
		// BANTUAN LAIN
		if($bantuan_lain === 'Ya > 5 Tahun Yang Lalu'){$bantuan_lain_value = 10;
		}else if($bantuan_lain === 'Ya < 5 Tahun Yang Lalu'){$bantuan_lain_value = 20;
		}else{$bantuan_lain_value = 30;};
		// JENIS KAWASAN RUMAH
		if($jenis_kawasan_rumah === 'Lainnya'){$jenis_kawasan_rumah_value = 10;
		}else if($jenis_kawasan_rumah === 'Kawasan Rawan Air'){$jenis_kawasan_rumah_value = 20;
		}else if($jenis_kawasan_rumah === 'Kawasan Pesisir/Nelayan'){$jenis_kawasan_rumah_value = 30;
		}else if($jenis_kawasan_rumah === 'Kawasan Perbatasan'){$jenis_kawasan_rumah_value = 40;
		}else if($jenis_kawasan_rumah === 'Daerah Tertinggal/Terpencil'){$jenis_kawasan_rumah_value = 50;
		}else if($jenis_kawasan_rumah === 'Kawasan Ekonomi Khusus'){$jenis_kawasan_rumah_value = 60;
		}else{$jenis_kawasan_rumah_value = 70;};
		
		
		// ASPEK KESEHATAN
		// KUSEN
		if($kusen === 'Tidak Ada'){$kusen_value = 10;
		}else{$kusen_value = 20;};
		// JENDELA DAN VENTILASI
		if($jendela === 'Tidak Ada'){$jendela_value = 10;
		}else if($jendela === 'Memenuhi, Kondisi Baik'){$jendela_value = 20;
		}else if($jendela === 'Memenuhi, Kondisi Rusak'){$jendela_value = 30;
		}else if($jendela === 'Tidak Memenuhi Kondisi Baik'){$jendela_value = 40;
		}else{$jendela_value = 50;};
		// DAUN PINTU
		if($pintu === 'Ada'){$pintu_value = 10;
		}else{$pintu_value = 20;};
		// KAMAR MANDI
		if($kamar_mandi === 'Tidak Ada'){$kamar_mandi_value = 10;
		}else if($kamar_mandi === 'Sendiri'){$kamar_mandi_value = 10;
		}else{$kamar_mandi_value = 10;};
		// SALURAN AIR
		if($saluran_air === 'Tidak Ada'){$saluran_air_value = 10;
		}else if($saluran_air === 'Sendiri'){$saluran_air_value = 10;
		}else{$saluran_air_value = 10;};
		// PEMBUANGAN AKHIR TINJA
		if($pembuangan === 'Lainnya'){$pembuangan_value = 10;
		}else if($pembuangan === 'Septictank'){$pembuangan_value = 20;
		}else if($pembuangan === 'SPAL'){$pembuangan_value = 30;
		}else if($pembuangan === 'Lubang Tanah'){$pembuangan_value = 40;
		}else if($pembuangan === 'Kolam/Sawah/Sungai/Daun'){$pembuangan_value = 50;
		}else{$pembuangan_value = 60;};
		// DRAINASE
		if($drainase === 'Ada, Kondisi Baik'){$drainase_value = 10;
		}else if($drainase === 'Ada, Kondisi Rusak'){$drainase_value = 20;
		}else{$drainase_value = 30;};
		// TEMPAT SAMPAH
		if($tempat_sampah === 'Ada'){$tempat_sampah_value = 10;
		}else{$tempat_sampah_value = 20;};
		// SUMBER AIR MINUM
		if($sumber_air_minum === 'PDAM'){$sumber_air_minum_value = 10;
		}else if($sumber_air_minum === 'Sumur'){$sumber_air_minum_value = 20;
		}else if($sumber_air_minum === 'Mata Air'){$sumber_air_minum_value = 30;
		}else if($sumber_air_minum === 'Air Kemasan/Isi Ulang'){$sumber_air_minum_value = 40;
		}else{$sumber_air_minum_value = 50;};
		// JARAK AIR MINUM
		if($jarak_air_minum === '> 10m'){$jarak_air_minum_value = 20;
		}else{$jarak_air_minum_value = 10;};
		// SUMBER LISTRIK
		if($sumber_listrik === 'Listrik PLN Dengan Meteran'){$sumber_listrik_value = 20;
		}else if($sumber_listrik === 'Listrik PLN Tanpa Meteran'){$sumber_listrik_value = 30;
		}else if($sumber_listrik === 'Listrik Non PLN'){$sumber_listrik_value = 40;
		}else{$sumber_listrik_value = 50;};
		
		//ASPEK BANGUNAN
		// MATERIAL ATAP
		if($material_atap === 'Tidak Ada'){$material_atap_value = 60;
		}else if($material_atap === 'Kayu'){$material_atap_value = 50;
		}else if($material_atap === 'Batu Kali'){$material_atap_value = 40;
		}else if($material_atap === 'Batu Kambung'){$material_atap_value = 30;
		}else if($material_atap === 'Beton'){$material_atap_value = 20;
		}else{$material_atap_value = 10;};
		// KONDISI ATAP
		if($kondisi_atap === 'Kondisi Baik'){$kondisi_atap_value = 10;
		}else if($kondisi_atap === 'Rusak Ringan'){$kondisi_atap_value = 20;
		}else if($kondisi_atap === 'Rusak Sedang/Sebagian'){$kondisi_atap_value = 30;
		}else {$kondisi_atap_value = 40;};
		// MATERIAL DINDING
		if($material_dinding === 'Tembok'){$material_dinding_value = 10;
		}else if($material_dinding === 'GRC(Esbes)'){$material_dinding_value = 20;
		}else if($material_dinding === 'Papan/Tripleks'){$material_dinding_value = 30;
		}else if($material_dinding === 'Anyaman Bambu'){$material_dinding_value = 40;
		}else {$material_dinding_value = 50;};
		// KONDISI MATERIAL DINDING
		if($kondisi_dinding === 'Kondisi Baik'){$kondisi_dinding_value = 10;
		}else if($kondisi_dinding === 'Rusak Ringan'){$kondisi_dinding_value = 20;
		}else if($kondisi_dinding === 'Rusak Sedang/Sebagian'){$kondisi_dinding_value = 30;
		}else {$kondisi_dinding_value = 40;};
		// MATERIAL LANTAI
		if($material_lantai === 'Keramik'){$material_lantai_value = 10;
		}else if($material_lantai === 'Marmer/Granit'){$material_lantai_value = 20;
		}else if($material_lantai === 'Ubin/Tegel'){$material_lantai_value = 30;
		}else if($material_lantai === 'Plesteran'){$material_lantai_value = 40;
		}else if($material_lantai === 'Bambu'){$material_lantai_value = 50;
		}else if($material_lantai === 'Kayu'){$material_lantai_value = 60;
		}else{$material_lantai_value = 70;};
		// KONDISI PENUUTUP LANTAI
		if($kondisi_penutup_lantai === 'Kondisi Baik'){$kondisi_penutup_lantai_value = 10;
		}else if($kondisi_penutup_lantai === 'Rusak Ringan'){$kondisi_penutup_lantai_value = 20;
		}else if($kondisi_penutup_lantai === 'Rusak Sedang/Sebagian'){$kondisi_penutup_lantai_value = 30;
		}else {$kondisi_penutup_lantai_value = 40;};
		// STRUKTUR LANTAI
		if($struktur_lantai === 'Kondisi Baik'){$struktur_lantai_value = 10;
		}else if($struktur_lantai === 'Rusak Ringan'){$struktur_lantai_value = 20;
		}else if($struktur_lantai === 'Rusak Sedang/Sebagian'){$struktur_lantai_value = 30;
		}else {$struktur_lantai_value = 40;};

		
		// ASPEK KESELAMATAN
		// PONDASI MATERIAL
		if($pondasi_material === 'Kayu'){$pondasi_material_value = 50;
		}else if($pondasi_material === 'Batu Kali'){$pondasi_material_value = 40;
		}else if($pondasi_material === 'Batu Kambung'){$pondasi_material_value = 30;
		}else if($pondasi_material === 'Bambu'){$pondasi_material_value = 20;
		}else if($pondasi_material === 'Beton'){$pondasi_material_value = 10;
		}else{$pondasi_material_value = 5;};
		// PONDASI KONDISI
		if($pondasi_kondisi === 'Kondisi Baik'){$pondasi_kondisi_value = 10;
		}else if($pondasi_kondisi === 'Rusak Ringan'){$pondasi_kondisi_value = 20;
		}else if($pondasi_kondisi === 'Rusak Sedang/Sebagian'){$pondasi_kondisi_value = 30;
		}else {$pondasi_kondisi_value = 40;};
		// SLOOF MATERIAL
		if($sloof_material === 'Kayu'){$sloof_material_value = 50;
		}else if($sloof_material === 'Beton Bertulang'){$sloof_material_value = 40;
		}else if($sloof_material === 'Batu Bata'){$sloof_material_value = 30;
		}else if($sloof_material === 'Bambu'){$sloof_material_value = 20;
		}else if($sloof_material === 'Semen'){$sloof_material_value = 10;
		}else{$sloof_material_value = 5;};
		// SLOOF KONDISI
		if($sloof_kondisi === 'Kondisi Baik'){$sloof_kondisi_value = 10;
		}else if($sloof_kondisi === 'Rusak Ringan'){$sloof_kondisi_value = 20;
		}else if($sloof_kondisi === 'Rusak Sedang/Sebagian'){$sloof_kondisi_value = 30;
		}else {$sloof_kondisi_value = 40;};
		// MATERIAL KOLOM RING
		if($material_kolom_ring === 'Kayu'){$material_kolom_ring_value = 50;
		}else if($material_kolom_ring === 'Beton Bertulang'){$material_kolom_ring_value = 40;
		}else if($material_kolom_ring === 'Baja Ringan'){$material_kolom_ring_value = 30;
		}else if($material_kolom_ring === 'Bambu'){$material_kolom_ring_value = 20;
		}else{$material_kolom_ring_value = 10;};
		// KONDISI KOLOM RING
		if($kondisi_kolom_ring === 'Kondisi Baik'){$kondisi_kolom_ring_value = 10;
		}else if($kondisi_kolom_ring === 'Rusak Ringan'){$kondisi_kolom_ring_value = 20;
		}else if($kondisi_kolom_ring === 'Rusak Sedang/Sebagian'){$kondisi_kolom_ring_value = 30;
		}else {$kondisi_kolom_ring_value = 40;};
		// MATERIAL RANGKA ATAP
		if($material_rangka_atap === 'Kayu'){$material_rangka_atap_value = 50;
		}else if($material_rangka_atap === 'Beton Bertulang'){$material_rangka_atap_value = 40;
		}else if($material_rangka_atap === 'Baja Ringan'){$material_rangka_atap_value = 30;
		}else if($material_rangka_atap === 'Bambu'){$material_rangka_atap_value = 20;
		}else{$material_rangka_atap_value = 10;};
		// KONDISI RANGKA ATAP
		if($kondisi_rangka_atap === 'Kondisi Baik'){$kondisi_rangka_atap_value = 10;
		}else if($kondisi_rangka_atap === 'Rusak Ringan'){$kondisi_rangka_atap_value = 20;
		}else if($kondisi_rangka_atap === 'Rusak Sedang/Sebagian'){$kondisi_rangka_atap_value = 30;
		}else {$kondisi_rangka_atap_value = 40;};
		// PROTEKSI KEBAKARAN
		if($proteksi_kebakaran === 'Tidak Ada'){$proteksi_kebakaran_value = 20;
		}else{$proteksi_kebakaran_value = 10;};
		// SARANA PROTEKSI
		if($sarana_proteksi_kebakaran === 'PMK/APAR'){$sarana_proteksi_kebakaran_value = 30;
		}else if($sarana_proteksi_kebakaran === 'Detektor Asap'){$sarana_proteksi_kebakaran_value = 20;
		}else{$sarana_proteksi_kebakaran_value = 10;};
		// PRASARANA PROTEKSI
		if($prasarana_proteksi_kebakaran === 'Hidran/Tangki/Sumber Air'){$prasarana_proteksi_kebakaran_value = 30;
		}else if($prasarana_proteksi_kebakaran === 'Jalan Untuk Damkar'){$prasarana_proteksi_kebakaran_value = 20;
		}else{$prasarana_proteksi_kebakaran_value = 10;};
		

		// <-- query lama ->
			// $query_tabel_identitas_responden = "INSERT INTO tabel_identitas_responden (nama_lengkap,nik,no_telp,kordinat,sumber_data,jenis_kelamin)
			// 											VALUE ('$nama_lengkap','$nik','$no_telp','$kordinat','$sumber_data','$jenis_kelamin')";
			// $query_tabel_alamat_responden = "INSERT INTO tabel_alamat_responden (jalan,dusun,rt,rw,desa,kecamatan)
			// 											VALUE ('$jalan','$dusun','$rt','$rw','$desa','$kecamatan')";
			// $query_tabel_detail_responden = "INSERT INTO tabel_detail_responden (jumlah_tabungan,tabungan_perbulan,jumlah_kk,pekerjaan_utama,jumlah_penghasilan,range_penghasilan,pendidikan_terakhir,status_perkawinan,status_fisik,status_kepemilikan_tanah,status_kepemilikan_rumah,aset_rumah_lain,aset_tanah_lain,bantuan_lain,nama_bantuan_lain,jenis_kawasan_rumah)
			// 											VALUE ('$jumlah_tabungan','$tabungan_perbulan','$jumlah_kk','$pekerjaan_utama','$jumlah_penghasilan','$range_penghasilan','$pendidikan_terakhir','$status_perkawinan','$status_fisik','$status_kepemilikan_tanah','$status_kepemilikan_rumah','$aset_rumah_lain','$aset_tanah_lain','$bantuan_lain','$nama_bantuan_lain','$jenis_kawasan_rumah')";
			// $query_tabel_aspek_persyaratan = "INSERT INTO tabel_aspek_persyaratan (luas_rumah,jumlah_penghuni)
			// 											VALUE ('$luas_rumah','$jumlah_penghuni')";
			// $query_tabel_aspek_kesehatan = "INSERT INTO tabel_aspek_kesehatan (kusen,jendela,pintu,kamar_mandi,saluran_air,pembuangan,drainase,tempat_sampah,sumber_air_minum,jarak_air_minum,sumber_listrik)
			// 											VALUE ('$kusen','$jendela','$pintu','$kamar_mandi','$saluran_air','$pembuangan','$drainase','$tempat_sampah','$sumber_air_minum','$jarak_air_minum','$sumber_listrik')";
			// $query_tabel_aspek_bangunan = "INSERT INTO tabel_aspek_bangunan (material_atap,kondisi_atap,material_dinding,kondisi_dinding,material_lantai,kondisi_penutup_lantai,struktur_lantai)
			// 											VALUE ('$material_atap','$kondisi_atap','$material_dinding','$kondisi_dinding','$material_lantai','$kondisi_penutup_lantai','$struktur_lantai')";
			// $query_tabel_aspek_keselamatan = "INSERT INTO tabel_aspek_keselamatan (pondasi_material,pondasi_kondisi,sloof_material,sloof_kondisi,material_kolom_ring,kondisi_kolom_ring,material_rangka_atap,kondisi_rangka_atap,proteksi_kebakaran,sarana_proteksi_kebakaran,prasarana_proteksi_kebakaran)
			// 											VALUE ('$pondasi_material','$pondasi_kondisi','$sloof_material','$sloof_kondisi','$material_kolom_ring','$kondisi_kolom_ring','$material_rangka_atap','$kondisi_rangka_atap','$proteksi_kebakaran','$sarana_proteksi_kebakaran','$prasarana_proteksi_kebakaran')";
		$query_responden	= "INSERT INTO `tabel_identitas_responden` (`nik_responden`,`nama_lengkap`,`no_telp`,`kordinat`,`sumber_data`,`jenis_kelamin`,`jalan`,`dusun`,`rt`,`rw`,`desa`,`kecamatan`,`jumlah_tabungan`,`tabungan_perbulan`,`jumlah_kk`,`pekerjaan_utama`,`jumlah_penghasilan`,`range_penghasilan`,`pendidikan_terakhir`,`status_perkawinan`,`status_fisik`,`status_kepemilikan_tanah`,`status_kepemilikan_rumah`,`aset_rumah_lain`,`aset_tanah_lain`,`bantuan_lain`,`nama_bantuan_lain`,`jenis_kawasan_rumah`)
						VALUE ('$nik','$nama_lengkap','$no_telp','$kordinat','$sumber_data','$jenis_kelamin','$jalan','$dusun','$rt','$rw','$desa','$kecamatan','$jumlah_tabungan','$tabungan_perbulan','$jumlah_kk','$pekerjaan_utama','$jumlah_penghasilan','$range_penghasilan','$pendidikan_terakhir','$status_perkawinan','$status_fisik','$status_kepemilikan_tanah','$status_kepemilikan_rumah','$aset_rumah_lain','$aset_tanah_lain','$bantuan_lain','$nama_bantuan_lain','$jenis_kawasan_rumah')";
		$query_aspek	= "INSERT INTO `tabel_aspek` (`nik_aspek`,`penghuni`,`luas_rumah`,`kusen`,`jendela`,`pintu`,`kamar_mandi`,`saluran_air`,`pembuangan`,`drainase`,`tempat_sampah`,`sumber_air_minum`,`jarak_air_minum`,`sumber_listrik`,`material_atap`,`kondisi_atap`,`material_dinding`,`kondisi_dinding`,`material_lantai`,`kondisi_penutup_lantai`,`struktur_lantai`,`pondasi_material`,`pondasi_kondisi`,`sloof_material`,`sloof_kondisi`,`material_kolom_ring`,`kondisi_kolom_ring`,`material_rangka_atap`,`kondisi_rangka_atap`,`proteksi_kebakaran`,`sarana_proteksi_kebakaran`,`prasarana_proteksi_kebakaran`)
						VALUES ('$nik','$penghuni','$luas_rumah','$kusen','$jendela','$pintu','$kamar_mandi','$saluran_air','$pembuangan','$drainase','$tempat_sampah','$sumber_air_minum','$jarak_air_minum','$sumber_listrik','$material_atap','$kondisi_atap','$material_dinding','$kondisi_dinding','$material_lantai','$kondisi_penutup_lantai','$struktur_lantai','$pondasi_material','$pondasi_kondisi','$sloof_material','$sloof_kondisi','$material_kolom_ring','$kondisi_kolom_ring','$material_rangka_atap','$kondisi_rangka_atap','$proteksi_kebakaran','$sarana_proteksi_kebakaran','$prasarana_proteksi_kebakaran')";
		$query_waktu	= "INSERT INTO tabel_waktu (`nik_waktu`,`tanggal_surve`) VALUES ('$nik','$tanggal_surve')";
		$hasil_responden = mysqli_query($koneksi, $query_responden);
		$hasil_aspek = mysqli_query($koneksi, $query_aspek);
		$hasil_waktu = mysqli_query($koneksi,$query_waktu);

		// upload ke data backup
		$query_responden_backup	= "INSERT INTO `tabel_identitas_responden_backup` (`id_identitas`,`nik_identitas`,`nik_awal`,`nama_lengkap`,`no_telp`,`kordinat`,`sumber_data`,`jenis_kelamin`,`jalan`,`dusun`,`rt`,`rw`,`desa`,`kecamatan`,`jumlah_tabungan`,`tabungan_perbulan`,`jumlah_kk`,`pekerjaan_utama`,`jumlah_penghasilan`,`range_penghasilan`,`pendidikan_terakhir`,`status_perkawinan`,`status_fisik`,`status_kepemilikan_tanah`,`status_kepemilikan_rumah`,`aset_rumah_lain`,`aset_tanah_lain`,`bantuan_lain`,`nama_bantuan_lain`,`jenis_kawasan_rumah`)
						VALUE ('','$nik','$nik','$nama_lengkap','$no_telp','$kordinat','$sumber_data','$jenis_kelamin','$jalan','$dusun','$rt','$rw','$desa','$kecamatan','$jumlah_tabungan','$tabungan_perbulan','$jumlah_kk','$pekerjaan_utama','$jumlah_penghasilan','$range_penghasilan','$pendidikan_terakhir','$status_perkawinan','$status_fisik','$status_kepemilikan_tanah','$status_kepemilikan_rumah','$aset_rumah_lain','$aset_tanah_lain','$bantuan_lain','$nama_bantuan_lain','$jenis_kawasan_rumah')";
		$query_aspek_backup	= "INSERT INTO `tabel_aspek_backup` (`id_aspek`,`nik_aspek`,`nik_awal`,`luas_rumah`,`penghuni`,`kusen`,`jendela`,`pintu`,`kamar_mandi`,`saluran_air`,`pembuangan`,`drainase`,`tempat_sampah`,`sumber_air_minum`,`jarak_air_minum`,`sumber_listrik`,`material_atap`,`kondisi_atap`,`material_dinding`,`kondisi_dinding`,`material_lantai`,`kondisi_penutup_lantai`,`struktur_lantai`,`pondasi_material`,`pondasi_kondisi`,`sloof_material`,`sloof_kondisi`,`material_kolom_ring`,`kondisi_kolom_ring`,`material_rangka_atap`,`kondisi_rangka_atap`,`proteksi_kebakaran`,`sarana_proteksi_kebakaran`,`prasarana_proteksi_kebakaran`)
						VALUES ('','$nik','$nik','$luas_rumah','$penghuni','$kusen','$jendela','$pintu','$kamar_mandi','$saluran_air','$pembuangan','$drainase','$tempat_sampah','$sumber_air_minum','$jarak_air_minum','$sumber_listrik','$material_atap','$kondisi_atap','$material_dinding','$kondisi_dinding','$material_lantai','$kondisi_penutup_lantai','$struktur_lantai','$pondasi_material','$pondasi_kondisi','$sloof_material','$sloof_kondisi','$material_kolom_ring','$kondisi_kolom_ring','$material_rangka_atap','$kondisi_rangka_atap','$proteksi_kebakaran','$sarana_proteksi_kebakaran','$prasarana_proteksi_kebakaran')";
		$query_waktu_backup	= "INSERT INTO tabel_waktu_backup (`nik_waktu`,`nik_awal`,`tanggal_surve`) VALUES ('$nik','$nik','$tanggal_surve')";
		$hasil_responden_backup = mysqli_query($koneksi, $query_responden_backup);
		$hasil_aspek_backup = mysqli_query($koneksi, $query_aspek_backup);
		$hasil_waktu_backup = mysqli_query($koneksi,$query_waktu_backup);

		// <-- script lama (memanggil id) ->
			// $hasil1 = mysqli_query($koneksi, $query_tabel_identitas_responden);
			// 	$id_identitas = mysqli_insert_id($koneksi);//mengambil data id
			// $hasil2 = mysqli_query($koneksi, $query_tabel_alamat_responden);
			// $hasil3 = mysqli_query($koneksi, $query_tabel_detail_responden);
			// $hasil4 = mysqli_query($koneksi, $query_tabel_aspek_persyaratan);
			// 	$id_aspek_persyaratan = mysqli_insert_id($koneksi);//mengambil data id
			// $hasil5 = mysqli_query($koneksi, $query_tabel_aspek_kesehatan);
			// 	$id_aspek_kesehatan = mysqli_insert_id($koneksi);//mengambil data id
			// $hasil6 = mysqli_query($koneksi, $query_tabel_aspek_bangunan);
			// 	$id_aspek_bangunan = mysqli_insert_id($koneksi);//mengambil data id
			// $hasil7 = mysqli_query($koneksi, $query_tabel_aspek_keselamatan);
			// 	$id_aspek_keselamatan = mysqli_insert_id($koneksi);//mengambil data id
				

			//queri upload id
			// $query_tabel_hasil_penilaian_aspek = "INSERT INTO tabel_hasil_penilaian_aspek (id_responden,id_aspek_persyaratan,id_aspek_kesehatan,id_aspek_bangunan,id_aspek_keselamatan)
			// 											VALUE ('$id_identitas','$id_aspek_persyaratan','$id_aspek_kesehatan','$id_aspek_bangunan','$id_aspek_keselamatan')";
			// $hasil_input_id = mysqli_query($koneksi,$query_tabel_hasil_penilaian_aspek);
			
		

		
		// Ambil Data yang Dikirim dari Form
		$nama_file_ktp = $_FILES['ktp']['name'];
		$ukuran_file_ktp = $_FILES['ktp']['size'];
		$tipe_file_ktp = $_FILES['ktp']['type'];
		$tmp_file_ktp = $_FILES['ktp']['tmp_name'];
		$nama_file_rumah = $_FILES['rumah']['name'];
		$ukuran_file_rumah = $_FILES['rumah']['size'];
		$tipe_file_rumah = $_FILES['rumah']['type'];
		$tmp_file_rumah = $_FILES['rumah']['tmp_name'];
		$max = 5000000; //5000kb
		
		// Set path folder tempat menyimpan gambarnya
		$path_ktp = "../assets/img/ktp/".$nama_file_ktp;
		$path_rumah = "../assets/img/rumah/".$nama_file_rumah;

		if($tipe_file_ktp == "image/jpeg" || $tipe_file_ktp == "image/png" && $tipe_file_rumah == "image/jpeg" || $tipe_file_rumah == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
			// Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
			if($ukuran_file_ktp <= $max && $ukuran_file_rumah <= $max ){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
				// Jika ukuran file kurang dari sama dengan 1MB, lakukan :
				// Proses upload
				if(move_uploaded_file($tmp_file_ktp, $path_ktp) && move_uploaded_file($tmp_file_rumah, $path_rumah) ){ // Cek apakah gambar berhasil diupload atau tidak
					// Cek apakah gambar berhasil diupload atau tidak
					// Jika gambar berhasil diupload, Lakukan :	
					// Proses simpan ke Database
					$query_ktp = "INSERT INTO `tabel_foto_ktp` (`nik_ktp`,`nama`,`ukuran`,`tipe`) 
								VALUES ('$nik','$nama_file_ktp','$ukuran_file_ktp','$tipe_file_ktp')";
					$query_rumah = "INSERT INTO `tabel_foto_rumah` (`nik_rumah`,`nama`,`ukuran`,`tipe`) 
								VALUES('$nik','$nama_file_rumah','$ukuran_file_rumah','$tipe_file_rumah')";
					$sql_ktp = mysqli_query($koneksi, $query_ktp); 
					$sql_rumah = mysqli_query($koneksi, $query_rumah); 
					
					if($sql_ktp && $sql_rumah){ // Cek jika proses simpan ke database sukses atau tidak
						// Jika Sukses, Lakukan :
						//validasi data masuk
						if ($query_responden && $query_aspek && $query_waktu && $query_waktu_backup && $query_aspek_backup && $query_responden_backup ) {
							echo "<script>alert('input data berhasil');</script>";
							echo '<meta http-equiv="refresh" content="1;url=view.php" />';
						} else {
							echo "<script>alert('input data gagal');</script>";
						}
						// echo '<meta http-equiv="refresh" content="0;url=index.php" />';
					}else{
						// Jika Gagal, Lakukan :
						echo "<script>alert('Data sudah ada pada database');</script>";
					}
					
				}else{
					// Jika gambar gagal diupload, Lakukan :
					echo "<script>alert('Foto gagal diupload');</script>";
					// echo "<br><a href='index.php'>Kembali Ke index</a>";
				}
			}else{
				// Jika ukuran file lebih dari 1MB, lakukan :
				echo "<script>alert('Ukuran foto tidak boleh lebih dari 5 Mb');</script>";
				// echo "<br><a href='index.php'>Kembali Ke index</a>";
			}
		}else{
		// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
		echo "<script>alert('Tipe gambar tidak benar, harus JPG/PNG');</script>";
		//   echo "<br><a href='index.php'>Kembali Ke index</a>";
		}
	}else{
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
							<a class="collapse-item" href="view.php">Lihat Data</a>
							<a class="collapse-item" href="penilaian.php">Penilaian Data</a>
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
						<h6 class="m-3 font-weight-bold text">FORM INPUT DATA RESPONDEN</h6>
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
					<!-- Content Row -->
					<div class="container-fluid">
						<!-- form input data -->
						<form action="input.php" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>

							<!-- identitas responden -->
							<div class="row">
								<div class="col-xl-12 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-1">
										<!-- Card Header-->
										<div class="card py-1 bg-gray-600 accordion">
											<h6 class="m-3 font-weight-bold text-white">IDENTITAS RESPONDEN</h6>
										</div>
									</div>
								</div>
							</div>
							<!-- row 1 / responden-->
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
													<input type="text" class="form-control" placeholder="01672.." name="nik" maxlength="16" required>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Gender</label>
													<select class="form-control" name="jenis_kelamin" required>
														<option value="laki-laki" selected="selected">LK</option>
														<option value="perenpuan">PR</option>
													</select>
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-5">
													<label>Nomer Telp.</label>
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">+62</span>
														<input type="text" class="form-control" placeholder="nomer telp" name="no_telp" maxlength="12" required>
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
													<div class="custom-file" id="customFile" lang="es">
													<input type="file" class="custom-file-input" id="exampleInputFile" aria-describedby="fileName" name='ktp' required> 
													<label class="custom-file-label form-control-file" for="exampleInputFile">
													Select file ktp...
													</label>
													</label>
													</div>
												</div>
											</div>
											<label>Foto Rumah</label>
											<div class="form-row">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">Upload</span>
													</div>
													<div class="custom-file" id="customFile" lang="es">
													<input type="file" class="custom-file-input" id="exampleInputFile" aria-describedby="fileName" name='rumah' required> 
													<label class="custom-file-label form-control-file" for="exampleInputFile">
													Select file rumah...
													</label>
													</label>
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

							<!-- row 2 / alamat responden -->
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
													<input type="text" name="desa" class="form-control" value="campurejo" readonly>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>

												<div class="form-group col-md-2">
													<label>Kecamatan</label>
													<input type="text" name="kecamatan" class="form-control" value="panceng" readonly>
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
															<option value="11">11</option>
															<option value="12">12</option>
															<option value="13">13</option>
															<option value="14">14</option>
															<option value="15">15</option>
															<option value="16">16</option>
															<option value="17">17</option>
															<option value="18">18</option>
															<option value="19">19</option>
															<option value="20">20</option>
															<option value="21">21</option>
															<option value="22">22</option>
															<option value="23">23</option>
															<option value="24">24</option>
															<option value="25">25</option>
															<option value="26">26</option>
															<option value="27">27</option>
															<option value="28">28</option>
															<option value="29">29</option>
															<option value="30">30</option>
															<option value="31">31</option>
															<option value="32">32</option>
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

							<!-- start row 3 / detail responden -->
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
														<input type="number" class="form-control" placeholder="1000000.." name="jumlah_tabungan" required>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Tabungan Perbulan</label>
													<div class="input-group-prepend">
														<select class="form-control" name="tabungan_perbulan" required>
															<option value="0 - 1.2 Juta" selected="selected">0 - 1.2 Juta</option>
															<option value="1.3 - 1.8 Juta">1.3 - 1.8 Juta</option>
															<option value="1.9 - 2.1 Juta">1.9 - 2.1 Juta</option>
															<option value="2.2 - 2.6 Juta">2.2 - 2.6 Juta</option>
															<option value="2.7 - 3.1 Juta">2.7 - 3.1 Juta</option>
															<option value="3.2 - 3.6 Juta">3.2 - 3.6 Juta</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Jml KK dalam 1 rumah</label>
													<div class="input-group-prerend">
														<input type="number" class="form-control" name="jumlah_kk" placeholder="1">
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Pekerjaan Utama</label>
													<div class="input-group-prepend">
														<select class="form-control" name="pekerjaan_utama" required>
															<option value="Lainnya" selected="selected">Lainnya</option>
															<option value="Tidak Bekerja">Tidak Bekerja</option>
															<option value="Wirausaha">Wirausaha</option>
															<option value="Petani">Petani</option>
															<option value="Tukang/Montir">Tukang/Montir</option>
															<option value="Buruh harian">Buruh harian</option>
															<option value="karyawan">karyawan</option>
															<option value="Honorer">Honorer</option>
															<option value="Ojek/Supir">Ojek/Supir</option>
															<option value="Pramuwisma">Pramuwisma</option>
															<option value="Nelayan">Nelayan</option>
															<option value="PNS">PNS</option>
															<option value="Pensiunan">Pensiunan</option>
															<option value="BUMN/D">BUMN/D</option>
															<option value="TNI/Polri">TNI/Polri</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Range Penghasilan</label>
													<div class="input-group-prepend">
														<select class="form-control" name="range_penghasilan" required>
															<option value="0 - 1.2 Juta" selected="selected">0 - 1.2 Juta</option>
															<option value="1.3 - 1.8 Juta">1.3 - 1.8 Juta</option>
															<option value="1.9 - 2.1 Juta">1.9 - 2.1 Juta</option>
															<option value="2.2 - 2.6 Juta">2.2 - 2.6 Juta</option>
															<option value="2.7 - 3.1 Juta">2.7 - 3.1 Juta</option>
															<option value="3.2 - 3.6 Juta">3.2 - 3.6 Juta</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-groub col-md-2">
													<label>Jumlah Penghasilan</label>
													<div class="input-group-prepend">
														<span class="input-group-text">Rp.</span>
														<input type="number" class="form-control" name="jumlah_penghasilan" placeholder="1000000.." required>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Pendidikan Terakhir</label>
													<div class="input-group-prepend">
														<select class="form-control" name="pendidikan_terakhir" required>
															<option value="Tidak Punya Ijazah">Tidak Punya Ijazah</option>
															<option value="SD/Sederajat">SD/Sederajat</option>
															<option value="SMP/Sederajat" selected="selected">SMP/Sederajat</option>
															<option value="SMA/Sederajat">SMA/Sederajat</option>
															<option value="D1/D2/D3">D1/D2/D3</option>
															<option value="D4/S1">D4/S1</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Status Perkawinan</label>
													<div class="input-group-prepend">
														<select class="form-control" name="status_perkawinan" required>
															<option value="Belum Menikah">Belum Menikah</option>
															<option value="Menikah" selected="selected">Menikah</option>
															<option value="Janda/Duda">Janda/Duda</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Status Fisik</label>
													<div class="input-group-prepend">
														<select class="form-control" name="status_fisik" required>
															<option value="Sehat" selected="selected">Sehat</option>
															<option value="Sakit">Sakit</option>
															<option value="Disabilita">Disabilita</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Kepemilikan Tanah</label>
													<div class="input-group-prepend">
														<select class="form-control" name="status_kepemilikan_tanah" required>
															<option value="Milik Sendiri" selected="selected">Milik Sendiri</option>
															<option value="Bukan Milik Sendiri">Bukan Milik Sendiri</option>
															<option value="Tanah Negara">Tanah Negara</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Kepemilikan Rumah</label>
													<div class="input-group-prepend">
														<select class="form-control" name="status_kepemilikan_rumah" required>
															<option value="Milik Sendiri" selected="selected">Milik Sendiri</option>
															<option value="Bukan Milik Sendiri">Bukan Milik Sendiri</option>
															<option value="Kontrak/Sewa">Kontrak/Sewa</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Aset Rumah Lain</label>
													<div class="input-group-prepend">
														<select class="form-control" name="aset_rumah_lain" required>
															<option value="Ada" selected="selected">Ada</option>
															<option value="Tidak Ada">Tidak Ada</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-2">
													<label>Aset Tanah Lain</label>
													<div class="input-group-prepend">
														<select class="form-control" name="aset_tanah_lain" required>
															<option value="Ada" selected="selected">Ada</option>
															<option value="Tidak Ada">Tidak Ada</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-3">
													<label>Pernah Dapat bantuan Lain</label>
													<div class="input-group-prepend">
														<select class="form-control" name="bantuan_lain" id="bantuan" required>
															<option value="Ya > 5 Tahun Yang Lalu">Ya > 5 Tahun Yang Lalu</option>
															<option value="Ya < 5 Tahun Yang Lalu">Ya < 5 Tahun Yang Lalu</option> 
															<option value="Belum Pernah" selected="selected">Belum Pernah</option>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-3">
													<label>Nama bantuan Lain</label>
													<div class="input-group-prepend">
														<input type="text" class="form-control" name="nama_bantuan_lain" id="nama_bantuan" placeholder="apa nama bantuannya ?" hidden>
														</select>
														<div class="invalid-feedback">Data harus diisi.</div>
													</div>
												</div>
												<div class="form-group col-md-4">
													<label>Jenis Kawasan Rumah</label>
													<div class="input-group-prepend">
														<select class="form-control" name="jenis_kawasan_rumah" required>
															<option value="Lainnya">Lainnya</option>
															<option value="Kawasan Rawan Air">Kawasan Rawan Air</option>
															<option value="Kawasan Pesisir/Nelayan" selected="selected">Kawasan Pesisir/Nelayan</option>
															<option value="Kawasan Perbatasan">Kawasan Perbatasan</option>
															<option value="Daerah Tertinggal/Terpencil">Daerah Tertinggal/Terpencil</option>
															<option value="Kawasan Ekonomi Khusus">Kawasan Ekonomi Khusus</option>
															<option value="Kawasan Kumuh">Kawasan Kumuh</option>
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

							<!-- kondisi fisik rumah -->
							<div class="row">
								<div class="col-xl-12 col-lg-5">
									<!-- kuisioner pengisian -->
									<div class="card shadow mb-1">
										<!-- Card Header-->
										<div class="card py-1 bg-gray-600 accordion">
											<h6 class="m-3 font-weight-bold text-white ">KONDISI FISIK RUMAH</h6>
										</div>
									</div>
								</div>
							</div>

							<!-- row 4 / aspek keselamatan -->
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
														<option value="Tidak Ada" selected="selected">Tidak Ada</option>
														<option value="Kayu">Kayu</option>
														<option value="Batu Kali">Batu Kali</option>
														<option value="Batu Kambung">Batu Kambung</option>
														<option value="Bambu">Bambu</option>
														<option value="Beton">Beton</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Pondasi</label>
													<select class="form-control" name="pondasi_kondisi" required>
														<option value="Kondisi Baik" selected="selected">Kondisi Baik</option>
														<option value="Rusak Ringan">Rusak Ringan</option>
														<option value="Rusak Sedang/Sebagian">Rusak Sedang/Sebagian</option>
														<option value="Rusak Berat/Seluruhnya">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Material Sloof</label>
													<select class="form-control" name="sloof_material" required>
														<option value="Tidak Ada" selected="selected">Tidak Ada</option>
														<option value="Kayu">Kayu</option>
														<option value="Beton Bertulang">Beton Bertulang</option>
														<option value="Batu Bata">Batu Bata</option>
														<option value="Bambu">Bambu</option>
														<option value="Semen">Semen</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Sloof</label>
													<select class="form-control" name="sloof_kondisi" required>
														<option value="Kondisi Baik" selected="selected">Kondisi Baik</option>
														<option value="Rusak Ringan">Rusak Ringan</option>
														<option value="Rusak Sedang/Sebagian">Rusak Sedang/Sebagian</option>
														<option value="Rusak Berat/Seluruhnya">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Material Kolom Dan Ring Balok</label>
													<select class="form-control" name="material_kolom_ring" required>
														<option value="Tidak Ada" selected="selected">Tidak Ada</option>
														<option value="Kayu">Kayu</option>
														<option value="Beton Bertulang">Beton Bertulang</option>
														<option value="Baja Ringan">Baja Ringan</option>
														<option value="Bambu">Bambu</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Kolom Dan Ring Balok</label>
													<select class="form-control" name="kondisi_kolom_ring" required>
														<option value="Kondisi Baik" selected="selected">Kondisi Baik</option>
														<option value="Rusak Ringan">Rusak Ringan</option>
														<option value="Rusak Sedang/Sebagian">Rusak Sedang/Sebagian</option>
														<option value="Rusak Berat/Seluruhnya">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Material Rangka Atap</label>
													<select class="form-control" name="material_rangka_atap" required>
														<option value="Tidak Ada" selected="selected">Tidak Ada</option>
														<option value="Kayu">Kayu</option>
														<option value="Beton Bertulang">Beton Bertulang</option>
														<option value="Baja Ringan">Baja Ringan</option>
														<option value="Bambu">Bambu</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Rangka Atap</label>
													<select class="form-control" name="kondisi_rangka_atap" required>
														<option value="Kondisi Baik" selected="selected">Kondisi Baik</option>
														<option value="Rusak Ringan">Rusak Ringan</option>
														<option value="Rusak Sedang/Sebagian">Rusak Sedang/Sebagian</option>
														<option value="Rusak Berat/Seluruhnya">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Proteksi Kebakaran</label>
													<select class="form-control" name="proteksi_kebakaran" id="pilihan" required>
														<option value="Tidak Ada">Tidak Ada</option>
														<option value="Ada">Ada</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Sarana Proteksi</label>
													<select class="form-control" name="sarana_proteksi_kebakaran" id="lanjut-1" hidden>
														<option value="Lainnya" selected="selected">Lainnya</option>
														<option value="PMK/APAR">PMK/APAR</option>
														<option value="Detektor Asap">Detektor Asap</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Prasarana Proteksi</label>
													<select class="form-control" name="prasarana_proteksi_kebakaran" id="lanjut-2" hidden>
														<option value="Lainnya" selected="selected">Lainnya</option>
														<option value="Hidran/Tangki/Sumber Air">Hidran/Tangki/Sumber Air</option>
														<option value="Jalan Untuk Damkar">Jalan Untuk Damkar</option>
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

							<!-- row 5 / aspek kesehatan-->
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
														<option value="Tidak Ada" selected="selected">Tidak Ada</option>
														<option value="Ada">Ada</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Jendela Dan Ventilasi</label>
													<select class="form-control" name="jendela" required>
														<option value="Tidak Ada" selected="selected">Tidak Ada</option>
														<option value="Memenuhi, Kondisi Baik">Memenuhi, Kondisi Baik</option>
														<option value="Memenuhi, Kondisi Rusak">Memenuhi, Kondisi Rusak</option>
														<option value="Tidak Memenuhi, Kondisi Baik">Tidak Memenuhi, Kondisi Baik</option>
														<option value="Tidak Memenuhi, Kondisi Rusak">Tidak Memenuhi, Kondisi Rusak</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Daun Pintu</label>
													<select class="form-control" name="pintu" required>
														<option value="Tidak Ada">Tidak Ada</option>
														<option value="Ada" selected="selected">Ada</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Kamar Mandi</label>
													<select class="form-control" name="kamar_mandi" required>
														<option value="Tidak Ada" selected="selected">Tidak Ada</option>
														<option value="Sendiri">Sendiri</option>
														<option value="Bersama/Umum">Bersama/Umum</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Saluran Air Kotor</label>
													<select class="form-control" name="saluran_air" required>
														<option value="Tidak Ada" selected="selected">Tidak Ada</option>
														<option value="Sendiri">Sendiri</option>
														<option value="Bersama/Umum">Bersama/Umum</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Pembuangan Akhir Tinja</label>
													<select class="form-control" name="pembuangan" required>
														<option value="Lainnya" selected="selected">Lainnya</option>
														<option value="Septictank">Septictank</option>
														<option value="SPAL">SPAL</option>
														<option value="Lubang Tanah">Lubang Tanah</option>
														<option value="Kolam/Sawah/Sungai/Daun">Kolam/Sawah/Sungai/Daun</option>
														<option value="Pantai/Tanah Lapang/Kebun">Pantai/Tanah Lapang/Kebun</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Drainase</label>
													<select class="form-control" name="drainase" required>
														<option value="Ada, Kondisi Baik" selected="selected">Ada, Kondisi Baik</option>
														<option value="Ada, Kondisi Rusak">Ada, Kondisi Rusak</option>
														<option value="Tidak Ada">Tidak Ada</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Tempat Sampah</label>
													<select class="form-control" name="tempat_sampah" required>
														<option value="Tidak Ada">Tidak Ada</option>
														<option value="Ada" selected="selected">Ada</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-2">
													<label>Sumber Air Minum</label>
													<select class="form-control" name="sumber_air_minum" required>
														<option value="Air Kemasan/Isi Ulang" selected="selected">Air Kemasan/Isi Ulang</option>
														<option value="PDAM">PDAM</option>
														<option value="Sumur">Sumur</option>
														<option value="Mata Air">Mata Air</option>
														<option value="Lainnya">Lainnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Jarak Sumber Air Minum</label>
													<select class="form-control" name="jarak_air_minum" required>
														<option value="> 10m" selected="selected">> 10m</option>
														<option value="< 10m">< 10m</option>
													</select> 
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-3">
													<label>Sumber Listrik</label>
													<select class="form-control" name="sumber_listrik" required>
														<option value="Listrik PLN Dengan Meteran" selected="selected">Listrik PLN Dengan Meteran</option>
														<option value="Listrik PLN Tanpa Meteran">Listrik PLN Tanpa Meteran</option>
														<option value="Listrik Non PLN">Listrik Non PLN</option>
														<option value="Bukan Listrik">Bukan Listrik</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end row 5 -->

							<!-- row 6 / Persyaratan Luas & Kebutuhan Rumah-->
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
														<span class="input-group-text">M<sup>2</sup></span>
														<input type="number" name="luas_rumah" class="form-control" required>
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

							<!-- row 7 / Komponen Bahan Bangunan Sesuai Konteks Lokal-->
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
														<option value="Genteng" selected="selected">Genteng</option>
														<option value="Esbes">Esbes</option>
														<option value="Seng">Seng</option>
														<option value="Jerami/Rumbia">Jerami/Rumbia</option>
														<option value="Metal Sheets">Metal Sheets</option>
														<option value="Sirap">Sirap</option>
														<option value="Trileks">Trileks</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Penutup Atap</label>
													<select class="form-control" name="kondisi_atap" required>
														<option value="Kondisi Baik" selected="selected">Kondisi Baik</option>
														<option value="Rusak Ringan">Rusak Ringan</option>
														<option value="Rusak Sedang/Sebagian">Rusak Sedang/Sebagian</option>
														<option value="Rusak Berat/Seluruhnya">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Material Dinding Pengisi</label>
													<select class="form-control" name="material_dinding" required>
														<option value="Tembok" selected="selected">Tembok</option>
														<option value="GRC(Esbes)">GRC(Esbes)</option>
														<option value="Papan/Tripleks">Papan/Tripleks</option>
														<option value="Anyaman Bambu">Anyaman Bambu</option>
														<option value="Kayu">Kayu</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-6">
													<label>Kondisi Dinding Pengisi</label>
													<select class="form-control" name="kondisi_dinding" required>
														<option value="Kondisi Baik" selected="selected">Kondisi Baik</option>
														<option value="Rusak Ringan">Rusak Ringan</option>
														<option value="Rusak Sedang/Sebagian">Rusak Sedang/Sebagian</option>
														<option value="Rusak Berat/Seluruhnya">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Material Penutup Lantai</label>
													<select class="form-control" name="material_lantai" required>
														<option value="Keramik" selected="selected">Keramik</option>
														<option value="Marmer/Granit">Marmer/Granit</option>
														<option value="Ubin/Tegel">Ubin/Tegel</option>
														<option value="Plesteran">Plesteran</option>
														<option value="Bambu">Bambu</option>
														<option value="Kayu">Kayu</option>
														<option value="Tanah">Tanah</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Kondisi Penutup Lantai</label>
													<select class="form-control" name="kondisi_penutup_lantai" required>
														<option value="Kondisi Baik" selected="selected">Kondisi Baik</option>
														<option value="Rusak Ringan">Rusak Ringan</option>
														<option value="Rusak Sedang/Sebagian">Rusak Sedang/Sebagian</option>
														<option value="Rusak Berat/Seluruhnya">Rusak Berat/Seluruhnya</option>
													</select>
													<div class="invalid-feedback">Data harus diisi.</div>
												</div>
												<div class="form-group col-md-4">
													<label>Struktur Bawah Lantai</label>
													<select class="form-control" name="struktur_lantai" required>
														<option value="Kondisi Baik" selected="selected">Kondisi Baik</option>
														<option value="Rusak Ringan">Rusak Ringan</option>
														<option value="Rusak Sedang/Sebagian">Rusak Sedang/Sebagian</option>
														<option value="Rusak Berat/Seluruhnya">Rusak Berat/Seluruhnya</option>
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
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#simpan">
									Simpan Data
								</button>

								<!-- Modal -->
								<div class="modal fade" id="simpan" tabindex="-1" role="dialog" aria-labelledby="simpanLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="simpanLabel">Simpan Data</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Periksa lagi, apakah data yang dimasukkan sudah benar. <br>
												tekan save untuk melanjutkan, Apabila tombol save tidak bekerja, Berarti masih ada data yang kosong.
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary" name="submit">Save changes</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end button -->

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

		<!-- jquery nama bantuan lain -->
		<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$("#bantuan").change(function(){
					console.log($("#bantuan option:selected").val());
					
					if ($("#bantuan option:selected").val() == 'Ya > 5 Tahun Yang Lalu'){
						$('#nama_bantuan').prop('hidden', false);
					}else if($("#bantuan option:selected").val() == 'Ya < 5 Tahun Yang Lalu'){
						$('#nama_bantuan').prop('hidden', false);
					}else{
						$('#nama_bantuan').prop('hidden', true);
					}
				});
			});
		</script>

		<!-- jquery proteksi kebakaran -->
		<script type="text/javascript">
			$(window).load(function(){
				$("#pilihan").change(function(){
					console.log($("#pilihan option:selected").val());
					
					if ($("#pilihan option:selected").val() == 'Ada'){
						$('#lanjut-1').prop('hidden', false);
						$('#lanjut-2').prop('hidden', false);
					}else{
						$('#lanjut-1').prop('hidden', true);
						$('#lanjut-2').prop('hidden', true);
					}
				});
				$('.custom-file-input').on('change',function(){
				var fileName = $(this).val();
				$(this).next('.form-control-file').addClass("selected").html(fileName);
				});
			});

		</script>
	
		<script>

		</script>

		<!-- Bootstrap core JavaScript-->
		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="../assets/js/sb-admin-2.min.js"></script>
		<script src="../assets/js/jquery.js"></script>
		<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>

	</body>
	</html>