<?php
$id = $_GET['id'];

include 'koneksi.php';

$koneksi->query  ("delete from pengaduan where id_pengaduan='$id'");

header("location:table.php");



?>