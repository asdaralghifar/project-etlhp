<?php
  include('ceksuperadmin.php');

  include('../koneksi.php');  
?>
<!DOCTYPE html>

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
<?php
    //Include file koneksi, untuk koneksikan ke database
    include "../koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $tahun_periksa=input($_POST["tahun_periksa"]);
        $obyek=input($_POST["obyek"]);
        $nolhp=input($_POST["nolhp"]);
        $tgl=input($_POST["tgl"]);
        $jml_temuan=input($_POST["jml_temuan"]);
        $temuan=input($_POST["temuan"]);
        $n_temuan=input($_POST["n_temuan"]);
        $kd_temuan=input($_POST["kd_temuan"]);
        $jml_rekom=input($_POST["jml_rekom"]);
        $rekom=input($_POST["rekom"]);
        $n_rekom=input($_POST["n_rekom"]);
        $kd_rekom=input($_POST["kd_rekom"]);
        $jml_tl=input($_POST["jml_tl"]);
        $tl=input($_POST["tl"]);
        $n_tl=input($_POST["n_tl"]);
        $kd_tl=input($_POST["kd_tl"]);
        $keterangan=input($_POST["keterangan"]);
        $paraf=input($_POST["paraf"]);



        //Query input menginput data kedalam tabel anggota
        $sql="insert into table_temuan (tahun_periksa, obyek, nolhp, tgl, jml_temuan, temuan, n_temuan, kd_temuan,
        jml_rekom, rekom, n_rekom, kd_rekom, jml_tl, tl, n_tl, kd_tl, keterangan, paraf ) 
        values ('$tahun_periksa','$obyek', '$nolhp','$tgl', '$jml_temuan','$temuan', '$n_temuan','$kd_temuan',
        '$jml_rekom','$rekom', '$n_rekom', '$kd_rekom', '$jml_tl','$tl', '$n_tl','$kd_tl', '$keterangan',
        '$paraf')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($con,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("location: data_temuan.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
<div class="wrapper">

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
            <a href="daftar_user.php" class="nav-link">
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
      
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                e-TLHP
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data_temuan.php" class="nav-link active">
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

  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Temuan</h1>
          </div>
         
        </div>
      </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <!-- /.card-header -->
            
            <div class="card-body">



  <!-- <form action="data_temuan.php" method="POST"> -->
  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

  


    <div class="row">
      <div class="col-25">
        <label>Tahun Pemeriksaan</label>
      </div>
      <div class="col-75">
        <input type="text" name="tahun_periksa" placeholder="Tahun Pemeriksaan..." required/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Obyek Pemeriksaan/OPD</label>
      </div>
      <div class="col-75">
      <select name="obyek">
                            <?php
                            include 'koneksi.php';
                            
                            
                            
                              $sql="select * from table_utama";

                              $hasil=mysqli_query($con,$sql);
                              $no=0;
                              while ($data = mysqli_fetch_array($hasil)) {
                              $no++;
                            ?>
                              <option value="<?php echo $data['obyek'];?>"><?php echo $data['obyek'];?></option>
                            <?php 
                            }
                            ?>
      </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>No.LHP</label>
      </div>
      <div class="col-75">
      <select name="nolhp">
                            <?php
                            include 'koneksi.php';
                            
                            
                            
                              $sql="select * from table_utama";

                              $hasil=mysqli_query($con,$sql);
                              $no=0;
                              while ($data = mysqli_fetch_array($hasil)) {
                              $no++;
                            ?>
                              <option value="<?php echo $data['nolhp'];?>"><?php echo $data['nolhp'];?></option>
                            <?php 
                            }
                            ?>
      </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Tanggal</label>
      </div><br>
      <div class="col-75">
        <input type="date" name="tgl" required/>
      </div>
    </div>
    
        <input type="hidden" name="jml_temuan" placeholder="Jumlah Temuan...">
    
    <div class="row">
      <div class="col-25">
        <label>Temuan</label>
      </div>
      <div class="col-75">
      <textarea name="temuan" rows="5" placeholder="Masukan temuan..." required></textarea>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-25">
        <label>Nilai Temuan</label>
      </div><br>
      <div class="col-75">
        <input type="text" name="n_temuan" placeholder="Nilai Temuan..." required/>
      </div>
    </div> -->
    <div class="row">
      <div class="col-25">
        <label>Kode Temuan</label>
      </div>
      <div class="col-75">
        <input type="text" name="kd_temuan" placeholder="Kode Temuan..." required/>
      </div>
    </div>
    
        <input type="hidden" name="jml_rekom" placeholder="Jumlah Rekomendasi...">
      
    <div class="row">
      <div class="col-25">
        <label>Rekomendasi</label>
      </div>
      <div class="col-75">
      <textarea name="rekom" rows="5" placeholder="Masukan Rekomendasi..." required></textarea>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-25">
        <label>Nilai Rekomendasi</label>
      </div><br>
      <div class="col-75">
        <input type="text" name="n_rekom" placeholder="Nilai Rekomendasi..." required/>
      </div>
    </div> -->
    <div class="row">
      <div class="col-25">
        <label>Kode Rekomendasi</label>
      </div>
      <div class="col-75">
        <input type="text" name="kd_rekom" placeholder="Kode Rekomendasi..." required/>
      </div>
    </div>
    
        <input type="hidden" name="jml_tl" placeholder="Jumlah Tindak Lanjut..." >
      
    <div class="row">
      <div class="col-25">
        <label>Tindak Lanjut</label>
      </div>
      <div class="col-75">
      <textarea name="tl" rows="5" placeholder="Masukan Tindak Lanjut..." required></textarea>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-25">
        <label>Nilai Tindak Lanjut</label>
      </div><br>
      <div class="col-75">
        <input type="text" name="n_tl" placeholder="Nilai Tindak Lanjut..." required/>
      </div>
    </div> -->
    <div class="row">
      <div class="col-25">
        <label>Kode Tindak Lanjut</label>
      </div>
      <div class="col-75">
        <input type="text" name="kd_tl" placeholder="Kode Tindak Lanjut..." required/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Nilai Temuan/Rekom/Tindak Lanjut</label>
      </div><br>
      <div class="col-75">
        <input type="text" name="n_temuan" placeholder="Nilai Temuan..." required/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Status</label>
      </div><br>
      <div class="col-75">
        <input type="text" name="keterangan" placeholder="Selesai/Belum Selesai..." required/>
      </div>
    </div>
    <input type="hidden" name="paraf" placeholder="paraf...">
    <br>
    
    <table>
      <tr>
      <td><a href="tambah_temuan.php" class="btn btn-danger">Reset</a><td>
      <td><button type="submit" name='submit' value='Upload' class="btn btn-primary btn-block">Upload</button></td>
      </tr>
    </table>
    
        

  </form>
  


<style type="text/css">

* {
    box-sizing: border-box;
}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}
.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}

@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>

</div> 
          <!-- table responsive    -->
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

