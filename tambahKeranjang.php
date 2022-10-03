<?php

    include 'koneksi.php';

    $id = $_GET['id'];
    $id2 = $_GET['id2'];

    $select = "SELECT * FROM tmp_trans WHERE id = '$id' ";

    $query = mysqli_query($connect, $select);

    $data = mysqli_fetch_array($query);

    $jmlBRG = $data['jml_pembelian'];

    $jmlBRGBR = $jmlBRG + 1;

    $select2 = "SELECT * FROM barang WHERE id_barang = '$id2' ";

    $query2 = mysqli_query($connect, $select2);

    $databrg = mysqli_fetch_array($query2);

    $hrg = $databrg['harga_barang'];

    $hrgbrb = $hrg * $jmlBRGBR;

    $update = "UPDATE `tmp_trans` SET `jml_pembelian`='$jmlBRGBR',`jml_harga`='$hrgbrb' WHERE id = '$id'";

    $query3 = mysqli_query($connect, $update);

    if($query3){
        header('Location: index.php');
    }else{
        echo 'ERROR';
    }
    
?>