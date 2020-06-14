<?php

function hasil_vektor($post){

        
		// tabel identitas responden
		$nama_lengkap	= $post['nama_lengkap'];
		$nik			= $post['nik'];
		$usia 			= $post['usia'];
		$no_telp		= $post['no_telp'];
		$kordinat		= $post['kordinat'];
		$jenis_kelamin	= $post['jenis_kelamin'];
		$sumber_data	= $post['sumber_data'];
		$jenis_kelamin	= $post['jenis_kelamin'];
		// tabel detail responden
		$jumlah_tabungan	= $post['jumlah_tabungan'];
		$tabungan_perbulan	= $post['tabungan_perbulan'];
		$jumlah_kk			= $post['jumlah_kk'];
		$pekerjaan_utama	= $post['pekerjaan_utama'];	
		$jumlah_penghasilan	= $post['jumlah_penghasilan'];	
		$range_penghasilan	= $post['range_penghasilan'];
		$pendidikan_terakhir= $post['pendidikan_terakhir'];
		$status_perkawinan	= $post['status_perkawinan'];
		$status_fisik		= $post['status_fisik'];
		$status_kepemilikan_tanah= $post['status_kepemilikan_tanah'];
		$status_kepemilikan_rumah= $post['status_kepemilikan_rumah'];
		$aset_rumah_lain	= $post['aset_rumah_lain'];
		$aset_tanah_lain	= $post['aset_tanah_lain'];
		$bantuan_lain		= $post['bantuan_lain'];
		$nama_bantuan_lain	= 'Belum Pernah';
		$nama_bantuan_lain	= $post['nama_bantuan_lain'];
		$jenis_kawasan_rumah= $post['jenis_kawasan_rumah'];
		//tabel alamat responden
		$jalan		= $post['jalan'];
		$dusun		= $post['dusun'];
		$rt			= $post['rt'];
		$rw			= $post['rw'];
		$desa		= $post['desa'];
		$kecamatan	= $post['kecamatan'];
		//tabel aspek persyaratan
		$luas_rumah		= $post['luas_rumah'];
		$penghuni		= $post['jumlah_penghuni'];
		//tabel aspek kesehatan
		$kusen			= $post['kusen'];
		$jendela		= $post['jendela'];
		$pintu			= $post['pintu'];
		$kamar_mandi	= $post['kamar_mandi'];
		$saluran_air	= $post['saluran_air'];
		$pembuangan		= $post['pembuangan'];
		$drainase		= $post['drainase'];
		$tempat_sampah	= $post['tempat_sampah'];
		$sumber_air_minum	= $post['sumber_air_minum'];
		$jarak_air_minum	= $post['jarak_air_minum'];
		$sumber_listrik		= $post['sumber_listrik'];
		//tabel aspek bangunan
		$material_atap	= $post['material_atap'];
		$kondisi_atap	= $post['kondisi_atap'];
		$material_dinding = $post['material_dinding'];
		$kondisi_dinding  = $post['kondisi_dinding'];
		$material_lantai  = $post['material_lantai'];
		$kondisi_penutup_lantai   = $post['kondisi_penutup_lantai'];
		$struktur_lantai  = $post['struktur_lantai'];
		//tabel aspek keselamatan
		$pondasi_material		= $post['pondasi_material'];
		$pondasi_kondisi		= $post['pondasi_kondisi'];
		$sloof_material			= $post['sloof_material'];
		$sloof_kondisi			= $post['sloof_kondisi'];
		$material_kolom_ring	= $post['material_kolom_ring'];
		$kondisi_kolom_ring		= $post['kondisi_kolom_ring'];
		$material_rangka_atap	= $post['material_rangka_atap'];
		$kondisi_rangka_atap	= $post['kondisi_rangka_atap'];
		$proteksi_kebakaran		= $post['proteksi_kebakaran'];
		$sarana_proteksi_kebakaran		= $post['sarana_proteksi_kebakaran'];
		$prasarana_proteksi_kebakaran	= $post['prasarana_proteksi_kebakaran'];
		// DETAIL RESPONDEN
		if($jumlah_tabungan <=1200000){$jumlah_tabungan_value = 6;
		}else if($jumlah_tabungan <=1800000){$jumlah_tabungan_value = 5;
		}else if($jumlah_tabungan <=2100000){$jumlah_tabungan_value = 4;
		}else if($jumlah_tabungan <=2600000){$jumlah_tabungan_value = 3;
		}else if($jumlah_tabungan <=3100000){$jumlah_tabungan_value = 2;
		}else{$jumlah_tabungan_value = 1;};

		if($jumlah_penghasilan <=1200000){$jumlah_penghasilan_value = 6;
		}else if($jumlah_penghasilan <=1800000){$jumlah_penghasilan_value = 5;
		}else if($jumlah_penghasilan <=2100000){$jumlah_penghasilan_value = 4;
		}else if($jumlah_penghasilan <=2600000){$jumlah_penghasilan_value = 3;
		}else if($jumlah_penghasilan <=3100000){$jumlah_penghasilan_value = 2;
		}else{$jumlah_penghasilan_value = 1;};

		if($luas_rumah < 3){$luas_rumah_value = 3;
		}else if($luas_rumah <= 5){$luas_rumah_value = 2;
		}else{$luas_rumah_value = 1;};

		if($penghuni < 3){$penghuni_value = 3;
		}else if($penghuni <= 5){$penghuni_value = 2;
		}else{$penghuni_value = 1;};

		if($jumlah_kk === 1){$jumlah_kk_value = 1;
		}else if($jumlah_kk === 2){$jumlah_kk_value = 2;
		}else{$jumlah_kk_value = 3;};
		
		// TABUNGAN PERBULAN
		if($tabungan_perbulan === '0 - 1.2 Juta'){$tabungan_perbulan_value = 6;
		}else if($tabungan_perbulan === '1.3 - 1.8 Juta'){$tabungan_perbulan_value = 5;
		}else if($tabungan_perbulan === '1.9 - 2.1 Juta'){$tabungan_perbulan_value = 4;
		}else if($tabungan_perbulan === '2.2 - 2.6 Juta'){$tabungan_perbulan_value = 3;
		}else if($tabungan_perbulan === '2.7 - 3.1 Juta'){$tabungan_perbulan_value = 2;
		}else{$tabungan_perbulan_value = 1;};
		
		// PEKERJAAN UTAMA
		if($pekerjaan_utama === 'TNI/Polri'){$pekerjaan_utama_value = 4;
		}else if($pekerjaan_utama === 'Tidak Bekerja'){$pekerjaan_utama_value = 7;
		}else if($pekerjaan_utama === 'Wirausaha'){$pekerjaan_utama_value = 6;
		}else if($pekerjaan_utama === 'Petani'){$pekerjaan_utama_value = 14;	
		}else if($pekerjaan_utama === 'Tukang/Montir'){$pekerjaan_utama_value = 2;	
		}else if($pekerjaan_utama === 'Buruh harian'){$pekerjaan_utama_value = 8;	
		}else if($pekerjaan_utama === 'Karyawan'){$pekerjaan_utama_value = 9;	
		}else if($pekerjaan_utama === 'Honorer'){$pekerjaan_utama_value = 15;	
		}else if($pekerjaan_utama === 'Ojek/Supir'){$pekerjaan_utama_value = 12;	
		}else if($pekerjaan_utama === 'Pramuwiswa'){$pekerjaan_utama_value = 10;	
		}else if($pekerjaan_utama === 'Nelayan'){$pekerjaan_utama_value = 13;	
		}else if($pekerjaan_utama === 'PNS'){$pekerjaan_utama_value = 5;	
		}else if($pekerjaan_utama === 'Pensiunan'){$pekerjaan_utama_value = 11;	
		}else if($pekerjaan_utama === 'BUMN/D'){$pekerjaan_utama_value = 3;	
		}else{$pekerjaan_utama_value = 1;};	
		// RANGE PENGHASILAN
		if($range_penghasilan === '0 - 1.2 Juta'){$range_penghasilan_value = 6;
		}else if($range_penghasilan === '1.3 - 1.8 Juta'){$range_penghasilan_value = 5;
		}else if($range_penghasilan === '1.9 - 2.1 Juta'){$range_penghasilan_value = 4;
		}else if($range_penghasilan === '2.2 - 2.6 Juta'){$range_penghasilan_value = 3;
		}else if($range_penghasilan === '2.7 - 3.1 Juta'){$range_penghasilan_value = 2;
		}else{$range_penghasilan_value = 1;};
		// PENDIDIKAN TERAKHIR
		if($pendidikan_terakhir === 'Tidak Punya Ijazah'){$pendidikan_terakhir_value = 6;
		}else if($pendidikan_terakhir === 'SD/Sederajat'){$pendidikan_terakhir_value = 5;
		}else if($pendidikan_terakhir === 'SMP/Sederajat'){$pendidikan_terakhir_value = 4;
		}else if($pendidikan_terakhir === 'SMA/Sederajat'){$pendidikan_terakhir_value = 3;
		}else if($pendidikan_terakhir === 'D1/D2/D3'){$pendidikan_terakhir_value = 2;
		}else{$pendidikan_terakhir_value = 1;};
		// STATUS PERKAWINAN
		if($status_perkawinan === 'Belum Menikah'){$status_perkawinan_value = 1;
		}else if($status_perkawinan === 'Menikah'){$status_perkawinan_value = 2;
		}else{$status_perkawinan_value = 3;};
		// STATUS FISIK
		if($status_fisik === 'Sehat'){$status_fisik_value = 1;
		}else if($status_fisik === 'Sakit'){$status_fisik_value = 2;
		}else {$status_fisik_value = 3;};
		// STATUS KEPEMILIKAN TANAH
		if($status_kepemilikan_tanah === 'Milik Sendiri'){$status_kepemilikan_tanah_value = 3;
		}else if($status_kepemilikan_tanah === 'Bukan Milik Sendiri'){$status_kepemilikan_tanah_value = 2;
		}else{$status_kepemilikan_tanah_value = 1;};
		// STATUS KEPEMILIKAN RUMAH
		if($status_kepemilikan_rumah === 'Milik Sendiri'){$status_kepemilikan_rumah_value = 3;
		}else if($status_kepemilikan_rumah === 'Bukan Milik Sendiri'){$status_kepemilikan_rumah_value = 2;
		}else{$status_kepemilikan_rumah_value = 1;};
		// ASET RUMAH LAIN
		if($aset_rumah_lain === 'Ada'){$aset_rumah_lain_value = 1;
		}else{$aset_rumah_lain_value = 2;};
		// ASET TANAH LAIN
		if($aset_tanah_lain === 'Ada'){$aset_tanah_lain_value = 1;
		}else{$aset_tanah_lain_value = 2;};
		// BANTUAN LAIN
		if($bantuan_lain === 'Ya > 5 Tahun Yang Lalu'){$bantuan_lain_value = 2;
		}else if($bantuan_lain === 'Ya < 5 Tahun Yang Lalu'){$bantuan_lain_value = 1;
		}else{$bantuan_lain_value = 3;};
		// JENIS KAWASAN RUMAH
		if($jenis_kawasan_rumah === 'Kawasan Kumuh'){$jenis_kawasan_rumah_value = 5;
		}else if($jenis_kawasan_rumah === 'Kawasan Rawan Air'){$jenis_kawasan_rumah_value = 4;
		}else if($jenis_kawasan_rumah === 'Kawasan Pesisir/Nelayan'){$jenis_kawasan_rumah_value = 3;
		}else if($jenis_kawasan_rumah === 'Kawasan Perbatasan'){$jenis_kawasan_rumah_value = 6;
		}else if($jenis_kawasan_rumah === 'Daerah Tertinggal/Terpencil'){$jenis_kawasan_rumah_value = 7;
		}else if($jenis_kawasan_rumah === 'Kawasan Ekonomi Khusus'){$jenis_kawasan_rumah_value = 2;
		}else{$jenis_kawasan_rumah_value = 1;};
		
		
		// ASPEK KESEHATAN
		// KUSEN
		if($kusen === 'Tidak Ada'){$kusen_value = 2;
		}else{$kusen_value = 1;};
		// JENDELA DAN VENTILASI
		if($jendela === 'Tidak Ada'){$jendela_value = 5;
		}else if($jendela === 'Memenuhi, Kondisi Baik'){$jendela_value = 1;
		}else if($jendela === 'Memenuhi, Kondisi Rusak'){$jendela_value = 2;
		}else if($jendela === 'Tidak Memenuhi Kondisi Baik'){$jendela_value = 3;
		}else{$jendela_value = 4;};
		// DAUN PINTU
		if($pintu === 'Ada'){$pintu_value = 1;
		}else{$pintu_value = 2;};
		// KAMAR MANDI
		if($kamar_mandi === 'Tidak Ada'){$kamar_mandi_value = 3;
		}else if($kamar_mandi === 'Sendiri'){$kamar_mandi_value = 1;
		}else{$kamar_mandi_value = 2;};
		// SALURAN AIR
		if($saluran_air === 'Tidak Ada'){$saluran_air_value = 3;
		}else if($saluran_air === 'Sendiri'){$saluran_air_value = 1;
		}else{$saluran_air_value = 2;};
		// PEMBUANGAN AKHIR TINJA
		if($pembuangan === 'Lainnya'){$pembuangan_value = 1;
		}else if($pembuangan === 'Septictank'){$pembuangan_value = 2;
		}else if($pembuangan === 'SPAL'){$pembuangan_value = 3;
		}else if($pembuangan === 'Lubang Tanah'){$pembuangan_value = 4;
		}else if($pembuangan === 'Kolam/Sawah/Sungai/Daun'){$pembuangan_value = 5;
		}else{$pembuangan_value = 6;};
		// DRAINASE
		if($drainase === 'Ada, Kondisi Baik'){$drainase_value = 1;
		}else if($drainase === 'Ada, Kondisi Rusak'){$drainase_value = 2;
		}else{$drainase_value = 3;};
		// TEMPAT SAMPAH
		if($tempat_sampah === 'Ada'){$tempat_sampah_value = 1;
		}else{$tempat_sampah_value = 2;};
		// SUMBER AIR MINUM
		if($sumber_air_minum === 'PDAM'){$sumber_air_minum_value = 3;
		}else if($sumber_air_minum === 'Sumur'){$sumber_air_minum_value = 4;
		}else if($sumber_air_minum === 'Mata Air'){$sumber_air_minum_value = 5;
		}else if($sumber_air_minum === 'Air Kemasan/Isi Ulang'){$sumber_air_minum_value = 2;
		}else{$sumber_air_minum_value = 1;};
		// JARAK AIR MINUM
		if($jarak_air_minum === '> 10m'){$jarak_air_minum_value = 2;
		}else{$jarak_air_minum_value = 1;};
		// SUMBER LISTRIK
		if($sumber_listrik === 'Listrik PLN Dengan Meteran'){$sumber_listrik_value = 1;
		}else if($sumber_listrik === 'Listrik PLN Tanpa Meteran'){$sumber_listrik_value = 2;
		}else if($sumber_listrik === 'Listrik Non PLN'){$sumber_listrik_value = 3;
		}else{$sumber_listrik_value = 4;};
		
		//ASPEK BANGUNAN
		// MATERIAL ATAP
		if($material_atap === 'Genteng'){$material_atap_value = 1;
		}else if($material_atap === 'Esbes'){$material_atap_value = 5;
		}else if($material_atap === 'Seng'){$material_atap_value = 4;
		}else if($material_atap === 'Jerami/Rumbia'){$material_atap_value = 7;
		}else if($material_atap === 'Metal Sheet'){$material_atap_value = 2;
		}else if($material_atap === 'Sirap'){$material_atap_value = 3;
		}else{$material_atap_value = 6;};
		// KONDISI ATAP
		if($kondisi_atap === 'Kondisi Baik'){$kondisi_atap_value = 4;
		}else if($kondisi_atap === 'Rusak Ringan'){$kondisi_atap_value = 3;
		}else if($kondisi_atap === 'Rusak Sedang/Sebagian'){$kondisi_atap_value = 2;
		}else {$kondisi_atap_value = 1;};
		// MATERIAL DINDING
		if($material_dinding === 'Tembok'){$material_dinding_value = 1;
		}else if($material_dinding === 'GRC(Esbes)'){$material_dinding_value = 2;
		}else if($material_dinding === 'Papan/Tripleks'){$material_dinding_value = 3;
		}else if($material_dinding === 'Anyaman Bambu'){$material_dinding_value = 5;
		}else {$material_dinding_value = 4;};
		// KONDISI MATERIAL DINDING
		if($kondisi_dinding === 'Kondisi Baik'){$kondisi_dinding_value = 4;
		}else if($kondisi_dinding === 'Rusak Ringan'){$kondisi_dinding_value = 3;
		}else if($kondisi_dinding === 'Rusak Sedang/Sebagian'){$kondisi_dinding_value = 2;
		}else {$kondisi_dinding_value = 1;};
		// MATERIAL LANTAI
		if($material_lantai === 'Keramik'){$material_lantai_value = 2;
		}else if($material_lantai === 'Marmer/Granit'){$material_lantai_value = 1;
		}else if($material_lantai === 'Ubin/Tegel'){$material_lantai_value = 3;
		}else if($material_lantai === 'Plesteran'){$material_lantai_value = 4;
		}else if($material_lantai === 'Bambu'){$material_lantai_value = 5;
		}else if($material_lantai === 'Kayu'){$material_lantai_value = 6;
		}else{$material_lantai_value = 7;};
		// KONDISI PENUUTUP LANTAI
		if($kondisi_penutup_lantai === 'Kondisi Baik'){$kondisi_penutup_lantai_value = 1;
		}else if($kondisi_penutup_lantai === 'Rusak Ringan'){$kondisi_penutup_lantai_value = 2;
		}else if($kondisi_penutup_lantai === 'Rusak Sedang/Sebagian'){$kondisi_penutup_lantai_value = 3;
		}else {$kondisi_penutup_lantai_value = 4;};
		// STRUKTUR LANTAI
		if($struktur_lantai === 'Kondisi Baik'){$struktur_lantai_value = 1;
		}else if($struktur_lantai === 'Rusak Ringan'){$struktur_lantai_value = 2;
		}else if($struktur_lantai === 'Rusak Sedang/Sebagian'){$struktur_lantai_value = 3;
		}else {$struktur_lantai_value = 4;};

		
		// ASPEK KESELAMATAN
		// PONDASI MATERIAL
		if($pondasi_material === 'Kayu'){$pondasi_material_value = 5;
		}else if($pondasi_material === 'Batu Kali'){$pondasi_material_value = 4;
		}else if($pondasi_material === 'Batu Kambung'){$pondasi_material_value = 3;
		}else if($pondasi_material === 'Bambu'){$pondasi_material_value = 2;
		}else if($pondasi_material === 'Beton'){$pondasi_material_value = 1;
		}else{$pondasi_material_value = 6;};
		// PONDASI KONDISI
		if($pondasi_kondisi === 'Kondisi Baik'){$pondasi_kondisi_value = 1;
		}else if($pondasi_kondisi === 'Rusak Ringan'){$pondasi_kondisi_value = 2;
		}else if($pondasi_kondisi === 'Rusak Sedang/Sebagian'){$pondasi_kondisi_value = 3;
		}else {$pondasi_kondisi_value = 4;};
		// SLOOF MATERIAL
		if($sloof_material === 'Kayu'){$sloof_material_value = 5;
		}else if($sloof_material === 'Beton Bertulang'){$sloof_material_value = 4;
		}else if($sloof_material === 'Batu Bata'){$sloof_material_value = 3;
		}else if($sloof_material === 'Bambu'){$sloof_material_value = 2;
		}else if($sloof_material === 'Semen'){$sloof_material_value = 1;
		}else{$sloof_material_value = 6;};
		// SLOOF KONDISI
		if($sloof_kondisi === 'Kondisi Baik'){$sloof_kondisi_value = 1;
		}else if($sloof_kondisi === 'Rusak Ringan'){$sloof_kondisi_value = 2;
		}else if($sloof_kondisi === 'Rusak Sedang/Sebagian'){$sloof_kondisi_value = 3;
		}else {$sloof_kondisi_value = 4;};
		// MATERIAL KOLOM RING
		if($material_kolom_ring === 'Kayu'){$material_kolom_ring_value = 3;
		}else if($material_kolom_ring === 'Beton Bertulang'){$material_kolom_ring_value = 1;
		}else if($material_kolom_ring === 'Baja Ringan'){$material_kolom_ring_value = 2;
		}else if($material_kolom_ring === 'Bambu'){$material_kolom_ring_value = 4;
		}else{$material_kolom_ring_value = 5;};
		// KONDISI KOLOM RING
		if($kondisi_kolom_ring === 'Kondisi Baik'){$kondisi_kolom_ring_value = 1;
		}else if($kondisi_kolom_ring === 'Rusak Ringan'){$kondisi_kolom_ring_value = 2;
		}else if($kondisi_kolom_ring === 'Rusak Sedang/Sebagian'){$kondisi_kolom_ring_value = 3;
		}else {$kondisi_kolom_ring_value = 4;};
		// MATERIAL RANGKA ATAP
		if($material_rangka_atap === 'Kayu'){$material_rangka_atap_value = 3;
		}else if($material_rangka_atap === 'Beton Bertulang'){$material_rangka_atap_value = 1;
		}else if($material_rangka_atap === 'Baja Ringan'){$material_rangka_atap_value = 2;
		}else if($material_rangka_atap === 'Bambu'){$material_rangka_atap_value = 4;
		}else{$material_rangka_atap_value = 5;};
		// KONDISI RANGKA ATAP
		if($kondisi_rangka_atap === 'Kondisi Baik'){$kondisi_rangka_atap_value = 1;
		}else if($kondisi_rangka_atap === 'Rusak Ringan'){$kondisi_rangka_atap_value = 2;
		}else if($kondisi_rangka_atap === 'Rusak Sedang/Sebagian'){$kondisi_rangka_atap_value = 3;
		}else {$kondisi_rangka_atap_value = 4;};
		// PROTEKSI KEBAKARAN
		if($proteksi_kebakaran === 'Tidak Ada'){$proteksi_kebakaran_value = 2;
		}else{$proteksi_kebakaran_value = 1;};
		// SARANA PROTEKSI
		if($sarana_proteksi_kebakaran === 'PMK/APAR'){$sarana_proteksi_kebakaran_value = 3;
		}else if($sarana_proteksi_kebakaran === 'Detektor Asap'){$sarana_proteksi_kebakaran_value = 2;
		}else{$sarana_proteksi_kebakaran_value = 1;};
		// PRASARANA PROTEKSI
		if($prasarana_proteksi_kebakaran === 'Hidran/Tangki/Sumber Air'){$prasarana_proteksi_kebakaran_value = 3;
		}else if($prasarana_proteksi_kebakaran === 'Jalan Untuk Damkar'){$prasarana_proteksi_kebakaran_value = 2;
		}else{$prasarana_proteksi_kebakaran_value = 1;};

		$score_aspek			= $penghuni_value + $luas_rumah_value + $kusen_value + $jendela_value + $pintu_value + $kamar_mandi_value + $saluran_air_value + $pembuangan_value + $drainase_value + $tempat_sampah_value + $sumber_air_minum_value + $jarak_air_minum_value + $sumber_listrik_value + $material_atap_value + $kondisi_atap_value + $material_dinding_value + $kondisi_dinding_value + $material_lantai_value + $kondisi_penutup_lantai_value + $struktur_lantai_value + $pondasi_material_value + $pondasi_kondisi_value + $sloof_material_value + $sloof_kondisi_value + $material_kolom_ring_value + $kondisi_kolom_ring_value + $material_rangka_atap_value + $kondisi_rangka_atap_value + $proteksi_kebakaran_value + $sarana_proteksi_kebakaran_value + $prasarana_proteksi_kebakaran_value;
		$score_responden		= $jumlah_tabungan_value + $tabungan_perbulan_value + $jumlah_kk_value + $pekerjaan_utama_value + $jumlah_penghasilan_value + $range_penghasilan_value + $pendidikan_terakhir_value + $status_perkawinan_value + $status_fisik_value + $status_kepemilikan_tanah_value + $status_kepemilikan_rumah_value + $aset_rumah_lain_value + $aset_tanah_lain_value + $bantuan_lain_value  + $jenis_kawasan_rumah_value;
		//perhitungan metode
		
		$total_nilai			= $score_responden + $score_aspek;
		//normalisasi bobot		Nilai Bobot dibagi Total Nilai Bobot
		$bobot_penguni		= $penghuni_value/$total_nilai; 
		$bobot_luas_rumah 	= $luas_rumah_value/$total_nilai;
		$bobot_kusen		= $kusen_value/$total_nilai; 
		$bobot_jendela		= $jendela_value/$total_nilai;
		$bobot_pintu		= $pintu_value/$total_nilai; 
		$bobot_kamar_mandi	= $kamar_mandi_value/$total_nilai;
		$bobot_saluran_air	= $saluran_air_value/$total_nilai;
		$bobotl_pembuangan	= $pembuangan_value/$total_nilai;
		$bobot_drainase		= $drainase_value/$total_nilai;
		$bobot_tempat_sampah= $tempat_sampah_value/$total_nilai;
		$bobot_sumber_air	= $sumber_air_minum_value/$total_nilai; 
		$bobot_jarak_air	= $jarak_air_minum_value/$total_nilai;
		$bobot_sumber_listrik	= $sumber_listrik_value/$total_nilai;
		$bobot_material_atap	= $material_atap_value/$total_nilai; 
		$bobot_kondisi_atap 	= $kondisi_atap_value/$total_nilai;
		$bobot_material_dinding = $material_dinding_value/$total_nilai;
		$bobot_kondisi_dinding	= $kondisi_dinding_value/$total_nilai;
		$bobot_material_lantai	= $material_lantai_value/$total_nilai;
		$bobot_kondisi_penutup_lantai = $kondisi_penutup_lantai_value/$total_nilai;
		$bobot_struktur_lantai	= $struktur_lantai_value/$total_nilai;
		$bobot_pondasi_material	= $pondasi_material_value/$total_nilai;
		$bobot_pondasi_kondisi  = $pondasi_kondisi_value/$total_nilai;
		$bobot_sloof_material	= $sloof_material_value/$total_nilai;
		$bobot_sloof_kondisi	= $sloof_kondisi_value/$total_nilai;
		$bobot_material_kolom	= $material_kolom_ring_value/$total_nilai;
		$bobot_kondisi_kolom	= $kondisi_kolom_ring_value/$total_nilai;
		$bobot_material_rangka 	= $material_rangka_atap_value/$total_nilai;
		$bobot_kondisi_rangka 	= $kondisi_rangka_atap_value/$total_nilai; 
		$bobot_proteksi			= $proteksi_kebakaran_value/$total_nilai; 
		$bobot_sarana_proteksi	= $sarana_proteksi_kebakaran_value/$total_nilai; 
		$bobot_prasarana		= $prasarana_proteksi_kebakaran_value/$total_nilai;
		$bobot_tabungan			= $jumlah_tabungan_value/$total_nilai;
		$bobot_tabungan_perbulan	= $tabungan_perbulan_value/$total_nilai; 
		$bobot_jumlah_kk 		= $jumlah_kk_value/$total_nilai;
		$bobot_pekerjaan_utama	= $pekerjaan_utama_value/$total_nilai; 
		$bobot_jumlah_penghasilan = $jumlah_penghasilan_value/$total_nilai;
		$bobot_penghasilan		  = $range_penghasilan_value/$total_nilai;
		$bobot_pendidikan_terakhir= $pendidikan_terakhir_value/$total_nilai;
		$bobot_status_perkawinan  = $status_perkawinan_value/$total_nilai; 
		$bobot_status_fisik		  = $status_fisik_value/$total_nilai; 
		$bobot_kepemilikan_tanah  = $status_kepemilikan_tanah_value/$total_nilai;
		$bobot_kepemilikan_dirumah= $status_kepemilikan_rumah_value/$total_nilai;
		$bobot_aset_rumah_lain	  = $aset_rumah_lain_value/$total_nilai;
		$bobot_aset_tanah_lain	  = $aset_tanah_lain_value/$total_nilai;
		$bobot_nilai 			  = $bantuan_lain_value/$total_nilai;
		$bobot_jenis_kawasan_rumah = $jenis_kawasan_rumah_value/$total_nilai;
		//Menentukan memerlukan nilai vektor S
		$vektor_penguni		= pow($penghuni_value, $bobot_penguni);
		$vektor_luas_rumah 	= pow($luas_rumah_value, $bobot_luas_rumah);
		$vektor_kusen		= pow($kusen_value, $bobot_kusen);
		$vektor_jendela		= pow($jendela_value, $bobot_jendela);
		$vektor_pintu		= pow($pintu_value, $bobot_pintu);
		$vektor_kamar_mandi	= pow($kamar_mandi_value, $bobot_kamar_mandi);
		$vektor_saluran_air	= pow($saluran_air_value, $bobot_saluran_air);
		$vektor_pembuangan	= pow($pembuangan_value, $bobotl_pembuangan);
		$vektor_drainase	= pow($drainase_value, $bobot_drainase);
		$vektor_tempat_sampah= pow($tempat_sampah_value, $bobot_tempat_sampah);
		$vektor_sumber_air	= pow($sumber_air_minum_value, $bobot_sumber_air);
		$vektor_jarak_air	= pow($jarak_air_minum_value, $bobot_jarak_air);
		$vektor_sumber_listrik	= pow($sumber_listrik_value, $bobot_sumber_listrik);
		$vektor_material_atap	= pow($material_atap_value, $bobot_material_atap);
		$vektor_kondisi_atap 	= pow($kondisi_atap_value, $bobot_kondisi_atap);
		$vektor_material_dinding = pow($material_dinding_value, $bobot_material_dinding);
		$vektor_kondisi_dinding	= pow($kondisi_dinding_value, $bobot_kondisi_dinding);
		$vektor_material_lantai	= pow($material_lantai_value, $bobot_material_lantai);
		$vektor_kondisi_penutup_lantai = pow($kondisi_penutup_lantai_value, $bobot_kondisi_penutup_lantai);
		$vektor_struktur_lantai	= pow($struktur_lantai_value, $bobot_struktur_lantai);
		$vektor_pondasi_material	= pow($pondasi_material_value, $bobot_pondasi_material);
		$vektor_pondasi_kondisi  = pow($pondasi_kondisi_value, $bobot_pondasi_kondisi);
		$vektor_sloof_material	= pow($sloof_material_value, $bobot_sloof_material);
		$vektor_sloof_kondisi	= pow($sloof_kondisi_value, $bobot_sloof_kondisi);
		$vektor_material_kolom	= pow($material_kolom_ring_value, $bobot_material_kolom);
		$vektor_kondisi_kolom	= pow($kondisi_kolom_ring_value, $bobot_kondisi_kolom);
		$vektor_material_rangka 	= pow($material_rangka_atap_value, $bobot_material_rangka);
		$vektor_kondisi_rangka 	= pow($kondisi_rangka_atap_value, $bobot_kondisi_rangka);
		$vektor_proteksi			= pow($proteksi_kebakaran_value, $bobot_proteksi);
		$vektor_sarana_proteksi	= pow($sarana_proteksi_kebakaran_value, $bobot_sarana_proteksi);
		$vektor_prasarana		= pow($prasarana_proteksi_kebakaran_value, $bobot_prasarana);
		$vektor_tabungan			= pow($jumlah_tabungan_value, $bobot_tabungan);
		$vektor_tabugan_perbulan	= pow($tabungan_perbulan_value, $bobot_tabungan_perbulan);
		$vektor_jumlah_kk 		= pow($jumlah_kk_value, $bobot_jumlah_kk);
		$vektor_pekerjaan_utama	= pow($pekerjaan_utama_value, $bobot_pekerjaan_utama);
		$vektor_jumlah_penghasilan = pow($jumlah_penghasilan_value, $bobot_jumlah_penghasilan);
		$vektor_penghasilan		   = pow($range_penghasilan_value, $bobot_penghasilan);
		$vektor_pendidikan_terakhir= pow($pendidikan_terakhir_value, $bobot_pendidikan_terakhir);
		$vektor_status_perkawinan  = pow($status_perkawinan_value, $bobot_status_perkawinan);
		$vektor_status_fisik	   = pow($status_fisik_value, $bobot_status_fisik);
		$vektor_kepemilikan_tanah  = pow($status_kepemilikan_tanah_value, $bobot_kepemilikan_tanah);
		$vektor_kepemilikan_dirumah= pow($status_kepemilikan_rumah_value, $bobot_kepemilikan_dirumah);
		$vektor_aset_rumah_lain	  = pow($aset_rumah_lain_value, $bobot_aset_rumah_lain);
		$vektor_aset_tanah_lain	  = pow($aset_tanah_lain_value, $bobot_aset_tanah_lain);
		$vektor_nilai 			  = pow($bantuan_lain_value, $bobot_nilai);
		$vektor_jenis_kawasan_rumah = pow($jenis_kawasan_rumah_value, $bobot_jenis_kawasan_rumah);

		$hasil_vektor			  = $vektor_penguni*
									$vektor_luas_rumah* 
									$vektor_kusen*	
									$vektor_jendela*	
									$vektor_pintu*	
									$vektor_kamar_mandi*
									$vektor_saluran_air*
									$vektor_pembuangan*
									$vektor_drainase*
									$vektor_tempat_sampah*
									$vektor_sumber_air*
									$vektor_jarak_air*
									$vektor_sumber_listrik*	
									$vektor_material_atap*
									$vektor_kondisi_atap*
									$vektor_material_dinding*
									$vektor_kondisi_dinding*	
									$vektor_material_lantai*
									$vektor_kondisi_penutup_lantai*
									$vektor_struktur_lantai*
									$vektor_pondasi_material*
									$vektor_pondasi_kondisi* 
									$vektor_sloof_material*
									$vektor_sloof_kondisi*
									$vektor_material_kolom*
									$vektor_kondisi_kolom*
									$vektor_material_rangka* 
									$vektor_kondisi_rangka* 
									$vektor_proteksi*	
									$vektor_sarana_proteksi*	
									$vektor_prasarana*	
									$vektor_tabungan*
									$vektor_tabugan_perbulan*
									$vektor_jumlah_kk* 		
									$vektor_pekerjaan_utama*	
									$vektor_jumlah_penghasilan* 
									$vektor_penghasilan*		
									$vektor_pendidikan_terakhir*
									$vektor_status_perkawinan* 
									$vektor_status_fisik*	
									$vektor_kepemilikan_tanah*  
									$vektor_kepemilikan_dirumah*
									$vektor_aset_rumah_lain*	  
									$vektor_aset_tanah_lain*
									$vektor_jenis_kawasan_rumah*
                                    $vektor_nilai;
        return $hasil_vektor;
									
		//Menentukan nilai vektor V
}