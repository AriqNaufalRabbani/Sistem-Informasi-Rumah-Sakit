<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'konfig.php';
$id = $_GET['no_ri'];
$koneksi->query("delete from tbl_pri where no_ri='$id' ");
?>
<script type="text/javascript">
location.href = 'front-office.php?view=tampil-pri';
</script>
