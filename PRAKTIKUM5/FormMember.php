<?php require('model.php');
if (isset($_GET['id_member'])) {
    editmember();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Member</title>
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
    <?php echo (isset($_GET['id_member'])) ? "<title>Edit Buku</title>": "<title>Tambah Buku</title>" ?> 
</head>
<body>

<div class="container">
  <h2>Form Member</h2>
  <form action="" method="post">
    <?php
        if( isset($_GET['id_member']) ) {
            $sql = "SELECT * FROM member WHERE id_member = " . $_GET['id_member'];
            $result = mysqli_query($koneksi, $sql);

            foreach($result as $res) :
        
    ?>
<div>
  <div class="form-group">
      <label for="nama_member">ID Member</label>
      <input type="text" class="form-control" name="id_member"<?php echo (isset($_GET['id_member'])) ?  "value = " . $res["id_member"] . "" : "value = '' "; ?> required><br>
    </div>
    <div class="form-group">
      <label for="nama_member">Nama Member</label>
      <input type="text" class="form-control" name="nama_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nama_member"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="no_member">Nomor Member</label>
      <input type="text" class="form-control"  name="nomor_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nomor_member"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["alamat"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="tahun_terbit">Tanggal Bayar</label>
      <input type="text" class="form-control" name="tgl_mendaftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="tahun_terbit">Tahun Terakhir Bayar</label>
      <input type="text" class="form-control" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br>
    </div>
            
    <?php 
          if (isset($_GET['id_member'])) {
              echo "<button type=\"submit\" class='btn btn-primary' name=\"update\" >Edit</button>";
          }else {
             echo "<button type=\"submit\" name=\"submit\" >Tambah</button>";   
               }
          ?>
    </div>
       <?php 
            endforeach; 
        } else {
            ?>
          <div>
  <div class="form-group">
      <label for="nama_member">ID Member</label>
      <input type="text" class="form-control" name="id_member"<?php echo (isset($_GET['id_member'])) ?  "value = " . $res["id_member"] . "" : "value = '' "; ?> required><br>
    </div>
    <div class="form-group">
      <label for="nama_member">Nama Member</label>
      <input type="text" class="form-control" name="nama_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nama_member"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="no_member">Nomor Member</label>
      <input type="text" class="form-control"  name="nomor_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nomor_member"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" class="form-control" name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["alamat"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="tahun_terbit">Tanggal Bayar</label>
      <input type="datetime-local" class="form-control" name="tgl_mendaftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br>
    </div>
    <div class="form-group">
      <label for="tahun_terbit">Tahun Terakhir Bayar</label>
      <input type="date" class="form-control" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br>
    </div>
            
    <?php 
          if (isset($_GET['id_member'])) {
              echo "<button type=\"submit\" class='btn btn-primary' name=\"update\" >Edit</button>";
          }else {
             echo "<button type=\"submit\"  name=\"submit\">Tambah</button>";   
            }
          ?>
           <?php } ?>
  </form>

<?php
    if (isset($_POST['submit'])) {
        tambahMember($_POST['id_member'],$_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'],$_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['update'])) {
       updateMember($_GET['id_member'],$_POST['nama_member'],$_POST['nomor_member'],$_POST['alamat'],$_POST['tgl_mendaftar'],$_POST['tgl_terakhir_bayar']);
    }
    ?>

</body>
</html>
