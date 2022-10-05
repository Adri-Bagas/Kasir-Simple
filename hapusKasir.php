<?php
    include 'koneksi.php';

    $hapususer = $_GET['id'];
    $sql = "DELETE FROM `datakasir` WHERE id = '$hapususer'";
    $query = mysqli_query($connect, $sql);

    if ($query){
        header('Location: eth3.php');
    }else{
        echo 'EROOR';
    }
?>