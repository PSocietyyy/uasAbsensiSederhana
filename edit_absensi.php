<?php
include("koneksi.php");

// Ambil ID absensi dari URL
if (isset($_GET["id"])) {
  $id = $_GET["id"];

  $sql = "SELECT * FROM absensi WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if (!$row) {
    echo "Data tidak ditemukan!";
    exit;
  }
} else {
  header("Location: absensi.php");
  exit;
}
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $title = "Edit Absensi";
      include("include/head.php");
    ?>
  </head>
  <body class="bg-white">
    <?php
    $page = "absensi";
    include "include/sidebar.php";
    ?>

    <div class="p-4 sm:ml-64">
      <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <h2 class="mb-4 text-xl font-bold text-gray-900 md:text-2xl">Edit Absensi</h2>
        <form action="./system/edit_absensi.php" method="post" class="p-4 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 bg-gray-50 rounded-lg shadow-sm">

          <input type="hidden" name="id" value="<?= $row['id'] ?>">

          <div class="col-span-1">
            <label for="siswa_id" class="block text-sm font-medium text-gray-900">Nama Siswa</label>
            <select name="siswa_id" required class="bg-white border border-gray-300 rounded-lg p-2.5 w-full">
              <?php
              $querySiswa = "SELECT * FROM siswa";
              $siswaResult = mysqli_query($conn, $querySiswa);
              while ($s = mysqli_fetch_assoc($siswaResult)) {
                  $selected = $s['id'] == $row['siswa_id'] ? "selected" : "";
                  echo "<option value='{$s['id']}' $selected>{$s['nama_lengkap']}</option>";
              }
              ?>
            </select>
          </div>

          <div class="col-span-1">
            <label for="jadwal_id" class="block text-sm font-medium text-gray-900">Mata Pelajaran</label>
            <select name="jadwal_id" required class="bg-white border border-gray-300 rounded-lg p-2.5 w-full">
              <?php
              $queryJadwal = "SELECT * FROM jadwal";
              $jadwalResult = mysqli_query($conn, $queryJadwal);
              while ($j = mysqli_fetch_assoc($jadwalResult)) {
                  $tanggal = date("l, d F Y", strtotime($j['tanggal']));
                  $selected = $j['id'] == $row['mapel_id'] ? "selected" : "";
                  echo "<option value='{$j['id']}' $selected>{$j['nama_mapel']} - $tanggal</option>";
              }
              ?>
            </select>
          </div>

          <div class="col-span-1">
            <label for="waktu_hadir" class="block text-sm font-medium text-gray-900">Waktu Hadir</label>
            <input type="time" name="waktu_hadir" value="<?= $row['waktu_hadir'] ?>" required class="bg-white border border-gray-300 rounded-lg p-2.5 w-full" />
          </div>

          <div class="col-span-1">
            <label for="status" class="block text-sm font-medium text-gray-900">Status</label>
            <select name="status" required class="bg-white border border-gray-300 rounded-lg p-2.5 w-full">
              <?php
                $statusList = ['hadir', 'sakit', 'izin', 'alpha'];
                foreach ($statusList as $status) {
                    $selected = $row['status'] == $status ? "selected" : "";
                    echo "<option value='$status' $selected>" . ucfirst($status) . "</option>";
                }
              ?>
            </select>
          </div>

          <div class="col-span-1 md:col-span-2">
            <label for="keterangan" class="block text-sm font-medium text-gray-900">Keterangan</label>
            <input type="text" name="keterangan" value="<?= $row['keterangan'] ?>" class="bg-white border border-gray-300 rounded-lg p-2.5 w-full" />
          </div>

          <div class="col-span-1 md:col-span-2 flex flex-col sm:flex-row gap-4 mt-2">
            <a href="./absensi.php" class="bg-gray-400 text-white px-5 py-2.5 rounded-lg text-center w-full sm:w-1/2">Kembali</a>
            <button type="submit" class="bg-blue-500 text-white px-5 py-2.5 rounded-lg w-full hover:bg-blue-600 transition">Update</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
