<?php
include 'koneksi.php';
    if(isset($_POST['simpan'])){
        $nama_buku = $_POST['nama_buku'];
        $judul_buku = $_POST['judul_buku'];
        $pengarang = $_POST['pengarang'];
        $tahun_terbit = $_POST['tahun_terbit'];

        $tambah = mysqli_query($koneksi,"INSERT INTO tb_katalog (id,nama_buku,judul_buku,pengarang,tahun_terbit) VALUES (NULL, '$nama_buku', '$judul_buku', '$pengarang', '$tahun_terbit')");
        if ($tambah) {
            echo "Data berhasil ditambahkan !";
        }else{
            echo "Data GAGAL ditambahkan !";
        }
    }
?>