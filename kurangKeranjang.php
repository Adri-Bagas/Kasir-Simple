<?php
    include 'koneksi.php';

    $id = $_GET['id'];
    $id2 = $_GET['id2'];
    $mns = $_GET['mns'];

    $select = "SELECT * FROM tmp_trans WHERE id = '$id' ";

    $query = mysqli_query($connect, $select);

    $data = mysqli_fetch_array($query);

    $jmlBRG = $data['jml_pembelian'];

    $jmlBRGBR = $jmlBRG - $mns;

    $select2 = "SELECT * FROM barang WHERE id_barang = '$id2' ";

    $query2 = mysqli_query($connect, $select2);

    $databrg = mysqli_fetch_array($query2);

    $hrg = $databrg['harga_barang'];

    $hrgbrb = $hrg * $jmlBRGBR;

    if($jmlBRGBR > 0){
        $update = "UPDATE `tmp_trans` SET `jml_pembelian`='$jmlBRGBR',`jml_harga`='$hrgbrb' WHERE id = '$id'";

        $query3 = mysqli_query($connect, $update);
    }else{
        $delete = "DELETE FROM `tmp_trans` WHERE id ='$id'";
        
        $query3 = mysqli_query($connect, $delete);
    }

    if($query3){
        header('Location: index.php');
    }else{
        echo 'ERROR';
    }
?>