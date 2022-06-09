<?php
  include('ceksuperadmin.php');

  include('../koneksi.php');  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-TLHP | Arsip Digital</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
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
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Arsip Digital
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="daftar_user.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Daftar User
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="daftar_obyek.php" class="nav-link">
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
                <a href="data_rekap.php " class="nav-link">
                  <!-- pages/tables/data.html -->
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Rekap</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')" class="nav-link">
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
            <h1>Arsip Digital</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <form class="form-inline ml-3" action="index.php" method="GET">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="text" name="cari" autofocus autocomplete="off" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit" value="cari">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
             
            </ol>
          </div> -->
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
            <a href="tambah_arsip.php" class="btn btn-success">Tambah Data Baru</a><br><br>
              <table id="example1" class="table table-bordered table-striped">
              
                <thead>
                <tr align='center'>
                    <th>Nomor Urut</th>
                    <th>Nomor LHP</th>
                    <th>Nama OPD</th>
                    <th>Nama File</th>
                    <th>Action </th>   
                </tr>
                </thead>
                <tbody>
               
                <?php
                      $sql = "SELECT * FROM table_arsip ORDER BY nourut";
                      $query = mysqli_query($con, $sql);
                      $no=1;

                      // if (isset($_GET['cari'])) {
                      //   $sql = "SELECT * FROM table_arsip WHERE nolhp LIKE '%".$_GET['cari']."%'";
                      //   $query = mysqli_query($con, $sql);
                      // }
                      
                      while($siswa = mysqli_fetch_array($query)){
                        echo "<tr align=center>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$siswa['nolhp']."</td>";
                        echo "<td>".$siswa['namaopd']."</td>";
                        echo "<td>".$siswa['uploadfile']."</td>";
                        // echo "<td><a href='form-update.php?nourut=".$siswa['nourut']."'class='btn btn-success'>Update</a></td>";
                        echo "<td><a href='delete.php?nourut=".$siswa['nourut']."' class='btn btn-danger ' onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini?') \">Delete</a>";
                        echo " ";
                        echo "<a href=\"download.php?file=$siswa[uploadfile]\" class='btn btn-success '>Download</a></td>";
                      }
                 ?>
                </tbody>
                
              </table>
              
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
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
