<style>
    td{
        padding: 20px;
    }
</style>

<?php
    require('koneksi.php');

    function dataBuku() {
        global $koneksi;
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");

        foreach ($buku as $bk) {
            echo "<tr>";
            echo "<td>". $bk['id_buku']."</td>";
            echo "<td>". $bk['judul_buku']."</td>";
            echo "<td>". $bk['penulis']."</td>";
            echo "<td>". $bk['penerbit']."</td>";
            echo "<td>". $bk['tahun_terbit']."</td>";
            echo "<td>"."<a href = 'FormBuku.php?id_buku=".$bk['id_buku']."' class='btn btn-primary'>Edit</a><br>";
            echo "<a href='Buku.php?id_buku=" . $bk['id_buku'] . "' class='btn btn-primary' onclick=\"return confirm('Hapus Data ?')\">Hapus</a> </td>";

            echo "</tr>";
        }

    }

    function dataMember() {
        global $koneksi;
        $member = mysqli_query($koneksi, "SELECT * FROM member");

        foreach ($member as $mb) {
            echo "<tr>";
            echo "<td>". $mb['id_member']."</td>";
            echo "<td>". $mb['nama_member']."</td>";
            echo "<td>". $mb['nomor_member']."</td>";
            echo "<td>". $mb['alamat']."</td>";
            echo "<td>". $mb['tgl_mendaftar']."</td>";
            echo "<td>". $mb['tgl_terakhir_bayar']."</td>";
            echo "<td>"."<a href = 'formmember.php?id_member=".$mb['id_member']."' class='btn btn-primary'>Edit</a><br>";
            echo "<a href='Member.php?id_member=" . $mb['id_member'] . "' class='btn btn-primary' onclick=\"return confirm('Hapus Data ?')\">Hapus</a> </td>";
            echo "</tr>";
           
            
        }
    }

    function dataPeminjaman() {
        global $koneksi;
        $peminjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");

        foreach ($peminjaman as $pj) {
            echo "<tr>";
            echo "<td>". $pj['id_peminjaman']."</td>";
            echo "<td>". $pj['tgl_pinjam']."</td>";
            echo "<td>". $pj['tgl_kembali']."</td>";
            echo "<td>"."<a href = 'formpeminjaman.php?id_peminjaman=".$pj['id_peminjaman']."' class='btn btn-primary'>Edit</a><br>";
            echo "<a href='Peminjam.php?id_Peminjam=" . $pj['id_peminjaman'] . "' class='btn btn-primary' onclick=\"return confirm('Hapus Data ?')\">Hapus</a> </td>";
            echo "</tr>";
        }
    }

    function tambahBuku($id,$judul,$penulis,$penerbit,$tahun) {
        global $koneksi;
        $sql = "INSERT INTO buku VALUES ('$id', '$judul','$penulis', '$penerbit', '$tahun')";
        $result = mysqli_query($koneksi, $sql);

        if (!empty($result)) {
            header('location:Buku.php');
        }
    }

    function tambahMember($id,$nama,$nomor,$alamat,$tgldaftar,$tglbayar) {
        global $koneksi;
        $sql = "INSERT INTO member VALUES ('$id', '$nama','$nomor', '$alamat', '$tgldaftar', '$tglbayar')";
        $result = mysqli_query($koneksi, $sql);

        if (!empty($result)) {
            header('location:Member.php');
        }
    }

    function tambahpeminjaman($id,$tglpinjam,$tglbalik) {
        global $koneksi;
        $sql = "INSERT INTO peminjaman VALUES ('$id', '$tglpinjam','$tglbalik')";
        $result = mysqli_query($koneksi, $sql);

        if (!empty($result)) {
            header('location:FormPeminjaman.php');
        }
    }

    function hapusBuku($id_buku){
        global $koneksi;
        $sql = "DELETE FROM buku WHERE id_buku = $id_buku";
        $result = mysqli_query($koneksi, $sql);
        if ($result) {
            header('location:Buku.php');
        }
    }

    function hapusMember($id_member){
        global $koneksi;
        $sql = "DELETE FROM member WHERE id_member = $id_member";
        $result = mysqli_query($koneksi, $sql);
        if ($result) {
            header('location:Member.php');
        }
    }

    function hapusPeminjaman($id_peminjaman){
        global $koneksi;
        $sql = "DELETE FROM peminjaman WHERE id_peminjaman = $id_peminjaman";
        $result = mysqli_query($koneksi, $sql);
        if ($result) {
            header('location:Peminjam.php');
        }
    }

    function editbuku(){
        global $koneksi;
        $sql = "SELECT * FROM buku WHERE id_buku =".$_GET['id_buku'];
        $result = mysqli_query($koneksi, $sql);
        $GLOBALS['result'] = $result;
    }

    function editmember(){
        global $koneksi;
        $sql = "SELECT * FROM member WHERE id_member =".$_GET['id_member'];
        $result = mysqli_query($koneksi, $sql);
        $GLOBALS['result'] = $result;
    }

    function editpeminjaman(){
        global $koneksi;
        $sql = "SELECT * FROM peminjaman WHERE id_peminjaman =".$_GET['id_peminjaman'];
        $result = mysqli_query($koneksi, $sql);
        $GLOBALS['result'] = $result;
    }

    function updatebuku($id,$judul,$penulis,$penerbit,$tahun) {
    global $koneksi;
    $sql = "UPDATE buku SET
                judul_buku = '$judul',
                penulis = '$penulis',
                penerbit = '$penerbit',
                tahun_terbit = '$tahun'
                WHERE id_buku = $id
                ";
    $result = mysqli_query($koneksi, $sql);
        if($result){
            header('location:Buku.php');
        }
    }

    function updatemember($id,$nama,$no,$alamat,$tgldaftar,$tglbayar) {
    global $koneksi;
    $sql = "UPDATE member SET
                nama_member = '$nama',
                nomor_member = '$no',
                alamat = '$alamat',
                tgl_mendaftar = '$tgldaftar',
                tgl_terakhir_bayar = '$tglbayar'
                WHERE id_member = $id
                ";
    $result = mysqli_query($koneksi, $sql);
        if($result){
            header('location:Member.php');
        }
    }
    function updatepeminjaman($id,$tglpinjam,$tglbalik) {
    global $koneksi;
    $sql = "UPDATE peminjaman SET
                tgl_pinjam = '$tglpinjam',
                tgl_kembali = '$tglbalik'
                WHERE id_peminjaman = $id
                ";
    $result = mysqli_query($koneksi, $sql);
        if($result){
            header('location:Peminjam.php');
        }
    }   
?>