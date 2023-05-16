<?php require('model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Buku</title>
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
    <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>": "<title>Tambah Buku</title>" ?> 
</head>
<body>

<div class="container">
  <h2>Form Buku</h2>
  <form action="" method="post">
    <?php
        if( isset($_GET['id_buku']) ) {
            $sql = "SELECT * FROM buku WHERE id_buku = " . $_GET['id_buku'];
            $result = mysqli_query($koneksi, $sql);

            foreach($result as $res) :
        
    ?>
<div>
  <div class="form-group">
      <label for="nama_member">ID BUKU</label>
      <input type="text" class="form-control" name="id_buku"<?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["id_buku"] . "" : "value = '' "; ?> required><br>
    </div>
    <div class="form-group">
      <label for="nama_member">Judul Buku</label>
      <input type="text" class="form-control" name="judul_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["judul_buku"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="no_member">Penulis</label>
      <input type="text" class="form-control"  name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penulis"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="penerbit">Penerbit</label>
      <input type="text" class="form-control" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penerbit"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="tahun_terbit">Tahun Terbit</label>
      <input type="text" class="form-control" name="tahun_terbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["tahun_terbit"] . "" : "value = '' "; ?> required> <br>
    </div>
            
    <?php 
          if (isset($_GET['id_buku'])) {
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
      <label for="nama_member">ID BUKU</label>
      <input type="text" class="form-control"  name="id_buku"<?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["id_buku"] . "" : "value = '' "; ?> required><br>
    </div>
    <div class="form-group">
      <label for="nama_member">Judul Buku</label>
      <input type="text" class="form-control"  name="judul_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["judul_buku"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="no_member">Penulis</label>
      <input type="text" class="form-control"  name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penulis"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="penerbit">Penerbit</label>
      <input type="text" class="form-control"  name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penerbit"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="tahun_terbit">Tahun Terbit</label>
      <input type="text" class="form-control"   name="tahun_terbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["tahun_terbit"] . "" : "value = '' "; ?> required> <br>
    </div>
            
    <?php 
          if (isset($_GET['id_buku'])) {
              echo "<button type=\"submit\" class='btn btn-primary' name=\"update\" >Edit</button>";
          }else {
             echo "<button type=\"submit\"  name=\"submit\">Tambah</button>";   
            }
          ?>
           <?php } ?>
  </form>

<?php
    if (isset($_POST['submit'])) {
        tambahBuku($_POST['id_buku'],$_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
    if (isset($_POST['update'])) {
       updateBuku($_GET['id_buku'],$_POST['judul_buku'],$_POST['penulis'],$_POST['penerbit'],$_POST['tahun_terbit']);
    }
    ?>

</body>
</html>
