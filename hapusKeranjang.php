<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM tmp_trans WHERE id ='$id'";

    $query = mysqli_query($connect, $sql);

    if ($query) { 
        header('Location: index.php');
    }else{
        echo 'ERROR';
    };

?>