<?php 
session_start();
$nama = $_POST['username'];
$pw = $_POST['password'];

include "koneksi.php";
$query = $koneksi->query("SELECT * FROM masyarakat WHERE username='$nama'");
$data = $query->fetch();
$JumlahBaris = $query->rowCount();

if($JumlahBaris > 0){
    if(password_verify($pw, $data['password'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['nik'] = $data['nik'];
    $_SESSION['id_petugas'] =  $data['id_petugas'];
        header('Location:table.php'); 
    //$_SESSION['level'] = 'masyarakat';

    
    }
    else{
        echo "pasword salah";
        header('location:login.php');
    }
    }else{
        echo "username tidak ditemukan"; 
        header('location:login.php');
    }
    


?>