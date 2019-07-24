<?php
include("config.PHP");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //ambil data dari form
    $nis = $_POST['nis'];
    $nama = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $kelas = $_POST['kelas'];

    //buat query update
    $sql = "UPDATE t_siswa SET nama_lengkap='$nama', alamat='$alamat',
    jenis_kelamin='$jk',no_telp='$no_telp',kelas='$kelas' WHERE nis = $nis";
    $query = mysql_query($db,$sql) or die(mysqli_error($db));
    //apakah  update berhasil
    if($query){
        //kalau berkasil, alihkan ke halaman index.php dengan status=sukses
        header('location:index.PHP?status=sukses');
        //kalau gagal, alihkan ke halaman index.php dengan status = gagal
        header('location;index.PHP?status=gagal');
    }
}else{
    die("Akses dilarang...");
}
?>