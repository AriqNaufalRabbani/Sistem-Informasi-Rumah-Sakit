<?php
/*
|--------------------------------------------------------------------------
| Header Front Office / Resepsionis
|--------------------------------------------------------------------------
|
|   Aplikasi Sistem Informasi Rumah Sakit Sederhana
|
*/
include './konfig.php';
session_start();
if ($_SESSION['hak_akses'] == 'Front Office') {
    ?>


<!DOCTYPE html>
<html>
<head>
  <title>Halaman Front Office</title>
  <script type="text/javascript" src="bootstrap/js/jquery-1.8.0.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap/css/jquery.dataTables.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       
  <link rel="stylesheet" type="text/css" media="all" href="jsdatepick-calendar/jsDatePick_ltr.min.css" />
  <script type="text/javascript" src="jsdatepick-calendar/jsDatePick.jquery.min.1.3.js"></script>
  <style type="text/css">
                #result
                {
                    position:absolute;
                    width:300px;
                    padding:5px;
                    display:none;
                    margin-top:40px;
                    border-top:0px;
                    overflow:hidden;
                    border:1px #CCC solid;
                    background-color: white;
                    z-index: 10;
                    font-size: 14px;
                    border-radius: 2px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
                    -webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.2);
                }
                .show
                {
                    padding:10px;
                    border-bottom:1px #999 dashed;
                    /*    font-size:12px; */
                    height:50px;
                }
                .show:hover
                {
                    background:#428bca;
                    color: #fff;
                    cursor:pointer;
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#datatable').dataTable();
                });
            </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SI</b>RS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI </b>Rumah Sakit</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <p class="navbar-text navbar-right"><?php echo $_SESSION['username']; ?> login sebagai <?php echo $_SESSION['hak_akses']; ?> | <a class="btn btn-default btn-xs" href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></p>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/find_user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']; ?> || <?php echo $_SESSION['hak_akses']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview"> 
          <a href="front-office.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="front-office.php?view=tampil-pasien">
            <i class="fa fa-edit"></i> <span>Pasien </span>
          </a>
        </li>
        <li class="treeview">
          <a href="front-office.php?view=tampil-prj">
            <i class="fa fa-folder"></i> <span>Pasien Rawat Jalan</span>
          </a>
        </li>
        <li class="treeview">
          <a href="front-office.php?view=tampil-pri">
            <i class="fa fa-book"></i> <span>Pasien Rawat Inap</span>
          </a>  
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">   
    <!-- Main content -->
    <section class="content">
      
      <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner"  style="background-color: white;">
                <?php 
                    if (isset($_GET['view'])) 
                    {
                        if ($_GET['view']=="tampil-pasien") 
                        {
                            include 'front-office/tampil_pasien.php';
                        }
                        elseif ($_GET['view']=="tambah-pasien") 
                        {
                            include 'front-office/aksi_tambah_pasien.php';
                        }
                        elseif ($_GET['view']=="tampil-ubah-pasien") 
                        {
                            include 'front-office/tampil_ubah_pasien.php';
                        }
                        elseif ($_GET['view']=="ubah-pasien") 
                        {
                            include 'front-office/aksi_ubah_pasien.php';
                        }
                        elseif ($_GET['view']=="hapus-pasien") 
                        {
                            include 'front-office/aksi_hapus_pasien.php';
                        }
                        elseif ($_GET['view']=="tampil-prj") 
                        {
                            include 'front-office/tampil_prj.php';
                        }
                        elseif ($_GET['view']=="tambah-prj") 
                        {
                            include 'front-office/aksi_tambah_prj.php';
                        }
                        elseif ($_GET['view']=="tampil-ubah-prj") 
                        {
                            include 'front-office/tampil_ubah_prj.php';
                        }
                        elseif ($_GET['view']=="hapus-prj") 
                        {
                            include 'front-office/aksi_hapus_prj.php';
                        }
                        elseif ($_GET['view']=="tampil-pri") 
                        {
                            include 'front-office/tampil_pri.php';
                        }
                        elseif ($_GET['view']=="tambah-pri") 
                        {
                            include 'front-office/aksi_tambah_pri.php';
                        }
                        elseif ($_GET['view']=="tampil-ubah-pri") 
                        {
                            include 'front-office/tampil_ubah_pri.php';
                        }
                        elseif ($_GET['view']=="hapus-pri") 
                        {
                            include 'front-office/aksi_hapus_pri.php';
                        }
                    }
                    else
                    {
                        include 'front-office/dashboard.php';
                    }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
      <!-- Main row -->
      <div class="row">
        
              <!-- /.item -->
            </div>
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  </footer>

</div>
<!-- ./wrapper -->


<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
</body>
</html>

<?php
} else {
echo "<script>alert('Forbidden access');location.href='index.php';</script>";
exit();
}
?>
