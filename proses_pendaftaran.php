<?php
include("config.PHP");
//cek apakah tombol simpan sudah dklik atau belum
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //ambil data dari form
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis)_kelamin'];
    $no_telp = $_POST['no_telp'];
    $kelas = $_POST['kelas'];
    //buat query
    $sql ="INSERT INTO t_siswa(nis, nama_lengkap, alamat, jenis_kelamin, no_telp, kelas)
    VALUE('$nis','$nama','$alamat','$jk','$no_telp','$kelas')";
    $query = mysql_query($db, $sql) or die (mtsqli_error($db));
    //apakah query update berkasil
    if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
        header('location:index.php?status=sukses');
    }else{
        //kalau gagal, alihkan ke halaman index.php dengan status=gagal
        header('location:index.php?status=gagal');
    }
}else{
    die("Akses dilarang...");
}
?>