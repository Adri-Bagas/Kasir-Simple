<?php
include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lexavac Web Design</title>

  <!-- --------- Unicons Icons --------- -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="shortcut icon" href="favicon.SVG" type="image/SVG+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@200;300;400;500;600;700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100&display=swap" rel="stylesheet"> 
  <!-- --------- CSS Files --------- -->
  
  <link rel="stylesheet" href="newdesign.css">

</head>
<body>
  <header>
    <div class="con">
      <div></div>
    </div>
  
  
  <nav>
    <a href="index.php" class="brand">
      <span>EL</span>xavac.
    </a>
  </div>

  <div class="container">
      <div>
      </div>

      <div class="line">
        <div></div>
      </div>

      <ul>
        <li><a class="s"href="index.html"><img src="./Timeline.svg" alt=""> Siswa</a></li>
        <li><a class="b" href="displaybrg1.php"><img src="./Timeline.svg" alt=""> Barang</a></li>
      </ul>
    </div>

    <div class="aes">
      <!-- <div class="src">
        </div> -->
        <h1 class="ha"><i class="uil uil-search"></i></h1>

      <form action="" GET>
        <input class="src" type="text" name="search" placeholder="     Search Now..")>
      </form>

      <div class="sq">
        <div></div>
      </div>

      <div class="bck">
        <h3 class="bc"> <a href=""><i class="uil uil-angle-left"></i>Back To Dashboard</a></h3>
      </div>

    </div>
  </nav>

    <div class="dash">
      <div>
        <h1>Dashboard.</h1>
        <p>Hi , Welcome To Data Siswa</p>
      </div>
    </div>

    <div class="sub">
      <h4 class="sub-heading"> <a href="design.html">CREATE</a>
      </h4> 
    </div>

    <div class="vrr">
      <div></div>
    </div>

    <div class="table">
      <table>

        <thead>

          <tr>
            <th>ID</th>
            <th>Item code</th>
            <th>Name</th> 
            <th>Telephone</th>
            <th>Email</th>
            <th>Action</th>
          </tr>

<?php

$sql   = "SELECT * FROM ssw"; 
$query = mysqLi_query ($connect,$sql);
while($data = mysqLi_fetch_array($query)){  


echo 


"<tr>
<td>.$data[id_s].</td> 
<td><a href='display2.php?id_b=".$data['id_b']."'>$data[id_b]</a></td>
<td><a href='display3.php?name=".$data['name']."'>$data[name]</a></td>
<td>.$data[telephone].</td>
<td>.$data[email].</td>

<td>
<a href='editdisplay.php?id_s=".$data['id_s']."'>Edit</a>
<a href='delete.php?id_s=".$data['id_s']."'>Hapus</a>
</td>
</tr>"

;
}

?>

        </thead>
      </table>
    </div>