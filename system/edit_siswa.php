<?php
// Panggil koneksi
include("../koneksi.php");

// Jika tombol submit diklik
if(isset($_POST['submit'])) {
    // Ambil data dari form dan memasukan ke variabel
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $kelas = $_POST['kelas'];
    $status = $_POST['status'];

    $query = "UPDATE siswa SET nis='$nis', nama_lengkap='$nama_lengkap', kelas='$kelas', status='$status' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // Jika berhasil
    if($result) {
        // Pindah ke halaman siswa
        header("Location: ../siswa.php");
    } else { // jika gagal
        header("Location: ../siswa.php");
    }
}

?>