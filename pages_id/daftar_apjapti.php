<?php

include '../api/koneksi.php';

if (!isset($koneksi)) {
    die("Database connection failed: Connection variable not set.");
}
// Handle form submission
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pt = $_POST['nama_pt'];
    $alamat_pt = $_POST['alamat_pt'];
    $email_pt = $_POST['email_pt'];
    $nomor_pt = $_POST['nomor_pt'];

    // Insert user data into the database
    $stmt = $koneksi->prepare("INSERT INTO pt_ingin_daftar (nama_pt, alamat_pt, email_pt, nomor_pt) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $nama_pt, $alamat_pt, $email_pt, $nomor_pt);
        if ($stmt->execute()) {
            $message = "Thank you, $nama_pt. Your details have been submitted! <a href='download.php'>Download the Word File</a>";
        } else {
            $message = "Failed to save your details. Please try again.";
        }
        $stmt->close();
    } else {
        $message = "Database error: Unable to prepare the statement.";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Persyaratan Keanggotaan APJATI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* General Styles */
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        /* Benefits Section */

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
            padding: 20px;
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
            background-color: #FFEC00;
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

    /* Form Section */
    .form-container {
    margin-top: 40px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
    }

    .form-container h2 {
    margin-bottom: 10px;
    }

    .form-container p {
    margin-bottom: 20px;
    font-size: 0.9rem;
    color: #555;
    }

    form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    }

    label {
    text-align: left;
    font-weight: bold;
    font-size: 0.9rem;
    }

    input {
    padding: 10px;
    font-size: 0.9rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    }

    button {
    padding: 10px;
    font-size: 1rem;
    background-color: #FFEC00;
    border: none;
    border-radius: 4px;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s;
    }
    </style>
</head>

<body>
    <!-- navbar -->
     <nav class="nav h-[65px] lg:h-[112px]">
    <?php include 'navbar.php'; ?>
    </nav>
    <div class="container">
    <section class="py-4 lg:px-8 lg:h-[25rem] flex flex-col items-center justify-center overflow-hidden">
    <h1 class="lg:mb-8 lg:text-4xl text-2xl font-semibold border-black">
      BENEFIT ANGGOTA
    </h1>
    <div class="benefit mt-4">
      <div class="flex flex-wrap gap-4 justify-center ">
        <div
          class="card w-72 h-32 lg:w-80 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-5 relative flex flex-col items-center justify-center overflow-hidden hover:scale-105 hover:shadow-lg transition-transform duration-300">
          <div
            class="circle w-14 h-14 rounded-full absolute -right-3 -top-3 flex items-center justify-center bg-[#CBA344]">
            <p class="text-white text-2xl">1</p>
          </div>
          <p class="text text-sm text-zinc-500 text-center">
          Mematuhi standar tertinggi etika organisasi dan bisnis
          </p>
        </div>
        <div
          class="card w-72 h-32 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-5 relative flex flex-col items-center justify-center overflow-hidden hover:scale-105 hover:shadow-lg transition-transform duration-300">
          <div
            class="circle w-14 h-14 rounded-full absolute -right-3 -top-3 flex items-center justify-center bg-[#CBA344]">
            <p class="text-white text-2xl">2</p>
          </div>
          <p class="text text-sm text-zinc-500 text-center">
            komunikasi Yang Transparan
          </p>
        </div>
        <div
          class="card w-72 h-32 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-5 relative flex flex-col items-center justify-center overflow-hidden hover:scale-105 hover:shadow-lg transition-transform duration-300">
          <div
            class="circle w-14 h-14 rounded-full absolute -right-3 -top-3 flex items-center justify-center bg-[#CBA344]">
            <p class="text-white text-2xl">3</p>
          </div>
          <p class="text text-sm text-zinc-500 text-center">
          Komitmen terhadap profesionalisme
          </p>
        </div>
        <div
          class="card w-72 lg:w-80 h-32 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-5 relative flex flex-col items-center justify-center overflow-hidden hover:scale-105 hover:shadow-lg transition-transform duration-300">
          <div
            class="circle w-14 h-14 rounded-full absolute -right-3 -top-3 flex items-center justify-center bg-[#CBA344]">
            <p class="text-white text-2xl">4</p>
          </div>
          <p class="text text-sm text-zinc-500 text-center">
          Fokus untuk memberikan manfaat bagi seluruh pemangku kepentingan
          </p>
        </div>
        <div
          class="card w-72 h-32 bg-white shadow-[0px_0px_15px_rgba(0,0,0,0.09)] p-5 relative flex flex-col items-center justify-center overflow-hidden hover:scale-105 hover:shadow-lg transition-transform duration-300">
          <div
            class="circle w-14 h-14 rounded-full absolute -right-3 -top-3 flex items-center justify-center bg-[#CBA344]">
            <p class="text-white text-2xl">5</p>
          </div>
          <p class="text text-sm text-zinc-500 text-center">
          Responsif terhadap situasi nasional dan global
          </p>
        </div>
      </div>


    </div>
  </section>
  </div>

        <?php if (!empty($message)) : ?>
            <div class="message">
                <?= $message ?>
            </div>
        <?php endif; ?>

        <div class="bg-white shadow-lg rounded-lg p-6 w-full px-4">
    <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Formulir Pendaftaran Anggota</h2>
    <p class="text-sm text-gray-600 mb-6 text-center">
      Silakan isi formulir pendaftaran anggota di bawah ini untuk mendapatkan formulir pendaftaran:
    </p>
    <form class="space-y-4">
      <!-- Nama Perusahaan -->
      <div>
        <label for="nama-perusahaan" class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
        <input 
          type="text" 
          id="nama-perusahaan" 
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[#CBA344] focus:border-[#CBA344]" 
          placeholder="Masukkan nama perusahaan" 
          required>
      </div>
      <!-- Alamat Perusahaan -->
      <div>
        <label for="alamat-perusahaan" class="block text-sm font-medium text-gray-700">Alamat Perusahaan</label>
        <input 
          type="text" 
          id="alamat-perusahaan" 
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[#CBA344] focus:border-[#CBA344]" 
          placeholder="Masukkan alamat perusahaan" 
          required>
      </div>
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input 
          type="email" 
          id="email" 
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[#CBA344] focus:border-[#CBA344]" 
          placeholder="Masukkan Email Perusahaan" 
          required>
      </div>
      <!-- Telepon -->
      <div>
        <label for="telepon" class="block text-sm font-medium text-gray-700">Nomor Telp</label>
        <input 
          type="tel" 
          id="telepon" 
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-[#CBA344] focus:border-[#CBA344]" 
          placeholder="Masukkan No. Telp" 
          required>
      </div>
      <!-- Submit Button -->
      <button 
        type="submit" 
        class="w-full bg-[#CBA344] text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-[#b3943c] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#CBA344] transition">
        Kirim
      </button>
    </form>
  </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>
</body>

</html>