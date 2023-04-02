<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 204</title>
</head>
<body>
    <form method="POST" action="PRAK203.php">
        Nilai : <input type="text" name="nilai"><br>
        <input type="submit" name="Konversi" value="konversi"><br><br>
</form>
<?php
    if(isset($_POST['nilai'])){
        $a=$_POST['nilai'];
        if (($a >= 1) && ($a <= 9)){
          echo "<h2><b>Hasil: Satuan<b></h2>";
        }else if(($a == 0)){
          echo "<h2><b>Hasil: Nol<b></h2>";
        }else if(($a == 1000)){
            echo "<h2><b>Hasil: Anda Menginput Melebihi Limit Bilangan<b></h2>";
        }else if (($a >= 11) && ($a <= 19)){
            echo  "<h2><b>Hasil: Belasan<b></h2>";
          } else if (($a == 10)){
            echo  "<h2><b>Hasil: Puluhan<b></h2>";
        } else if (($a >= 20) && ($a <= 99)){
            echo  "<h2><b>Hasil: Puluhan<b></h2>";
        } else if (($a >= 100) && ($a <= 999)) {
            echo  "<h2><b>Hasil: Ratusan<b></h2>";
            }
    }        

?>
</body>
</html>