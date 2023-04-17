<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK 403</title>
    <style>
        table {
            border-collapse: collapse;
            width: 550px;
        }
        th, td {
            border: 1px solid black;
            padding: 2px;
        }
        th {
            background-color: #D3D3D3;
        }

    </style>
</head>
<body>
    
<?php
$data = array(
    array(
        "no" => "1",
        "nama" => "Ridho",
        "mata_kuliah" => array("Pemrograman I", "Praktikum Pemrograman I", "Pengantar Lingkungan
        Lahan Basah", "Arsitektur Komputer"),
        "sks" => array(2, 1, 2,3)
    ),
    array(
        "no" => "2",
        "nama" => "Ratna",
        "mata_kuliah" => array("Basis Data I", "Praktikum Basis Data I", "Kalkulus "),
        "sks" => array(2, 1, 3)
    ),
    array(
        "no" => "3",
        "nama" => "Tono",
        "mata_kuliah" => array("Rekayasa Perangkat Lunak", "Analisis dan Perancangan
        Sistem", "Komputasi Awan", "Kecerdasan Bisnis "),
        "sks" => array(3, 3, 3, 3)
    )
);

echo "<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>";

foreach ($data as $mahasiswa) {
    $totalSks = array_sum($mahasiswa['sks']);
    $keterangan = $totalSks < 7 ? "<p style='background-color:red;'>Revisi KRS" : "<p style='background-color:green;'>Tidak Revisi";

    echo "<tr>
        <td>" . $mahasiswa['no'] . "</td>
        <td>" . $mahasiswa['nama'] . "</td>
        <td>" . $mahasiswa['mata_kuliah'][0] . "</td>
        <td>" . $mahasiswa['sks'][0] . "</td>
        <td>" . $totalSks . "</td>
        <td>" . $keterangan . "</td>
    </tr>";

    for ($i = 1; $i < count($mahasiswa['mata_kuliah']); $i++) {
        echo "<tr>
            <td></td>
            <td></td>
            <td>" . $mahasiswa['mata_kuliah'][$i] . "</td>
            <td>" . $mahasiswa['sks'][$i] . "</td>
            <td></td>
            <td></td>
        </tr>";
    }
}

echo "</table>";
?>
</body>
</html>
