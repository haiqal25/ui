<?php
include("config.PHP");
if(isset($_GET['nis'])){
    //ambil nis dari query string
    $nis = $_GET['nis'];
    //buat query hapus
    $sql ="DELETE FROM t_siswa WHERE nis = $nis";
    $query = mysql_query($db, $sql) or die (mysqli_error($db));
    //apakah query update berhasil?
    if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status = sukses
        header('location:index.php?status=sukses');
    }else{
         //kalau berhasil, alihkan ke halaman index.php dengan status = gagal
         header('location:index.php?status=gagal');
    }
}else{
    die("Akses dilarang...");
}
?>