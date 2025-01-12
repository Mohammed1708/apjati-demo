<html>

<head>
  <link rel="icon" type="image/png" href="../src/assets/logo_apjati.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
<nav class="nav h-[65px] lg:h-[112px]">
    <?php include 'navbar.php'; ?>
  </nav>

  <div class="w-full relative">
    <!-- Banner for Desktop -->
    <div class="mb-4 hidden md:block">
      <img alt="Banner Image for Desktop" class="w-full h-auto" src="../src/assets/album/Dapatkan_Informasi_Regulasi_Terbaru_Dan_Benefit_Lainnya_Sebagai_Anggota_APJATI_1920_x_561_piksel.png" />
      <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl font-bold">REGULASI</h1>
      </div>
    </div>
    <!-- Banner for Mobile -->
    <div class="mb-4 md:hidden">
      <img alt="Banner Image for Mobile" class="w-full h-auto" src="../src/assets/album/Dapatkan_Informasi_Regulasi_Terbaru_Dan_Benefit_Lainnya_Sebagai_Anggota_APJATI_1920_x_561_piksel.png" />
      <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-2xl font-bold">REGULASI</h1>
      </div>
    </div>
  </div>

  <div class="container mx-auto p-4 max-w-7xl">
    <div class="flex flex-col">
      <!-- Blue Box for Mobile -->
      <div class="bg-[#CBA344] text-white text-center py-2 mb-4 md:hidden">
        <h1 class="text-2xl font-bold">REGULASI PJTKI</h1>
      </div>
      <!-- Main Content -->
      <div class="w-full bg-white shadow-md rounded p-4">
        <table class="w-full">
          <thead class="bg-blue-100 hidden md:table-header-group">
            <tr>
              <th class="text-left p-2">NO</th>
              <th class="text-left p-2">NOMOR REGULASI</th>
              <th class="text-left p-2">TAHUN TERBIT</th>
              <th class="text-left p-2">JUDUL REGULASI</th>
              <th class="text-left p-2">PREVIEW PDF</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">1</td>
              <td class="p-2 hidden md:table-cell">10</td>
              <td class="p-2 hidden md:table-cell">2020</td>
              <td class="p-2 flex justify-between items-center">
                <span>Peraturan Pemerintah (PP) Nomor 10 Tahun 2020
                  Tata Cara Penempatan Pekerja Migran Indonesia oleh Badan Pelindungan Pekerja Migran Indonesia</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details1')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/17cs0IhnkhdM-49_-RRDLkHDdGJ5ekBS7/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details1" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Nomor Regulasi:</strong> 10/2020</div>
                  <div class="block md:hidden"><strong>Tahun Terbit:</strong> 2020</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/17cs0IhnkhdM-49_-RRDLkHDdGJ5ekBS7/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>
            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">2</td>
              <td class="p-2 hidden md:table-cell">18</td>
              <td class="p-2 hidden md:table-cell">2017</td>
              <td class="p-2 flex justify-between items-center">
                <span>Undang-undang (UU) No. 18 Tahun 2017
                  Pelindungan Pekerja Migran Indonesia</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details2')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1GVMaoF8gSFucbQiBeefeLEHminZxRlb_/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details2" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Nomor Regulasi:</strong> 18/2017</div>
                  <div class="block md:hidden"><strong>Tahun Terbit:</strong> 2017</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1GVMaoF8gSFucbQiBeefeLEHminZxRlb_/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>
            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">3</td>
              <td class="p-2 hidden md:table-cell">9</td>
              <td class="p-2 hidden md:table-cell">2019</td>
              <td class="p-2 flex justify-between items-center">
                <span>Peraturan Menteri Ketenagakerjaan Republik Indonesia Nomor 9 Tahun 2019
                  Tata Cara Penempatan Pekerja Migran Indonesia</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details3')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1IVZP_4d7MwJBirxUzdiWV0vN5KZUR3MQ/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details3" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Nomor Regulasi:</strong> 9/2019</div>
                  <div class="block md:hidden"><strong>Tahun Terbit:</strong> 2019</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1IVZP_4d7MwJBirxUzdiWV0vN5KZUR3MQ/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">4</td>
              <td class="p-2 hidden md:table-cell">90</td>
              <td class="p-2 hidden md:table-cell">2019</td>
              <td class="p-2 flex justify-between items-center">
                <span>Peraturan Presiden (PERPRES) Nomor 90 Tahun 2019
                  Badan Pelindungan Pekerja Migran Indonesia</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details4')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1C_Dy-9rpf8F1vAP1zNgDBkv9smP2AJbl/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details4" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Nomor Regulasi:</strong> 90/2019</div>
                  <div class="block md:hidden"><strong>Tahun Terbit:</strong> 2019</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1C_Dy-9rpf8F1vAP1zNgDBkv9smP2AJbl/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">5</td>
              <td class="p-2 hidden md:table-cell">6</td>
              <td class="p-2 hidden md:table-cell">2012</td>
              <td class="p-2 flex justify-between items-center">
                <span>UU No. 6 Tahun 2012
                  Pengesahan Konvensi Internasional Perlindungan Hak-Hak Pekerja Migran dan Keluarganya</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details5')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1VRtzODshg3J8gC9Ik8mDnK6Hzy5kmUL-/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details5" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Nomor Regulasi:</strong> 6/2012</div>
                  <div class="block md:hidden"><strong>Tahun Terbit:</strong> 2012</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1VRtzODshg3J8gC9Ik8mDnK6Hzy5kmUL-/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">6</td>
              <td class="p-2 hidden md:table-cell">7</td>
              <td class="p-2 hidden md:table-cell">2020</td>
              <td class="p-2 flex justify-between items-center">
                <span>Peraturan Menteri Ketenagakerjaan Republik Indonesia Nomor 7 Tahun 2020
                  Tata Cara Pengenaan Sanksi Administratif dalam Pelaksanaan Penempatan dan Pelindungan Pekerja Migran Indonesia</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details6')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1eWbxwVZLvJztg2JUZr5HvhL02BiGPA4v/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details6" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Nomor Regulasi:</strong> 7/2020</div>
                  <div class="block md:hidden"><strong>Tahun Terbit:</strong> 2020</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1eWbxwVZLvJztg2JUZr5HvhL02BiGPA4v/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">7</td>
              <td class="p-2 hidden md:table-cell">59</td>
              <td class="p-2 hidden md:table-cell">2021</td>
              <td class="p-2 flex justify-between items-center">
                <span>Peraturan Pemerintah (PP) Nomor 59 Tahun 2021
                  Pelaksanaan Pelindungan Pekerja Migran Indonesia</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details7')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1licG6jlIcBubKGfbGm2EDqiccnUlNNf-/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details7" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Nomor Regulasi:</strong> 59/2021</div>
                  <div class="block md:hidden"><strong>Tahun Terbit:</strong> 2021</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1licG6jlIcBubKGfbGm2EDqiccnUlNNf-/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">8</td>
              <td class="p-2 hidden md:table-cell">8</td>
              <td class="p-2 hidden md:table-cell">2023</td>
              <td class="p-2 flex justify-between items-center">
                <span>Peraturan Badan Pelindungan Pekerja Migran Indonesia Nomor 8 Tahun 2023
                  Perubahan atas Peraturan Badan Pelindungan Pekerja Migran Indonesia Nomor 7 Tahun 2022 tentang Proses Sebelum Bekerja bagi Calon Pekerja Migran Indonesia</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details8')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1AMv-KBFZbqrZdr7rH7vJPaXjGUfe8J7v/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details8" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Nomor Regulasi:</strong> 8/2023</div>
                  <div class="block md:hidden"><strong>Tahun Terbit:</strong> 2023</div>
                  <div class="md:w-1/3"><a href="https://drive.google.com/file/d/1AMv-KBFZbqrZdr7rH7vJPaXjGUfe8J7v/view?usp=sharing" class="text-blue-600 hover:underline flex items-center md:hidden"><i class="fas fa-file-pdf mr-2"></i>Preview</a></div>
                </div>
              </td>
            </tr>

            <tr class="border-b">
              <td class="p-2 hidden md:table-cell">9</td>
              <td class="p-2 hidden md:table-cell">2</td>
              <td class="p-2 hidden md:table-cell">2021</td>
              <td class="p-2 flex justify-between items-center">
                <span>Peraturan Badan Pelindungan Pekerja Migran Indonesia Nomor 2 Tahun 2021
                  Perjanjian Penempatan antara Badan Pelindungan Pekerja Migran Indonesia dan Calon Pekerja Migran Indonesia</span>
                <button class="md:hidden text-gray-600 ml-4" onclick="toggleDetails('details9')">
                  <i class="fas fa-chevron-down"></i>
                </button>
              </td>
              <td class="p-2 hidden md:table-cell"><a href="https://drive.google.com/file/d/1jYkFyfsz2A5o2-VZuz_wXO5nLNwhbAHH/view?usp=sharing" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-file-pdf mr-2 md:hidden"></i>Preview</a></td>
            </tr>
            <tr id="details9" class="hidden md:table-row">
              <td colspan="5" class="p-2">
                <div class="flex flex-col md:flex-row">
                  <div class="block md:hidden"><strong>Nomor Regulasi:</strong> 2/2021</div>
                  <div class="block md:hidden"><strong>Tahun Terbit:</strong> 2021</div>
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