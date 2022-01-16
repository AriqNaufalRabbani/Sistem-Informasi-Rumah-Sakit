<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<!-- Small boxes (Stat box) -->
      <div class="row" style="padding-left: 2%; padding-top: 2%;">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php
                  $hitung_pasien = $koneksi->query("select rj.no_rj from tbl_prj rj left join tbl_dokter d on rj.id_dokter = d.id_user where d.nama_dokter='" . $_SESSION['grup'] . "'");
                    echo $hitung_pasien->num_rows;
                    ?></h3>

              <p>Pasien</p>
            </div>
            <div class="icon">
              <i class="fa fa-edit"></i>
            </div>
            <a href="dokter.php?view=tampil-pasien-dokter" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php
                  $hitung_resep = $koneksi->query("select distinct id_resep from tbl_resep where id_dokter=".$_SESSION['id_user']);
                  echo $hitung_resep->num_rows;
                  ?></h3>

              <p>Resep</p>
            </div> 
            <div class="icon">
              <i class="fa fa-folder"></i>
            </div>
            <a href="dokter.php?view=tampil-resep" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         