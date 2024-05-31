<?php
$Koneksi = mysqli_connect("localhost","root","","dbuas");

if( !$Koneksi ){
    die("Gagal terhubung dengan database: ". mysqli_connect_error());
}
?>