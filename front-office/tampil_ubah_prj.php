<?php
if (isset($_GET)) {
    include 'konfig.php'; 
    $id_ubah = $_GET['no_rj'];
    $result = $koneksi->query("SELECT * FROM tbl_prj, tbl_pasien where "
            . "tbl_prj.id_pasien = tbl_pasien.id_pasien and "
            . "no_rj = '$id_ubah'");
    if ($result->num_rows) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <i class="glyphicon glyphicon-edit"></i> Ubah Pasien Rawat Jalan</h4>
            </div>
            <div class="modal-body">
                <form name="edit_prj" id="edit_prj" method="POST" action="front-office/aksi_ubah_prj.php">
                    <input type="hidden" name="no_rj" value="<?php echo $id_ubah; ?>"/>

                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="hidden" value="<?php echo $row['id_pasien']; ?>" name="id_pasien" id="id_pasien_hidden" />
                        <input type="text" value="<?php echo $row['nama_pasien']; ?>" name="search" class="search form-control input-lg" id="searchid" placeholder="Masukan ID / Nama Pasien" required autofocus />

                        <div id="result"></div>

                    </div>

                    <div class="input-group input-lg ">

                        <span class="input-group-addon">
                            <i class="fa fa-hospital-o fa-lg"></i>
                        </span>
                        <select name="departemen" id="departemen" class="form-control input-lg">
                            <option value=''>Pilih Departemen</option>
                            <?php
                            $result2 = $koneksi->query("SELECT distinct departemen from tbl_dokter");
                            if ($result2->num_rows) {
                                while ($row2 = $result2->fetch_assoc()) {
                                    echo '<option ';
                                    if ($row['departemen'] == $row2['departemen']) {
                                        echo 'selected';
                                    }
                                    echo '>' . $row2['departemen'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-question-sign"></i>
                        </span>
                        <input type="text" name="keluhan" value="<?php echo $row['keluhan']; ?>" placeholder="Keluhan" class="form-control input-lg" required />
                    </div>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">Rp</span>
                        <input type="text" id="biaya" value="<?php echo $row['biaya']; ?>" name="biaya" placeholder="Biaya" class="form-control input-lg" value="" readonly required />
                        <span class="input-group-addon">,-</span>
                    </div>
                    <div class="input-group input-lg">
                        <span class="input-group-addon">Rp</span>
                        <input type="text" name="bayar" value="<?php echo $row['bayar']; ?>" placeholder="Bayar" class="form-control input-lg" value="" required />
                        <span class="input-group-addon">,-</span>
                    </div>
                    <div align="center">
                        <button type="reset" class="btn btn-inverse btn-lg"><i class="glyphicon glyphicon-refresh"></i> Reset </button>
                        <button type="submit" class="btn btn-primary btn-lg" id="submit"><i class="glyphicon glyphicon-floppy-disk"></i>  Simpan </button>
                    </div>
                </form>
            </div>

            <script type="text/javascript">
                $(function() {
                    $(".search").keyup(function()
                    {
                        var searchid = $(this).val();
                        var dataString = 'search=' + searchid;
                        if (searchid != '')
                        {
                            $.ajax({
                                type: "POST",
                                url: "front-office/cari-pasien.php",
                                data: dataString,
                                cache: false,
                                success: function(html)
                                {
                                    $("#result").html(html).show();
                                }
                            });
                        }
                        return false;
                    });

                    jQuery("#result").live("click", function(e) {
                        var $clicked = $(e.target);
                        var $id = $clicked.find('.id').html();
                        var $nama = $clicked.find('.nama').html();
                        var dec_id = $("<div/>").html($id).text();
                        var dec_nama = $("<div/>").html($nama).text();
                        $('#id_pasien_hidden').val(dec_id);
                        $('#searchid').val(dec_nama);
                    });
                    jQuery(document).live("click", function(e) {
                        var $clicked = $(e.target);
                        if (!$clicked.hasClass("search")) {
                            jQuery("#result").fadeOut();
                        }
                    });
                    $('#searchid').click(function() {
                        jQuery("#result").fadeIn();
                    });
                });
            </script>

            <script type="text/javascript" language="javascript">
                $(document).ready(function() {
                    $("#departemen").change(function(event) {
                        var selectvalue = $(this).val();
                        $.ajax({
                            url: 'front-office/aksi_lihat_tarif_rj.php?departemen=' + selectvalue,
                            success: function(tarif) {
                                document.getElementById('biaya').value = tarif;
                            }
                        });
                    });
                });
            </script>
            <?php
        }
    }
}
