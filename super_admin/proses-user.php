<?php


  include ("../koneksi.php");

  $query = "INSERT INTO table_admin (username, password, level)
            VALUES('$_POST[username]', MD5('$_POST[password]'),'$_POST[level]')";
            
  mysqli_query($con, $query);

  if( $query ) {
    // kalau berhasil alihkan ke halaman list-siswa.php
    header('Location: daftar_user.php');
    } else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
    }

// else{
//   echo "File gagal di upload";
// }
?>