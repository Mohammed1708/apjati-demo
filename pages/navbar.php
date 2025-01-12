<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="dist/output.css" />
  <link rel="stylesheet" href="src/input.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css" />

  <!-- JavaScript -->
  <script src="node_modules/@splidejs/splide/dist/js/splide.min.js"></script>

  <!-- font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
</head>

<body class="list-none">
  <style>
    /* navbar */
    .nav-link {
      color: #000;
      /* Warna teks default */
      position: relative;
      /* Untuk efek garis bawah */
      transition: color 0.3s ease, transform 0.3s ease;
      /* Transisi untuk warna dan transformasi */
    }

    .nav-link:hover {
      color: #CBA344;
      /* Warna saat hover */
      transform: translateY(-2px);
      /* Efek angkat saat hover */
    }



    .nav-link:active {
      color: #CBA344;
    }

    .nav-link.active {
      font-weight: 700;
      color: #CBA344;
    }

    /* Untuk efek garis bawah saat hover */
    .nav-link::after {
      content: '';
      position: absolute;
      left: 50%;
      bottom: 0;
      width: 0;
      height: 2px;
      background: #CBA344;
      /* Warna garis bawah */
      transition: width 0.3s ease, left 0.3s ease;
      /* Transisi untuk garis bawah */
    }

    .nav-link:hover::after {
      width: 100%;
      /* Garis bawah penuh saat hover */
      left: 0;
      /* Pindahkan garis bawah ke kiri */
    }

    .dropdown-menu {
      display: none;
    }

    .dropdown-menu.show {
      display: block;
    }


    .dropdown-container {
      position: relative;
      display: inline-block;
    }

    .dropdown-button {
      display: flex;
      align-items: center;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 10px 15px;
      cursor: pointer;
      font-size: 16px;
      color: #333;
    }

    .dropdown-button img {
      width: 20px;
      height: 15px;
      margin-right: 10px;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin-top: 5px;
      z-index: 1000;
      min-width: 120px;
    }

    .dropdown-content a {
      display: flex;
      align-items: center;
      padding: 10px 15px;
      text-decoration: none;
      color: #333;
      font-size: 16px;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .dropdown-content img {
      width: 20px;
      height: 15px;
      margin-right: 10px;
    }

    .dropdown-content.show {
      display: block;
    }
  </style>

  <!-- Navbar -->
  <nav class="lg:flex justify-between items-center px-8 py-2 fixed z-50 w-full bg-white shadow-md lg:h-[7rem]">
    <!-- Logo and Mobile Menu Toggle -->
    <div class="flex items-center justify-between w-full lg:w-auto">
      <!-- Logo -->
      <a href="../index.php">
        <img src="../src/assets/logo_apjati.png" class="" alt="Logo" style="width: 130px;" />
      </a>

      <!-- Mobile Menu Toggle Button -->
      <button id="menu-toggle" class="lg:hidden border h-10 w-10 rounded-md flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
          stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>

    <!-- Main Menu Dekstop -->
    <div id="menu-dekstop" class="hidden lg:flex lg:flex-col  items-center mt-4 lg:mt-0 bg-white flex flex-col">
      <div class="flex gap-5 items-center w-full justify-end">
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
            <g fill="none" fill-rule="evenodd">
              <path
                d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
              <path fill="currentColor"
                d="M14 3a1 1 0 0 1 1 1a4.004 4.004 0 0 0 3.2 3.92a1 1 0 1 1-.4 1.96A6 6 0 0 1 15 8.47V17a5 5 0 1 1-5-5a1 1 0 1 1 0 2a3 3 0 1 0 3 3V4a1 1 0 0 1 1-1" />
            </g>
          </svg></a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="1.5">
              <path stroke-linecap="round"
                d="M2.45 11.419c0-3.017.3-4.526 1.237-5.463s2.446-.937 5.463-.937h5.7c3.017 0 4.525 0 5.463.937s1.237 2.446 1.237 5.463v1.162c0 3.017-.3 4.526-1.237 5.463s-2.446.937-5.463.937h-5.7c-3.017 0-4.526 0-5.463-.937S2.45 15.598 2.45 12.581z" />
              <path
                d="m14.686 11.491l-4.268-2.667a.6.6 0 0 0-.918.509v5.335a.6.6 0 0 0 .918.508l4.268-2.667a.6.6 0 0 0 0-1.018Z" />
            </g>
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M18.44 3.06H5.56a2.507 2.507 0 0 0-2.5 2.5v12.88a2.507 2.507 0 0 0 2.5 2.5h12.88a2.5 2.5 0 0 0 2.5-2.5V5.56a2.5 2.5 0 0 0-2.5-2.5m1.5 15.38a1.51 1.51 0 0 1-1.5 1.5H5.56a1.51 1.51 0 0 1-1.5-1.5V5.56a1.51 1.51 0 0 1 1.5-1.5h12.88a1.51 1.51 0 0 1 1.5 1.5Z" />
            <path fill="currentColor" d="M6.376 10.748a1 1 0 1 1 2 0v6.5a1 1 0 0 1-2 0Z" />
            <circle cx="7.376" cy="6.744" r="1" fill="currentColor" />
            <path fill="currentColor"
              d="M17.62 13.37v3.88a1 1 0 1 1-2 0v-3.88a1.615 1.615 0 1 0-3.23 0v3.88a1 1 0 0 1-2 0v-6.5a1.016 1.016 0 0 1 1-1a.94.94 0 0 1 .84.47a3.61 3.61 0 0 1 5.39 3.15" />
          </svg>
        </a>
        <a href="">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M17 2h-3a5 5 0 0 0-5 5v3H6v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
          </svg>
        </a>
        <!-- Language toggle button -->
        <div class="flex space-x-4">
          <a href="../index.php" id="btnEng" 
          class="px-6 py-2 rounded text-white bg-[#B3943C]  hover:bg-gray-300 transition">
            ENG
          </a>
          <a href="../pages_id/index-id.php" id="btnIdn" 
          class="px-6 py-2 text-black bg-gray-200  rounded hover:bg-[#B3943C] transition">
            IDN
          </a>
        </div>
        <button class="text-white px-5 py-2 rounded-md" style="background-color: #CBA344;">Join</button>
      </div>
      <div class="flex items-center gap-9 py-3">
        <a href="../index.php" class="nav-link">Home</a>

        <!-- Dropdown for Membership -->
        <div class="relative group">
          <a id="membershipLink" class="nav-link flex items-center gap-2 cursor-pointer">Membership<svg
              xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 1024 1024">
              <path fill="currentColor"
                d="M831.872 340.864L512 652.672L192.128 340.864a30.59 30.59 0 0 0-42.752 0a29.12 29.12 0 0 0 0 41.6L489.664 714.24a32 32 0 0 0 44.672 0l340.288-331.712a29.12 29.12 0 0 0 0-41.728a30.59 30.59 0 0 0-42.752 0z" />
            </svg></a>
          <div id="membershipDrop"
            class="absolute left-1/2 transform -translate-x-1/2 hidden bg-white text-black shadow-lg transition duration-300 ease-in-out rounded-md mt-2"
            style="width: 13rem;">
            <a href="list_anggota.php" class="block px-4 py-2 hover:bg-gray-200 transition"> List Membership APJATI</a>
            <a href="daftar_apjapti.php" class="block px-4 py-2 hover:bg-gray-200 transition">Registration Member</a>
          </div>
        </div>
        <!-- media -->
        <div class="relative group">
          <a id="mediaLink" class="nav-link flex items-center gap-2 cursor-pointer">Media <svg
              xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 1024 1024">
              <path fill="currentColor"
                d="M831.872 340.864L512 652.672L192.128 340.864a30.59 30.59 0 0 0-42.752 0a29.12 29.12 0 0 0 0 41.6L489.664 714.24a32 32 0 0 0 44.672 0l340.288-331.712a29.12 29.12 0 0 0 0-41.728a30.59 30.59 0 0 0-42.752 0z" />
            </svg></a>
          <div id="mediaDrop"
            class="absolute left-1/2 transform -translate-x-1/2 hidden bg-white text-black shadow-lg transition duration-300 ease-in-out rounded-md mt-2"
            style="width: 13rem;">
            <a href="media.php" class="block px-4 py-2 hover:bg-gray-200 transition">Publication</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200 transition">Gallery</a>
          </div>
        </div>

        <a href="regulasi.php" class="nav-link">Regulation</a>

        <!-- Dropdown for About Us -->
        <div class="relative group">
          <a id="aboutLink" class="nav-link flex items-center gap-2 cursor-pointer">About Us<svg
              xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewBox="0 0 1024 1024">
              <path fill="currentColor"
                d="M831.872 340.864L512 652.672L192.128 340.864a30.59 30.59 0 0 0-42.752 0a29.12 29.12 0 0 0 0 41.6L489.664 714.24a32 32 0 0 0 44.672 0l340.288-331.712a29.12 29.12 0 0 0 0-41.728a30.59 30.59 0 0 0-42.752 0z" />
            </svg></a>
          <div id="aboutDrop"
            class="absolute left-1/2 transform -translate-x-1/2 hidden bg-white text-black shadow-lg transition duration-300 ease-in-out rounded-md mt-2"
            style="width: 14rem;">
            <a href="about_us.php" class="block px-4 py-2 hover:bg-gray-200 transition">About APJATI</a>
            <a href="department.php" class="block px-4 py-2 hover:bg-gray-200 transition">Department APJATI </a>
          </div>
        </div>

        <a href="contact_us.php" class="nav-link">Contact Us</a>

      </div>
    </div>

    <!-- main Menu Mobile -->
    <div id="menu-mobile"
      class="hidden lg:hidden w-full flex-col lg:flex-row items-start lg:items-center gap-4 lg:gap-8 bg-white lg:bg-transparent p-4 lg:p-0 rounded-md shadow-md max-w-md">

      <!-- Dropdown dan Button -->

      <div class="flex space-x-4 items-center">
          <a href="index.php" id="btnEng" 
          class="px-2 text-sm py-2 rounded text-white bg-[#B3943C]  hover:bg-gray-300 transition">
            ENG
          </a>
          <a href="pages_id/index-id.php" id="btnIdn" 
          class="px-2 text-sm py-2 text-black bg-gray-200  rounded hover:bg-[#B3943C] transition">
            IDN
          </a>
        </div>


      <!-- Navigation Links -->

      <a href="../index.php" class="text-gray-800 hover:bg-gray-200 my-2 rounded-md flex"
        style="width: 100%;">Home</a>

      <!-- Membership Dropdown -->
      <div class="relative w-full lg:w-auto">
        <button id="membership-toggle"
          class="flex items-center justify-between w-full lg:w-auto py-2 text-gray-800 hover:bg-gray-200 rounded-md cursor-pointer">
          Membership
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="membership-menu" class="dropdown-menu bg-white rounded-md pt-2 hidden">
          <a href="list_anggota.php" class="block px-4 py-1 hover:bg-gray-200">List Membership APJATI</a>
          <a href="daftar_apjapti.php" class="block px-4 py-1 hover:bg-gray-200">Registration Member</a>
        </div>
      </div>

      <!-- media -->
      <div class="relative w-full lg:w-auto">
        <button id="media-toggle"
          class="flex items-center justify-between w-full lg:w-auto py-2 text-gray-800 hover:bg-gray-200 rounded-md cursor-pointer">
          Media
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="media-menu" class="dropdown-menu bg-white rounded-md mt-2 hidden">
          <a href="media.php" class="block px-4 py-2 hover:bg-gray-200">Publication</a>
          <a href="#" class="block px-4 py-2 hover:bg-gray-200">Galerry</a>
        </div>
      </div>

      <!-- Regulation Link -->
      <a href="regulasi.php" class="text-gray-800 hover:bg-gray-200 my-2 flex rounded-md">Regulation</a>

      <!-- About Us Dropdown -->
      <div class="relative w-full lg:w-auto">
        <button id="aboutus-toggle"
          class="flex items-center justify-between w-full lg:w-auto py-2 text-gray-800 hover:bg-gray-200 rounded-md cursor-pointer">
          About Us
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div id="aboutus-menu" class="dropdown-menu bg-white rounded-md mt-2 hidden">
          <a href="about_us.php" class="block px-4 py-2 hover:bg-gray-200">About APJATI</a>
          <a href="department.php" class="block px-4 py-2 hover:bg-gray-200">Departmen APJATI</a>
        </div>
      </div>

      <!-- Contact Us -->
      <a href="contact_us.php" class="text-gray-800 hover:bg-gray-200 my-2 flex rounded-md">Contact Us</a>

      <!-- Social Media Icons -->
      <button class="w-full mt-3 bg-[#CBA344] text-white text-sm py-2 h-9 rounded-md lg:w-auto lg:text-base">
       Join
      </button>
      <div class="flex gap-4 items-center w-full justify-center mt-4 lg:mt-0 ">
      <a href="#" class="text-gray-700 hover:text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 lg:w-8 lg:h-8" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="1.5">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M17 2h-3a5 5 0 0 0-5 5v3H6v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
          </svg>
        </a>
        <a href="#" class="text-gray-700 hover:text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
          </svg>
        </a>
        <a href="#" class="text-gray-700 hover:text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="1.5">
              <path stroke-linecap="round"
                d="M2.45 11.419c0-3.017.3-4.526 1.237-5.463s2.446-.937 5.463-.937h5.7c3.017 0 4.525 0 5.463.937s1.237 2.446 1.237 5.463v1.162c0 3.017-.3 4.526-1.237 5.463s-2.446.937-5.463.937h-5.7c-3.017 0-4.526 0-5.463-.937S2.45 15.598 2.45 12.581z" />
              <path
                d="m14.686 11.491l-4.268-2.667a.6.6 0 0 0-.918.509v5.335a.6.6 0 0 0 .918.508l4.268-2.667a.6.6 0 0 0 0-1.018Z" />
            </g>
          </svg>
        </a>
        <a href="#" class="text-gray-700 hover:text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M18.44 3.06H5.56a2.507 2.507 0 0 0-2.5 2.5v12.88a2.507 2.507 0 0 0 2.5 2.5h12.88a2.5 2.5 0 0 0 2.5-2.5V5.56a2.5 2.5 0 0 0-2.5-2.5m1.5 15.38a1.51 1.51 0 0 1-1.5 1.5H5.56a1.51 1.51 0 0 1-1.5-1.5V5.56a1.51 1.51 0 0 1 1.5-1.5h12.88a1.51 1.51 0 0 1 1.5 1.5Z" />
            <path fill="currentColor" d="M6.376 10.748a1 1 0 1 1 2 0v6.5a1 1 0 0 1-2 0Z" />
            <circle cx="7.376" cy="6.744" r="1" fill="currentColor" />
            <path fill="currentColor"
              d="M17.62 13.37v3.88a1 1 0 1 1-2 0v-3.88a1.615 1.615 0 1 0-3.23 0v3.88a1 1 0 0 1-2 0v-6.5a1.016 1.016 0 0 1 1-1a.94.94 0 0 1 .84.47a3.61 3.61 0 0 1 5.39 3.15" />
          </svg>
        </a>
        <a href="#" class="text-gray-700 hover:text-gray-900">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M17 2h-3a5 5 0 0 0-5 5v3H6v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
          </svg>
        </a>
      </div>
    </div>



  </nav>
  <!-- Splide JS -->
  <script src="src/js/index.js"></script>
  <script src="../src/js/nav.js"></script>
  <script src="../src/js/button-language-eng.js"></script>
</body>

</html>