<?php
	include '../koneksi.php';
        $id             = $_POST['id'];
        echo $id;
        $edit_nama		= $_POST['nama']; 
        echo $edit_nama;
        $edit_alamat	= $_POST['alamat'];
        echo $edit_alamat;
        $edit_rt		= $_POST['rt'];
        echo $edit_rt;
        $edit_rw		= $_POST['rw'];
        echo $edit_rw;
        $edit_usia		= $_POST['usia'];
        echo $edit_usia;
        $edit_email		= $_POST['email'];
        echo $edit_email;
        $edit_kelamin	= $_POST['kelamin'];
        echo $edit_kelamin;
        $edit_nip		= $_POST['nip'];
        echo $edit_nip;
        $edit_no_telp	= $_POST['telp'];
        echo $edit_no_telp;


        $query_update = "UPDATE tabel_profile_user 
                        SET nama='$edit_nama', alamat='$edit_alamat', rt='$edit_rt', rw='$edit_rw', usia='$edit_usia', email='$edit_email', jk='$edit_kelamin', nip='$edit_nip', no_telp='$edit_no_telp'
                        WHERE id_profile=$id";
		$hasil_update	= mysqli_query($koneksi,$query_update);
		echo mysqli_error($hasil_update);

		if($hasil_update){
            echo "<script>alert('Edit Data Berhasil');</script>";
			header("location:akun_user.php");
		}else{
            echo "<script>alert('Edit Data Gagal');</script>";
			header("location:akun_user.php");
		}


	?>