<?php
    include 'koneksi.php';
    $sql = mysqli_query($koneksi,"SELECT * FROM tb_katalog");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Buku</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while ($row = mysqli_fetch_array($sql)) {
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nama_buku'];?></td>
                <td><?php echo $row['judul_buku'];?></td>
                <td><?php echo $row['pengarang'];?></td>
                <td><?php echo $row['tahun_terbit'];?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>