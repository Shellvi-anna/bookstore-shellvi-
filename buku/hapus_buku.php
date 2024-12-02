<?php
session_start(); 
include("../koneksi.php");

if (isset($_GET['id'])) {
    
    $buku_id = $_GET['id'];

    $sql = "DELETE FROM buku WHERE buku_id=$buku_id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data buku berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data buku gagal dihapus!";
    }

    header('Location: indexx.php');
} else {
  
    die("Akses ditolak...");
}
?>