<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 105</title>
    <style>
        table{
            border: 1px solid;
        }
        th {
            border: 1px solid;
            padding: 20px;
            background-color: red;
   
        }
        td {
            border:1px solid;
        }
        </style>
</head>
<body>
    <?php

$array_samsung = ["samsung1" => "Samsung Galaxy S22", "samsung2" => "Samsung Galaxy S22+", "samsung3" => "Samsung Galaxy A03", "samsung4" => "Samsung Galaxy Xcover 5"];
    ?>

    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
</tr>
<tr>
    <td>
        <?php echo $array_samsung["samsung1"]?>
</td>
</tr>
<tr>
    <td>
        <?php echo $array_samsung["samsung2"]?>
</td>
</tr>
<tr>
    <td>
        <?php echo $array_samsung["samsung3"]?>
</td>
</tr>
<tr>
    <td>
        <?php echo $array_samsung["samsung4"]?>
</td>
</tr>
    </table>
</body>
</html>