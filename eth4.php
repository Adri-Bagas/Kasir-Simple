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
  
  <link rel="stylesheet" href="eth4.css">

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

      </div>
      <ul>
      <li><a class="s"href="index.php"><img src="./muak.svg" alt=""></a></li>
        <li><a class="b"href="eth2.php"><img src="./et2.svg" alt=""></a></li>
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

  

  <div class="container-all">
    <div class="container-barang">
    <div class="dash">
      <div>
        <h1>Dashboard.</h1>
        <p>Hi , Welcome To Table Data</p>
      </div>
    </div>
    
    <div class="srcs">
    <form action="reportsearch.php" GET>
      <input class="src" type="text" name="search" placeholder="     Search Now..")>
    </form>
  </div>
  
      <div class="sub">
        <div></div>
        <h4> <a href="created.html">Create +</a>
        </h4> 
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
              <th><i class="uil uil-setting"></i></th>
            </tr>
  
            <?php
    
    $sql   = "SELECT * FROM datakasir"; 
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
    
    <td> <a href='./addKeranjang.php?id=$data[0]'> <i class='uil uil-plus'></i> </a></td>
    </tr>"
    
    ;
    }
    
    ?>
  
          </thead>
        </table>
      </div>
    </div>
  
  
  
    
  
</thead>
</table>
</div>
</div>

</div>


<!-- <tr class="pii">
    <td class="nm"> Data Masuk</td>
    <td class="nm">:</td>
    <td><input class="input" type="" name="tgl_k" placeholder="Data Masuk"></td>
  </tr>

  <tr class="pii">
    <td class="nm">Uang Masuk</td>
    <td class="nm">:</td>
    <td><input class="input" type="text" name="stat" placeholder="Uang MAsuk"></td>
  </tr>
  
  <tr class="piii">
    <td class="nm"></td>
    <td class="nm"></td>
    <td><input class="submit" type="submit" name="simpan" value="simpan"></td>
  </tr> -->



</header>

</body>
</html>
<!-- hh -->