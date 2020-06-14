	<!-- cek apakah sudah login -->
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
    JOIN tabel_aspek ON tabel_aspek.nik_aspek = tabel_identitas_responden.nik_responden
    JOIN tabel_waktu ON tabel_waktu.nik_waktu = tabel_identitas_responden.nik_responden 
	WHERE tabel_identitas_responden.nik_responden = $nik_update";
    $hasil          = mysqli_query($koneksi,$query_tampil);
    while($data = mysqli_fetch_array($hasil))
    {	
		$edit_usia =$data['usia'];
		$edit_nik_waktu = $data['nik_waktu'];
		$edit_nik_aspek = $data['nik_aspek'];
        $edit_nama_lengkap = $data['nama_lengkap'];
        $edit_tanggal = $data['tanggal_surve'];
        $edit_nik_responden = $data['nik_responden'];
        $edit_no_telp = $data['no_telp'];
        $edit_sumber_data = $data['sumber_data'];
        $edit_kordinat = $data['kordinat'];
        $edit_jenis_kelamin = $data['jenis_kelamin'];
        $edit_kecamatan = $data['kecamatan'];
        $edit_desa = $data['desa'];
        $edit_dusun = $data['dusun'];
        $edit_rt = $data['rt'];
        $edit_rw = $data['rw'];
        $edit_jalan = $data['jalan'];
        $edit_jumlah_tabungan = $data['jumlah_tabungan'];
        $edit_tabungan_perbulan = $data['tabungan_perbulan'];
        $edit_jumlah_kk = $data['jumlah_kk'];
        $edit_pekerjaan_utama = $data['pekerjaan_utama'];
        $edit_jumlah_penghasilan = $data['jumlah_penghasilan'];
        $edit_range_penghasilan = $data['range_penghasilan'];
        $edit_pendidikan_terakhir = $data['pendidikan_terakhir'];
        $edit_status_perkawinan = $data['status_perkawinan'];
        $edit_status_fisik = $data['status_fisik'];
        $edit_status_kepemilikan_tanah = $data['status_kepemilikan_tanah'];
        $edit_status_kepemilikan_rumah = $data['status_kepemilikan_rumah'];
        $edit_aset_rumah_lain = $data['aset_rumah_lain'];
        $edit_aset_tanah_lain = $data['aset_tanah_lain'];
        $edit_bantuan_lain = $data['bantuan_lain'];
        $edit_nama_bantuan_lain = $data['nama_bantuan_lain'];
        $edit_jenis_kawasan_rumah = $data['jenis_kawasan_rumah'];
        $edit_luas_rumah = $data['luas_rumah'];
        $edit_jumlah_penghuni = $data['penghuni'];
        $edit_kusen = $data['kusen'];
        $edit_jendela = $data['jendela'];
        $edit_pintu = $data['pintu'];
        $edit_kamar_mandi = $data['kamar_mandi'];
        $edit_saluran_air = $data['saluran_air'];
        $edit_pembuangan = $data['pembuangan'];
        $edit_drainase = $data['drainase'];
        $edit_tempat_sampah = $data['tempat_sampah'];
        $edit_sumber_air_minum = $data['sumber_air_minum'];
        $edit_jarak_air_minum = $data['jarak_air_minum'];
        $edit_sumber_listrik = $data['sumber_listrik'];
        $edit_material_atap = $data['material_atap'];
        $edit_kondisi_atap = $data['kondisi_atap'];
        $edit_material_dinding = $data['material_dinding'];
        $edit_kondisi_dinding = $data['kondisi_dinding'];
        $edit_material_lantai = $data['material_lantai'];
        $edit_kondisi_penutup_lantai = $data['kondisi_penutup_lantai'];
        $edit_struktur_lantai = $data['struktur_lantai'];
        $edit_pondasi_material = $data['pondasi_material'];
        $edit_pondasi_kondisi = $data['pondasi_kondisi'];
        $edit_sloof_material = $data['sloof_material'];
        $edit_sloof_kondisi = $data['sloof_kondisi'];
        $edit_material_kolom_ring = $data['material_kolom_ring'];
        $edit_kondisi_kolom_ring = $data['kondisi_kolom_ring'];
        $edit_material_rangka_atap = $data['material_rangka_atap'];
        $edit_kondisi_rangka_atap = $data['kondisi_rangka_atap'];
        $edit_proteksi_kebakaran = $data['proteksi_kebakaran'];
        $edit_sarana_proteksi_kebakaran = $data['sarana_proteksi_kebakaran'];
        $edit_prasarana_proteksi_kebakaran = $data['prasarana_proteksi_kebakaran'];
    }
    ?>
    <?php 
        $jenis_kelamin = array(array('name' => 'laki-laki', 'value' => 'laki-laki'),
			array('name' => 'perempuan', 'value' => 'perempuan'));
			// print_r(array_values($jenis_kelamin));
        $sumber_data = array(array('name' => 'bdt', 'value' => 'bdt'),
            array('name' => 'non bdt', 'value' => 'non bdt'));
        $dusun = array(array('name' => 'campurejo', 'value' => 'campurejo'),
            array('name' => 'rejodadi', 'value' => 'rejodadi' ),
            array('name' => 'sidorejo' , 'value' => 'sidorejo'),
            array('name' => 'karang tumpuk', 'value' => 'karang tumpuk'));
        $rt = array(array('name' => '1', 'value' => '1'),
            array('name' => '2', 'value' => '2'),
            array('name' => '3', 'value' =>'3'),
            array('name' => '4', 'value' => '4'),
            array('name' => '5', 'value' => '5'),
            array('name' => '6', 'value' => '6'),
            array('name' => '7', 'value' => '7'),
            array('name' => '8', 'value' => '8'),
            array('name' => '9', 'value' => '9'),
            array('name' => '10', 'value' => '10'),
            array('name' => '11', 'value' => '11'),
            array('name' => '12', 'value' => '12'),
            array('name' => '13', 'value' => '13'),
            array('name' => '14', 'value' => '14'),
            array('name' => '15', 'value' => '15'),
            array('name' => '16', 'value' => '16'),
            array('name' => '17', 'value' => '17'),
            array('name' => '18', 'value' => '18'),
            array('name' => '19', 'value' => '19'),
            array('name' => '20', 'value' => '20'),
            array('name' => '21', 'value' => '21'),
            array('name' => '22', 'value' => '22'),
            array('name' => '23', 'value' => '23'),
            array('name' => '24', 'value' => '24'),
            array('name' => '25', 'value' => '25'),
            array('name' => '26', 'value' => '26'),
            array('name' => '27', 'value' => '27'),
            array('name' => '28', 'value' => '28'),
            array('name' => '29', 'value' => '29'),
            array('name' => '30', 'value' => '30'),
            array('name' => '31', 'value' => '31'),
            array('name' => '32', 'value' => '32'));
        $rw = array(array('name' => '1', 'value' => '1'),
            array('name' => '2', 'value' => '2'),
            array('name' => '3' ,'value' => '3'),
            array('name' => '4', 'value' => '4'),
            array('name' => '5', 'value' => '5'),
            array('name' => '6', 'value' => '6'),
            array('name' => '7', 'value' => '7'),
            array('name' => '8', 'value' => '8'),
            array('name' => '9', 'value' => '9'));
        $tabungan_perbulan = array(array('name' => '0 - 1.2 Juta', 'value' => '0 - 1.2 Juta'),
            array('name' => '1.3 - 1.8 Juta', 'value' => '1.3 - 1.8 Juta'),
            array('name' => '1.9 - 2.1 Juta' ,'value' => '1.9 - 2.1 Juta'),
            array('name' => '2.2 - 2.6 Juta', 'value' => '2.2 - 2.6 Juta'),
            array('name' => '2.7 - 3.1 Juta', 'value' => '2.7 - 3.1 Juta'),
            array('name' => '3.2 - 3.6 Juta', 'value' => '3.2 - 3.6 Juta'));
        $range_penghasilan = array(array('name' => '0 - 1.2 Juta', 'value' => '0 - 1.2 Juta'),
            array('name' => '1.3 - 1.8 Juta', 'value' => '1.3 - 1.8 Juta'),
            array('name' => '1.9 - 2.1 Juta' ,'value' => '1.9 - 2.1 Juta'),
            array('name' => '2.2 - 2.6 Juta', 'value' => '2.2 - 2.6 Juta'),
            array('name' => '2.7 - 3.1 Juta', 'value' => '2.7 - 3.1 Juta'),
            array('name' => '3.2 - 3.6 Juta', 'value' => '3.2 - 3.6 Juta'));
        $pekerjaan_utama = array(array('name' => 'Lainnya', 'value' => 'Lainnya'),
            array('name' => 'Tidak Bekerja', 'value' => 'Tidak Bekerja'),
            array('name' => 'Wirausaha' ,'value' => 'Wirausaha'),
            array('name' => 'Petani', 'value' => 'Petani'),
            array('name' => 'Tukang/Montir', 'value' => 'Tukang/Montir'),
            array('name' => 'Buruh Harian', 'value' => 'Buruh Harian'),
            array('name' => 'Karyawan', 'value' => 'Karyawan'),
            array('name' => 'Honorer', 'value' => 'Honorer'),
            array('name' => 'Ojek/Supir', 'value' => 'Ojek/Supir'),
            array('name' => 'Pramuwisma', 'value' => 'Pramuwisma'),
            array('name' => 'Nelayan', 'value' => 'Nelayan'),
            array('name' => 'PNS', 'value' => 'PNS'),
            array('name' => 'Pensiunan', 'value' => 'Pensiunan'),
            array('name' => 'BUMN/D', 'value' => 'BUMN/D'),
            array('name' => 'TNI/Polri', 'value' => 'TNI/Polri'));
        $pendidikan_terakhir = array(array('name' => 'Tidak Punya Ijazah', 'value' => 'Tidak Punya Ijazah'),
            array('name' => 'SD/Sederajat', 'value' => 'SD/Sederajat'),
            array('name' => 'SMP/Sederajat' ,'value' => 'SMP/Sederajat'),
            array('name' => 'SMA/Sederajat', 'value' => 'SMA/Sederajat'),
            array('name' => 'D1/D2/D3', 'value' => 'D1/D2/D3'),
            array('name' => 'D4/S1', 'value' => 'D4/S1'));
        $status_perkawinan = array(array('name' => 'Belum Menikah', 'value' => 'Belum Menikah'),
            array('name' => 'Menikah', 'value' => 'Menikah'),
            array('name' => 'Janda/Duda' ,'value' => 'Janda/Duda'));
        $status_fisik = array(array('name' => 'Sehat', 'value' => 'Sehat'),
            array('name' => 'Sakit', 'value' => 'Sakit'),
            array('name' => 'Disabilita' ,'value' => 'Disabilita'));
        $kepemilikan_tanah = array(array('name' => 'Milik Sendiri', 'value' => 'Milik Sendiri'),
            array('name' => 'Bukan Milik Sendiri', 'value' => 'Bukan Milik Sendiri'),
            array('name' => 'Tanah Negara' ,'value' => 'Tanah Negara'));
        $kepemilikan_rumah = array(array('name' => 'Milik Sendiri', 'value' => 'Milik Sendiri'),
            array('name' => 'Bukan Milik Sendiri', 'value' => 'Bukan Milik Sendiri'),
            array('name' => 'Kontrak/Sewa' ,'value' => 'Kontrak/Sewa'));
        $aset_rumah_lain = array(array('name' => 'Ada', 'value' => 'Ada'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $aset_tanah_lain = array(array('name' => 'Ada', 'value' => 'Ada'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $bantuan_lain = array(array('name' => 'Ya > 5 Tahun Yang Lalu', 'value' => 'Ya > 5 Tahun Yang Lalu'),
            array('name' => 'YA < 5 Tahun Yang Lalu', 'value' => 'YA < 5 Tahun Yang Lalu'),
            array('name' => 'Belum Pernah', 'value' => 'Belum Pernah'));
        $jenis_kawasan_rumah = array(array('name' => 'Kawasan Rawan Air', 'value' => 'Kawasan Rawan Air'),
            array('name' => 'Kawasan Pesisir/Nelayan', 'value' => 'Kawasan Pesisir/Nelayan'),
            array('name' => 'Kawasan Perbatasan', 'value' => 'Kawasan Perbatasan'),
            array('name' => 'Daerah Tertinggal/Terpencil', 'value' => 'Daerah Tertinggal/Terpencil'),
            array('name' => 'Kawasan Ekonomi Khusus', 'value' => 'Kawasan Ekonomi Khusus'),
            array('name' => 'Kawasan Kumuh', 'value' => 'Kawasan Kumuh'),
            array('name' => 'Lainnya', 'value' => 'Lainnya'));
        $material_pondasi = array(array('name' => 'Kayu', 'value' => 'Kayu'),
            array('name' => 'Batu Kali', 'value' => 'Batu Kali'),
            array('name' => 'Batu Kambung', 'value' => 'Batu Kambung'),
            array('name' => 'Bambu', 'value' => 'Bambu'),
            array('name' => 'Beton', 'value' => 'Beton'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $kondisi_pondasi = array(array('name' => 'Kondisi Baik', 'value' => 'Kondisi Baik'),
            array('name' => 'Rusak Ringan', 'value' => 'Rusak Ringan'),
            array('name' => 'Rusak Sedang/Sebagian', 'value' => 'Rusak Sedang/Sebagian'),
            array('name' => 'Rusak Berat/Seluruhnya', 'value' => 'Rusak Berat/Seluruhnya'));
        $material_sloof = array(array('name' => 'Kayu', 'value' => 'Kayu'),
            array('name' => 'Beton Bertulang', 'value' => 'Beton Bertulang'),
            array('name' => 'Batu Bata', 'value' => 'Batu Bata'),
            array('name' => 'Bambu', 'value' => 'Bambu'),
            array('name' => 'Semen', 'value' => 'Semen'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $kondisi_sloof = array(array('name' => 'Kondisi Baik', 'value' => 'Kondisi Baik'),
            array('name' => 'Rusak Ringan', 'value' => 'Rusak Ringan'),
            array('name' => 'Rusak Sedang/Sebagian', 'value' => 'Rusak Sedang/Sebagian'),
            array('name' => 'Rusak Berat/Seluruhnya', 'value' => 'Rusak Berat/Seluruhnya'));
        $material_kolom = array(array('name' => 'Kayu', 'value' => 'Kayu'),
            array('name' => 'Beton Bertulang', 'value' => 'Beton Bertulang'),
            array('name' => 'Baja Ringan', 'value' => 'Baja Ringan'),
            array('name' => 'Bambu', 'value' => 'Bambu'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $kondisi_kolom = array(array('name' => 'Kondisi Baik', 'value' => 'Kondisi Baik'),
            array('name' => 'Rusak Ringan', 'value' => 'Rusak Ringan'),
            array('name' => 'Rusak Sedang/Sebagian', 'value' => 'Rusak Sedang/Sebagian'),
            array('name' => 'Rusak Berat/Seluruhnya', 'value' => 'Rusak Berat/Seluruhnya'));
        $material_rangka_atap = array(array('name' => 'Kayu', 'value' => 'Kayu'),
            array('name' => 'Beton Bertulang', 'value' => 'Beton Bertulang'),
            array('name' => 'Baja Ringan', 'value' => 'Baja Ringan'),
            array('name' => 'Bambu', 'value' => 'Bambu'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $kondisi_rangka_atap = array(array('name' => 'Kondisi Baik', 'value' => 'Kondisi Baik'),
            array('name' => 'Rusak Ringan', 'value' => 'Rusak Ringan'),
            array('name' => 'Rusak Sedang/Sebagian', 'value' => 'Rusak Sedang/Sebagian'),
            array('name' => 'Rusak Berat/Seluruhnya', 'value' => 'Rusak Berat/Seluruhnya'));
        $proteksi_kebakaran = array(array('name' => 'Ada', 'value' => 'Ada'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $sarana_proteksi_kebakaran = array(array('name' => 'PMK/APAR', 'value' => 'PMK/APAR'),
            array('name' => 'Detektor Asap', 'value' => 'Detektor Asap'),
            array('name' => 'Lainnya', 'value' => 'Lainnya'));
        $prasarana_proteksi_kebakaran = array(array('name' => 'Hidran/Tangki/Sumber Air', 'value' => 'Hidran/Tangki/Sumber Air'),
            array('name' => 'Jalan Untuk Damkar', 'value' => 'Jalan Untuk Damkar'),
            array('name' => 'Lainnya', 'value' => 'Lainnya'));
        $kusen = array(array('name' => 'Ada', 'value' => 'Ada'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $jendela = array(array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'),
            array('name' => 'Memenuhi, Kondisi Baik', 'value' => 'Memenuhi, Kondisi Baik'),
            array('name' => 'Memenuhi, Kondisi Rusak', 'value' => 'Memenuhi, Kondisi Rusak'),
            array('name' => 'Tidak Memenuhi, Kondisi Baik', 'value' => 'Tidak Memenuhi, Kondisi Baik'),
            array('name' => 'Tidak Memenuhi, Kondisi Rusak', 'value' => 'Tidak Memenuhi, Kondisi Rusak'));
        $daun_pintu = array(array('name' => 'Ada', 'value' => 'Ada'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $kamar_mandi = array(array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'),
            array('name' => 'Sendiri', 'value' => 'Sendiri'),
            array('name' => 'Bersama/Umum', 'value' => 'Bersama/Umum'));
        $saluran_air_kotor = array(array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'),
            array('name' => 'Sendiri', 'value' => 'Sendiri'),
            array('name' => 'Bersama/Umum', 'value' => 'Bersama/Umum'));
        $pembuangan_akhir = array(array('name' => 'Septictank', 'value' => 'Septictank'),
            array('name' => 'SPAL', 'value' => 'SPAL'),
            array('name' => 'Lubang Tanah', 'value' => 'Lubang Tanah'),
            array('name' => 'Kolam/Sawah/Sungai/Daun', 'value' => 'Kolam/Sawah/Sungai/Daun'),
            array('name' => 'Pantai/Tanah Lapang/Kebun', 'value' => 'Pantai/Tanah Lapang/Kebun'),
            array('name' => 'Lainnya', 'value' => 'Lainnya'));
        $drainase = array(array('name' => 'Ada, Kondisi Baik', 'value' => 'Ada, Kondisi Baik'),
            array('name' => 'Ada, Kondisi Rusak', 'value' => 'Ada, Kondisi Rusak'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $tempat_sampah = array(array('name' => 'Ada', 'value' => 'Ada'),
            array('name' => 'Tidak Ada', 'value' => 'Tidak Ada'));
        $sumber_air_minum = array(array('name' => 'Air Kemasan/Isi Ulang', 'value' => 'Air Kemasan/Isi Ulang'),
            array('name' => 'PDAM', 'value' => 'PDAM'),
            array('name' => 'Sumur', 'value' => 'Sumur'),
            array('name' => 'Mata Air', 'value' => 'Mata Air'),
            array('name' => 'Lainnya', 'value' => 'Lainnya'));
        $jarak_sumber_air_minum = array(array('name' => '> 10m', 'value' => '> 10m'),
            array('name' => '< 10m', 'value' => '< 10m'));
        $sumber_listrik = array(array('name' => 'Listrik PLN Dengan Meteran', 'value' => 'Listrik PLN Dengan Meteran'),
            array('name' => 'Listrik PLN Tanpa Meteran', 'value' => 'Listrik PLN Tanpa Meteran'),
            array('name' => 'Listrik Non PLN', 'value' => 'Listrik Non PLN'),
            array('name' => 'Bukan Listrik', 'value' => 'Bukan Listrik'));
        $material_atap = array(array('name' => 'Genteng', 'value' => 'Genteng'),
            array('name' => 'Esbes', 'value' => 'Esbes'),
            array('name' => 'Seng', 'value' => 'Seng'),
            array('name' => 'Jerami/Rumbia', 'value' => 'Jerami/Rumbia'),
            array('name' => 'Metal Sheets', 'value' => 'Metal Sheets'),
            array('name' => 'Sirap', 'value' => 'Sirap'),
            array('name' => 'Tripleks', 'value' => 'Tripleks'));
        $kondisi_atap = array(array('name' => 'Kondisi Baik', 'value' => 'Kondisi Baik'),
            array('name' => 'Rusak Ringan', 'value' => 'Rusak Ringan'),
            array('name' => 'Rusak Sedang/Sebagian', 'value' => 'Rusak Sedang/Sebagian'),
            array('name' => 'Rusak Berat/Seluruhnya', 'value' => 'Rusak Berat/Seluruhnya'));
        $material_dinding = array(array('name' => 'Tembok', 'value' => 'Tembok'),
            array('name' => 'GRC(Esbes)', 'value' => 'GRC(Esbes)'),
            array('name' => 'Papan/Tripleks', 'value' => 'Papan/Tripleks'),
            array('name' => 'Anyaman Bambu', 'value' => 'Anyaman Bambu'),
            array('name' => 'Kayu', 'value' => 'Kayu'));
        $kondisi_dinding = array(array('name' => 'Kondisi Baik', 'value' => 'Kondisi Baik'),
            array('name' => 'Rusak Ringan', 'value' => 'Rusak Ringan'),
            array('name' => 'Rusak Sedang/Sebagian', 'value' => 'Rusak Sedang/Sebagian'),
            array('name' => 'Rusak Berat/Seluruhnya', 'value' => 'Rusak Berat/Seluruhnya'));
        $material_lantai = array(array('name' => 'Keramik', 'value' => 'Keramik'),
            array('name' => 'Marmer/Granit', 'value' => 'Marmer/Granit'),
            array('name' => 'Ubin/Tegal', 'value' => 'Ubin/Tegal'),
            array('name' => 'Plesteran', 'value' => 'Plesteran'),
            array('name' => 'Bambu', 'value' => 'Bambu'),
            array('name' => 'Tanah', 'value' => 'Tanah'),
            array('name' => 'Kayu', 'value' => 'Kayu'));
        $kondisi_lantai = array(array('name' => 'Kondisi Baik', 'value' => 'Kondisi Baik'),
            array('name' => 'Rusak Ringan', 'value' => 'Rusak Ringan'),
            array('name' => 'Rusak Sedang/Sebagian', 'value' => 'Rusak Sedang/Sebagian'),
            array('name' => 'Rusak Berat/Seluruhnya', 'value' => 'Rusak Berat/Seluruhnya'));
        $struktur_lantai = array(array('name' => 'Kondisi Baik', 'value' => 'Kondisi Baik'),
            array('name' => 'Rusak Ringan', 'value' => 'Rusak Ringan'),
            array('name' => 'Rusak Sedang/Sebagian', 'value' => 'Rusak Sedang/Sebagian'),
            array('name' => 'Rusak Berat/Seluruhnya', 'value' => 'Rusak Berat/Seluruhnya'));

	?>
	<?php
	include '../koneksi.php';
	if (isset($_POST['submit'])) {

		// tabel identitas responden
		$nama_lengkap	= $_POST['ganti_nama'];
		$nik			= $_POST['nik'];
		$usia			= $_POST['usia'];
		$nik_lama		= $_POST['nik_lama'];
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
		$penghuni= $_POST['penghuni'];
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
		// print_r($_POST);
		
		// Ambil Data yang Dikirim dari Form
		$nama_file_ktp 		= $_FILES['ktp']['name'];
		$ukuran_file_ktp 	= $_FILES['ktp']['size'];
		$tipe_file_ktp 		= $_FILES['ktp']['type'];
		$tmp_file_ktp 		= $_FILES['ktp']['tmp_name'];
		$nama_file_rumah 	= $_FILES['rumah']['name'];
		$ukuran_file_rumah 	= $_FILES['rumah']['size'];
		$tipe_file_rumah 	= $_FILES['rumah']['type'];
		$tmp_file_rumah 	= $_FILES['rumah']['tmp_name'];
		
		// 	// Set path folder tempat menyimpan gambarnya
		$path_ktp = "../assets/img/ktp/".$nama_file_ktp;
		$path_rumah = "../assets/img/rumah/".$nama_file_rumah;

		// echo $nama_lengkap . $no_telp . $kordinat . $sumber_data . $jenis_kelamin . $jalan . $dusun . $rt . $rw . $desa . $kecamatan . $jumlah_tabungan . $tabungan_perbulan . $jumlah_kk . $pekerjaan_utama . $jumlah_penghasilan . $range_penghasilan . $pendidikan_terakhir . $status_perkawinan . $status_fisik . $status_kepemilikan_tanah . $status_kepemilikan_rumah . $aset_rumah_lain . $aset_tanah_lain . $bantuan_lain . $nama_bantuan_lain . $jenis_kawasan_rumah;
		$query_responden		="UPDATE tabel_identitas_responden 
									SET nik_responden=$nik, nama_lengkap='$nama_lengkap',usia='$usia', no_telp='$no_telp', kordinat='$kordinat', sumber_data='$sumber_data', jenis_kelamin='$jenis_kelamin',
										jalan='$jalan', dusun='$dusun', rt='$rt', rw='$rw', desa='$desa', kecamatan='$kecamatan',
										jumlah_tabungan=$jumlah_tabungan, tabungan_perbulan='$tabungan_perbulan', jumlah_kk=$jumlah_kk, pekerjaan_utama='$pekerjaan_utama', jumlah_penghasilan='$jumlah_penghasilan', range_penghasilan='$range_penghasilan', 
										pendidikan_terakhir='$pendidikan_terakhir', status_perkawinan='$status_perkawinan', status_fisik='$status_fisik', status_kepemilikan_tanah='$status_kepemilikan_tanah', status_kepemilikan_rumah='$status_kepemilikan_rumah',aset_rumah_lain='$aset_rumah_lain',
										aset_tanah_lain='$aset_tanah_lain', bantuan_lain='$bantuan_lain', nama_bantuan_lain='$nama_bantuan_lain', jenis_kawasan_rumah='$jenis_kawasan_rumah' 
									WHERE nik_responden=$nik_lama";	
		$query_aspek			= "UPDATE tabel_aspek
									SET nik_aspek=$nik, luas_rumah=$luas_rumah, penghuni=$penghuni, kusen='$kusen', jendela='$jendela', pintu='$pintu', kamar_mandi='$kamar_mandi', saluran_air='$saluran_air', pembuangan='$pembuangan', 
										drainase='$drainase', tempat_sampah='$tempat_sampah', sumber_air_minum='$sumber_air_minum', jarak_air_minum='$jarak_air_minum', sumber_listrik='$sumber_listrik',
										material_atap='$material_atap', kondisi_atap='$kondisi_atap', material_dinding='$material_dinding', kondisi_dinding='$kondisi_dinding', material_lantai='$material_lantai', kondisi_penutup_lantai='$kondisi_penutup_lantai', struktur_lantai='$struktur_lantai', pondasi_material='$pondasi_material', pondasi_kondisi='$pondasi_kondisi', 
										sloof_material='$sloof_material', sloof_kondisi='$sloof_kondisi', material_kolom_ring='$material_kolom_ring', kondisi_kolom_ring='$kondisi_kolom_ring', material_rangka_atap='$material_rangka_atap', kondisi_rangka_atap='$kondisi_rangka_atap', proteksi_kebakaran='$proteksi_kebakaran', sarana_proteksi_kebakaran='$sarana_proteksi_kebakaran', prasarana_proteksi_kebakaran='$prasarana_proteksi_kebakaran'
									WHERE nik_aspek=$nik_lama";
		$query_waktu			= "UPDATE tabel_waktu
									SET	nik_waktu=$nik, tanggal_surve='$tanggal_surve'
									WHERE nik_waktu=$nik_lama";
		$query_responden_update	= "INSERT INTO  tabel_identitas_responden_update  ( id_identitas , nik_identitas  , nama_lengkap , no_telp , kordinat , sumber_data , jenis_kelamin , jalan , dusun , rt , rw , desa , kecamatan , jumlah_tabungan , tabungan_perbulan , jumlah_kk , pekerjaan_utama , jumlah_penghasilan , range_penghasilan , pendidikan_terakhir , status_perkawinan , status_fisik , status_kepemilikan_tanah , status_kepemilikan_rumah , aset_rumah_lain , aset_tanah_lain , bantuan_lain , nama_bantuan_lain , jenis_kawasan_rumah )
									VALUE ('','$nik','$nama_lengkap','$no_telp','$kordinat','$sumber_data','$jenis_kelamin','$jalan','$dusun','$rt','$rw','$desa','$kecamatan','$jumlah_tabungan','$tabungan_perbulan','$jumlah_kk','$pekerjaan_utama','$jumlah_penghasilan','$range_penghasilan','$pendidikan_terakhir','$status_perkawinan','$status_fisik','$status_kepemilikan_tanah','$status_kepemilikan_rumah','$aset_rumah_lain','$aset_tanah_lain','$bantuan_lain','$nama_bantuan_lain','$jenis_kawasan_rumah')";
		$query_aspek_update		= "INSERT INTO  tabel_aspek_update  ( id_aspek , nik_aspek  , luas_rumah , penghuni , kusen , jendela , pintu , kamar_mandi , saluran_air , pembuangan , drainase , tempat_sampah , sumber_air_minum , jarak_air_minum , sumber_listrik , material_atap , kondisi_atap , material_dinding , kondisi_dinding , material_lantai , kondisi_penutup_lantai , struktur_lantai , pondasi_material , pondasi_kondisi , sloof_material , sloof_kondisi , material_kolom_ring , kondisi_kolom_ring , material_rangka_atap , kondisi_rangka_atap , proteksi_kebakaran , sarana_proteksi_kebakaran , prasarana_proteksi_kebakaran )
									VALUES ('','$nik','$luas_rumah','$penghuni','$kusen','$jendela','$pintu','$kamar_mandi','$saluran_air','$pembuangan','$drainase','$tempat_sampah','$sumber_air_minum','$jarak_air_minum','$sumber_listrik','$material_atap','$kondisi_atap','$material_dinding','$kondisi_dinding','$material_lantai','$kondisi_penutup_lantai','$struktur_lantai','$pondasi_material','$pondasi_kondisi','$sloof_material','$sloof_kondisi','$material_kolom_ring','$kondisi_kolom_ring','$material_rangka_atap','$kondisi_rangka_atap','$proteksi_kebakaran','$sarana_proteksi_kebakaran','$prasarana_proteksi_kebakaran')";
		$query_waktu_update		= "INSERT INTO tabel_waktu_update (`id_waktu` ,`nik_waktu`,`tanggal_surve`) VALUES ('','$nik','$nik_awal','$tanggal_surve')";
		$hasil_responden 		= mysqli_query($koneksi, $query_responden);
		echo "responden" . mysqli_error($koneksi);
		$hasil_aspek	 		= mysqli_query($koneksi, $query_aspek);
		echo "responden" . mysqli_error($koneksi);
		$hasil_waktu	 		= mysqli_query($koneksi, $query_waktu);
		echo "responden" . mysqli_error($koneksi);
		// $hasil_responden_update = mysqli_query($koneksi, $query_responden_update);
		// $hasil_aspek_update 	= mysqli_query($koneksi, $query_aspek_update);
		// $hasil_waktu_update 	= mysqli_query($koneksi,$query_waktu_update);

		//validasi edit data
		// validasi edit foto
		if($tipe_file_ktp == "" || $tipe_file_ktp == "" && $tipe_file_rumah == "" || $tipe_file_rumah == ""){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
			if ($hasil_responden && $hasil_aspek && $hasil_waktu) {
				header("location:view.php");
				echo "<script>alert('Edit Data Berhasil');</script>";
			} else {
				echo "<script>alert('Edit Data Gagal, Coba Lagi');</script>";
				echo "kesalahan pada edit data";
			}
		}else{
			if($tipe_file_ktp == "image/jpeg" || $tipe_file_ktp == "image/png" && $tipe_file_rumah == "image/jpeg" || $tipe_file_rumah == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
				// Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
				if($ukuran_file_ktp <= 500000 && $ukuran_file_rumah <= 500000 ){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
					// Jika ukuran file kurang dari sama dengan 1MB, lakukan :
					// Proses upload
					if(move_uploaded_file($tmp_file_ktp, $path_ktp) && move_uploaded_file($tmp_file_rumah, $path_rumah) ){ // Cek apakah gambar berhasil diupload atau tidak
						// Cek apakah gambar berhasil diupload atau tidak
						// Jika gambar berhasil diupload, Lakukan :	
						// Proses simpan ke Database
						$query_ktp 		= "UPDATE tabel_foto_rumah 
											SET nama_ktp='$nama_file_ktp', ukuran='$ukuran_file_ktp', tipe='$tmp_file_ktp'
											WHERE nik_rumah=$nik_lama";
						$query_rumah 	= "UPDATE tabel_foto_rumah 
											SET nama_rumah='$nama_file_rumah', ukuran='$ukuran_file_rumah', tipe='$tmp_file_rumah' 
											WHERE nik_rumah=$nik_lama";
						$sql_ktp = mysqli_query($koneksi, $query_ktp); 
						$sql_rumah = mysqli_query($koneksi, $query_rumah); 
						
						if($sql_ktp && $sql_rumah && $hasil_responden && $hasil_aspek && $hasil_waktu){ 
							echo "<script>alert('Edit Data Berhasil');</script>";
							echo '<meta http-equiv="refresh" content="0;url=view.php" />';
						} else {
							echo "<script>alert('Edit Data Gagal, Coba Lagi');</script>";
						}
			
					}else{
					// Jika gambar gagal diupload, Lakukan :
					echo '<meta http-equiv="refresh" content="0;url=edit.php" />';
					echo "<script>alert('Foto gagal diupload');</script>";
					// echo "<br><a href='index.php'>Kembali Ke index</a>";
					}
				}else{
					// Jika ukuran file lebih dari 1MB, lakukan :
					echo '<meta http-equiv="refresh" content="0;url=edit.php" />';
					echo "<script>alert('Ukuran foto tidak boleh lebih dari 5mb');</script>";
				}
			}else{
			// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
			echo "<script>alert('Tipe Data Harus JPG/PNG');</script>";
			echo '<meta http-equiv="refresh" content="0;url=edit.php" />';
			}
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

	            <!-- Nav Item - Pages Collapse Menu -->
	            <!-- kasih class active apabila masuk -->
	            <li class="nav-item active">
	                <a class="nav-link" href="#">
	                    <i class="fas fa-fw fa-folder"></i>
	                    <span>Edit Data</span>
	                </a>
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
						<a href="view.php" class="btn btn-secondary btn-icon-split btn-sm" >
						<span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
						<span class="text">Kembali</span>
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
	                <!-- Content Row -->
			<div class="container-fluid">
				<!-- form input data -->
				<form action="edit.php" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
				<div class="form-group col-md-5">
					<!-- manipulasi variabel nama dan nik lama -->
					<input type="text" class="form-control" value="<?php echo $nik_update; ?>" name="nik_lama" hidden >
					</div> 
					<!-- identitas responden -->
					<div class="col-xl-12 col-lg-5">
						<!-- Button trigger modal -->
						
	                    <button type="button" class="btn btn-facebook btn-block" data-toggle="modal" data-target="#simpan">
	                        Simpan Data
	                    </button>
					</div><br>
					<!-- row 1 / responden-->
					<div class="row">
						<div class="col-xl-6 col-lg-5">
							<!-- kuisioner pengisian -->
							<div class="card shadow mb-4">
								<!-- Card Header-->
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Edit Identitas Responden</h6>
								</div>
								<!-- isi kuisioner -->
								<div class="card-body">

									<div class="form-row">
										<div class="form-group col-md-5">
											<label>Nama Lengkap</label>
											<input type="text" class="form-control" value="<?php echo $edit_nama_lengkap;?>" name="ganti_nama" >
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-4">
											<label>NIK</label>
											<input type="text" class="form-control" value=<?php echo $edit_nik_responden; ?> name="nik" maxlength="16" >
											
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-3">
											<label>Gender</label>
											<select class="form-control" name="jenis_kelamin" >
											<?php
													sort($jenis_kelamin);
													foreach($jenis_kelamin as $key => $value){
														if($value['name'] == $edit_jenis_kelamin ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
													?>
											</select>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-5">
											<label>Nomer Telp.</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">+62</span>
												<input type="text" class="form-control" value="<?php echo $edit_no_telp; ?>" name="no_telp" maxlength="12" >
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-4">
											<label>Koordinat Rumah</label>
											<input type="text" class="form-control" value="<?php echo $edit_kordinat; ?>" name="kordinat">
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-3">
											<label>Sumber Data</label>
											<select class="form-control" name="sumber_data" >
											<?php
													sort($sumber_data);
													foreach($sumber_data as $key => $value){
														if($value['name'] == $edit_sumber_data ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
											?>
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
											<h6 class="m-0 font-weight-bold text-primary">Edit Upload Foto</h6>
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
													<input type="file" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp" name='ktp' > 
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
													<input type="file" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp" name='rumah' > 
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
									<h6 class="m-0 font-weight-bold text-primary">Edit Identitas Responden</h6>
								</div>
								<!-- isi kuisioner -->
								<div class="card-body">

									<div class="form-row">
									<div class="form-group col-md-1">
											<label>Usia</label>
											<input type="number" class="form-control" value="<?php echo $edit_usia; ?>" name="usia" >
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-4">
											<label>Alamat</label>
											<input type="text" class="form-control" value="<?php echo $edit_jalan; ?>" name="jalan" >
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-3">
											<label>Dusun</label>
											<select class="form-control" name="dusun" >
													<?php
													sort($dusun);
													foreach($dusun as $key => $value){
														if($value['name'] == $edit_dusun ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
													?>
												
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
												<select class="form-control" name="rt" >
												<?php
													sort($rt);
													foreach($rt as $key => $value){
														if($value['name'] == $edit_rt ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>

												</select>
												<div class="input-group-prepend">
													<span class="input-group-text" id="">RW</span>
												</div>
												<select class="form-control" name="rw" >
												<?php
													sort($rw);
													foreach($rw as $key => $value){
														if($value['name'] == $edit_rw ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>

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
									<h6 class="m-0 font-weight-bold text-primary">Edit Detail Responden</h6>
								</div>
								<!-- isi kuisioner -->
								<div class="card-body">

									<div class="form-row">
										<div class="form-group col-md-2">
											<label>Jumlah Tabungan</label>
											<div class="input-group-prepend">
												<span class="input-group-text">Rp.</span>
												<input type="number" class="form-control" value="<?php echo $edit_jumlah_tabungan?>" name="jumlah_tabungan" >
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Tabungan Perbulan</label>
											<div class="input-group-prepend">
												<select class="form-control" name="tabungan_perbulan" >
												<?php
													sort($tabungan_perbulan);
													foreach($tabungan_perbulan as $key => $value){
														if($value['name'] == $edit_tabungan_perbulan ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Jml KK dalam 1 rumah</label>
											<div class="input-group-prerend">
												<input type="number" class="form-control" value="<?php echo $edit_jumlah_kk?>" name="jumlah_kk" placeholder="1">
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Pekerjaan Utama</label>
											<div class="input-group-prepend">
												<select class="form-control" name="pekerjaan_utama" >
												<?php
													sort($pekerjaan_utama);
													foreach($pekerjaan_utama as $key => $value){
														if($value['name'] == $edit_pekerjaan_utama ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>

												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Range Penghasilan</label>
											<div class="input-group-prepend">
												<select class="form-control" name="range_penghasilan" >
												<?php
													sort($range_penghasilan);
													foreach($range_penghasilan as $key => $value){
														if($value['name'] == $edit_range_penghasilan ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>

												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-groub col-md-2">
											<label>Jumlah Penghasilan</label>
											<div class="input-group-prepend">
												<span class="input-group-text">Rp.</span>
												<input type="number" class="form-control" name="jumlah_penghasilan" value="<?php echo $edit_jumlah_penghasilan?>" >
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Pendidikan Terakhir</label>
											<div class="input-group-prepend">
												<select class="form-control" name="pendidikan_terakhir" >
												<?php
													sort($pendidikan_terakhir);
													foreach($pendidikan_terakhir as $key => $value){
														if($value['name'] == $edit_pendidikan_terakhir ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Status Perkawinan</label>
											<div class="input-group-prepend">
												<select class="form-control" name="status_perkawinan" >
												<?php
													sort($status_perkawinan);
													foreach($status_perkawinan as $key => $value){
														if($value['name'] == $edit_status_perkawinan ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>

												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Status Fisik</label>
											<div class="input-group-prepend">
												<select class="form-control" name="status_fisik" >
												<?php
													sort($status_fisik);
													foreach($status_fisik as $key => $value){
														if($value['name'] == $edit_status_fisik ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>

												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Kepemilikan Tanah</label>
											<div class="input-group-prepend">
												<select class="form-control" name="status_kepemilikan_tanah" >
												<?php
													sort($kepemilikan_tanah);
													foreach($kepemilikan_tanah as $key => $value){
														if($value['name'] == $edit_status_kepemilikan_tanah ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>

												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Kepemilikan Rumah</label>
											<div class="input-group-prepend">
												<select class="form-control" name="status_kepemilikan_rumah" >
												<?php
													sort($kepemilikan_rumah);
													foreach($kepemilikan_rumah as $key => $value){
														if($value['name'] == $edit_status_kepemilikan_rumah ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Aset Rumah Lain</label>
											<div class="input-group-prepend">
												<select class="form-control" name="aset_rumah_lain" >
												<?php
													sort($aset_rumah_lain);
													foreach($aset_rumah_lain as $key => $value){
														if($value['name'] == $edit_aset_rumah_lain ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-2">
											<label>Aset Tanah Lain</label>
											<div class="input-group-prepend">
												<select class="form-control" name="aset_tanah_lain" >
												<?php
													sort($aset_tanah_lain);
													foreach($aset_tanah_lain as $key => $value){
														if($value['name'] == $edit_aset_tanah_lain ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-3">
											<label>Pernah Dapat bantuan Lain</label>
											<div class="input-group-prepend">
												<select class="form-control" name="bantuan_lain" id="bantuan" >
												<?php
													sort($bantuan_lain);
													foreach($bantuan_lain as $key => $value){
														if($value['name'] == $edit_bantuan_lain ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-3">
											<label>Nama bantuan Lain</label>
											<div class="input-group-prepend">
												<input type="text" class="form-control" name="nama_bantuan_lain" id="nama_bantuan" value="<?php echo $edit_nama_bantuan_lain?>" >
												</select>
												<div class="invalid-feedback">Data harus diisi.</div>
											</div>
										</div>
										<div class="form-group col-md-4">
											<label>Jenis Kawasan Rumah</label>
											<div class="input-group-prepend">
												<select class="form-control" name="jenis_kawasan_rumah" >
												<?php
													sort($jenis_kawasan_rumah);
													foreach($jenis_kawasan_rumah as $key => $value){
														if($value['name'] == $edit_jenis_kawasan_rumah ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
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
									<h6 class="m-0 font-weight-bold text-primary">Edit Aspek Keselamatan</h6>
								</div>
								<!-- isi kuisioner -->
								<div class="card-body">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>Material Pondasi</label>
											<select class="form-control" name="pondasi_material" >
												<?php
													sort($material_pondasi);
													foreach($material_pondasi as $key => $value){
														if($value['name'] == $edit_pondasi_material ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-6">
											<label>Kondisi Pondasi</label>
											<select class="form-control" name="pondasi_kondisi" >
												<?php
													sort($kondisi_pondasi);
													foreach($kondisi_pondasi as $key => $value){
														if($value['name'] == $edit_pondasi_kondisi ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-6">
											<label>Material Sloof</label>
											<select class="form-control" name="sloof_material" >
												<?php
													sort($material_sloof);
													foreach($material_sloof as $key => $value){
														if($value['name'] == $edit_sloof_material ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-6">
											<label>Kondisi Sloof</label>
											<select class="form-control" name="sloof_kondisi" >
												<?php
													sort($kondisi_sloof);
													foreach($kondisi_sloof as $key => $value){
														if($value['name'] == $edit_sloof_kondisi ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-6">
											<label>Material Kolom Dan Ring Balok</label>
											<select class="form-control" name="material_kolom_ring" >
												<?php
													sort($material_kolom);
													foreach($material_kolom as $key => $value){
														if($value['name'] == $edit_material_kolom_ring){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-6">
											<label>Kondisi Kolom Dan Ring Balok</label>
											<select class="form-control" name="kondisi_kolom_ring" >
												<?php
													sort($kondisi_kolom);
													foreach($kondisi_kolom as $key => $value){
														if($value['name'] == $edit_kondisi_kolom_ring ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-6">
											<label>Material Rangka Atap</label>
											<select class="form-control" name="material_rangka_atap" >
												<?php
													sort($material_rangka_atap);
													foreach($material_rangka_atap as $key => $value){
														if($value['name'] == $edit_material_rangka_atap ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-6">
											<label>Kondisi Rangka Atap</label>
											<select class="form-control" name="kondisi_rangka_atap" >
												<?php
													sort($kondisi_rangka_atap);
													foreach($kondisi_rangka_atap as $key => $value){
														if($value['name'] == $edit_kondisi_rangka_atap ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-4">
											<label>Proteksi Kebakaran</label>
											<select class="form-control" name="proteksi_kebakaran" id="pilihan" >
												<?php
													sort($proteksi_kebakaran);
													foreach($proteksi_kebakaran as $key => $value){
														if($value['name'] == $edit_proteksi_kebakaran ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-4">
											<label>Sarana Proteksi</label>
											<select class="form-control" name="sarana_proteksi_kebakaran" id="lanjut-1" >
												<?php
													sort($sarana_proteksi_kebakaran);
													foreach($sarana_proteksi_kebakaran as $key => $value){
														if($value['name'] == $edit_sarana_proteksi_kebakaran ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-4">
											<label>Prasarana Proteksi</label>
											<select class="form-control" name="prasarana_proteksi_kebakaran" id="lanjut-2" >
												<?php
												sort($prasarana_proteksi_kebakaran);
												foreach($prasarana_proteksi_kebakaran as $key => $value){
													if($value['name'] == $edit_prasarana_proteksi_kebakaran){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
													}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
													}
												}
												?>
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
									<h6 class="m-0 font-weight-bold text-primary">Edit Aspek Kesehatan</h6>
								</div>
								<!-- isi kuisioner -->
								<div class="card-body">
									<div class="form-row">
										<div class="form-group col-md-1">
											<label>Kusen</label>
											<select class="form-control" name="kusen" >
												<?php
													sort($kusen);
													foreach($kusen as $key => $value){
														if($value['name'] == $edit_kusen ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-2">
											<label>Jendela Dan Ventilasi</label>
											<select class="form-control" name="jendela" >
												<?php
													sort($jendela);
													foreach($jendela as $key => $value){
														if($value['name'] == $edit_jendela ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-2">
											<label>Daun Pintu</label>
											<select class="form-control" name="pintu" >
												<?php
													sort($daun_pintu);
													foreach($daun_pintu as $key => $value){
														if($value['name'] == $edit_daun_pintu ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-2">
											<label>Kamar Mandi</label>
											<select class="form-control" name="kamar_mandi" >
												<?php
													sort($kamar_mandi);
													foreach($kamar_mandi as $key => $value){
														if($value['name'] == $edit_kamar_mandi ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-2">
											<label>Saluran Air Kotor</label>
											<select class="form-control" name="saluran_air" >
												<?php
													sort($saluran_air_kotor);
													foreach($saluran_air_kotor as $key => $value){
														if($value['name'] == $edit_saluran_air ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-3">
											<label>Pembuangan Akhir Tinja</label>
											<select class="form-control" name="pembuangan" >
												<?php
													sort($pembuangan_akhir);
													foreach($pembuangan_akhir as $key => $value){
														if($value['name'] == $edit_pembuangan ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-2">
											<label>Drainase</label>
											<select class="form-control" name="drainase" >
												<?php
													sort($drainase);
													foreach($drainase as $key => $value){
														if($value['name'] == $edit_drainase ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-2">
											<label>Tempat Sampah</label>
											<select class="form-control" name="tempat_sampah" >
												<?php
													sort($tempat_sampah);
													foreach($tempat_sampah as $key => $value){
														if($value['name'] == $edit_tempat_sampah ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-2">
											<label>Sumber Air Minum</label>
											<select class="form-control" name="sumber_air_minum" >
												<?php
													sort($sumber_air_minum);
													foreach($sumber_air_minum as $key => $value){
														if($value['name'] == $edit_sumber_air_minum ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
											<div class="invalid-feedback">Data harus diisi.</div>
										</div>
										<div class="form-group col-md-3">
											<label>Jarak Sumber Air Minum</label>
											<select class="form-control" name="jarak_air_minum" >
												<?php
													sort($jarak_sumber_air_minum);
													foreach($jarak_sumber_air_minum as $key => $value){
														if($value['name'] == $edit_jarak_air_minum ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
											</select>
									</div>
									<div class="form-group col-md-3">
										<label>Sumber Listrik</label>
										<select class="form-control" name="sumber_listrik" >
												<?php
													sort($sumber_listrik);
													foreach($sumber_listrik as $key => $value){
														if($value['name'] == $edit_sumber_listrik ){
														printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
														}else{
														printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
														}
													}
												?>
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
	                                <h6 class="m-0 font-weight-bold text-primary">Edit Aspek Persyaratan Luas & Kebutuhan Rumah</h6>
	                            </div>
	                            <!-- isi kuisioner -->
	                            <div class="card-body">
	                                <div class="form-row">
	                                    <div class="form-group col-md-6	">
	                                        <label>Luas Rumah</label>
	                                        <div class="input-group-prepend">
	                                            <span class="input-group-text">M<sup>2</sup></span>
	                                            <input type="number" name="luas_rumah" value="<?php echo $edit_luas_rumah?>" class="form-control" >
	                                            <div class="invalid-feedback">Data harus diisi.</div>
	                                        </div>
	                                    </div>
	                                    <div class="form-group col-md-6	">
	                                        <label>Jumlah Penghuni Rumah</label>
	                                        <input type="number" name="penghuni" value="<?php echo $edit_jumlah_penghuni?>" class="form-control" >
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
	                                <h6 class="m-0 font-weight-bold text-primary">Edit Aspek Komponen Bahan Bangunan Sesuai Konteks Lokal</h6>
	                            </div>
	                            <!-- isi kuisioner -->
	                            <div class="card-body">
	                                <div class="form-row">
	                                    <div class="form-group col-md-6">
	                                        <label>Material Penutup Atap</label>
	                                        <select class="form-control" name="material_atap" >
                                                <?php
                                                    sort($material_atap);
                                                    foreach($material_atap as $key => $value){
                                                        if($value['name'] == $edit_material_atap ){
                                                        printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
                                                        }else{
                                                        printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
                                                        }
                                                    }
                                                ?>
	                                        </select>
	                                        <div class="invalid-feedback">Data harus diisi.</div>
	                                    </div>
	                                    <div class="form-group col-md-6">
	                                        <label>Kondisi Penutup Atap</label>
	                                        <select class="form-control" name="kondisi_atap" >
                                                <?php
                                                    sort($kondisi_atap);
                                                    foreach($kondisi_atap as $key => $value){
                                                        if($value['name'] == $edit_kondisi_atap ){
                                                        printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
                                                        }else{
                                                        printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
                                                        }
                                                    }
                                                ?>
	                                        </select>
	                                        <div class="invalid-feedback">Data harus diisi.</div>
	                                    </div>
	                                    <div class="form-group col-md-6">
	                                        <label>Material Dinding Pengisi</label>
	                                        <select class="form-control" name="material_dinding" >
                                            <?php
                                                sort($material_dinding);
                                                foreach($material_dinding as $key => $value){
                                                    if($value['name'] == $edit_material_dinding ){
                                                    printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
                                                    }else{
                                                    printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
                                                    }
                                                }
                                            ?>
	                                        </select>
	                                        <div class="invalid-feedback">Data harus diisi.</div>
	                                    </div>
	                                    <div class="form-group col-md-6">
	                                        <label>Kondisi Dinding Pengisi</label>
	                                        <select class="form-control" name="kondisi_dinding" >
                                            <?php
                                                sort($kondisi_dinding);
                                                foreach($kondisi_dinding as $key => $value){
                                                    if($value['name'] == $edit_kondisi_dinding ){
                                                    printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
                                                    }else{
                                                    printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
                                                    }
                                                }
                                            ?>
                                            </select>
	                                        <div class="invalid-feedback">Data harus diisi.</div>
	                                    </div>
	                                    <div class="form-group col-md-4">
	                                        <label>Material Penutup Lantai</label>
	                                        <select class="form-control" name="material_lantai" >
                                            <?php
                                                sort($material_lantai);
                                                foreach($material_lantai as $key => $value){
                                                    if($value['name'] == $edit_material_lantai ){
                                                    printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
                                                    }else{
                                                    printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
                                                    }
                                                }
                                            ?>	                                        
                                            </select>
	                                        <div class="invalid-feedback">Data harus diisi.</div>
	                                    </div>
	                                    <div class="form-group col-md-4">
	                                        <label>Kondisi Penutup Lantai</label>
	                                        <select class="form-control" name="kondisi_penutup_lantai" >
                                            <?php
                                                sort($kondisi_lantai);
                                                foreach($kondisi_lantai as $key => $value){
                                                    if($value['name'] == $edit_kondisi_penutup_lantai ){
                                                    printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
                                                    }else{
                                                    printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
                                                    }
                                                }
                                            ?>	                                        
	                                        </select>
	                                        <div class="invalid-feedback">Data harus diisi.</div>
	                                    </div>
	                                    <div class="form-group col-md-4">
	                                        <label>Struktur Bawah Lantai</label>
	                                        <select class="form-control" name="struktur_lantai" >
                                            <?php
                                                sort($struktur_lantai);
                                                foreach($struktur_lantai as $key => $value){
                                                    if($value['name'] == $edit_struktur_lantai ){
                                                    printf('<option value="' . $value['name'] . '" selected=\"selected\">%s</option>',$value['name']);
                                                    }else{
                                                    printf('<option value="' . $value['name'] . '">%s</option>',$value['name']);
                                                    }
                                                }
                                            ?>	                                        
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
	                <div class="col-xl-12 col-lg-5">
						<!-- Button trigger modal -->
						
	                    <button type="button" class="btn btn-facebook btn-block" data-toggle="modal" data-target="#simpan">
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
			});

		</script>
	
		<script type="text/javascript">
			$(window).load(function(){
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

	</body>
	</html>