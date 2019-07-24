<?php
include("config.PHP");
if(isset($_GET['nis'])){
    $title = "Edit";
    $url = 'proses-edit.PHP';
    $id = $_GET['nis'];
    //buat quary untuk ambil data dari database
    $sql = "SELECT * FROM t_siswa WHERE nis = $id";
    $query = mysql_query($db, $sql);
    $siswa = mysql_fetch_assocf($query);
    //jika data yang diedit tidak di temukan
    if (mysql_num_rows($query)< 1){
        die("data tidak di temukan...");
}
}else{
    $title = "Add";
    //url jika tambah data
    $url = 'proses_pendaftaran.PHP'
}
?> 