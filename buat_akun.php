<?php

$nik = $_POST ['nik'];
$nama = $_POST ['nama'];
$user = $_POST ['username'];
$no = $_POST ['nomor_telepon'];
$pw = password_hash ($_POST ['sandi'], PASSWORD_DEFAULT);



include 'koneksi.php';

$koneksi->query("insert into masyarakat values('$nik', '$nama', '$user', '$pw', '$no')");

header("location:login.php")

?>