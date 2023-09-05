<?php 

$isi = $_POST['buat'];
$foto = $_POST['gambar'];
$id = $_GET['id'];

//$nama_foto = $_FILES['gambar']['name'];
// $asal_foto = $_FILES['gambar']['tmp_name'];

include 'koneksi.php';

$query = $koneksi->query("UPDATE pengaduan SET isi_laporan='$isi' where id_pengaduan='$id'");
//$query = $koneksi->query("UPDATE pengaduan SET foto='$foto' where id_pengaduan='$id'");

//move_uploaded_file($asal_foto, "gambar_laporan/$nama_foto");

header("location:table.php")

?>