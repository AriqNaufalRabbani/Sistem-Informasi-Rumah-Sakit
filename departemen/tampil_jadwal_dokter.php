<div align="center" style="padding-top: 20px;">
    <h1><label class="label label-success">Jadwal Dokter</label></h1>
</div>
<table id="datatable" class="stripe">
    <thead>
    <th></th>
    <th>Nama Dokter</th>
    <th>Jadwal Praktik</th> 
</thead>
<tbody>
    <?php
    $result = $koneksi->query("SELECT * from tbl_dokter where departemen = '" . $_SESSION['grup'] . "'");

    if ($result->num_rows) {
        //echo"ada isinya";
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><img src="images/dokter/<?php echo $row['id_user']; ?>.png" ></td>
                <td><h2><label class="label label-info"><?php echo $row['nama_dokter']; ?></label></h2> </td>
                <td><?php echo $row['jadwal_praktik']; ?> </td>

            </tr>
            <?php
        }
    } else {
        echo"kosong";
    }
    ?>
</tbody>
<tfoot>
    <th></th>
    <th>Nama Dokter</th>
    <th>Jadwal Praktik</th>
</tfoot>
</table>
