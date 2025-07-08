<?php

// Panggil koneksi
include("../koneksi.php");

// Jika ada parameter id di url
if(isset($_GET['id'])){
    // Ambil id dari url
    $id = $_GET['id'];

    // query ke database
    $sql = "DELETE FROM siswa WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    // Jika berhasil
    if($result) {
        // Pindah ke halaman siswa
        header("Location: ../siswa.php");
    } else { // jika gagal
        header("Location: ../siswa.php");
    }
}