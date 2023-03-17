<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 104</title>
    <style>
        table{
            border: 1px solid;
        }
        th {
            border: 1px solid;
        }
        td {
            border: 1px solid;
        }
        </style>
</head>
<body>
    <?php
$array_samsung = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung A03", "Samsung Galaxy Xcover 5"]; // index array
    ?>

    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
</tr>
<tr>
    <td>
        <?php echo $array_samsung[0]?>
</td>
</tr>
<tr>
    <td>
        <?php echo $array_samsung[1]?>
</td>
</tr>
<tr>
    <td>
        <?php echo $array_samsung[2]?>
</td>
</tr>
<tr>
    <td>
        <?php echo $array_samsung[3]?>
</td>
</tr>
    </table>
</body>
</html>