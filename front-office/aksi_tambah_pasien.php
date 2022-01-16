<?php

if (isset($_POST['simpan']))  
{
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telepon = $_POST['no_telepon'];
    $koneksi->query("insert into tbl_pasien values(null,'$nama','$alamat', '$jenis_kelamin', '$no_telepon') ");
    echo "<div class='alert alert-info'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=front-office.php?view=tampil-pasien'>";
}