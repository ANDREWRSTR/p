<?php

session_start();

$nik = $_SESSION ['nik'];

$tanggal = date('Y-m-d');
$isi = htmlspecialchars( $_POST ['buat']);

$nama_foto = $_FILES['gambar']['name'];
$asal_foto = $_FILES['gambar']['tmp_name'];

include 'koneksi.php';


$koneksi->query("insert into pengaduan values('', '$tanggal', '$nik', '$isi', '$nama_foto', 'proses')");

move_uploaded_file($asal_foto, "gambar_laporan/$nama_foto");

header("location:table.php");
?>