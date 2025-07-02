<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $title = "Mata Pelajaran";
      include("include/head.php");
    ?>
  </head>
  <body class="bg-white">
    <?php
    $page = "mapel";
    include "include/sidebar.php";
    ?>

    <div class="p-4 sm:ml-64">
      <div
        class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700"
      >
        <h2 class="mb-4 text-xl font-bold text-gray-900 md:text-2xl">
          Manajemen Mata Pelajaran
        </h2>
        <section class="w-full mb-6">
          <h3 class="mb-4 text-lg font-semibold text-gray-800">
            Formulir Mata Pelajaran
          </h3>
          <form
            action="#"
            method="post"
            class="p-4 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 bg-gray-50 rounded-lg shadow-sm"
          >
            <div class="col-span-1">
              <label
                for="nama_mapel"
                class="block text-sm font-medium text-gray-900"
                >Nama Mata Pelajaran</label
              >
              <input
                type="text"
                name="nama_mapel"
                id="nama_mapel"
                placeholder="Masukkan nama mata pelajaran"
                class="bg-white border border-gray-300 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent block w-full p-2.5"
                required
              />
            </div>

            <div class="col-span-1">
              <label
                for="default-datepicker"
                class="block text-sm font-medium text-gray-900"
                >Tanggal</label
              >
              <div class="relative w-full">
                <div
                  class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"
                >
                  <svg
                    class="w-4 h-4 text-gray-500 dark:text-gray-400"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
                    />
                  </svg>
                </div>
                <input
                  datepicker
                  id="default-datepicker"
                  type="text"
                  name="tanggal"
                  class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                  placeholder="Pilih tanggal"
                />
              </div>
            </div>

            <div class="col-span-1">
              <label
                for="waktu_mulai"
                class="block text-sm font-medium text-gray-900"
                >Waktu Mulai</label
              >
              <div class="flex">
                <input
                  type="time"
                  id="waktu_mulai"
                  class="rounded-none rounded-s-lg bg-white border text-gray-900 leading-none focus:ring-blue-500 focus:border-blue-500 block flex-1 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                  min="00:00"
                  max="23:59"
                  value="00:00"
                  name="waktu_mulai"
                  required
                />
                <span
                  class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-s-0 border-s-0 border-gray-300 rounded-e-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600"
                >
                  <svg
                    class="w-4 h-4 text-gray-500 dark:text-gray-400"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </span>
              </div>
            </div>

            <div class="col-span-1">
              <label
                for="waktu_selesai"
                class="block text-sm font-medium text-gray-900"
                >Waktu Selesai</label
              >
              <div class="flex">
                <input
                  type="time"
                  id="waktu_selesai"
                  class="rounded-none rounded-s-lg bg-white border text-gray-900 leading-none focus:ring-blue-500 focus:border-blue-500 block flex-1 w-full text-sm border-gray-300 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                  min="00:00"
                  max="23:59"
                  value="00:00"
                  name="waktu_selesai"
                  required
                />
                <span
                  class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-s-0 border-s-0 border-gray-300 rounded-e-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600"
                >
                  <svg
                    class="w-4 h-4 text-gray-500 dark:text-gray-400"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </span>
              </div>
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
          <h3 class="mb-4 text-lg font-semibold text-gray-800">Daftar Mata Pelajaran</h3>
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table
              class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            >
              <thead class="text-xs text-white uppercase bg-indigo-600">
                <tr>
                  <th scope="col" class="px-6 py-3">Nama Mapel</th>
                  <th scope="col" class="px-6 py-3">Tanggal</th>
                  <th scope="col" class="px-6 py-3">Waktu Mulai</th>
                  <th scope="col" class="px-6 py-3">Waktu Selesai</th>
                  <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">Matematika</td>
                  <td class="px-6 py-4 whitespace-nowrap">Senin, 04 Oktober 2022</td>
                  <td class="px-6 py-4">08:00</td>
                  <td class="px-6 py-4">09:00</td>
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
                  <td class="px-6 py-4">Bahasa Indonesia</td>
                  <td class="px-6 py-4 whitespace-nowrap">Selasa, 05 Oktober 2022</td>
                  <td class="px-6 py-4">08:00</td>
                  <td class="px-6 py-4">09:00</td>
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
                  <td class="px-6 py-4">Bahasa Inggris</td>
                  <td class="px-6 py-4 whitespace-nowrap">Rabu, 06 Oktober 2022</td>
                  <td class="px-6 py-4">08:00</td>
                  <td class="px-6 py-4">09:00</td>
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
                  <td class="px-6 py-4">Ilmu Pengetahuan Sosial</td>
                  <td class="px-6 py-4 whitespace-nowrap">Kamis, 07 Oktober 2022</td>
                  <td class="px-6 py-4">08:00</td>
                  <td class="px-6 py-4">09:00</td>
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
                  <td class="px-6 py-4">Ilmu Pengetahuan Alam</td>
                  <td class="px-6 py-4 whitespace-nowrap">Jumat, 08 Oktober 2022</td>
                  <td class="px-6 py-4">08:00</td>
                  <td class="px-6 py-4">09:00</td>
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
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  </body>
</html>