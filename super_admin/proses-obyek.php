<?php


  include ("../koneksi.php");

  $query = "INSERT INTO table_utama (obyek , nolhp)
            VALUES('$_POST[obyek]','$_POST[nolhp]')";
            
  mysqli_query($con, $query);

  if( $query ) {
    // kalau berhasil alihkan ke halaman list-siswa.php
    header('Location: daftar_obyek.php');
    } else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
    }

// else{
//   echo "File gagal di upload";
// }
?>