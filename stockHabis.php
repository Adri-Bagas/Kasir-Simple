<?php
    include 'koneksi.php';

    $sql = "DELETE FROM barang WHERE stock = 0";

    $query = mysqli_query($connect, $sql);

    if ($query) {
        header("Location: stockHabis.php");
    }else{
        echo 'EROOOR';
    }
    
?>