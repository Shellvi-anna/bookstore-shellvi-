<!DOCTYPE html>
<html> 
    <head>
        <title>Data Buku</title>
</head>
<body>
    <h3>Tambah Data Buku</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judulBuku" required></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" required></td>
            </tr>
</table>
<button type="submit" name="simpan" class="btn btn-primary">
    simpan</button>
</form>
</body>
</html>
