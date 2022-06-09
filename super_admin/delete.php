<?php
if(isset($_GET['nourut']))
{
    include('../koneksi.php');
    $nourut = $_GET['nourut'];
    $query = mysqli_query($con,"select * from table_arsip where nourut='$nourut'");
    $data_file = $query->fetch_array();
 
    $query_hapus = mysqli_query($con,"delete from table_arsip where nourut='$nourut'");
    unlink('files/'.$data_file['uploadfile']);
    header('location:index.php');
}
else
{
    header('location:index.php');
}
?>