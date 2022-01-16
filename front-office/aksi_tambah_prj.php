<?php
 
include '../konfig.php';
extract($_POST);
$koneksi->query("insert into tbl_prj values(null,'$id_dokter','$id_pasien', '$departemen', curtime(), '$keluhan', null, '$biaya', '$bayar', null)");
echo "<div class='alert alert-info'>Data Berhasil Ditambah</div>";

