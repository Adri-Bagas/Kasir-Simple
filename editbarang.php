<?php
    include 'koneksi.php';

    if(isset ($_POST ['simpan'])){
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama'];
        $harga_barang = $_POST['harga'];
        $kategori = $_POST['Kategori'];
        $stock = $_POST['stock'];

        $sql = "UPDATE `barang` SET `nama_barang`='$nama_barang',`harga_barang`= $harga_barang,`kategori`='$kategori',`stock`= $stock WHERE `id_barang`='$id_barang'";

        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: eth2.php');
        }else{
            echo 'Error';
        }
    }
?>