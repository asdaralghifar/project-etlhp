<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    // die("Anda belum login");
    header ("Location: ../login.php");
    // echo '<META HTTP-EQUIV="Refresh"
    // Content="0;
    // URL=../login.php">';
    // exit;
}

//cek level user
if($_SESSION['level']!="superadmin")
{
    // die("Anda bukan Super Admin");
    header ("Location: ../admin");
}
?>