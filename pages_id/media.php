<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>
    Company Newsroom
  </title>
  <link rel="icon" type="image/png" href="../src/assets/logo_apjati.png">
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
</head>

<body class="bg-gray-100">
<nav class="nav h-[65px] lg:h-[112px]" <?php include 'navbar.php'; ?>></nav>
    <div class="w-full relative">
    <!-- Banner for Desktop -->
    <div class="hidden md:block">
      <img alt="Banner Image for Desktop" class="w-full h-auto" src="../src/assets/album/Dapatkan_Informasi_Regulasi_Terbaru_Dan_Benefit_Lainnya_Sebagai_Anggota_APJATI_1920_x_561_piksel.png" />
      <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl font-bold">BERITA APJATI</h1>
      </div>
    </div>
    <!-- Banner for Mobile -->
    <div class="md:hidden">
      <img alt="Banner Image for Mobile" class="w-full h-auto" src="../src/assets/album/Dapatkan_Informasi_Regulasi_Terbaru_Dan_Benefit_Lainnya_Sebagai_Anggota_APJATI_1920_x_561_piksel.png" />
      <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-2xl font-bold">BERITA APJATI</h1>
      </div>
    </div>
  </div>
    <main class="py-16 bg-white px-8">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">
               BERITA APJATI
            </h2>
            <p class="text-gray-600 lg:mb-5">
            Tempat sentral di mana jurnal, laporan, dan berita akan diterbitkan
            </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class=" p-6 rounded-lg shadow-lg h-full flex flex-col justify-between">
          <div>
            <img alt="Event image of APJATI" class="w-full h-48 object-cover mb-4 rounded-lg" height="300"
              src="../src/assets/berita/berita2.1.jpg"
              width="400" />
            <h3 class="text-xl font-bold mb-2">
              Meeting Bersama Minister For Food Industry, Commodity and Regional Development, Serawak Malaysia
            </h3>
            <p class="text-gray-600">
              Jakarta, December 06, 2025
            </p>
            <p class="text-gray-700 mb-4">
              Jajaran pengurus Dewan Pimpinan Pusat (DPP) Asosiasi Perusahaan Jasa Tenaga Kerja Indonesia (APJATI) bertemu dengan Minister For Food Industry, Commodity and Regional Development Malaysia,  Yang Berhormat Dato SRI Dr. Stephen Rundi Utom di Hotel Sheraton, Jakarta..
            </p>
          </div>
          <a class="text-blue-400 hover:underline flex items-center mt-auto" href="show_media1.php">
            Read more
            <i class="fas fa-arrow-right ml-2">
            </i>
          </a>
        </div>
        <div class=" p-6 rounded-lg shadow-lg h-full flex flex-col justify-between">
          <div>
            <img alt="Event image of Binawan's 48th anniversary" class="w-full h-48 object-cover mb-4 rounded-lg"
              height="300"
              src="../src/assets/berita/berita 3.jpg"
              width="400" />
            <h3 class="text-xl font-bold mb-2">
              Menteri PPMI Dukung APJATI Perkuat Penempatan dan Perlindungan PMI Melalui 6 Fokus Kerja Strategis
            </h3>
            <p class="text-gray-600">
              Desember 08, 2024,
            </p>
            <p class="text-gray-700 mb-4">
              (APJATI) yang dipimpin Ketua Umumnya Said Saleh Alawaini melakukan audiensi dengan Menteri Perlindungan Pekerja Migran Indonesia (P2MI) Abdul Kadir Karding di Kantor Kementerian P2MI, Jakarta, Kamis.
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
              class="w-full h-48 object-cover mb-4 rounded-lg" height="300"
              src="../src/assets/berita/berita4.jpg"
              width="400" />
            <h3 class="text-xl font-bold mb-2">
              Sambut Tahun 2025, APJATI Komitmen Tingkatkan Kualitas dan Kuantitas PMI
            </h3>
            <p class="text-gray-600">
              Januari 02, 2025
            </p>
            <p class="text-gray-700 mb-4">
              Dengan semangat baru di tahun 2025 ini, APJATI berkomitmen untuk meningkatkan kualitas dan kuantitas tenaga kerja Indonesia, mengembangkan sistem pengiriman tenaga kerja yang efektif dan efisien, serta meningkatkan kesadaran akan pentingnya pelindungan hak-hak pekerja migran Indonesia.
            </p>
          </div>
          <a class="text-blue-400 hover:underline flex items-center mt-auto" href="#">
            Read more
            <i class="fas fa-arrow-right ml-2">
            </i>
          </a>
        </div>
      </div>
  </main>
  <?php include 'footer.php'; ?>
</body>

</html>