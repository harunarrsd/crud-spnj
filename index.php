<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>
<body>
    <form action="proses_tambah_data.php" method="post">
        Nama Buku :
        <input type="text" name="nama_buku" placeholder="Nama Buku"><br>
        Judul Buku :
        <input type="text" name="judul_buku" placeholder="Judul Buku"><br>
        Pengarang :
        <input type="text" name="pengarang" placeholder="Pengarang"><br>
        Tahun Terbit :
        <input type="text" name="tahun_terbit" placeholder="Tahun Terbit"><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>