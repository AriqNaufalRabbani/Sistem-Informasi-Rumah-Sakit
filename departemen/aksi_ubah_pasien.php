<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
extract($_POST);
$koneksi->query("update tbl_prj set id_dokter = '$nama_dokter' where no_rj='$no_rj' ");
header("location:../departemen.php?view=tampil-pasien");
