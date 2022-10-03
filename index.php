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
  
  <link rel="stylesheet" href="eteh.css">

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
        <li><a class="s"href="index.php"><img src="./muak.svg" alt="">shees</a></li>
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
  <form action="searchfn.php" GET>
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
    
    $sql   = "SELECT * FROM barang"; 
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
  
  
    <div class="container-keranjang">
  
      <div class="table">
        <table>
  
          <thead>
  
            <tr>
              <th>NO</th>
              <th>Nama</th>
              <th>Jumlah</th> 
              <th>Total</th>
              <th><i class="uil uil-setting"></i></th>
            </tr>


            <?php
  
  $sql1   = "SELECT * FROM tmp_trans"; 
  $query1 = mysqLi_query ($connect,$sql1);

  $id2 = 0;
  $id3 = 10000;
  while($data1 = mysqLi_fetch_array($query1)){  
  
    $id2++;
    $id3++;
  
  echo 
  "<tr>
    <td>.$id2.</td> 
    <td style='display: none;' id='$id2'>$data1[0]</td>
    <td style='display: none;' id='$id3'>$data1[1]</td>
    <td>.$data1[2].</td>
    <td>.$data1[3].</td>
    <td>.$data1[4].</td>
    
    <td>
    <a onclick='plus($id2, $id3)'> <i class='uil uil-plus'></i> </a> | 
    <a onclick='minus($id2, $id3)'> <i class='uil uil-minus'></i></a> |
    <a onclick='hapus($id2, $id3)'> <i class='uil uil-trash-alt'></i></a>
    </td>
    </tr>
    "
  
  ;
}

?>
  
</thead>
</table>
</div>
<div class="ket">
  <?php
  
    $SUM = "SELECT SUM(jml_harga) AS tot FROM tmp_trans ";
    $query = mysqli_query($connect, $SUM);
    $tot = mysqli_fetch_array($query);

    echo"
      <h2 style='position: relative;left:100px;'>Total Harga: Rp.$tot[tot],-</h2>
      "
  ?>

    <h3 style="position: relative;left:100px; margin-left:12px;">Uang Masuk :<input type="text" class="input" id='uangMasuk'><button onclick='kal()' class='kal'>Kal</button></h3> 

    <h3 style="position: relative;left:100px;">Uang Kembali : <input type="text" class="input" id='uangKembali'></h3>

    <button class="submit" type="submit" name="simpan" value="simpan">Submit</button>
    <button class="submit" type="submit" name="simpan" value="simpan">Reset</button>
</div>
</div>

</div>

</header>

</body>

<script>
function plus(id2,  id3) {
    let x = document.getElementById(id2).innerHTML;
    let y = document.getElementById(id3).innerHTML;

    location.replace("tambahKeranjang.php?id=" + x + "&id2=" + y);
};

function minus(id2,  id3) {
    let x = document.getElementById(id2).innerHTML;
    let y = document.getElementById(id3).innerHTML;

    location.replace("kurangKeranjang.php?id=" + x + "&id2=" + y);
};

function hapus(id2,  id3) {
    let x = document.getElementById(id2).innerHTML;
    let y = document.getElementById(id3).innerHTML;

    location.replace("hapusKeranjang.php?id=" + x + "&id2=" + y);
};

  
  function kal(){
    let a = <?php echo $tot['tot'] ?> ;

    let b = parseInt(document.getElementById('uangMasuk').value);


    let z = document.getElementById('uangKembali').value = b - a ;
  }
  
</script>


</html>
<!-- hh -->