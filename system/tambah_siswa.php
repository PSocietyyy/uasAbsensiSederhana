<?php

// Panggil koneksi
include("../koneksi.php");

// Jika tombol submit diklik
if(isset($_POST["submit"])){
    // Menangkap semua request dan memasukan ke variabel
    $nis = $_POST["nis"];
    $nama_lengkap = $_POST["nama_lengkap"];
    $kelas = $_POST["kelas"];
    $status = $_POST["status"];

    // Query ke database untuk memasukan data
    $query = "INSERT INTO siswa(nis, nama_lengkap, kelas, status) VALUES('$nis', '$nama_lengkap', '$kelas', '$status')";
    $result = mysqli_query($conn, $query);
    // Jika berhasil
    if($result) {
        // Pindah ke halaman siswa
        header("Location: ../siswa.php");
    } else { // jika gagal
        header("Location: ../siswa.php");
    }
}