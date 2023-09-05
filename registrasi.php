<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="aa/bs/css/bootstrap.min.css">
    <style>
       body{
            font-family: Arial, Helvetica, sans-serif;
            background-color:RGBA(var(--bs-secondary-rgb),var(--bs-bg-opacity,1))!important;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .daftar{
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            width: 300px;
        }
        .daftar h2{
            text-align: center;
        }
        .form-group{
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-group label{
            margin-bottom: 5px;
        }
        .form-group input{
            width: 100%;
            padding: 8px;
            border: 1px solid;
            border-radius: 4px;
        }
        .form-group button{
            width: 35%;
            padding: 8px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover{
            background-color: #0056b3;
        }
        p{
            text-align: center;
        }
        .link{
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="daftar">
        <h2>Daftar</h2>
        <form action="buat_akun.php" method="POST">
        <div class="form-group">
                <label for=""></label>
                <input type="text"  placeholder="Nik" name="nik" required>
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text" placeholder="Nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text"  placeholder="username" name="username" required>
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="text"  placeholder="Nomor Telepon" name="nomor_telepon" required>
            </div>
            <div class="form-group">
                <label for=""></label>
                <input type="password"  placeholder="Kata Sandi" name="sandi" required>
            </div>
            <div class="form-group">
                <button type="submit">MASUK</button>
            </div>
            <p><em>sudah memiliki akun</em>?<a link href="login.php" class="link">masuk akun</a></p>
            <div class="kembali">
            <p><a href="halaman_utama.php" class="link">KEMBALI</a></p>
            </div> 
        </form>
    </div>
</body>
</html>