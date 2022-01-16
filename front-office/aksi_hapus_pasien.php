<?php

include 'konfig.php';
$id_pasien = $_GET['id_pasien'];
$koneksi->query("delete from tbl_pasien where id_pasien='$id_pasien'");
echo "<div class='alert alert-info'>Data Berhasil Dihapus</div>";
echo "<meta http-equiv='refresh' content='1;url=front-office.php?view=tampil-pasien'>";
