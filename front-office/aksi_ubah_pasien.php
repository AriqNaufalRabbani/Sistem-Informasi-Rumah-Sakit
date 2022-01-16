<?php

include 'konfig.php'; 
extract($_POST);
$koneksi->query("update tbl_pasien set nama_pasien='$nama', alamat='$alamat', jenis_kelamin = '$jenis_kelamin', no_telepon = '$no_telepon' where id_pasien='$id_pasien' ");
echo "<div class='alert alert-info'>Data Berhasil Diubah</div>";
echo "<meta http-equiv='refresh' content='1;url=front-office.php?view=tampil-pasien'>";

