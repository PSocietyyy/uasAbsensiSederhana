<?php
// Panggil koneksi
include("../koneksi.php");

// Jika tombol submit diklik
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nama_mapel = mysqli_real_escape_string($conn, $_POST['nama_mapel']);
    $input_tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
    $waktu_mulai = mysqli_real_escape_string($conn, $_POST['waktu_mulai']);
    $waktu_selesai = mysqli_real_escape_string($conn, $_POST['waktu_selesai']);

    // Format tanggal ke YYYY-MM-DD
    $tanggal_convert = date('Y-m-d', strtotime(str_replace('/', '-', $input_tanggal)));
    $tanggal = mysqli_real_escape_string($conn, $tanggal_convert);

    // Update query
    $query = "UPDATE jadwal 
              SET nama_mapel='$nama_mapel', tanggal='$tanggal', waktu_mulai='$waktu_mulai', waktu_selesai='$waktu_selesai' 
              WHERE id='$id'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../mapel.php?success=Jadwal berhasil diupdate");
    } else {
        header("Location: ../mapel.php?error=Gagal update jadwal");
    }
}
?>
