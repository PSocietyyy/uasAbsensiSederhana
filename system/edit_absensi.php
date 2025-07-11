<?php

include("../koneksi.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id           = $_POST['id'];
    $siswa_id     = $_POST['siswa_id'];
    $jadwal_id    = $_POST['jadwal_id'];
    $waktu_hadir  = $_POST['waktu_hadir'];
    $status       = strtolower($_POST['status']);
    $keterangan   = isset($_POST['keterangan']) ? $_POST['keterangan'] : null;

    if (!$id || !$siswa_id || !$jadwal_id || !$waktu_hadir || !$status) {
        header("Location: ../absensi.php?error=invalid_input");
        exit;
    }

    $query = "UPDATE absensi SET 
                siswa_id = '$siswa_id',
                mapel_id = '$jadwal_id',
                waktu_hadir = '$waktu_hadir',
                status = '$status',
                keterangan = '$keterangan'
              WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../absensi.php?update=success");
    } else {
        header("Location: ../absensi.php?update=failed");
    }
}
?>
