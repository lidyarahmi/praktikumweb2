<!DOCTYPE html>
<html>
<head>
	<title>Program Banyak Input</title>

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
