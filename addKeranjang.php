<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    $getDataBrg = "SELECT * FROM barang WHERE id_barang = '$id' " ;
    $query = mysqli_query($connect, $getDataBrg);

    $data = mysqli_fetch_array($query);

    $insertTMP = "INSERT INTO `tmp_trans`(`id`, `id_barang`, `nama_barang`, `jml_pembelian`, `jml_harga`) VALUES ('','$data[0]','$data[1]','1','$data[2]')";
    $query2 = mysqli_query($connect, $insertTMP);

    if ($query2) {
        header('Location: index.php');
    }else{
        header('Location: addTemp.php?Status=Error');
    }

