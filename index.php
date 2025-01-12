<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="icon" type="image/png" href="src/assets/logo_apjati.png">
  <link rel="stylesheet" href="dist/output.css" />
  <link rel="stylesheet" href="src/input.css" />

  <link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css">

  <script
    src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@1/dist/js/splide-extension-auto-scroll.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/js/splide.min.js"></script>

  <!-- font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <script src="https://cdn.tailwindcss.com"></script>
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


    @keyframes count-up {
      from {
        counter-reset: count;
      }

      to {
        counter-reset: 1;
      }
    }

    .count {
      font-size: 3rem;
      font-weight: bold;
    }

    /* carousel */
    .carousel {
      position: relative;
      overflow: hidden;
    }

    .carousel-inner {
      display: flex;
      transition: transform 0.5s ease;
    }

    .carousel-item {
      min-width: 100%;
    }

    .splide {
      max-width: 100%;
    }

    /* hover more info */
    .hover-animate {
      transition: transform 0.3s ease, color 0.3s ease;
      /* Transisi untuk transformasi dan warna */
    }

    .hover-animate:hover {
      transform: translateY(-3px);
      /* Mengangkat elemen sedikit ke atas saat hover */
      color: #1d4ed8;
      /* Mengubah warna teks saat hover */
    }

    .hover-animate svg {
      transition: transform 0.3s ease;
      /* Transisi untuk ikon */
    }

    .hover-animate:hover svg {
      transform: translateX(3px);
      /* Menggeser ikon sedikit ke kanan saat hover */
    }

    /* benefit */
    .container_benefit {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      display: flex;
      align-items: center;
      flex-direction: column;
      gap: 50px;
    }

    .benefits {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
      align-items: center;
    }

    .benefit-card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 10px;
      width: 320px;
      height: 150px;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
    }

    .benefit-card:hover {
      transform: scale(1.05);
    }

    .benefit-card .number {
      display: inline-block;
      background-color: #CBA344;
      color: #fff;
      font-weight: bold;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      line-height: 40px;
      margin-bottom: 15px;
      font-size: 1.2rem;
    }

    /* Responsive Layout */
    @media (max-width: 1024px) {
      .benefits {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .benefits {
        grid-template-columns: 1fr;
      }
    }

    /* Responsive Layout */
    @media (max-width: 1024px) {
      .benefits {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .benefits {
        grid-template-columns: 1fr;
      }
    }

    .splide2 .splide__list {
      display: flex;
      gap: 15px;
      /* Jarak antar gambar */
    }

    .splide__slide.is-active {
      transform: scale(1.1);
      transition: transform 0.3s ease-in-out;
    }

    .splide__slide {
      transform: scale(1);
      transition: transform 0.3s ease-in-out;
    }

    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
      /* Perbesaran elemen */
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
      /* Tambah bayangan saat hover */
    }

    .circle {
      transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    }

    .card:hover .circle {
      transform: scale(1.2) rotate(15deg);
      /* Efek zoom dan rotasi lingkaran */
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
      /* Tambahkan bayangan */
      background-color: #b58c32;
      /* Perubahan warna saat hover */
    }

    .card p {
      transition: color 0.3s ease;
    }
  </style>

  <!-- Navbar -->
  <nav class="lg:flex justify-between items-center px-8 py-2 fixed z-50 w-full bg-white shadow-md lg:h-[7rem]">
    <!-- Logo and Mobile Menu Toggle -->
    <div class="flex items-center justify-between w-full lg:w-auto">
      <!-- Logo -->
      <a href="index.php">
        <img src="src/assets/logo_apjati.png" class="" alt="Logo" style="width: 130px;" />
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
          <a href="index.php" id="btnEng"
            class="px-6 py-2 rounded text-white bg-[#B3943C]  hover:bg-gray-300 transition">
            ENG
          </a>
          <a href="pages_id/index-id.php" id="btnIdn"
            class="px-6 py-2 text-black bg-gray-200  rounded hover:bg-[#B3943C] transition">
            IDN
          </a>
        </div>
        <button class="text-white px-5 py-2 rounded-md" style="background-color: #CBA344;">Join</button>
      </div>
      <div class="flex items-center gap-9 py-3">
        <a href="index.php" class="nav-link">Home</a>

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
            <a href="pages/list_anggota.php" class="block px-4 py-2 hover:bg-gray-200 transition"> List Membership APJATI</a>
            <a href="pages/daftar_apjapti.php" class="block px-4 py-2 hover:bg-gray-200 transition">Registration Member</a>
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
            <a href="pages/media.php" class="block px-4 py-2 hover:bg-gray-200 transition">Publication</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200 transition">Gallery</a>
          </div>
        </div>

        <a href="pages/regulasi.php" class="nav-link">Regulation</a>

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
            <a href="pages/about_us.php" class="block px-4 py-2 hover:bg-gray-200 transition">About APJATI</a>
            <a href="pages/department.php" class="block px-4 py-2 hover:bg-gray-200 transition">Department APJATI </a>
          </div>
        </div>

        <a href="pages/contact_us.php" class="nav-link">Contact Us</a>

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

      <a href="index.php" class="text-gray-800 hover:bg-gray-200 my-2 rounded-md flex"
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
          <a href="pages/list_anggota.php" class="block px-4 py-1 hover:bg-gray-200">List Membership APJATI</a>
          <a href="pages/daftar_apjapti.php" class="block px-4 py-1 hover:bg-gray-200">Registration Member</a>
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
          <a href="pages/about_us.php" class="block px-4 py-2 hover:bg-gray-200">Publication</a>
          <a href="pages/department.php" class="block px-4 py-2 hover:bg-gray-200">Galerry</a>
        </div>
      </div>

      <!-- Regulation Link -->
      <a href="pages/regulasi.php" class="text-gray-800 hover:bg-gray-200 my-2 flex rounded-md">Regulation</a>

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
          <a href="pages/about_us.php" class="block px-4 py-2 hover:bg-gray-200">About APJATI</a>
          <a href="pages/department.php" class="block px-4 py-2 hover:bg-gray-200">Departmen APJATI</a>
        </div>
      </div>

      <!-- Contact Us -->
      <a href="pages/contact_us.php" class="text-gray-800 hover:bg-gray-200 my-2 flex rounded-md">Contact Us</a>

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

  <!-- header -->
  <section class="carousel pt-[4rem] lg:pt-0">
    <div class="carousel-inner w-full lg:h-[100vh]">
      <div class="carousel-item">
        <img src="src/assets/sl-1.jpg" alt="Gambar 1" class="w-full">
      </div>
      <div class="carousel-item">
        <img src="src/assets/sl-2.jpg" alt="Gambar 2" class="w-full">
      </div>
      <div class="carousel-item">
        <img src="src/assets/sl-3.jpg" alt="Gambar 3" class="w-full">
      </div>
    </div>
    <div class="carousel-text absolute inset-0 flex items-center justify-center pt-[4rem] lg:pt-0">
      <h2 class="text-white text-xl text-center font-bold lg:text-[3rem]">Indonesia's Association Manpower Services</h2>
    </div>
    <button id="prev"
      class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow hidden lg:inline">❮</button>
    <button id="next"
      class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow hidden lg:inline">❯</button>
  </section>

  <!-- testimonial -->
  <section class="py-16 flex flex-col items-center justify-center overflow-hidden">
    <h1 class="lg:mb-8 lg:text-4xl text-2xl font-bold border-black">
      TESTIMONIAL
    </h1>
    <div>
      <div class="splide ">
        <div class="splide__track">
          <ul class="splide__list">
            <!-- card 1 -->
            <li class="splide__slide p-4 max-w-sm lg:max-w-lg">
              <div class="flex rounded-lg h-full bg-white  shadow-lg p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="flex flex-col items-center justify-center gap-2 w-full">
                    <img src="src/assets/Jokowi.jpeg" alt="Joko Widodo" class="h-20 w-20 rounded-full object-cover">
                    <h2 class="text-black text-lg font-medium text-center">
                      Ir. H. Joko Widodo
                    </h2>
                    <h2 class="text-gray-600 dark:text-gray-400 text-sm font-normal">
                      7th President of the Republic of Indonesia
                    </h2>
                  </div>
                </div>
                <div class="flex flex-col justify-center flex-grow">
                  <p class="leading-relaxed text-center text-base text-gray-700 ">
                    "Ministries, agencies, private companies including Apjati must be part of our big changes
                    do"
                  </p>
                </div>
              </div>
            </li>
            <!-- card 2 -->
            <li class="splide__slide p-4 max-w-sm lg:max-w-lg">
              <div class="flex rounded-lg h-full bg-white  shadow-lg p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="flex flex-col items-center justify-center gap-2 w-full">
                    <img src="src/assets/ida_fauziyah.jpg" alt="Ida Fauziyah"
                      class="h-20 w-20 rounded-full object-cover" />
                    <h2 class="text-black text-lg font-medium text-center">
                      Dr Hj Ida Fauziyah M. Si
                    </h2>
                    <h2 class="text-gray-600 dark:text-gray-400 text-sm font-normal">
                      Member of the DPR - RI
                    </h2>
                  </div>
                </div>
                <div class="flex flex-col justify-center flex-grow">
                  <p class="leading-relaxed text-center text-base text-gray-700 ">
                    "The extraordinary appreciation for this National Working Meeting has provided extraordinary
                    enthusiasm
                    become a tourism and national defense ambassador."
                  </p>
                </div>
              </div>
            </li>
            <!-- card 3 -->
            <li class="splide__slide p-4 max-w-sm lg:max-w-lg">
              <div class="flex rounded-lg h-full bg-white  shadow-lg p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="flex flex-col items-center justify-center gap-2 w-full">
                    <img src="src/assets/cak_imin.jpeg" alt="Abdul Muhaimin Iskandar"
                      class="h-20 w-20 rounded-full object-cover" />
                    <h2 class="text-black text-lg font-medium text-center">
                      Drs. H. Abdul Muhaimin Iskandar, M.Sc.
                    </h2>
                    <h2 class="text-gray-600 dark:text-gray-400 text-sm font-normal">
                      Coordinating Minister for Community Empowerment
                    </h2>
                  </div>
                </div>
                <div class="flex flex-col justify-center flex-grow">
                  <p class="leading-relaxed text-center text-base text-gray-700 ">
                    "Recognition of Apjati is also an appreciation for an organization that has a long history, always
                    partnered with the government and was the first association and became the "father" of the
                    organization
                    other."
                  </p>
                </div>
              </div>
            </li>
            <!-- card 4 -->
            <li class="splide__slide p-4 max-w-sm lg:max-w-lg">
              <div class="flex rounded-lg h-full bg-white  shadow-lg p-8 flex-col">
                <div class="flex items-center mb-3">
                  <div class="flex flex-col items-center justify-center gap-2 w-full">
                    <img src="src/assets/abdul-kadir-karding-peci.jpg" alt="Abdul Kadir Karding"
                      class="h-20 w-20 rounded-full object-cover" />
                    <h2 class="text-black text-lg font-medium text-center">
                      H. Abdul Kadir Karding, S.Pi., M.Si.
                    </h2>
                    <h2 class="text-gray-600 dark:text-gray-400 text-sm font-normal">
                      Minister for Protection of Indonesian Migrant Workers
                    </h2>
                  </div>
                </div>
                <div class="flex flex-col justify-center flex-grow">
                  <p class="leading-relaxed text-center text-base text-gray-700 ">
                    "We fully support Apjati's work program which not only eases the government's duties, but also...
                    also has a positive impact on protecting PMI and optimizing workforce placement
                    Indonesia abroad."
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>

  </section>

  <!-- data statistik -->
  <div id="stats-section" class="py-7 lg:h-72 flex flex-col items-center justify-center"
    style="background-color: #CBA344;">
    <h1 class="lg:mb-8 lg:text-4xl text-2xl font-bold border-black">
      APJATI IN NUMBERS
    </h1>
    <div class="flex lg:gap-11 gap-5 flex-col lg:flex-row mt-8 lg:mt-7 items-center justify-center">
      <div class="data3 flex flex-col items-center lg:border-r-2 lg:border-black lg:pr-8 lg:w-[290px] w-44 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
          <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
            <path
              d="M12.56 20.82a.96.96 0 0 1-1.12 0C6.611 17.378 1.486 10.298 6.667 5.182A7.6 7.6 0 0 1 12 3c2 0 3.919.785 5.333 2.181c5.181 5.116.056 12.196-4.773 15.64" />
            <path d="M12 12a2 2 0 1 0 0-4a2 2 0 0 0 0 4" />
          </g>
        </svg>
        <h1 id="count3" class="lg:text-4xl text-3xl font-semibold mt-4">18</h1>
        <p class="font-medium">Regional Representatives (DPD)</p>
      </div>
      <div
        class="data1 flex flex-col items-center lg:border-r-2 lg:border-black lg:pr-8 border-black pb-8 lg:pb-0 lg:border-b-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2m7.931 9h-2.764a14.7 14.7 0 0 0-1.792-6.243A8.01 8.01 0 0 1 19.931 11M12.53 4.027c1.035 1.364 2.427 3.78 2.627 6.973H9.03c.139-2.596.994-5.028 2.451-6.974c.172-.01.344-.026.519-.026c.179 0 .354.016.53.027m-3.842.7C7.704 6.618 7.136 8.762 7.03 11H4.069a8.01 8.01 0 0 1 4.619-6.273M4.069 13h2.974c.136 2.379.665 4.478 1.556 6.23A8.01 8.01 0 0 1 4.069 13m7.381 6.973C10.049 18.275 9.222 15.896 9.041 13h6.113c-.208 2.773-1.117 5.196-2.603 6.972c-.182.012-.364.028-.551.028c-.186 0-.367-.016-.55-.027m4.011-.772c.955-1.794 1.538-3.901 1.691-6.201h2.778a8 8 0 0 1-4.469 6.201" />
        </svg>
        <h1 id="count1" class="lg:text-4xl text-3xl font-semibold mt-4">11 Mil+</h1>
        <p class="font-medium">PMI in place</p>
      </div>
      <div
        class="data2 flex flex-col items-center lg:border-r-2 lg:border-black lg:pr-8  border-black pb-8 lg:pb-0 lg:border-b-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3m1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
        </svg>
        <h1 id="count2" class="lg:text-4xl text-3xl font-semibold mt-4">42 years</h1>
        <p class="font-medium">from 1982</p>
      </div>
      <div
        class="data4 flex flex-col items-center border-black lg:border-r-2 lg:border-black pt-8 lg:pt-0 lg:pr-8 lg:border-t-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M12 5.5A3.5 3.5 0 0 1 15.5 9a3.5 3.5 0 0 1-3.5 3.5A3.5 3.5 0 0 1 8.5 9A3.5 3.5 0 0 1 12 5.5M5 8c.56 0 1.08.15 1.53.42c-.15 1.43.27 2.85 1.13 3.96C7.16 13.34 6.16 14 5 14a3 3 0 0 1-3-3a3 3 0 0 1 3-3m14 0a3 3 0 0 1 3 3a3 3 0 0 1-3 3c-1.16 0-2.16-.66-2.66-1.62a5.54 5.54 0 0 0 1.13-3.96c.45-.27.97-.42 1.53-.42M5.5 18.25c0-2.07 2.91-3.75 6.5-3.75s6.5 1.68 6.5 3.75V20h-13zM0 20v-1.5c0-1.39 1.89-2.56 4.45-2.9c-.59.68-.95 1.62-.95 2.65V20zm24 0h-3.5v-1.75c0-1.03-.36-1.97-.95-2.65c2.56.34 4.45 1.51 4.45 2.9z" />
        </svg>
        <h1 id="count4" class="lg:text-4xl text-3xl font-semibold mt-4">189</h1>
        <p class="font-medium">Member Agiences</p>
      </div>
      <div class="data5 flex flex-col items-center border-black pt-8 lg:pt-0 lg:border-t-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M7 14v6q0 .425-.288.713T6 21t-.712-.288T5 20V5q0-.425.288-.712T6 4h7.175q.35 0 .625.225t.35.575L14.4 6H19q.425 0 .713.288T20 7v8q0 .425-.288.713T19 16h-5.175q-.35 0-.625-.225t-.35-.575L12.6 14zm7.65 0H18V8h-4.425q-.35 0-.625-.225T12.6 7.2L12.35 6H7v6h6.425q.35 0 .625.225t.35.575zm-2.15-4" />
        </svg>
        <h1 id="count5" class="lg:text-4xl text-3xl font-semibold mt-4">120</h1>
        <p class="font-medium">Country of destination</p>
      </div>
    </div>
  </div>

  <!-- berita -->
  <main class="py-16 px-8 bg-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center mb-5">
        <h2 class="text-xl font-bold border-black text-left lg:text-4xl">
          NEWSROOM
        </h2>
        <a href="pages/media.php" class="text-sm font-medium lg:text-lg text-blue-400 flex items-center gap-2 cursor-pointer hover-animate">
          More Info
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24">
            <defs>
              <path id="weuiArrowOutlined0" fill="currentColor"
                d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" />
            </defs>
            <use fill-rule="evenodd" href="#weuiArrowOutlined0" transform="rotate(-180 5.02 9.505)" />
          </svg>
        </a>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class=" p-6 rounded-lg shadow-lg h-full flex flex-col justify-between">
          <div>
            <img alt="Event image of APJATI" class="w-full h-48 object-cover mb-4 rounded-lg" height="300"
              src="src/assets/berita/berita2.1.jpg" width="400" />
            <h3 class="text-xl font-bold mb-2">
              Joint Meeting of Minister for Food Industry, Commodity and Regional Development, Sarawak Malaysia,
            </h3>
            <p class="text-gray-600">
              Jakarta, December 06, 2025
            </p>
            <p class="text-gray-700 mb-4">
              Jakarta - The management of the Central Executive Board (DPP) of the Association of Indonesian Manpower
              Services Companies (APJATI) met with the Minister for Food Industry, Commodity and Regional Development
              Malaysia, His Honor Dato SRI Dr. Stephen Rundi Utom at the Sheraton Hotel, Jakarta..
            </p>
          </div>
          <a class="text-blue-400 hover:underline flex items-center mt-auto" href="#">
            Read more
            <i class="fas fa-arrow-right ml-2">
            </i>
          </a>
        </div>
        <div class=" p-6 rounded-lg shadow-lg h-full flex flex-col justify-between">
          <div>
            <img alt="Event image of Binawan's 48th anniversary" class="w-full h-48 object-cover mb-4 rounded-lg"
              height="300" src="src/assets/berita/berita 3.jpg" width="400" />
            <h3 class="text-xl font-bold mb-2">
              Minister of PPMI Supports APJATI in Strengthening Placement and Protection of Indonesian Migrant Workers
              Through 6 Strategic Work Focuses
            </h3>
            <p class="text-gray-600">
              On December 08, 2024,
            </p>
            <p class="text-gray-700 mb-4">
              (APJATI) led by its General Chair Said Saleh Alawaini had an audience with the Minister of Protection of
              Indonesian Migrant Workers (P2MI) Abdul Kadir Karding at the P2MI Ministry Office, Jakarta, Thursday
            </p>
          </div>
          <a class="text-blue-400 hover:underline flex items-center mt-auto" href="#">
            Read more
            <i class="fas fa-arrow-right ml-2">
            </i>
          </a>
        </div>
        <div class=" p-6 rounded-lg shadow-lg h-full flex flex-col justify-between">
          <div>
            <img alt="Event image of Indonesia-Australia Nursing Collaboration"
              class="w-full h-48 object-cover mb-4 rounded-lg" height="300" src="src/assets/berita/berita4.jpg"
              width="400" />
            <h3 class="text-xl font-bold mb-2">
              Welcoming 2025, APJATI Committed to Increasing PMI Quality and Quantity
            </h3>
            <p class="text-gray-600">
              On November 25, 2024, Binawan
            </p>
            <p class="text-gray-700 mb-4">
              With a new spirit in 2025, APJATI is committed to improving the quality and quantity of Indonesian
              workers, developing an effective and efficient labor dispatch system, and raising awareness of the
              importance of protecting the rights of Indonesian migrant workers.
            </p>
          </div>
          <a class="text-blue-400 hover:underline flex items-center mt-auto" href="#">
            Read more
            <i class="fas fa-arrow-right ml-2">
            </i>
          </a>
        </div>
      </div>
    </div>
  </main>

  <!-- kegiatan -->
  <div class="px-4 lg:px-8 py-16 flex-col flex items-center">
    <h1 class="lg:text-4xl text-2xl font-bold border-black">
      APJATI ACTIVITIES
    </h1>
    <div class="mt-10 flex flex-wrap gap-8 justify-center items-start">
      <div class="flex flex-col w-[300px]">
        <img src="src/assets/kegiatan/kegiatan2.JPG" alt="" class="w-[300px] h-[200px] rounded-md" />
        <h1 class="text-lg leading-6 font-semibold pt-3">
          Tribute to Ayub Basalamah, former Chairman of APJATI, for his dedication 12 years
        </h1>
        <p class="flex items-center pt-3 gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3m1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
          </svg>11 Desember 2024
        </p>
        <p class="flex items-center pt-2 gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M12 20a8 8 0 0 0 8-8a8 8 0 0 0-8-8a8 8 0 0 0-8 8a8 8 0 0 0 8 8m0-18a10 10 0 0 1 10 10a10 10 0 0 1-10 10C6.47 22 2 17.5 2 12A10 10 0 0 1 12 2m.5 5v5.25l4.5 2.67l-.75 1.23L11 13V7z" />
          </svg>09:00 WIB
        </p>
      </div>
      <div class="flex flex-col w-[300px]">
        <img src="src/assets/kegiatan/Kegiatan1.JPG" alt="" class="w-[300px] h-[200px] rounded-md" />
        <h1 class="text-lg leading-6 font-semibold pt-3">
          The meeting between the Minister of P2MI and APJATI aims to strengthen synergy.
        </h1>
        <p class="flex items-center pt-3 gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3m1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
          </svg>12 Desember 2024
        </p>
        <p class="flex items-center pt-2 gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M12 20a8 8 0 0 0 8-8a8 8 0 0 0-8-8a8 8 0 0 0-8 8a8 8 0 0 0 8 8m0-18a10 10 0 0 1 10 10a10 10 0 0 1-10 10C6.47 22 2 17.5 2 12A10 10 0 0 1 12 2m.5 5v5.25l4.5 2.67l-.75 1.23L11 13V7z" />
          </svg>16:00 WIB
        </p>
      </div>
      <div class="flex flex-col w-[300px]">
        <img src="src/assets/kegiatan/WhatsApp Image 2024-12-07 at 09.05.11.jpeg" alt=""
          class="w-[300px] h-[200px] rounded-md" />
        <h1 class="text-lg leading-6 font-semibold pt-3">
          Meeting of the Indonesian Chamber of Commerce (KADIN) with APJATI, discussing
          expansion of the global job market.
        </h1>
        <p class="flex items-center pt-3 gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3m1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
          </svg>14 Desember 2024
        </p>
        <p class="flex items-center pt-2 gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor"
              d="M12 20a8 8 0 0 0 8-8a8 8 0 0 0-8-8a8 8 0 0 0-8 8a8 8 0 0 0 8 8m0-18a10 10 0 0 1 10 10a10 10 0 0 1-10 10C6.47 22 2 17.5 2 12A10 10 0 0 1 12 2m.5 5v5.25l4.5 2.67l-.75 1.23L11 13V7z" />
          </svg>09:00 WIB
        </p>
      </div>
    </div>

  </div>

  <!-- Album -->
  <main class="py-16 px-8 bg-white">
    <div class="container mx-auto">
      <div class="flex justify-between items-center mb-5 lg:mb-7">
        <h2 class="text-xl font-bold border-black text-left  lg:text-4xl">
          PHOTO ALBUM
        </h2>
        <a class="text-sm font-medium lg:text-xl text-blue-400 flex items-center gap-2 cursor-pointer hover-animate">
          More Info
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24">
            <defs>
              <path id="weuiArrowOutlined0" fill="currentColor"
                d="m7.588 12.43l-1.061 1.06L.748 7.713a.996.996 0 0 1 0-1.413L6.527.52l1.06 1.06l-5.424 5.425z" />
            </defs>
            <use fill-rule="evenodd" href="#weuiArrowOutlined0" transform="rotate(-180 5.02 9.505)" />
          </svg>
        </a>
        <button id="backButton" class="fixed top-5 left-5 bg-blue-500 text-white px-4 py-2 rounded-md z-50 hidden">
          Kembali
        </button>

      </div>
      <div class="grid grid-cols-4 gap-2 relative mb-5">
        <!-- Gambar 1 -->
        <a href="src/assets/g1.png" class="col-span-1" data-lightbox="gallery-item">
          <img src="src/assets/g1.png" alt="Gallery Thumb 1" class="w-full h-auto object-cover">
        </a>

        <!-- Gambar 2 -->
        <a href="src/assets/g2.png" class="col-span-1" data-lightbox="gallery-item">
          <img src="src/assets/g2.png" alt="Gallery Thumb 2" class="w-full h-auto object-cover">
        </a>

        <!-- Gambar 3 -->
        <a href="src/assets/g3.png" class="col-span-1" data-lightbox="gallery-item">
          <img src="src/assets/g3.png" alt="Gallery Thumb 3" class="w-full h-auto object-cover">
        </a>
        <!-- Gambar 9 -->
        <a href="src/assets/g9.png" class="col-span-1" data-lightbox="gallery-item">
          <img src="src/assets/g9.png" alt="Gallery Thumb 9" class="w-full h-auto object-cover">
        </a>
        <!-- Gambar 4 (Gambar besar) -->
        <a href="src/assets/g4.png" class="col-span-2 row-span-2" data-lightbox="gallery-item">
          <img src="src/assets/g4.png" alt="Gallery Thumb 4" class="w-full h-auto object-cover">
        </a>

        <!-- Gambar 5 -->
        <a href="src/assets/g5.png" class="col-span-1" data-lightbox="gallery-item">
          <img src="src/assets/g5.png" alt="Gallery Thumb 5" class="w-full h-auto object-cover">
        </a>

        <!-- Gambar 6 -->
        <a href="src/assets/g6.png" class="col-span-1" data-lightbox="gallery-item">
          <img src="src/assets/g6.png" alt="Gallery Thumb 6" class="w-full h-auto object-cover">
        </a>

        <!-- Gambar 7 -->
        <a href="src/assets/g7.png" class="col-span-1" data-lightbox="gallery-item">
          <img src="src/assets/g7.png" alt="Gallery Thumb 7" class="w-full h-auto object-cover">
        </a>

        <!-- Gambar 8 -->
        <a href="src/assets/g8.png" class="col-span-1" data-lightbox="gallery-item">
          <img src="src/assets/g8.png" alt="Gallery Thumb 8" class="w-full h-auto object-cover">
        </a>

      </div>

  </main>

  <!-- benerfit -->
  <section class="py-7 lg:px-8 lg:h-[25rem] flex flex-col items-center justify-center overflow-hidden">
    <h1 class="lg:mb-8 lg:text-4xl text-2xl font-bold border-black">
      MEMBER BENEFIT
    </h1>
    <div class="benefits pt-5" style="padding-top:20px">
      <div class="flex flex-wrap gap-4 justify-center ">
        <div
          class="card w-72 h-32 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-5 relative flex flex-col items-center justify-center overflow-hidden hover:scale-105 hover:shadow-lg transition-transform duration-300">
          <div
            class="circle w-14 h-14 rounded-full absolute -right-3 -top-3 flex items-center justify-center bg-[#CBA344]">
            <p class="text-white text-2xl">1</p>
          </div>
          <p class="text-sm text-zinc-500 text-center">
            Adhering to the highest standards of organizational and business ethics
          </p>
        </div>
        <div
          class="card w-72 h-32 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-5 relative flex flex-col items-center justify-center overflow-hidden hover:scale-105 hover:shadow-lg transition-transform duration-300">
          <div
            class="circle w-14 h-14 rounded-full absolute -right-3 -top-3 flex items-center justify-center bg-[#CBA344]">
            <p class="text-white text-2xl">2</p>
          </div>
          <p class="text-sm text-zinc-500 leading-6">
            Transparent communication
          </p>
        </div>
        <div
          class="card w-72 h-32 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-5 relative flex flex-col items-center justify-center overflow-hidden hover:scale-105 hover:shadow-lg transition-transform duration-300">
          <div
            class="circle w-14 h-14 rounded-full absolute -right-3 -top-3 flex items-center justify-center bg-[#CBA344]">
            <p class="text-white text-2xl">3</p>
          </div>
          <p class="text-sm text-zinc-500 leading-6">
            Commitment to professionalism
          </p>
        </div>
        <div
          class="card w-72 h-32 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-5 relative flex flex-col items-center justify-center overflow-hidden hover:scale-105 hover:shadow-lg transition-transform duration-300">
          <div
            class="circle w-14 h-14 rounded-full absolute -right-3 -top-3 flex items-center justify-center bg-[#CBA344]">
            <p class="text-white text-2xl">4</p>
          </div>
          <p class="text-sm text-zinc-500 leading-6 text-center">
            Focus on delivering optimal benefits for all stakeholders
          </p>
        </div>
        <div
          class="card w-72 h-32 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-5 relative flex flex-col items-center justify-center overflow-hidden hover:scale-105 hover:shadow-lg transition-transform duration-300">
          <div
            class="circle w-14 h-14 rounded-full absolute -right-3 -top-3 flex items-center justify-center bg-[#CBA344]">
            <p class="text-white text-2xl">5</p>
          </div>
          <p class="text-sm text-zinc-500 leading-6 text-center">
            Responsive to national and global situations
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
  <footer class="text-black mt-20" style="background-color:  #CBA344;">
    <div class="container mx-auto px-6 py-8 flex flex-col justify-center">
      <!-- Bagian Atas Footer -->
      <div class="flex flex-col lg:flex-row justify-center items-start gap-6">
        <!-- Informasi APJATI -->
        <div class="w-full md:w-1/3">
          <h1 class="font-semibold text-xl mb-4">APJATI OFFICE</h1>
          <div class="space-y-4">
            <p class="flex items-center text-sm gap-4">
              <img src="src/assets/icon/mynaui--location.svg" alt="Location" class="w-6 h-6" />
              Jl. Buncit Raya No.126, RT.10/RW.2, Duren Tiga, Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota
              Jakarta 12790, Indonesia
            </p>
            <p class="flex items-center text-sm gap-4">
              <img src="src/assets/icon/material-symbols--call-outline.svg" alt="Phone" class="w-6 h-6" />
              (021) 7994001
            </p>
            <p class="flex items-center text-sm gap-4">
              <img src="src/assets/icon/ic--outline-email.svg" alt="Email" class="w-6 h-6" />
              infoapjati@apjati.org.id
            </p>
          </div>
        </div>

        <!-- Menu dan Media Sosial -->

        <div class="flex gap-3 lg:gap-5">
          <!-- Menu -->
          <div class="">
            <h1 class="font-semibold text-xl mb-4">Menu</h1>
            <ul class="space-y-2 text-sm">
              <li><a href="index.html" class="hover:underline">Home</a></li>
              <li><a href="pages/daftar_apjapti.php" class="hover:underline">Membership APJATI</a></li>
              <li><a href="pages/regulasi.php" class="hover:underline">Regulation</a></li>
              <li><a href="pages/about_us.php" class="hover:underline">About Us</a></li>
              <li><a href="pages/contact_us.php" class="hover:underline">Contact Us</a></li>
            </ul>
          </div>
          <!-- anggota apjati -->
          <div class="">
            <h1 class="font-semibold text-xl mb-4">Membership</h1>
            <ul class="space-y-2 text-sm">
              <li><a href="pages/list_anggota.php" class="hover:underline">Member List</a></li>
              <li><a href="pages/list_anggota.php" class="hover:underline">Member Registration</a></li>
            </ul>
          </div>
        </div>
        <div class="flex gap-3 lg:gap-5">
          <!-- Tentang Kami -->
          <div class="">
            <h1 class="font-semibold text-xl mb-4">About Us</h1>
            <ul class="space-y-2 text-sm">
              <li><a href="pages/about_us.php" class="hover:underline">About Us APJATI</a></li>
              <li>
                <a href="pages/department.php" class="hover:underline">Structure APJATI</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Media Sosial -->
        <div class="">
          <h1 class="font-semibold text-xl mb-4">Social Media</h1>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="hover:underline">Tiktok</a></li>
            <li><a href="https://www.instagram.com/apjati.id?igsh=OGJqYW0yaGJuZ3J2"
                class="hover:underline">Instagram</a></li>
            <li><a href="#" class="hover:underline">Facebook</a></li>
            <li><a href="#" class="hover:underline">Twitter</a></li>
            <li><a href="#" class="hover:underline">YouTube</a></li>
          </ul>
        </div>
      </div>

      <!-- Garis Pemisah -->
      <hr class="my-6 border-black" />

      <!-- Bagian Footer Bawah -->
      <div class="flex flex-col sm:flex-row justify-between items-center text-sm text-black">
        <span>© 2023
          <a href="https://flowbite.com/" class="hover:underline">APJATI™</a>.
          All Rights Reserved.</span>
        <div class="mt-4 sm:mt-0">
          <!-- Tambahkan ikon sosial media di sini jika ada -->
        </div>
      </div>
    </div>
  </footer>
  <!-- js -->
  <script src="node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
  <script src="src/js/index.js"></script>
  <script src="src/js/nav.js"></script>
  <script src="src/js/button-language-eng.js"></script>
  <script src="src/js/count.js"></script>
  <script>

  </script>
</body>

</html>