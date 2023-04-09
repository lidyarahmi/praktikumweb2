<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRAK 304</title>
</head>
<body>
  <?php
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : 0;

    if(isset($_POST['tambah'])) {
      $jumlah++;
    } elseif(isset($_POST['kurang'])) {
      if($jumlah > 0) {
        $jumlah--;
      }
    }
  ?>
  <form method="post">
    <label>Jumlah bintang</label>
    <input type="text" name="jumlah" value="<?php echo $jumlah; ?>"><br>
    <input type="submit" name="submit" value="Submit"><br><br>  
    <?php 
    if( !empty($jumlah) ) {
        echo "Jumlah Bintang $jumlah"; ?>
        <br><br>
    <?php 
    for( $i = 0; $i < $jumlah; $i++ ) {
            echo '<img src="bintang.png" width="50px" height="50px" >';
        } ?>
        <input type="text" name="bintang" value="<?= $jumlah ?>"hidden><br><br>
        <button type="submit" name="tambah"value="tambah">tambah</button>
        <button type="submit" name="kurang"value="kurang">kurang</button>
         </form>
<?php } ?>
</body>
</html>