<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $kategori = $_POST['Kategori'];
        $stock = $_POST['stock'];


        $sql = "INSERT INTO `barang`(`id_barang`, `nama_barang`, `harga_barang`, `kategori`, `stock`) VALUES ('','$nama','$harga','$kategori','$stock')";
        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: eth2.php');
        }else{
            echo 'error';
        }
    }
?>