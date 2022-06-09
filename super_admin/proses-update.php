<?php
include("../koneksi.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
    // ambil data dari formulir
    $nourut = $_POST['nourut'];
    $nolhp = $_POST['nolhp'];
    $namaopd = $_POST['namaopd'];
    $filename = $_POST['uploadfile'];
    // buat query update
    $sql = "UPDATE table_arsip SET nolhp='$nolhp', namaopd='$namaopd', uploadfile='$filename' WHERE nourut=$nourut";
    $query = mysqli_query($con, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>
