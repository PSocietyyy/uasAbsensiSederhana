<button
  data-drawer-target="default-sidebar"
  data-drawer-toggle="default-sidebar"
  aria-controls="default-sidebar"
  type="button"
  class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:focus:ring-gray-600"
>
  <span class="sr-only">Open sidebar</span>
  <i class="ri-menu-line w-6 h-6 text-2xl"></i>
</button>

<aside
  id="default-sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
  aria-label="Sidebar"
>
  <div class="h-full px-3 py-4 overflow-y-auto bg-white">
    <h1 class="text-2xl font-semibold text-gray-600 text-center italic mb-2">
      Absensi
    </h1>
    <ul class="space-y-2 font-medium">
      <li>
        <a
          href="index.php"
          class="flex items-center <?php if($page == 'dashboard') {echo 'bg-indigo-600 text-white ';} else {echo 'text-gray-900';} ?> p-2  rounded-lg hover:text-white hover:bg-indigo-600 group"
        >
          <i
            class="ri-dashboard-line w-5 h-5 <?php if($page == 'dashboard') {echo 'text-white ';} else {echo 'text-gray-500';} ?> transition duration-75 group-hover:text-white"
          ></i>
          <span class="ms-3">Dashboard</span>
        </a>
      </li>
      <li>
        <a
          href="siswa.php"
          class="flex items-center p-2 <?php if($page == 'siswa') {echo 'bg-indigo-600 text-white ';} else {echo 'text-gray-900';} ?> rounded-lg hover:text-white hover:bg-indigo-600 group"
        >
          <i
            class="ri-group-line w-5 h-5 <?php if($page == 'siswa') {echo 'text-white ';} else {echo 'text-gray-500';} ?> transition duration-75 group-hover:text-white"
          ></i>
          <span class="ms-3">Siswa</span>
        </a>
      </li>
      <li>
        <a
          href="mapel.php"
          class="flex items-center p-2 <?php if($page == 'mapel') {echo 'bg-indigo-600 text-white ';} else {echo 'text-gray-900';} ?> rounded-lg hover:text-white hover:bg-indigo-600 group"
        >
          <i
            class="ri-book-line w-5 h-5 <?php if($page == 'mapel') {echo 'text-white ';} else {echo 'text-gray-500';} ?> transition duration-75 group-hover:text-white"
          ></i>
          <span class="ms-3">Mata pelajaran</span>
        </a>
      </li>
      <li>
        <a
          href="absensi.php"
          class="flex items-center p-2 <?php if($page == 'absensi') {echo 'bg-indigo-600 text-white ';} else {echo 'text-gray-900';} ?> rounded-lg hover:text-white hover:bg-indigo-600 group"
        >
          <i
            class="ri-pass-valid-line w-5 h-5 <?php if($page == 'absensi') {echo 'text-white ';} else {echo 'text-gray-500';} ?> transition duration-75 group-hover:text-white"
          ></i>
          <span class="ms-3">Absensi</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
