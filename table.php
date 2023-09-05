<?php 
session_start();


if(!isset($_SESSION['nik'])){
  header('location:halaman_utama.php');
}

 $koneksi = new PDO ("mysql:host=localhost;dbname=pengaduan_masyarakat","root","");
$nik = $_SESSION['nik'];

 $query = $koneksi->query("select * from pengaduan where nik='$nik'");
 $data = $query->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
<style>
    
    h1{
        text-align: center;
        font-family: fantasy;
        color: black;
    }
    .x{
      color: black;
      border-radius: 50%;
      background-color: red;
    }
    .edit{
     color: white;
     background-color: grey;
     border-radius: 5px;
    }
    .edit img{
     height: 30px;
    }
    a{
      text-decoration: none;
    }
    .home{
        font-size: 30px;
        font-family: fantasy;
        text-decoration: none;
        color: black;
        margin-left: 10px;
        cursor: pointer;
    }
    .gambar{
        height: 30px;
        margin-right:3px;
    }
    .text-bg-secondary {
        height:100%;
    }
    .btn{
        border:1px solid white;
    }
    .btn:hover{
        background-color:black;
        border:1px solid white;
    }
</style>
<body>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
             <a class="navbar-brand" >Laporan Pengaduan Masyarakat</a>
             <form class="d-flex">
        
        <a href="logout.php"><button class="btn btn-secondary" type="button">Log Out</button></a>
      </form>
            </div>
        </nav>
        <div class="text-bg-secondary p-3">
            <a href="isi_pengaduan.php" class="home"> <img src="img/writing.png" class="gambar">Buat </a>
     
    <div>
    <h1>Rekap Laporan Anda</h1><br>
<div class="container">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nik</th>
      <th scope="col">Tanggal Kejadian</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">Status</th>
      <th scope="col">Opsi</th>
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
      <td><?= $pengaduan['status']?></td>
      <td> <a href="edit.php?id=<?= $pengaduan['id_pengaduan']?>"><button class="edit"><img src="img/edit.png"></button></a>
        <a href="proses_hapus.php?id=<?= $pengaduan['id_pengaduan']?>"><button class="x"><b>X</b></button></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
    </div>
    </div>
    <?php include"penutup.php" ?>
</body>
</html>