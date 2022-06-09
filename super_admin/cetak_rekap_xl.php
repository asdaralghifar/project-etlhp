<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
 
		<h2>DATA REKAPAN</h2>
 
	</center>
 
	<?php 
	include '../koneksi.php';
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data Rekapan.xls");
	?>
 
 <?php
      include '../konek.php';
      $sql = 'SELECT obyek, jml_temuan, tahun_periksa, keterangan, SUM(n_temuan) as n_temuan , COUNT( * ) AS jml FROM table_temuan GROUP BY obyek';
      
      $proses= mysqli_query($con,$sql);
      $stmt = $pdo->prepare($sql);
      $stmt->execute();



function format_ribuan ($nilai){
	return number_format ($nilai, 0, ',', '.');
}
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table border=1px  cellspacing=0 >
		<thead>
			<tr align=center valign=top>
        <td rowspan=2><b>No.</b></td>
				<td rowspan=2><b>Obyek Pemeriksaan</b></td>
				<td rowspan=2><b>Tahun Pemeriksaan<b></td>
        <td colspan=2><b>Temuan Pemeriksaan<b></td>
        <td colspan=2><b>Rekomendasi<b></td>
        <td colspan=2><b>Tidak Lanjut Sesuai<b></td>
        <td rowspan=2><b>Keterangan<b></td>

			</tr>
			<tr align=center>
        <td><b>Jml<b></td>
        <td><b>Nilai<b></td>
        <td><b>Jml<b></td>
        <td><b>Nilai<b></td>
        <td><b>Jml<b></td>
        <td><b>Nilai<b></td>
			</tr>
		</thead>
		<tbody>';
		
$no=1;
foreach ($result as $key => $row)
{
	
	echo '<tr align=center valign=top>
      <td>'.$no.'</td>
			<td>'.$row['obyek'].'</td>
      <td>'.$row['tahun_periksa'].'</td>
			<td>'.$row['jml'].'</td>
			<td>'.format_ribuan($row['n_temuan']).'</td>
      <td>'.$row['jml'].'</td>
      <td>'.format_ribuan($row['n_temuan']).'</td>
      <td>'.$row['jml'].'</td>
			<td>'.format_ribuan($row['n_temuan']).'</td>
      <td>'.$row['keterangan'].'</td>
		</tr>';
    $no++;
}
echo '
	</tbody>
</table>
';
?>
 
	<script>
		window.print();
	</script>
 
</body>
</html>