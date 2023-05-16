<?php 
require('model.php');
if (isset($_GET['id_member'])){
    hapusMember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku Perpus</title>
    <style>
        body { 
            margin:auto;
        }
        table{
            border-collapse: collapse;
            margin: auto;
        }
        tr{
            border: black;
        }
        th{
            background-color: aqua;
            padding: 30px;
            border: 1px solid;
            font-size: 30px;
        }
        td{
            background-color: #E8E8E8;
            padding: 30px;
            text-align: center;
            border: 1px solid;
            font-size: 20px;
        }

        h1{
            text-align: center;
            margin-top: 10%;
            font-size: 70px;
        }

        .btn a{
            color: white;
        }

        .tab-bot td{
            background-color: white;
        }
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body >
<nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #03A9F4;">
    DATA MEMBER
</nav>
    <table>
        <thead class="tab-head">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Setting</th>
            </tr>
        </thead>
        <tbody class="tab-body">
        <?php
        dataMember()?>
        </tbody>
        <tfoot class="tab-bot">
            <tr>
                <td>
                <button type="button" class="btn btn-primary"><a href="FormMember.php">TAMBAH BUKU</a></button>
                </td>
                <td>
                <button type="button" class="btn btn-primary"><a href="Index.php">KEMBALI</a></button>
                </td>
            </tr>
            </tfoot>
    </table>
    <br></br>
</body>
</html>
