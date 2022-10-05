<?php
    include 'koneksi.php';

    if(isset ($_POST ['simpan'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];

        $sql = "INSERT INTO `datakasir` VALUES ('$id','$nama','$telp','$email')";
        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: eth3.php');
        }else{
            echo "EROOR";
        }
    }
?>