<?php
  include('ceksuperadmin.php');

  include('../koneksi.php');  
?>
<!DOCTYPE html>
<?php
  include '../koneksi.php';
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-TLHP | Super Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    

    
    <ul class="navbar-nav ml-auto">
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </ul>
  </nav> -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block">Welcome, Super Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Arsip Digital
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="daftar_user.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Daftar User
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="daftar_obyek.php" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Daftar Obyek
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                e-TLHP
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data_temuan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Temuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_rekap.php" class="nav-link">
                  <!-- pages/tables/data.html -->
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Rekap</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Logout
                
              </p>
            </a>
          </li>
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah User Baru</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
            <style type="text/css">
                    input[type=text], input[type=password] {
                        width: 50%;
                        padding: 12px 20px;
                       
                        border: 1px solid #ccc;
                        box-sizing: border-box;
                    }
                    label{
                        color:#50626C;
                        text-transform: uppercase;
                    }
                    /* Change styles for span and cancel button on extra small screens */
                    @media screen and (max-width: 300px) {
                        span.psw {
                           display: block;
                           float: none;
                        }
                        .cancelbtn {
                           width: 100%;
                        }
                    }
            </style>

            
</head>


<body>
    
    
    <form action="proses-user.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <input type="hidden" name="nourut" value="<?php echo $siswa['nourut'] ?>" />
        <p>
            <label for="username">Username: </label><br>
            <input type="text" name="username" placeholder="username" required/>
        </p>
        <p>
            <label for="password">Password: </label><br>
            <input type="password" name="password" placeholder="password" required/>
        </p>
        <p>
            <label for="status">Status: </label><br>
            <input type="text" name="level" placeholder="admin/superadmin" required/>
        </p>
        
        <table>
      <tr>
        <td><a href="tambah_user.php" class="btn btn-danger btn-block">Reset</button></td>
        <td><button type="submit" name='tambah' value='Upload' class="btn btn-primary btn-block">Upload</button></td>
      </tr>
      </table>
        </fieldset>
    </form>
    </body>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <strong>Copyright &copy; 2021 Team CIA-IT UHO</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Akt.2018</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
