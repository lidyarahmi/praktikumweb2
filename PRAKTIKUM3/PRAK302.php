<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>
<body>
    <form method="post" action="">
    <label>Tinggi</label>
    <input type="text" name="Tinggi"><br>
    <label>Alamat Gambar : </label>
    <input type="url" name="alamat"><br>
    <input type="submit" value="Cetak" name="cetak">
</form>
<?php
	if(isset($_POST["cetak"])){
        $tinggi = $_POST['Tinggi'];
        $alamat = $_POST['alamat'];
        
        $i = 1;
            while($i<=$tinggi){
        $a = 1;
            while($a <= $i){
            echo " &nbsp&nbsp&nbsp&nbsp";
        $a++;
        }
        $c = $tinggi;
            while($c >= $i){
             echo '<img src="'.$alamat.'" width="20px" height = "20px">'; 
        $c--;
        }
            echo "<br>";
        $i++;
    }
    }
        ?>
</body>
</html>