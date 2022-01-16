<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../konfig.php';
extract($_POST); 
$koneksi->query("update tbl_resep set nama_resep = '$nama_resep', rincian_resep = '$rincian_resep' where id_resep='$id_resep' ");
echo "<script>alert('Data Berhasil diubah');</script>";
echo "<script>location.href = '../dokter.php?view=tampil-resep';</script>";
