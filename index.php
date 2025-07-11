<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $title = "Dashboard";
      include("include/head.php");
    ?>
  </head>
  <body class="bg-white">
    <?php
    $page = "dashboard";
    include "include/sidebar.php";
    ?>
    <div class="p-4 sm:ml-64">
      <!-- Content -->
      <div
        class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700"
      >
        <!-- Place Content -->
        <h2 class="mb-2 text-lg font-semibold text-gray-900">Dashboard</h2>
        <!-- Section Card -->
        <section class="grid grid-cols-3 gap-4 mb-4">
          <!-- Card  -->
          <div
            class="flex items-center justify-center h-24 border border-gray-300 rounded-sm bg-blue-500 shadow shadow-gray-300"
          >
            <div class="text-center">
              <i class="ri-group-line text-2xl md:text-3xl mb-1 text-white"></i>
              <p class="text-sm font-medium text-white">Siswa</p>
              <p class="text-lg font-semibold text-white">50</p>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card  -->
          <div
            class="flex items-center justify-center h-24 border border-gray-300 rounded-sm bg-yellow-500 shadow shadow-gray-300"
          >
            <div class="text-center">
              <i class="ri-book-line text-2xl md:text-3xl text-white mb-1"></i>
              <p class="text-sm font-medium text-white">Mapel</p>
              <p class="text-lg font-semibold text-white">20</p>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card  -->
          <div
            class="flex items-center justify-center h-24 border border-gray-300 rounded-sm bg-green-500 shadow shadow-gray-300"
          >
            <div class="text-center">
              <i class="ri-group-line text-2xl md:text-3xl text-white mb-1"></i>
              <p class="text-sm font-medium text-white">Guru</p>
              <p class="text-lg font-semibold text-white">22</p>
            </div>
          </div>
          <!-- End Card -->
        </section>
        <!-- End Card Section -->

        <!--  -->
        <section class="w-full mt-2">
          <h2 class="mb-2 text-lg font-semibold text-gray-900">Daftar Kelompok 2</h2>
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table
              class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            >
              <thead class="text-xs text-white uppercase bg-indigo-500">
                <tr>
                  <th scope="col" class="px-6 py-3">NIM</th>
                  <th scope="col" class="px-6 py-3">Nama</th>
                </tr>
              </thead>
              <tbody>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">12324147</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Ferdiansyah Pratama
                  </th>
                </tr>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">12324084</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Muhammad Alif Dzacky Saputra
                  </th>
                </tr>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">12324138</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Hasbi Fathir Ramadhan
                  </th>
                </tr>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">12324118</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Mariana Relinda Kolo
                  </th>
                </tr>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">12324052</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Aliffia refni rahmadini
                  </th>
                </tr>
                <tr
                  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                  <td class="px-6 py-4">12324132</td>
                  <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                  >
                    Nabila Putri Rahmadani
                  </th>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <!-- End Place Content -->
      </div>
      <!-- End Content -->
    </div>

    <!-- Script -->
    <script src="./assets/script.js"></script>
  </body>
</html>
