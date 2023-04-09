<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 303</title>
</head>
<body>
    <form method="post" action="">
    <label>Batas Bawah</label>
    <input type="text" name="bawah"><br>
    <label>Batas Atas</label>
    <input type="text" name="atas"><br>
    <input type="submit" value="Cetak" name="cetak"> 
    </form>
    <br>
   <?php
   if(isset($_POST["cetak"])){
    $bawah = $_POST["bawah"];
    $atas = $_POST["atas"];
    do{
        if(($bawah + 7) % 5 ==0){
            echo '<img src="bintang.png" width="25px" height="25px" >';
        } else {
            echo "$bawah";
    }
    $bawah++;

   } 
   while ($bawah <= $atas);
}
    ?>
    
</body>
</html>