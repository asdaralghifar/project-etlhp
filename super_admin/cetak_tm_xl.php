<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
 
		<h2>DATA TEMUAN</h2>
 
	</center>
 
	<?php 
	include '../koneksi.php';
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data Temuan.xls");
	?>
 
 <?php
error_reporting(0);
$query = "SELECT * FROM table_temuan order by nolhp";
$proses = mysqli_query($con, $query);
if (isset($_GET['cari'])) {
  $sql = "SELECT * FROM table_temuan WHERE obyek LIKE '%".$_GET['cari']."%'";
  $proses = mysqli_query($con, $sql);
}
$i = 0;
while ($data = mysqli_fetch_assoc($proses)) {
  $row[$i] = $data;
  $i++;
  //   $no=$no++;
}
foreach ($row as $cell) {
  if (isset($total[$cell['tahun_periksa']]['jml'])) {
    $total[$cell['tahun_periksa']]['jml']++;
  } else {
    $total[$cell['tahun_periksa']]['jml'] = 1;
  }
}
foreach ($row as $cell_obyek) {
  if (isset($total_obyek[$cell_obyek['obyek']]['jml_obyek'])) {
    $total_obyek[$cell_obyek['obyek']]['jml_obyek']++;
  } else {
    $total_obyek[$cell_obyek['obyek']]['jml_obyek'] = 1;
  }
}
foreach ($row as $cell_obyek1) {
  if (isset($total_obyek1[$cell_obyek1['obyek']]['jml_obyek'])) {
    $total_obyek1[$cell_obyek1['obyek']]['jml_obyek']++;
  } else {
    $total_obyek1[$cell_obyek1['obyek']]['jml_obyek'] = 1;
  }
}
foreach ($row as $cell_nolhp) {
  if (isset($total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp'])) {
    $total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp']++;
  } else {
    $total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp'] = 1;
  }
}
foreach ($row as $cell_tgl) {
  if (isset($total_tgl[$cell_tgl['tgl']]['jml_tgl'])) {
    $total_tgl[$cell_tgl['tgl']]['jml_tgl']++;
  } else {
    $total_tgl[$cell_tgl['tgl']]['jml_tgl'] = 1;
  }
}

echo "<table class=table table-striped border=1px cellspacing=0> 
        <tr align=center>
            <td><b>No</b></td>
            <td><b>Obyek</b></td>
            <td><b>No.LHP</b></td>
            <td><b>Tahun Pemeriksaan</b></td>
            <td><b>Tanggal</b></td>
            <td><b>Jumlah Temuan</b></td>
            <td><b>Temuan</b></td>
            <td><b>Nilai Temuan</b></td>
            <td><b>Kode Temuan</b></td>
            <td><b>Jumlah Rekom.</b></td>
            <td><b>Rekomendasi</b></td>
            <td><b>Nilai Rekom.</b></td>
            <td><b>Kode Rekom.</b></td>
            <td><b>Jumlah TL</b></td>
            <td><b>Tindak Lanjut</b></td>
            <td><b>Nilai TL</b></td>
            <td><b>Kode TL</b></td>
            <td><b>Status</b></td>
            <td><b>Tanggapan/Paraf</b></td>
        </tr>";
$n = count($row);
$cek_tahun_periksa = "";
$cek_obyek = "";
$cek_obyek1 = "";
$cek_nolhp = "";
$cek_tgl = "";
$cek_jumlah = "";
$cek_jumlah1 = "";
$cek_jumlah2 = "";
$no = 1;
for ($i = 0; $i < $n; $i++) {
  $cell = $row[$i];
  $cell_obyek = $row[$i];
  $cell_obyek1 = $row[$i];
  $cell_nolhp = $row[$i];
  $cell_tgl = $row[$i];
  echo '<tr align=center valign=top>';
  

  if ($cek_obyek != $cell_obyek['obyek']) {
    echo '<td' . ($total_obyek[$cell_obyek['obyek']]['jml_obyek'] > 1 ? ' rowspan="' . ($total_obyek[$cell_obyek['obyek']]['jml_obyek']) . '">' : '>') . $no . '</td>';
    $cek_obyek = $cell_obyek['obyek'];
    $no++;
  }

  if ($cek_obyek1 != $cell_obyek1['obyek']) {
    echo '<td' . ($total_obyek1[$cell_obyek1['obyek']]['jml_obyek'] > 1 ? ' rowspan="' . ($total_obyek1[$cell_obyek1['obyek']]['jml_obyek']) . '">' : '>') . $cell_obyek1['obyek'] . '</td>';
    $cek_obyek1 = $cell_obyek1['obyek'];
  }

  if ($cek_nolhp != $cell_nolhp['nolhp']) {
    echo '<td' . ($total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp'] > 1 ? ' rowspan="' . ($total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp']) . '">' : '>') . $cell_nolhp['nolhp'] . '</td>';
    $cek_nolhp = $cell_nolhp['nolhp'];
  }
  
  if ($cek_tahun_periksa != $cell['tahun_periksa']) {
    // echo '<td' . ($total[$cell['tahun_periksa']]['jml'] > 1 ? ' rowspan="' . ($total[$cell['tahun_periksa']]['jml']) . '">' : '>') . $no . '</td>';
    echo '<td' . ($total[$cell['tahun_periksa']]['jml'] > 1 ? ' rowspan="' . ($total[$cell['tahun_periksa']]['jml']) . '">' : '>') . $cell['tahun_periksa'] . '</td>';
    $cek_tahun_periksa = $cell['tahun_periksa'];
    // $no++;
  }
  
  // echo "<td>$cell[tahun_periksa]</td>";

  if ($cek_tgl != $cell_tgl['tgl']) {
    echo '<td' . ($total_tgl[$cell_tgl['tgl']]['jml_tgl'] > 1 ? ' rowspan="' . ($total_tgl[$cell_tgl['tgl']]['jml_tgl']) . '">' : '>') . $cell_tgl['tgl'] . '</td>';
    $cek_tgl = $cell_tgl['tgl'];
  }
  // untuk jumlah;
  if ($cek_jumlah != $cell_nolhp['nolhp']) {
    echo '<td' . ($total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp'] > 1 ? ' rowspan="' . ($total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp']) . '">' : '>') . $total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp'] . '</td>';
    $cek_jumlah = $cell_nolhp['nolhp'];
  }


  echo "<td>$cell[temuan]</td>";
  echo "<td>$cell[n_temuan]</td>";
  echo "<td>$cell[kd_temuan]</td>";
  if ($cek_jumlah1 != $cell_nolhp['nolhp']) {
    echo '<td' . ($total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp'] > 1 ? ' rowspan="' . ($total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp']) . '">' : '>') . $total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp'] . '</td>';
    $cek_jumlah1 = $cell_nolhp['nolhp'];
  }
  echo "<td>$cell[rekom]</td>";
  echo "<td>$cell[n_temuan]</td>";
  echo "<td>$cell[kd_rekom]</td>";

  if ($cek_jumlah2 != $cell_nolhp['nolhp']) {
    echo '<td' . ($total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp'] > 1 ? ' rowspan="' . ($total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp']) . '">' : '>') . $total_nolhp[$cell_nolhp['nolhp']]['jml_nolhp'] . '</td>';
    $cek_jumlah2 = $cell_nolhp['nolhp'];
  }
  echo "<td>$cell[tl]</td>";
  echo "<td>$cell[n_temuan]</td>";
  echo "<td>$cell[kd_tl]</td>";
  echo "<td>$cell[keterangan]</td>";
  echo "<td>$cell[paraf]</td>";
  ?>
  <?php
  echo "</tr>";
}
echo "</table>";
?>
 
	<script>
		window.print();
	</script>
 
</body>
</html>