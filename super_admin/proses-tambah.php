
<?php
include '../koneksi.php';
$nolhp = $_POST['nolhp'];
$namaopd = $_POST['namaopd'];
 
$rand = rand();
$ekstensi =  array('png','jpg','jpeg', 'pdf', 'xlsx', 'docx', 'pptx', 'rar', 'csv', 'txt');
$filename = $_FILES['uploadfile']['name'];
$ukuran = $_FILES['uploadfile']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
 header("location:input.php?alert=gagal_ekstensi");
}else{
 if($ukuran < 6048000){ 
 move_uploaded_file($_FILES['uploadfile']['tmp_name'], 'files/'.$filename);
 mysqli_query($con, "INSERT INTO table_arsip VALUES(NULL,'$nolhp','$namaopd','$filename')");
 header("location:index.php?alert=berhasil");
 }else{
 header("location:form-tambah.php?alert=gagal_ukuran");
 }
}
?>