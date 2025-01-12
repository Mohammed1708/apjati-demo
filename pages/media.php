<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
       Newsroom
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
    <div class="mb-4 hidden md:block">
      <img alt="Banner Image for Desktop" class="w-full h-auto" src="../src/assets/album/Dapatkan_Informasi_Regulasi_Terbaru_Dan_Benefit_Lainnya_Sebagai_Anggota_APJATI_1920_x_561_piksel.png" />
      <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl font-bold">NEWSROOM</h1>
      </div>
    </div>
    <!-- Banner for Mobile -->
    <div class="mb-4 md:hidden">
      <img alt="Banner Image for Mobile" class="w-full h-auto" src="../src/assets/album/Dapatkan_Informasi_Regulasi_Terbaru_Dan_Benefit_Lainnya_Sebagai_Anggota_APJATI_1920_x_561_piksel.png" />
      <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-2xl font-bold">NEWSROOM</h1>
      </div>
    </div>
  </div>
    <main class="py-16 bg-white px-8">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">
               Newsroom
            </h2>
            <p class="text-gray-600 mb-12">
                The central place where journals, reports and news to be published.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class=" p-6 rounded-lg shadow-lg h-full flex flex-col justify-between">
                    <div>
                        <img alt="Event image of APJATI" class="w-full h-48 object-cover mb-4 rounded-lg" height="300"
                            src="../src/assets/berita/berita2.1.jpg"
                            width="400" />
                        <h3 class="text-xl font-bold mb-2">
                            Joint Meeting of Minister for Food Industry, Commodity and Regional Development, Sarawak Malaysia,
                        </h3>
                        <p class="text-gray-600">
                            Jakarta, December 06, 2025
                        </p>
                        <p class="text-gray-700 mb-4 text-justify">
                            Jakarta - The management of the Central Executive Board (DPP) of the Association of Indonesian Manpower Services Companies (APJATI) met with the Minister for Food Industry, Commodity and Regional Development Malaysia, His Honor Dato SRI Dr. Stephen Rundi Utom at the Sheraton Hotel, Jakarta..
                        </p>
                    </div>
                    <a class="text-blue-400 hover:underline flex items-center mt-auto" href="show_media.php">
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
                            Minister of PPMI Supports APJATI in Strengthening Placement and Protection of Indonesian Migrant Workers Through 6 Strategic Work Focuses
                        </h3>
                        <p class="text-gray-600">
                            On December 08, 2024,
                        </p>
                        <p class="text-gray-700 mb-4 text-justify">
                            (APJATI) led by its General Chair Said Saleh Alawaini had an audience with the Minister of Protection of Indonesian Migrant Workers (P2MI) Abdul Kadir Karding at the P2MI Ministry Office, Jakarta, Thursday
                        </p>
                    </div>
                    <a class="text-blue-400 hover:underline flex items-center mt-auto" href="">
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
                            Welcoming 2025, APJATI Committed to Increasing PMI Quality and Quantity
                        </h3>
                        <p class="text-gray-600">
                            On November 25, 2024, Binawan
                        </p>
                        <p class="text-gray-700 mb-4 text-justify">
                            With a new spirit in 2025, APJATI is committed to improving the quality and quantity of Indonesian workers, developing an effective and efficient labor dispatch system, and raising awareness of the importance of protecting the rights of Indonesian migrant workers.
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
    <?php include 'footer.php'; ?>
</body>

</html>