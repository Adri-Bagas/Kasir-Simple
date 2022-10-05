<?php
    include 'koneksi.php';

    $selectKeranjang = "SELECT * FROM tmp_trans"; 

    $query2 = mysqli_query($connect, $selectKeranjang);

    while ($data = mysqli_fetch_array($query2)){
        $jumlBeli = $data['jml_pembelian'];

        $selectBarang = "SELECT * FROM barang WHERE id_barang ='$data[id_barang]'";
        $query3 = mysqli_query($connect, $selectBarang);

        $fetchArr = mysqli_fetch_array($query3);

        $stockBaru = $fetchArr['stock'] - $jumlBeli;

        print_r($stockBaru); echo '<br>';

        $updStock = "UPDATE `barang` SET `stock`='$stockBaru' WHERE id_barang ='$data[id_barang]'";

        $query4 = mysqli_query($connect, $updStock);

    };

    $sql = "DELETE FROM barang WHERE stock < 0";

    $query = mysqli_query($connect, $sql);


    header("Location: index.php?Berhasil");
?>