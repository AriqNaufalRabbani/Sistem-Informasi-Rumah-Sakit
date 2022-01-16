<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
include '../konfig.php';
extract($_POST);
$cek_id_dokter = $koneksi->query("select id_user, nama_dokter from tbl_dokter where nama_dokter = '".$_SESSION['grup']."'");
$dokter = $cek_id_dokter->fetch_assoc();

$result = $koneksi->query("insert into tbl_resep values(null,'".$dokter['id_user']."','$id_pasien','$nama_resep', '$rincian_resep', null)");
header("location:../dokter.php?view=tampil-resep");
