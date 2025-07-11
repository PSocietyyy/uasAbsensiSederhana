<?php

// Panggil koneksi
include("../koneksi.php");

// Jika ada parameter id di url
if(isset($_GET['id'])){
    // Ambil id dari url
    $id = $_GET['id'];

    // query ke database
    $sql = "DELETE FROM absensi WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    // Jika berhasil
    if($result) {
        // Pindah ke halaman siswa
        header("Location: ../absensi.php");
    } else { // jika gagal
        header("Location: ../absensi.php");
    }
}