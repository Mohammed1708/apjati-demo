<html>

<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="icon" type="image/png" href="../src/assets/logo_apjati.png">

  <script>
    function toggleNavbar() {
      document.getElementById('navbar').classList.toggle('hidden');
    }

    function toggleDetails(id) {
      document.getElementById(id).classList.toggle('hidden');
    }
  </script>
</head>

<body class="bg-gray-100">
  <!-- Navbar -->
  <nav class="nav h-[65px] lg:h-[112px]">
    <?php include 'navbar.php'; ?>
  </nav>

  <div class="w-full relative">
    <!-- Banner for Desktop -->
    <div class="mb-4 hidden md:block">
      <img alt="Banner Image for Desktop" class="w-full h-auto" src="../src/assets/album/Dapatkan_Informasi_Regulasi_Terbaru_Dan_Benefit_Lainnya_Sebagai_Anggota_APJATI_1920_x_561_piksel.png" />
      <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl font-bold">REGULATION</h1>
      </div>
    </div>
    <!-- Banner for Mobile -->
    <div class="mb-4 md:hidden">
      <img alt="Banner Image for Mobile" class="w-full h-auto" src="../src/assets/album/Dapatkan_Informasi_Regulasi_Terbaru_Dan_Benefit_Lainnya_Sebagai_Anggota_APJATI_1920_x_561_piksel.png" />
      <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-2xl font-bold">REGULATION</h1>
      </div>
    </div>
  </div>

  <div class="container mx-auto p-4 max-w-7xl">
    <div class="flex flex-col">
      <!-- Blue Box for Mobile -->
      <div class="bg-[#CBA344] text-white text-center py-2 mb-4 md:hidden">
        <h1 class="text-2xl font-bold">REGULATION PJTKI</h1>
      </div>
      <!-- Main Content -->
      <div class="w-full bg-white shadow-md rounded p-4">
        <table class="w-full">
          <thead class="bg-blue-100 hidden md:table-header-group">
            <tr>
              <th class="text-left p-2">NO</th>
              <th class="text-left p-2">REGULATION NUMBER</th>
              <th class="text-left p-2">PUBLICATION YEAR</th>
              <th class="text-left p-2">REGULATION TITLE</th>
              <th class="text-left p-2">PREVIEW PDF</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">1</td>
              <td class="p-2 hidden md:table-cell">10</td>
              <td class="p-2 hidden md:table-cell">2020</td>
              <td class="p-2 flex justify-between items-center">
                <span>Government Regulation (PP) Number 10 of 2020
                  Procedures for Placement of Indonesian Migrant Workers by the Indonesian Migrant Worker Protection Agency</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details1')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/17cs0IhnkhdM-49_-RRDLkHDdGJ5ekBS7/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details1" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Regulation Number:</strong> 10/2020</div>
                  <div class="block md:hidden"><strong>Publication Year:</strong> 2020</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/17cs0IhnkhdM-49_-RRDLkHDdGJ5ekBS7/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>
            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">2</td>
              <td class="p-2 hidden md:table-cell">18</td>
              <td class="p-2 hidden md:table-cell">2017</td>
              <td class="p-2 flex justify-between items-center">
                <span>Law (UU) no. 18 of 2017
                  Protection of Indonesian Migrant Workers</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details2')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1GVMaoF8gSFucbQiBeefeLEHminZxRlb_/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details2" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Regulation Number:</strong> 18/2017</div>
                  <div class="block md:hidden"><strong>Publication Year:</strong> 2017</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1GVMaoF8gSFucbQiBeefeLEHminZxRlb_/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>
            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">3</td>
              <td class="p-2 hidden md:table-cell">9</td>
              <td class="p-2 hidden md:table-cell">2019</td>
              <td class="p-2 flex justify-between items-center">
                <span>Regulation of the Minister of Manpower of the Republic of Indonesia Number 9 of 2019
                  Procedures for Placement of Indonesian Migrant Workers</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details3')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1IVZP_4d7MwJBirxUzdiWV0vN5KZUR3MQ/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details3" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Regulation Number:</strong> 9/2019</div>
                  <div class="block md:hidden"><strong>Publication Year:</strong> 2019</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1IVZP_4d7MwJBirxUzdiWV0vN5KZUR3MQ/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">4</td>
              <td class="p-2 hidden md:table-cell">90</td>
              <td class="p-2 hidden md:table-cell">2019</td>
              <td class="p-2 flex justify-between items-center">
                <span>Presidential Regulation (PERPRES) Number 90 of 2019
                  Indonesian Migrant Worker Protection Agency</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details4')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1C_Dy-9rpf8F1vAP1zNgDBkv9smP2AJbl/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details4" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Regulation Number:</strong> 90/2019</div>
                  <div class="block md:hidden"><strong>Publication Year:</strong> 2019</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1C_Dy-9rpf8F1vAP1zNgDBkv9smP2AJbl/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">5</td>
              <td class="p-2 hidden md:table-cell">6</td>
              <td class="p-2 hidden md:table-cell">2012</td>
              <td class="p-2 flex justify-between items-center">
                <span>UU no. 6 of 2012
                  Ratification of the International Convention for the Protection of the Rights of Migrant Workers and Their Families</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details5')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1VRtzODshg3J8gC9Ik8mDnK6Hzy5kmUL-/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details5" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Regulation Number</strong> 6/2012</div>
                  <div class="block md:hidden"><strong>Publication Year</strong> 2012</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1VRtzODshg3J8gC9Ik8mDnK6Hzy5kmUL-/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">6</td>
              <td class="p-2 hidden md:table-cell">7</td>
              <td class="p-2 hidden md:table-cell">2020</td>
              <td class="p-2 flex justify-between items-center">
                <span>Regulation of the Minister of Manpower of the Republic of Indonesia Number 7 of 2020
                  Procedures for Imposing Administrative Sanctions in Implementing the Placement and Protection of Indonesian Migrant Workers</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details6')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1eWbxwVZLvJztg2JUZr5HvhL02BiGPA4v/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details6" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Regulation Number:</strong> 7/2020</div>
                  <div class="block md:hidden"><strong>Publication Year:</strong> 2020</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1eWbxwVZLvJztg2JUZr5HvhL02BiGPA4v/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">7</td>
              <td class="p-2 hidden md:table-cell">59</td>
              <td class="p-2 hidden md:table-cell">2021</td>
              <td class="p-2 flex justify-between items-center">
                <span>Government Regulation (PP) Number 59 of 2021
                  Implementation of Protection of Indonesian Migrant Workers</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details7')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1licG6jlIcBubKGfbGm2EDqiccnUlNNf-/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details7" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Regulation Number:</strong> 59/2021</div>
                  <div class="block md:hidden"><strong>Publication Year:</strong> 2021</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1licG6jlIcBubKGfbGm2EDqiccnUlNNf-/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">8</td>
              <td class="p-2 hidden md:table-cell">8</td>
              <td class="p-2 hidden md:table-cell">2023</td>
              <td class="p-2 flex justify-between items-center">
                <span>Indonesian Migrant Worker Protection Agency Regulation Number 8 of 2023
                  Amendments to Indonesian Migrant Worker Protection Agency Regulation Number 7 of 2022 concerning the Pre-Employment Process for Prospective Indonesian Migrant Workers</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details8')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1AMv-KBFZbqrZdr7rH7vJPaXjGUfe8J7v/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details8" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Regulation Number:</strong> 8/2023</div>
                  <div class="block md:hidden"><strong>Publication Year:</strong> 2023</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1AMv-KBFZbqrZdr7rH7vJPaXjGUfe8J7v/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">9</td>
              <td class="p-2 hidden md:table-cell">2</td>
              <td class="p-2 hidden md:table-cell">2021</td>
              <td class="p-2 flex justify-between items-center">
                <span>Indonesian Migrant Worker Protection Agency Regulation Number 2 of 2021
                  Placement Agreement between the Indonesian Migrant Worker Protection Agency and Prospective Indonesian Migrant Workers</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details9')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1jYkFyfsz2A5o2-VZuz_wXO5nLNwhbAHH/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details9" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Regulation Number:</strong> 2/2021</div>
                  <div class="block md:hidden"><strong>Publication Year:</strong> 2021</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1jYkFyfsz2A5o2-VZuz_wXO5nLNwhbAHH/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
</body>

</html>