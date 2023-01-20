<html>

<head>
    <title>MVC OOP PHP</title>
</head>

<body>
    <fieldset>
        <center><b>
                <h3>MVC OOP PHP Edit Buku</h3>
            </b></center>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group" style="margin-bottom: 15px">
                <label for="nama">Nama Buku :</label>
                <input type="text" name="nm_buku" value="<?php echo $row[1] ?>">
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="pengarang">Pengarang Buku :</label>
                <input type="text" name="pg_buku" value="<?php echo $row[2] ?>">
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="penerbit">Penerbit Buku :</label>
                <input type="text" name="pn_buku" value="<?php echo $row[3] ?>">
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="tahun">Tahun Terbit Buku :</label>
            </div>
            <input type="text" name="thn_buku" value="<?php echo $row[4] ?>">
            <div class="form-group" style="margin-bottom: 15px">
                <label for="tahun">Upload Cover :</label>
                <input type="file" name="cover">
            </div>
            <input type="hidden" name="kdb" value="<?= $row[0] ?>">
            <input type="submit" name="submit" /> <a href="index.php?idb=index_buku">Kembali</a>
        </form>
    </fieldset>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $main = new controller();
    $main->update_buku();
}
?>