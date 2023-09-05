<?php 
if($query->rowCount() > 0){
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
    }
    }else{
        echo "username tidak ditemukan"; 
    }
?>