<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../konfig.php';
$id = $_GET['id_resep'];
$koneksi->query("delete from tbl_resep where id_resep='$id' ");
?>
<script type="text/javascript">
location.href = 'front-office.php?view=tampil-resep';
</script>

