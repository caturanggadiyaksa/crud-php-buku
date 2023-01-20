<?php
//pembuatan kode buku otomatis
$r = $this->model->fetch($data);
$kode = substr($r['kode'], 3, 8);
$tambah = $kode + 1;

if ($tambah < 10) {
    $id = "BK" . "000" . $tambah;
} else {
    $id = "BK" . "0000" . $tambah;
}
?>
<html>

<head>
    <title>MVC OOP PHP</title>
</head>

<body>
    <fieldset>
        <center><b>
                <h3>MVC OOP PHP Tambah Buku</h3>
            </b></center>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group" style="margin-bottom: 15px"> <label for="kode">Kode Buku :</label>
                <input type="text" name="kd_buku" value="<?php echo $id ?>" readonly>
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="nama">Nama Buku :</label>
                <input type="text" name="nm_buku">
            </div>
            <div class="form-group" style="margin-bottom: 15px"> <label for="pengarang">Pengarang Buku :</label>
                <input type="text" name="pg_buku">
            </div>
            <div class="form-group" style="margin-bottom: 15px"> <label for="penerbit">Penerbit Buku :</label>
                <input type="text" name="pn_buku">
            </div>
            <div class="form-group" style="margin-bottom: 15px"> <label for="tahun">Tahun Terbit Buku :</label>
                <input type="text" name="thn_buku">
            </div>
            <div class="form-group" style="margin-bottom: 15px"> <label for="tahun">Upload Cover :</label>
                <input type="file" name="cover">
            </div>
            <input type="submit" name="submit" /> 
            <a href="index.php?id=index_buku">Kembali</a>
        </form>
    </fieldset>
</body>

</html>
<?php
$main = new controller();

if (isset($_POST['submit'])) {

    $main->insert_buku();
}

?>