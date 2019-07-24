<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD ="";
$nama_database = "db_siswa";
$db = mysql_connect($SERVER, $USER, $PASSWORD, $nama_database,);
if(!$db){
    die("Gagal Terhubung dengan databasew: ".mysql_connect_error();)
}
?>