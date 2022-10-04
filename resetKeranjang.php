<?php
    include 'koneksi.php';

    $truncate = "DELETE FROM tmp_trans WHERE 1";

    $query = mysqli_query($connect, $truncate);

    if ($query) {
        header('Location: index.php?resetted');
    }else{
        echo 'error';
    }


?>