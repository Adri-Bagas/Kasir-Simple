<?php
include 'koneksi.php';//memanggil
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
  
  <link rel="stylesheet" href="eth4search.css">

</head>
<body>
  <header>
    
  
  
  <nav>
    <a href="" class="brand">
      LX.
    </a>
  </div>

  <div class="container">
      <div>
      </div>

      <ul>
        <li><a class="s"href="eth.php"><img src="./muak.svg" alt="">shees</a></li>
        <li><a class="b"href="eth2.php"><img src="./et2.svg" alt=""> shees</a></li>
        <li><a class="c"href="eth3.php"><img src="./et3.svg" alt=""> </a></li>
        <li><a class="d"href="eth4.php"><img src="./et4.svg" alt=""> </a></li>
        <!-- <li><a class="b" href="displaybrg1.php"><img src="./b.svg" alt=""> Barang</a></li> -->
      </ul> 
    </div>

    <div class="aes">
        </div>
        <!-- <h1 class="ha"> <img src="sc.svg" alt=""> </i></h1> -->

        
        <div class="sq">
          <div></div>
        </div>
        
        
        
    </div>
  </nav>

  
  <div class="sub">
    <div></div>
    <h4> <a href="create.html">Create +</a>
    </h4> 
  </div>
  
  <div class="srcs">
  <form action="reportsearch.php" GET>
    <input class="src" type="text" name="search" placeholder="     Search Now..")>
  </form>
</div>

  <div class="container-all">
    <div class="cn">

      <div class="dash">
        <div>
          <h1>Dashboard.</h1>
          <p>Hi , Welcome To Table Data</p>
        </div>
      </div>
    
      
    
    
      <div class="table">
          <table>
    
            <thead>
    
              <tr>
                <th>NO</th>
                <th>Name</th>
                <th>Price</th> 
                <th>Category</th>
                <th>Stock</th>
                <th><i class="uil uil-setting"></i></th>
              </tr>
    
    <?php
    
    $id = $_GET['search'];

    $sql = "SELECT * FROM barang WHERE nama_barang LIKE '%$id%' ";
    
    $query = mysqLi_query ($connect,$sql);


    $id = 0;


    while($data = mysqLi_fetch_array($query)){  
    
    
      $id++;


    echo 
    
    
    "<tr>
    <td>.$id.</td>
    <td>.$data[1].</td>
    <td>.$data[2].</td>
    <td>.$data[3].</td>
    <td>.$data[4].</td>
    
    <td> <a href='./addKeranjang.php?id=$data[0]'> <i class='uil uil-plus'></i> </a></td>
    </tr>"
    
    ;
    }
    
    ?>
    
            </thead>
          </div>
          </table>
        </div>
      </div>
  
  
  
</html>
<!-- hh -->
<!-- hh -->
<!-- hh -->
