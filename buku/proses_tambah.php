<?php
session_start();
include("../koneksi.php");
if(isset($_POST['simpan'])){
    $buku_id = $_POST['id'];
    $judulBuku = $_POST['judulBuku'];
    $penulis = $_POST['penulis'];
    $harga = $_POST['harga'];
    $sql = "INSERT INTO buku
            (buku_id, judulBuku, penulis, harga)
            VALUES ('$buku_id', '$judulBuku', '$penulis', '$harga')";
            $query = mysqli_query($db,$sql);
            if($query){
                $_SESSION['notifikasi'] = "Data buku berhasil ditambahkan!";
            } else {
                $SESSION['notifikasi'] = "Data buku gagal ditambahkan!";
            }
            header('Location: indexx.php');
        } else {
            die("Akses ditolak...");
}
?>