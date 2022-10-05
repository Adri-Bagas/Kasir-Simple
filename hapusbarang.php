<?php
    include 'koneksi.php';

    

    $hapusbarang = $_GET['id'];
    $sql = "DELETE FROM `barang` WHERE id_barang = '$hapusbarang'";
    $query = mysqli_query($connect, $sql);

    if ($query){
        header('Location: eth2.php');
    }else{
        echo "error";
    }
?>