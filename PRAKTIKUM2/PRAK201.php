
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 201</title>
</head>
<body>
    <form method="POST" action="PRAK201.php">
        Nama: 1<input type="text" name="nama1"><br>
        Nama: 2<input type="text" name="nama2"><br>
        Nama: 3<input type="text" name="nama3"><br>
        <input type="submit" name="Urutkan" value="Urutkan">
</form>
<?php
if(isset($_POST['nama1'],$_POST['nama2'],$_POST['nama3'])){
$Nama1 = $_POST['nama1'];
$Nama2 = $_POST['nama2'];
$Nama3 = $_POST['nama3'];

$nama_arr = array($Nama1, $Nama2, $Nama3);
    
    sort($nama_arr);

    foreach($nama_arr as $value){
        echo $value. "<br>";
    }
  }

?>


</body>
</html>