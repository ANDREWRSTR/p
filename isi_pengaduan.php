<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPOR</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
</head>
   <style>
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
    .text-bg-secondary{
        height:100%;
    }

   </style>
<body>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
             <a class="navbar-brand" >Laporan Pengaduan Masyarakat</a>
            </div>
        </nav>
        
     <div class="text-bg-secondary p-3">
       <a href="table.php" class="home"> <img src="img/home.png" class="gambar">Home</a><br>
     
      <div class="text-bg-secondary p-3">
        <div class="container">
      <form action="proses_pengaduan.php" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label" style="color:black"><b>Laporan Anda</b></label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="buat"></textarea>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label" style="color:black"><b>Foto</b></label>
  <input class="form-control" type="file" id="formFile" name="gambar">
</div>
<button type="submit" class="btn btn-dark">kirim</button>
  </form>
    </div>
</div>
</div>
      <?php include 'penutup.php' ?>
</body>
</html>

