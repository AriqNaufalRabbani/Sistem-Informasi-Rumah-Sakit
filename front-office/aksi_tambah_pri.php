<?php

include '../konfig.php';
extract($_POST);
$koneksi->query("insert into tbl_pri values(null,'$id_pasien', '$id_ruang', '$tanggal_checkin', '$tanggal_checkout', '$hari_menginap', '$diagnosa', '$biaya', '$bayar')");
echo "<div class='alert alert-info'>Data Berhasil Ditambah</div>"; 
