<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $title = "Siswa";
      include("include/head.php");
    ?>
  </head>
  <body class="bg-white">
    <?php
    $page = "siswa";
    include "include/sidebar.php";
    ?>

    <div class="p-4 sm:ml-64">
      <div
        class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700"
      >
        <h2 class="mb-4 text-xl font-bold text-gray-900 md:text-2xl">
          Manajemen Siswa
        </h2>
        <section class="w-full mb-6">
          <h3 class="mb-4 text-lg font-semibold text-gray-800">
            Formulir Data Siswa
          </h3>
          <form
            action="#"
            method="post"
            class="p-4 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 bg-gray-50 rounded-lg shadow-sm"
          >
            <div class="col-span-1">
              <label for="nis" class="block text-sm font-medium text-gray-900"
                >NIS</label
              >
              <input
                type="text"
                name="nis"
                id="nis"
                placeholder="Masukkan NIS"
                class="bg-white border border-gray-300 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent block w-full p-2.5"
                required
              />
            </div>

            <div class="col-span-1">
              <label
                for="nama_lengkap"
                class="block text-sm font-medium text-gray-900"
                >Nama Lengkap</label
              >
              <input
                type="text"
                name="nama_lengkap"
                id="nama_lengkap"
                placeholder="Masukkan nama lengkap"
                class="bg-white border border-gray-300 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent block w-full p-2.5"
                required
              />
            </div>

            <div class="col-span-1">
              <label for="kelas" class="block text-sm font-medium text-gray-900"
                >Kelas</label
              >
              <input
                type="text"
                name="kelas"
                id="kelas"
                placeholder="Masukkan kelas (cth: 1A/2B/3A)"
                class="bg-white border border-gray-300 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent block w-full p-2.5"
                required
              />
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
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
              >
                <option value="aktif">Aktif</option>
                <option value="tidak_aktif">Tidak Aktif</option>
                <option value="alumni">Alumni</option>
              </select>
            </div>
            <div class="col-span-1 md:col-span-2 flex flex-col sm:flex-row gap-4 mt-2">
              <button
                type="reset"
                class="bg-red-500 font-medium text-white px-5 py-2.5 rounded-lg w-full sm:w-1/2 hover:bg-red-600 transition duration-300 ease-in-out"
              >
                Reset
              </button>
              <button
                type="submit"
                class="bg-blue-500 font-medium text-white px-5 py-2.5 rounded-lg w-full sm:w-1/2 hover:bg-blue-600 transition duration-300 ease-in-out"
              >
                Tambah
              </button>
            </div>
          </form>
        </section>

        <section class="w-full mt-6">
          <h3 class="mb-4 text-lg font-semibold text-gray-800">Daftar Siswa</h3>
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table
              class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            >
              <thead class="text-xs text-white uppercase bg-indigo-600">
                <tr>
                  <th scope="col" class="px-6 py-3">NIS</th>
                  <th scope="col" class="px-6 py-3">Nama</th>
                  <th scope="col" class="px-6 py-3">Kelas</th>
                  <th scope="col" class="px-6 py-3">Status</th>
                  <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">12345</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Ferdiansyah Pratama
                  </th>
                  <td class="px-6 py-4">1A</td>
                  <td class="px-6 py-4">Aktif</td>
                  <td class="px-6 py-4 flex flex-col sm:flex-row gap-2 items-center justify-center">
                    <a
                      href="./edit_siswa.php"
                      class="text-green-600 font-semibold hover:underline text-sm sm:text-base"
                      >Edit</a
                    >
                    <a
                      href="#"
                      class="bg-red-500 px-3 py-1 rounded-md text-white font-semibold hover:bg-red-600 transition duration-300 ease-in-out text-sm"
                      >Hapus</a
                    >
                  </td>
                </tr>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">67890</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Budi Setiawan
                  </th>
                  <td class="px-6 py-4">2B</td>
                  <td class="px-6 py-4">Tidak Aktif</td>
                  <td class="px-6 py-4 flex flex-col sm:flex-row gap-2 items-center justify-center">
                    <a
                      href="#"
                      class="text-green-600 font-semibold hover:underline text-sm sm:text-base"
                      >Edit</a
                    >
                    <a
                      href="#"
                      class="bg-red-500 px-3 py-1 rounded-md text-white font-semibold hover:bg-red-600 transition duration-300 ease-in-out text-sm"
                      >Hapus</a
                    >
                  </td>
                </tr>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">11111</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Ani Wahyu
                  </th>
                  <td class="px-6 py-4">3A</td>
                  <td class="px-6 py-4">Alumni</td>
                  <td class="px-6 py-4 flex flex-col sm:flex-row gap-2 items-center justify-center">
                    <a
                      href="#"
                      class="text-green-600 font-semibold hover:underline text-sm sm:text-base"
                      >Edit</a
                    >
                    <a
                      href="#"
                      class="bg-red-500 px-3 py-1 rounded-md text-white font-semibold hover:bg-red-600 transition duration-300 ease-in-out text-sm"
                      >Hapus</a
                    >
                  </td>
                </tr>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">22222</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Rizki Pratama
                  </th>
                  <td class="px-6 py-4">3B</td>
                  <td class="px-6 py-4">Aktif</td>
                  <td class="px-6 py-4 flex flex-col sm:flex-row gap-2 items-center justify-center">
                    <a
                      href="#"
                      class="text-green-600 font-semibold hover:underline text-sm sm:text-base"
                      >Edit</a
                    >
                    <a
                      href="#"
                      class="bg-red-500 px-3 py-1 rounded-md text-white font-semibold hover:bg-red-600 transition duration-300 ease-in-out text-sm"
                      >Hapus</a
                    >
                  </td>
                </tr>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">33333</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Adi Nugraha
                  </th>
                  <td class="px-6 py-4">4A</td>
                  <td class="px-6 py-4">Tidak Aktif</td>
                  <td class="px-6 py-4 flex flex-col sm:flex-row gap-2 items-center justify-center">
                    <a
                      href="#"
                      class="text-green-600 font-semibold hover:underline text-sm sm:text-base"
                      >Edit</a
                    >
                    <a
                      href="#"
                      class="bg-red-500 px-3 py-1 rounded-md text-white font-semibold hover:bg-red-600 transition duration-300 ease-in-out text-sm"
                      >Hapus</a
                    >
                  </td>
                </tr>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">44444</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Sri Wahyuni
                  </th>
                  <td class="px-6 py-4">4B</td>
                  <td class="px-6 py-4">Alumni</td>
                  <td class="px-6 py-4 flex flex-col sm:flex-row gap-2 items-center justify-center">
                    <a
                      href="#"
                      class="text-green-600 font-semibold hover:underline text-sm sm:text-base"
                      >Edit</a
                    >
                    <a
                      href="#"
                      class="bg-red-500 px-3 py-1 rounded-md text-white font-semibold hover:bg-red-600 transition duration-300 ease-in-out text-sm"
                      >Hapus</a
                    >
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        </div>
      </div>

    <script src="./assets/script.js"></script>
  </body>
</html>