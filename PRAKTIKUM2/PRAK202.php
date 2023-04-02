<?php

if ($_POST) {

	$nama = $nim = $jeniskelamin ='';

	if (empty($_POST['nama'])) {
		$namaError = 'nama tidak boleh kosong "<br>" ';
	} else {
		$nama = trim(htmlspecialchars($_POST['nama']));
	}

	if (empty($_POST['nim'])) {
		$nimError = 'nim tidak boleh kosong "<br>" ' ;
	} else {
		$nim = trim(htmlspecialchars($_POST['nim']));
	}

	if (empty($_POST['jeniskelamin'])) {
		$jkError = 'jenis kelamin tidak boleh kosong  "<br>"';
	} else {
		$jeniskelamin = trim(htmlspecialchars($_POST['jeniskelamin']));
	}
}

?>
<html>
<head>
	<title>PRAK 202</title>
	<style type="text/css">
		.error {
			color:red;
		}
	</style>
</head>
<body>

<form method="POST" action="">
		
		Nama: <input type="text" name="nama">*<br>
		<span class="error"><?php if (isset($namaError)) echo $namaError ?></span>
				
		Nim: <input type="text" name="nim">*<br>
		<span class="error"><?php if (isset($nimError))  echo $nimError?></span>
		
        Jenis Kelamin * <br>
		<span class="error"><?php if (isset($jkError)) echo $jkError ?></span>
		<input type="radio" name="jeniskelamin" id="laki-laki" value="laki-laki">
        <label for="laki-laki">Laki-laki</label><br>
        <input type="radio" name="jeniskelamin" id="perempuan" value="perempuan">
        <label for="laki-laki">Perempuan</label><br>
        

        <input type="submit" name="submit">
</form>

<?php
	if($_POST){
 	echo $_POST['nama']."<br>";
 	echo $_POST['nim']."<br>";
 	if(isset($_POST['jeniskelamin'])){
 	$jeniskelamin = $_POST['jeniskelamin'];
 	echo $jeniskelamin;
 }
}
?>



</body>
</html>