<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PRAK 301</title>
</head>
<body>
<form action="" method="post">
 	<label>Jumlah Peserta</label>
	<input type="text" name="jumlah">
 	<br>
 	<input type="submit" value="Cetak" name="cetak">
 </form>

	<?php
	if(isset($_POST["cetak"])) {
		$i =1;
		$number = $_POST['jumlah'];
		while($i <= $number){
			if($i%2 !=0){
				echo "<br><font color='red'>Peserta ke-$i</font><br>";
			}else{
				echo "<br><font color='green'>Peserta ke-$i</font><br>";
			}
			$i++;
			}
		}
	?>
</body>
</html>
