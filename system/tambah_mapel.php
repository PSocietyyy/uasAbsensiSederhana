<?php
include("../koneksi.php");

if (isset($_POST['submit'])) {
    $nama_mapel = mysqli_real_escape_string($conn, $_POST['nama_mapel']);
    $input_tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
    $waktu_mulai = mysqli_real_escape_string($conn, $_POST['waktu_mulai']);
    $waktu_selesai = mysqli_real_escape_string($conn, $_POST['waktu_selesai']);

    $tanggal_convert = date('Y-m-d', strtotime(str_replace('/', '-', $input_tanggal)));
    $tanggal = mysqli_real_escape_string($conn, $tanggal_convert);

    // Validasi sederhana
    if (empty($nama_mapel) || empty($tanggal) || empty($waktu_mulai) || empty($waktu_selesai)) {
        // Redirect ke halaman form dengan pesan error
        header("Location: ../mapel.php?error=Data tidak lengkap");
        exit;
    }

    $query = "INSERT INTO jadwal (nama_mapel, tanggal, waktu_mulai, waktu_selesai) 
              VALUES ('$nama_mapel', '$tanggal', '$waktu_mulai', '$waktu_selesai')";

    if (mysqli_query($conn, $query)) {
        header("Location: ../mapel.php?success=Jadwal berhasil ditambahkan");
        exit;
    } else {
        header("Location: ../mapel.php?error=Gagal menambahkan jadwal");
        exit;
    }
} else {
    // Redirect jika akses langsung
    header("Location: ../mapel.php");
    exit;
}
