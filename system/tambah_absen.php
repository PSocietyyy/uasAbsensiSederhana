<?php

// Panggil koneksi
include("../koneksi.php");

// Jika tombol submit diklik
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Ambil data dari form
    $siswa_id     = $_POST['siswa_id'];
    $jadwal_id    = $_POST['jadwal_id'];
    $waktu_hadir  = $_POST['waktu_hadir'];
    $status       = strtolower($_POST['status']); // ubah ke lowercase agar sesuai ENUM di DB
    $keterangan   = isset($_POST['keterangan']) ? $_POST['keterangan'] : null;

    // Validasi sederhana
    if (!$siswa_id || !$jadwal_id || !$waktu_hadir || !$status) {
        header("Location: ../absensi.php?error=invalid_input");
        exit;
    }

    // Insert ke database
    $query = "INSERT INTO absensi (siswa_id, mapel_id, waktu_hadir, status, keterangan) 
              VALUES ('$siswa_id', '$jadwal_id', '$waktu_hadir', '$status', '$keterangan')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../absensi.php?success=1");
    } else {
        // Debugging log (opsional)
        // echo "Error: " . mysqli_error($conn);
        header("Location: ../absensi.php?error=1");
    }
}
?>
