<?php

    include 'koneksi.php';

    date_default_timezone_set("Asia/Bangkok");

    $tot = $_GET['tot'];

    $kasir = $_GET['kasir'];

    $id_lap = uniqid('', false);

    $tanggal = date("Y-m-d");

    $jam = date("H:i:s");

    $sql = "INSERT INTO `laporan`(`id_lap`, `kasir`, `pemasukan`, `tanggal`, `jam`) VALUES ('$id_lap','$kasir','$tot','$tanggal','$jam')";
    $query = mysqli_query($connect, $sql);

    $selectKeranjang = "SELECT * FROM tmp_trans"; 

    $query2 = mysqli_query($connect, $selectKeranjang);

    while ($arrKeranjang = mysqli_fetch_array($query2)) {
        $sql3 = "INSERT INTO `keterangan`(`id_ket`, `id_lap`, `nama_barang`, `jml_pembelian`, `sum_barang`) VALUES ('','$id_lap','$arrKeranjang[nama_barang]','$arrKeranjang[jml_pembelian]','$arrKeranjang[jml_harga]');";
        $query3 = mysqli_query($connect, $sql3);
    }

    header("Location: kurangStock.php");

?>