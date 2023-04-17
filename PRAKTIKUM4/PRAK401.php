<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 401</title>
</head>
<body>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label>Panjang :</label>
        <input type="text" id="panjang" name="panjang"><br>
        <label>Lebar :</label>
        <input type="text" id="lebar" name="lebar"><br>
        <label>Nilai :</label>
        <input type="text" id="nilai" name="nilai"><br>
        <input type="submit" value="Cetak" name="submit">
    </form>
<br><br>
    <?php
    if(isset($_POST["submit"])){
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $nilai = explode(" ", $_POST["nilai"]);
        if (count($nilai) != $panjang * $lebar) {
            echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
        } else {
            echo "<table>";
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . $nilai[$i * $lebar + $j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>

</body>
</html>
