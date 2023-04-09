<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
    <form method="post" action="">
        <label>Contoh Program:</label><br>
        <input type="text" name="karakter">
        <input type="submit" value="submit" name="submit">
</form>
<?php
    if(isset($_POST["submit"])){
            $karakter = $_POST['karakter'];
            $arr = str_split($karakter);
    for( $i = 1; $i <= count($arr); $i = $i + 1 ) {
        for( $j = 1; $j <= count($arr); $j = $j + 1 ) {
            if( $j == 1 ) {
            echo strtoupper($arr[$i-1]);
        } else {
            echo strtolower($arr[$i-1]);
            }
        }
    }
}
?>
</body>
</html>