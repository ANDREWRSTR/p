<?php 
session_start();
include 'koneksi.php';


$query = $koneksi->query("select * from pengaduan ");
$data = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
<style>
    nav{
        background-color: black;
        height: 60px;
    }
    h1{
        text-align: center;
        color: white;
    }
    .gambar{
        height: 30px;
        margin-top:25%;
        margin-left:10px;
    }
    a{
        text-decoration: none;
        color: white;
    }
</style>
<body>
    <nav>
        <h1>Laporan Masyarakat</h1>
    </nav>
    <div class="text-bg-secondary p-3"><br>
    <div class="container">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nik</th>
      <th scope="col">Tanggal Kejadian</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $pengaduan){ ?>
    <tr>
      <td><?= $pengaduan['id_pengaduan']?></td>
      <td><?= $pengaduan['nik']?></td>
      <td><?= $pengaduan['tgl_pengaduan']?></td>
      <td style="max-width:250px;"><?= $pengaduan['isi_laporan']?></td>
      <td><img style="height: 70px; width: 50;" src="gambar_laporan/<?= $pengaduan['foto'] ?>"></td>
      <td><a link href="tanggapan.php">Tanggapi</a></td>  
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
    </div>
</body>
</html>