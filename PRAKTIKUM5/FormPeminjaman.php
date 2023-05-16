<?php require('model.php');
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Pinjam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    h2{
        text-align: center;
    }
    </style>
    <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Edit Buku</title>": "<title>Tambah Buku</title>" ?> 
</head>
<body>

<div class="container">
  <h2>Form Pinjam</h2>
  <form action="" method="post">
    <?php
        if( isset($_GET['id_peminjaman']) ) {
            $sql = "SELECT * FROM peminjaman WHERE id_peminjaman = " . $_GET['id_peminjaman'];
            $result = mysqli_query($koneksi, $sql);

            foreach($result as $res) :
        
    ?>
<div>
    <div class="form-group">
      <label for="nama_member">ID</label>
      <input type="text" class="form-control" name="id_peminjaman"<?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["id_peminjaman"] . "" : "value = '' "; ?> required><br>
    </div>
    <div class="form-group">
      <label for="nama_member">Tanggal Meminjam</label>
      <input type="text" class="form-control" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_pinjam"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="no_member">Tanggal Kembali</label>
      <input type="text" class="form-control"  name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_kembali"] . "" : "value = '' "; ?> required> <br>
    </div>
            
    <?php 
          if (isset($_GET['id_peminjaman'])) {
              echo "<button type=\"submit\" class='btn btn-primary' name=\"update\" >Edit</button>";
          }else {
             echo "<button type=\"submit\" name=\"submit\">Tambah</button>";   
               }
          ?>
    </div>
       <?php 
            endforeach; 
        } else {
        ?>
          <div class="form-group">
      <label for="nama_member">ID</label>
      <input type="text" class="form-control" name="id_peminjaman"<?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["id_peminjaman"] . "" : "value = '' "; ?> required><br>
    </div>
    <div class="form-group">
      <label for="nama_member">Tanggal Meminjam</label>
      <input type="text" class="form-control" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_pinjam"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="no_member">Tanggal Kembali</label>
      <input type="text" class="form-control"  name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $res["tgl_kembali"] . "" : "value = '' "; ?> required> <br>
    </div>
            
    <?php 
          if (isset($_GET['id_peminjaman'])) {
              echo "<button type=\"submit\" name=\"update\" >Edit</button>";
          }else {
             echo "<button type=\"submit\" class='btn btn-primary' name=\"submit\">Tambah</button>";   
            }
          ?>
           <?php } ?>
  </form>

<?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_peminjaman'],$_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_GET['id_peminjaman'],$_POST['tgl_pinjam'],$_POST['tgl_kembali']);
    }
    ?>

    
</body>
</html>
