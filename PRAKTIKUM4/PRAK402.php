<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 402</title>
</head>
<body>
    
 <style>
    table, tr, td, th {
    border-collapse: collapse;
    border: 1px solid;
    padding: 4px;
 }
    table{
    width:500px;
 }
    th{
     text-align: left;
    background-color: #D3D3D3;
 }
 </style>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
 <?php
// Data input
$data = [
    ["Nama" => "Andi", "Nim" => "2101001", "uts" => 87, "uas" => 65],
    ["Nama" => "Budi", "Nim" => "2101002", "uts" => 76, "uas" => 79],
    ["Nama" => "Tono", "Nim" => "2101003", "uts" => 50, "uas" => 41],
    ["Nama" => "Jessica", "Nim" => "2101004", "uts" => 60, "uas" => 75]
    ];

    for ($i=0; $i < count($data); $i++) { 
        $data[$i]["akhir"] = $data[$i]["uts"] * 0.4 + $data[$i]["uas"] * 0.6;
        if($data[$i]["akhir"] >= 80){
            $data[$i]["huruf"] = "A";
        } elseif($data[$i]["akhir"] > 70){
            $data[$i]["huruf"] = "B";
        } elseif($data[$i]["akhir"] > 60){
            $data[$i]["huruf"] = "C";
        } elseif($data[$i]["akhir"] > 50){
            $data[$i]["huruf"] = "D";
        } else{
         $data[$i]["huruf"] = "E";
        }
        }
       ?>
 <?php
        for ($i=0; $i < count($data); $i++) { 
        echo "<tr>";
        echo "<td>".$data[$i]["Nama"]."</td>";
        echo "<td>".$data[$i]["Nim"]."</td>";
        echo "<td>".$data[$i]["uts"]."</td>";
        echo "<td>".$data[$i]["uas"]."</td>";
        echo "<td>".$data[$i]["akhir"]."</td>";
         echo "<td>".$data[$i]["huruf"]."</td>";
        echo "</tr>";
 } 

 ?>
 </table>
</body>
</html>