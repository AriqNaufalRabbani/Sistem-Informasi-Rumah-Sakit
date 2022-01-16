 <div align="center" style="padding-top: 20px;">
    <h1><label class="label label-success">Data User</label></h1>
    <br>
    <button class="btn btn-primary btn-large" data-toggle="modal" data-target="#tambahModal">
        <i class="glyphicon glyphicon-plus-sign"></i> Tambah Data User
    </button>
</div>
<br>
<table id="datatable" class="display stripe">
    <thead>
    <th>No</th>
    <th>Username</th>
    <th>Password</th>
    <th>Hak Akses</th>
    <th>Grup</th>
    <th>Aksi</th>
</thead>
<tbody>
    <?php
    $result = $koneksi->query("SELECT * FROM tbl_user order by id_user desc");

    if ($result->num_rows) {
        //echo"ada isinya";
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $no; ?> </td>
                <td><?php echo $row['username']; ?> </td>
                <td><?php echo $row['password']; ?> </td>
                <td><?php echo $row['hak_akses']; ?> </td>
                <td><?php echo $row['grup']; ?> </td>
                <td><?php echo "<a class='btn btn-info btn-sm' href='front-office.php?view=tampil-ubah-pasien&id_pasien=" . $row['id_user'] . "'><i class='glyphicon glyphicon-edit'></i></a> |
                    <a class='btn btn-danger btn-sm' href='front-office.php?view=hapus-pasien&id_pasien=" . $row['id_user'] . "' onclick='return confirm(&quot;Apakah anda yakin akan menghapus data pasien tersebut?&quot;)'><i class='glyphicon glyphicon-trash'></i></a>";
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
<th>Username</th>
<th>Password</th>
<th>Hak Akses</th>
<th>Grup</th>
<th>Aksi</th></tfoot>
</table>

<!---------------------------- tambah ------------------------->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Tambah User Baru</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="front-office.php?view=tambah-pasien">

                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="text" name="user" placeholder="Username" class="form-control input-lg" required autofocus  />
                    </div>

                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="fa fa-keyboard-o"></i>
                        </span>
                        <input type="text" name="pass" placeholder="Password" class="form-control input-lg" required autofocus  />
                    </div>
                    
                    <div class="input-group input-lg ">

                        <span class="input-group-addon">
                            <i class="fa fa-hospital-o fa-lg"></i>
                        </span>
                        <select name='hakakses' id='hakakses' class="form-control input-lg">
                            <option value=''>Pilih Hak Akses</option>
                            <option value="Admin">Admin</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Front Office">Front Office</option>
                            <option value="Departemen">Departemen</option>
                        </select>
                    </div>

                    <div class="input-group input-lg ">

                        <span class="input-group-addon">
                            <i class="fa fa-hospital-o fa-lg"></i>
                        </span>
                        <select name='grup' id='grup' class="form-control input-lg">
                            <option value=''>Pilih Grup</option>
                            <?php if ($_POST['hakakses'] = "Departemen"){ ?>
                            	<option value="Departemen Kandungan">Departemen Kandungan</option>
                            	<option value="Departemen Anak">Departemen Anak</option>
                            	<option value="Departemen Gigi">Departemen Gigi</option>
                            	<option value="Departemen Gigi">Departemen THT</option>
                            	<option value="Departemen Syaraf">Departemen Syaraf</option>
                            	<option value="Departemen Kulit dan Kelamin">Departemen Kulit dan Kelamin</option>
                            <?php } elseif ($_POST['hakakses'] = "Dokter") { ?>
                            	<option value="Departemen Kandungan">Dokter Kandungan</option>
                            	<option value="Departemen Anak">Departemen Anak</option>
                            	<option value="Departemen Gigi">Departemen Gigi</option>
                            	<option value="Departemen Syaraf">Departemen Syaraf</option>
                            	<option value="Departemen Kulit dan Kelamin">Departemen Kulit dan Kelamin</option>
                            <?php }?>
                            	
                        </select>
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

