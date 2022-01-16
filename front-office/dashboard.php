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
                $hitung_pasien = $koneksi->query("select * from tbl_pasien");
                echo $hitung_pasien->num_rows;?></h3>
              <p>Pasien</p>
            </div>
            <div class="icon">
              <i class="fa fa-edit"></i>
            </div>
            <a href="front-office.php?view=tampil-pasien" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php
                  $hitung_prj = $koneksi->query("select * from tbl_prj");
                  echo $hitung_prj->num_rows;
                  ?></h3>

              <p>Pasien Rawat Jalan</p>
            </div>
            <div class="icon">
              <i class="fa fa-folder"></i>
            </div>
            <a href="front-office.php?view=tampil-prj" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php
                  $hitung_pri = $koneksi->query("select * from tbl_pri");
                  echo $hitung_pri->num_rows;
                  ?></h3>

              <p>Pasien Rawat Inap</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="front-office.php?view=tampil-pri" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
      </div>
      <!-- /.row -->