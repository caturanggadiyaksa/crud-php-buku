<html>

<head>
    <title>MVC OOP PHP</title>
</head>

<body>
    <table border="1" cellpadding="5" cellspacing="0" align="center">
        <tr align="center">
            <td>Kode Buku</td>
            <td>Nama Buku</td>
            <td>Pengarang</td>
            <td>Penerbit</td>
            <td>Tahun Terbit</td>
            <td>Cover Buku</td>
            <td colspan="2">Aksi</td>
        </tr>
        <?php while ($row = $this->model->fetch($data)) { ?>
            <tr>
                <td><?php echo $row['kode_buku'] ?></td>
                <td><?php echo $row['nama_buku'] ?></td>
                <td><?php echo $row['pengarang'] ?></td>
                <td><?php echo $row['penerbit'] ?></td>
                <td><?php echo $row['tahun_terbit'] ?></td>
                <?php
                if ($row['cover'] != "") { ?>
                    <td><img src="<?php echo $row['cover']; ?>" width="50" height="50"></td>
                <?php } else { ?>
                    <td>Kosong</td>
                <?php } ?>
                <td><a href='index.php?eb=<?php echo $row['kode_buku'] ?>'>Edit</a>
                    <a href='index.php?db=<?php echo $row['kode_buku'] ?>' onClick="return confirm ('Hapus Data?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <center><a href='index.php?ib=tambah_buku'>Tambah Data Buku</a> |
        <a href='index.php?home'>Homepage</a>
    </center>
</body>

</html>