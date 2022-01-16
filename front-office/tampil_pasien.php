<div align="center" style="padding-top: 20px;">
    <h1><label class="label label-success">Data Pasien Terdaftar</label></h1>
    <br>
    <button class="btn btn-primary btn-large" data-toggle="modal" data-target="#tambahModal">
        <i class="glyphicon glyphicon-plus-sign"></i> Tambah Data Pasien
    </button>
</div>
<br>
<table id="datatable" class="display stripe">
    <thead>
    <th>No</th>
    <th>ID Pasien</th>
    <th>Nama Pasien</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Telepon</th>
    <th>Aksi</th>
</thead>
<tbody>
    <?php
    $result = $koneksi->query("SELECT * FROM tbl_pasien order by id_pasien desc");

    if ($result->num_rows) {
        //echo"ada isinya";
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $no; ?> </td>
                <td><?php echo $row['id_pasien']; ?> </td>
                <td><?php echo $row['nama_pasien']; ?> </td>
                <td><?php echo $row['jenis_kelamin']; ?> </td>
                <td><?php echo $row['alamat']; ?> </td>
                <td><?php echo $row['no_telepon']; ?> </td>
                <td><?php echo "<a class='btn btn-info btn-sm' href='front-office.php?view=tampil-ubah-pasien&id_pasien=" . $row['id_pasien'] . "'><i class='glyphicon glyphicon-edit'></i></a> |
                    <a class='btn btn-danger btn-sm' href='front-office.php?view=hapus-pasien&id_pasien=" . $row['id_pasien'] . "' onclick='return confirm(&quot;Apakah anda yakin akan menghapus data pasien tersebut?&quot;)'><i class='glyphicon glyphicon-trash'></i></a>";
            ?></td>
        </tr>
        <?php
        $no ++;
    }
} else {
    echo"kosong";
}
?>
</tbody>
<tfoot><th>No</th>
<th>ID Pasien</th>
<th>Nama Pasien</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>Telepon</th>
<th>Aksi</th></tfoot>
</table>

<!---------------------------- tambah ------------------------->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Biodata Pasien Baru</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="front-office.php?view=tambah-pasien">

                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="text" name="nama" placeholder="Nama Pasien" class="form-control input-lg" required autofocus  />
                    </div>
                    <div class="input-group input-lg ">

                        <span class="input-group-addon">

                                <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-danger">
                                    <input type="radio" id="laki_laki" name="jenis_kelamin" value="L" required><h4>Laki-Laki</h4>
                                </label>
                                <label class="btn btn-info">
                                       <input type="radio" id="perempuan" name="jenis_kelamin" value="P" required><h4>Perempuan</h4>
                                </label>
                                </div>

                        </span>

                    </div>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <input type="text" name="alamat" value="" placeholder="Alamat" class="form-control input-lg" required />
                    </div>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-phone"></i>
                        </span>
                        <input type="text" name="no_telepon" value="" placeholder="Nomor Telepon" class="form-control input-lg" required />
                    </div>

            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-inverse"><i class="glyphicon glyphicon-refresh"></i> Reset </button>
                <button type="submit" class="btn btn-primary" name="simpan"><i class="glyphicon glyphicon-floppy-disk"></i>  Simpan </button>

            </div>
        </form>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal -->

