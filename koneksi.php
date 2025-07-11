<?php

// Variabel untuk koneksi ke database
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "absensi_sekolah";

// Membuat koneksi ke database
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
// $conn adalah koneksi ke database yang akan digunakan untuk query SQL

// Mengecek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}