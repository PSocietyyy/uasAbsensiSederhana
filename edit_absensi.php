<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $title = "Absensi";
      include("include/head.php");
    ?>
  </head>
  <body class="bg-white">
    <?php
    $page = "absensi";
    include "include/sidebar.php";
    ?>

    <div class="p-4 sm:ml-64">
      <div
        class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700"
      >
        <h2 class="mb-4 text-xl font-bold text-gray-900 md:text-2xl">
          Edit Absensi
        </h2>
        <section class="w-full mb-6">
          <h3 class="mb-4 text-lg font-semibold text-gray-800">
            Formulir Absensi
          </h3>
          <form
            action="#"
            method="post"
            class="p-4 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 bg-gray-50 rounded-lg shadow-sm"
          >
            <div class="col-span-1">
              <label
                for="jadwal_id"
                class="block text-sm font-medium text-gray-900"
                >Mata Pelajaran</label
              >
              <select
                id="jadwal_id"
                name="jadwal_id"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                required
              >
                <option value="" disabled selected>Pilih mata pelajaran</option>
                <option value="1">Matematika - Senin, 04 Oktober 2022</option>
                <option value="2">
                  Bahasa Indonesia - Selasa, 05 Oktober 2022
                </option>
                <option value="3">
                  Bahasa Inggris - Rabu, 06 Oktober 2022
                </option>
                <option value="4">
                  Ilmu Pengetahuan Sosial - Kamis, 07 Oktober 2022
                </option>
                <option value="5">
                  Ilmu Pengetahuan Alam - Jumat, 08 Oktober 2022
                </option>
              </select>
            </div>
            <div class="col-span-1">
              <label
                for="siswa_id"
                class="block text-sm font-medium text-gray-900"
                >Nama Siswa</label
              >
              <select
                id="siswa_id"
                name="siswa_id"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                required
              >
                <option value="" disabled selected>Pilih siswa</option>
                <option value="1">Andi Pratama</option>
                <option value="2">Budi Santoso</option>
                <option value="3">Citra Dewi</option>
                <option value="4">Dina Lestari</option>
                <option value="5">Eko Wahyu</option>
              </select>
            </div>
            <div class="col-span-1">
              <label
                for="waktu_hadir"
                class="block text-sm font-medium text-gray-900"
                >Waktu Hadir</label
              >
              <div class="flex">
                <input
                  type="time"
                  id="waktu_hadir"
                  name="waktu_hadir"
                  class="rounded-none rounded-s-lg bg-white border text-gray-900 leading-none focus:ring-blue-500 focus:border-blue-500 block flex-1 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                  min="07:00"
                  max="18:00"
                  value="08:00"
                />
                <span
                  class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-s-0 border-s-0 border-gray-300 rounded-e-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600"
                >
                  <i
                    class="ri-time-line w-4 h-4 text-gray-500 dark:text-gray-400"
                  ></i>
                </span>
              </div>
            </div>
            <div class="col-span-1">
              <label
                for="status"
                class="block text-sm font-medium text-gray-900"
                >Status</label
              >
              <select
                id="status"
                name="status"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                required
              >
                <option value="" disabled selected>Pilih status</option>
                <option value="Hadir">Hadir</option>
                <option value="Sakit">Sakit</option>
                <option value="Izin">Izin</option>
                <option value="Alpha">Alpha</option>
              </select>
            </div>
            <div class="col-span-1 md:col-span-2">
              <label
                for="keterangan"
                class="block text-sm font-medium text-gray-900"
                >Keterangan</label
              >
              <input
                type="text"
                name="keterangan"
                id="keterangan"
                placeholder="Masukkan keterangan (opsional)"
                class="bg-white border border-gray-300 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
              />
            </div>
            <div class="col-span-1 md:col-span-2 flex flex-col sm:flex-row gap-4 mt-2">
                <a href="./absensi.php" class="bg-gray-400  font-medium text-white px-5 py-2.5 rounded-lg w-full sm:w-1/2 hover:bg-gray-500 transition duration-300 ease-in-out text-center">Back</a>
              <button
                type="submit"
                class="bg-green-500 font-medium text-white px-5 py-2.5 rounded-lg w-full hover:bg-green-600 transition duration-300 ease-in-out"
              >
                Absen
              </button>
            </div>
          </form>
        </section>
      </div>
    </div>

    <script src="./assets/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  </body>
</html>