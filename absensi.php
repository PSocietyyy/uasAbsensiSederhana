<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $title = "Absensi";
    include("include/head.php");
    include("koneksi.php"); // Pastikan koneksi dimasukkan
  ?>
</head>
<body class="bg-white">
  <?php
    $page = "absensi";
    include "include/sidebar.php";
  ?>

  <div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
      <h2 class="mb-4 text-xl font-bold text-gray-900 md:text-2xl">Manajemen Absensi</h2>

      <!-- =================== FORM ABSENSI =================== -->
      <section class="w-full mb-6">
        <h3 class="mb-4 text-lg font-semibold text-gray-800">Formulir Absensi</h3>
        <form action="./system/tambah_absen.php" method="post"
          class="p-4 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 bg-gray-50 rounded-lg shadow-sm">
          
          <!-- Mata Pelajaran -->
          <div class="col-span-1">
            <label for="jadwal_id" class="block text-sm font-medium text-gray-900">Mata Pelajaran</label>
            <select id="jadwal_id" name="jadwal_id" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
              <option value="" disabled selected>Pilih mata pelajaran</option>
              <?php 
                $mapelQuery = mysqli_query($conn, "SELECT * FROM jadwal");
                while($mapel = mysqli_fetch_assoc($mapelQuery)) {
                  echo "<option value='{$mapel['id']}'>{$mapel['nama_mapel']} - " . date("l, d M Y", strtotime($mapel['tanggal'])) . "</option>";
                }
              ?>
            </select>
          </div>

          <!-- Nama Siswa -->
          <div class="col-span-1">
            <label for="siswa_id" class="block text-sm font-medium text-gray-900">Nama Siswa</label>
            <select id="siswa_id" name="siswa_id" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
              <option value="" disabled selected>Pilih siswa</option>
              <?php 
                $siswaQuery = mysqli_query($conn, "SELECT * FROM siswa WHERE status='aktif'");
                while($siswa = mysqli_fetch_assoc($siswaQuery)) {
                  echo "<option value='{$siswa['id']}'>{$siswa['nama_lengkap']}</option>";
                }
              ?>
            </select>
          </div>

          <!-- Waktu Hadir -->
          <div class="col-span-1">
            <label for="waktu_hadir" class="block text-sm font-medium text-gray-900">Waktu Hadir</label>
            <div class="flex">
              <input type="time" id="waktu_hadir" name="waktu_hadir" class="rounded-none rounded-s-lg bg-white border text-gray-900 block flex-1 w-full text-sm border-gray-300 p-2.5" min="07:00" max="18:00" value="08:00" required>
              <span class="inline-flex items-center px-3 bg-gray-200 border rounded-e-md">
                <i class="ri-time-line"></i>
              </span>
            </div>
          </div>

          <!-- Status -->
          <div class="col-span-1">
            <label for="status" class="block text-sm font-medium text-gray-900">Status</label>
            <select id="status" name="status" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
              <option value="" disabled selected>Pilih status</option>
              <option value="hadir">Hadir</option>
              <option value="sakit">Sakit</option>
              <option value="izin">Izin</option>
              <option value="alpha">Alpha</option>
            </select>
          </div>

          <!-- Keterangan -->
          <div class="col-span-1 md:col-span-2">
            <label for="keterangan" class="block text-sm font-medium text-gray-900">Keterangan</label>
            <input type="text" name="keterangan" id="keterangan" placeholder="Masukkan keterangan (opsional)" class="bg-white border border-gray-300 text-sm rounded-lg block w-full p-2.5">
          </div>

          <!-- Tombol Submit -->
          <div class="col-span-1 md:col-span-2 mt-2">
            <button type="submit" class="bg-green-500 text-white px-5 py-2.5 rounded-lg w-full hover:bg-green-600">Absen</button>
          </div>
        </form>
      </section>
                <!-- =================== FORM FILTER =================== -->
<section class="w-full mt-6">
  <h3 class="mb-4 text-lg font-semibold text-gray-800">Filter Absensi</h3>
  <form method="get" class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
    <!-- Filter Nama -->
    <div>
      <label for="nama" class="block mb-1 text-sm font-medium text-gray-900">Nama Siswa</label>
      <input type="text" name="nama" id="nama" value="<?= $_GET['nama'] ?? '' ?>" class="border border-gray-300 text-sm rounded-lg block w-full p-2.5" placeholder="Cari nama...">
    </div>

    <!-- Filter Kelas -->
    <div>
      <label for="kelas" class="block mb-1 text-sm font-medium text-gray-900">Kelas</label>
      <select name="kelas" id="kelas" class="border border-gray-300 text-sm rounded-lg block w-full p-2.5">
        <option value="">Semua Kelas</option>
        <?php 
        $kelasQuery = mysqli_query($conn, "SELECT DISTINCT kelas FROM siswa");
        while($k = mysqli_fetch_assoc($kelasQuery)) {
          $selected = ($_GET['kelas'] ?? '') == $k['kelas'] ? 'selected' : '';
          echo "<option value='{$k['kelas']}' $selected>{$k['kelas']}</option>";
        }
        ?>
      </select>
    </div>

    <!-- Filter Status -->
    <div>
      <label for="status" class="block mb-1 text-sm font-medium text-gray-900">Status</label>
      <select name="status" id="status" class="border border-gray-300 text-sm rounded-lg block w-full p-2.5">
        <option value="">Semua Status</option>
        <?php 
        $statuses = ['hadir', 'sakit', 'izin', 'alpha'];
        foreach ($statuses as $status) {
          $selected = ($_GET['status'] ?? '') == $status ? 'selected' : '';
          echo "<option value='$status' $selected>" . ucfirst($status) . "</option>";
        }
        ?>
      </select>
    </div>

    <!-- Tombol -->
    <div class="flex items-end">
      <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 w-full">Terapkan</button>
    </div>
  </form>
</section>

      <!-- =================== TABEL ABSENSI =================== -->
      <section class="w-full mt-6">
        <h3 class="mb-4 text-lg font-semibold text-gray-800">Daftar Absensi</h3>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-indigo-600">
              <tr>
                <th class="px-6 py-3">Nama Siswa</th>
                <th class="px-6 py-3">Mata Pelajaran</th>
                <th class="px-6 py-3">Waktu Hadir</th>
                <th class="px-6 py-3">Status</th>
                <th class="px-6 py-3">Keterangan</th>
                <th class="px-6 py-3 text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Ambil parameter filter
              $nama = $_GET['nama'] ?? '';
              $kelas = $_GET['kelas'] ?? '';
              $status = $_GET['status'] ?? '';

              $query = "SELECT 
                  a.id AS absensi_id,
                  s.nama_lengkap,
                  s.kelas,
                  j.nama_mapel,
                  j.tanggal,
                  a.waktu_hadir,
                  a.status AS status_absensi,
                  a.keterangan
                FROM absensi a
                JOIN siswa s ON a.siswa_id = s.id
                JOIN jadwal j ON a.mapel_id = j.id
                WHERE 1=1";

              // Tambahkan filter jika ada input
              if (!empty($nama)) {
                $query .= " AND s.nama_lengkap LIKE '%" . mysqli_real_escape_string($conn, $nama) . "%'";
              }

              if (!empty($kelas)) {
                $query .= " AND s.kelas = '" . mysqli_real_escape_string($conn, $kelas) . "'";
              }

              if (!empty($status)) {
                $query .= " AND a.status = '" . mysqli_real_escape_string($conn, $status) . "'";
              }

              $query .= " ORDER BY j.tanggal DESC, a.waktu_hadir DESC";

                
                $result = mysqli_query($conn, $query);
                if ($result && mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_assoc($result)) {
              ?>
              <tr class="bg-white border-b hover:bg-gray-50">
                <td class="px-6 py-4"><?= $row['nama_lengkap'] ?></td>
                <td class="px-6 py-4">
                  <?= $row['nama_mapel'] . " - " . date("l, d F Y", strtotime($row['tanggal'])) ?>
                </td>
                <td class="px-6 py-4"><?= $row['waktu_hadir'] ?></td>
                <td class="px-6 py-4 capitalize"><?= $row['status_absensi'] ?></td>
                <td class="px-6 py-4"><?= $row['keterangan'] ?: '-' ?></td>
                <td class="px-6 py-4 flex flex-col sm:flex-row gap-2 items-center justify-center">
                  <a href="./edit_absensi.php?id=<?= $row['absensi_id'] ?>" class="text-green-600 hover:underline">Edit</a>
                  <a href="./system/hapus_absensi.php?id=<?= $row['absensi_id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?');" class="bg-red-500 px-3 py-1 rounded-md text-white hover:bg-red-600">Hapus</a>
                </td>
              </tr>
              <?php 
                  }
                } else {
                  echo '<tr><td colspan="6" class="text-center py-4 text-gray-500">Tidak ada data absensi ditemukan.</td></tr>';
                }
              ?>
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </div>

  <script src="./assets/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
