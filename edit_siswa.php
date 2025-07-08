<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $title = "Siswa Edit";
      include("include/head.php");
    ?>
  </head>
  <body class="bg-white">
    <?php
    $page = "siswa";
    include "include/sidebar.php";
    if(isset($_GET["id"])) {
      $id = $_GET["id"];

      $sql = "SELECT * FROM siswa WHERE id='$id'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
    }
    ?>

    <div class="p-4 sm:ml-64">
      <div
        class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700"
      >
        <h2 class="mb-4 text-xl font-bold text-gray-900 md:text-2xl">
          Edit Siswa
        </h2>
        <section class="w-full mb-6">
          <h3 class="mb-4 text-lg font-semibold text-gray-800">
            Formulir Data Siswa
          </h3>
          <form
            action="./system/edit_siswa.php"
            method="post"
            class="p-4 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 bg-gray-50 rounded-lg shadow-sm"
          >
          <input type="hidden" name="id" id="id" value="<?php echo $row["id"]; ?>">
            <div class="col-span-1">
              <label for="nis" class="block text-sm font-medium text-gray-900"
                >NIS</label
              >
              <input
                type="text"
                name="nis"
                id="nis"
                value="<?php echo $row["nis"]; ?>"
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
                value="<?php echo $row["nama_lengkap"]; ?>"
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
                value="<?php echo $row["kelas"]; ?>"
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
                <option value="aktif" <?php if($row['status'] == 'aktif') echo "selected"; ?>>Aktif</option>
                <option value="nonaktif" <?php if($row['status'] == 'nonaktif') echo "selected"; ?>>Tidak Aktif</option>
                <option value="alumni" <?php if($row['status'] == 'alumni') echo "selected"; ?>>Alumni</option>
              </select>
            </div>
            <div class="col-span-1 md:col-span-2 flex flex-col sm:flex-row gap-4 mt-2">
              <a href="./siswa.php" class="bg-gray-400 font-medium text-white px-5 py-2.5 rounded-lg w-full sm:w-1/2 hover:bg-gray-500 transition duration-300 ease-in-out text-center">Back</a>
              <button
                type="submit"
                name="submit"
                class="bg-blue-500 font-medium text-white px-5 py-2.5 rounded-lg w-full sm:w-1/2 hover:bg-blue-600 transition duration-300 ease-in-out"
              >
                Edit
              </button>
            </div>
          </form>
        </section>
        </div>
      </div>

    <script src="./assets/script.js"></script>
  </body>
</html>