<?php 
include 'koneksi.php';

$id = $_GET['id'];

$query = $koneksi->query("select * from pengaduan where id_pengaduan='$id'");

$data = $query->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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

</style>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
             <a class="navbar-brand" >Laporan Pengaduan Masyarakat</a>
            </div>
        </nav>
        <div class="text-bg-secondary p-3">
       <a href="table.php" class="home"> <img src="img/home.png" class="gambar">Home</a><br>

<body style="background-color:RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important ;">
    <div class="text-bg-secondary p-3">
    <div class="container">
        <form action="proses_update.php?id=<?= $data['id_pengaduan']?>" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label" style="color:black"><b>Laporan Anda</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="buat"><?php echo $data ['isi_laporan']?></textarea>
            </div>
                    <!-- <div class="mb-3">
            <label for="formFile" class="form-label" style="color:black"><b>Foto</b></label>
            <input class="form-control" type="file" id="formFile" name="gambar">
        </div> -->
            <button type="submit" class="btn btn-dark">Edit</button>
        </form>
    </div>
    </div>  
</body>
</html>