<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Kontak Kami</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet" />
</head>

<body class="bg-white text-black">

  <style>

  </style>
  <!-- navbar -->
  <nav class="nav h-[65px] lg:h-[112px]" <?php include 'navbar.php'; ?>>
  </nav>


  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "apjati@yahoo.com";
    $email_subject = "Contact Form: " . $subject;
    $email_body = "You have received a new message from the contact form.\n\n" .
      "Name: $name\n" .
      "Email: $email\n\n" .
      "Message:\n$message";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    if (mail($to, $email_subject, $email_body, $headers)) {
      echo "<script>alert('Message sent successfully.');</script>";
      echo "<script>window.location.href = 'contact_us.php';</script>";
    } else {
      echo "<script>alert('Failed to send message. Please try again.');</script>";
      echo "<script>window.location.href = 'contact_us.php';</script>";
    }
  }
  ?>
  </div>
  </header>
  <main class="container mx-auto py-12 px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
      <div>
        <h1 class="text-3xl font-bold mb-4">
          Contact Us
        </h1>
        <h2 class="text-4xl font-bold mb-8">
          Contact Us
        </h2>
        <form class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700" for="name">
              Name
            </label>
            <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="name" name="name" placeholder="Your Name" type="text" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700" for="email">
              Email
            </label>
            <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="email" name="email" placeholder="example@yourmail.com" type="email" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700" for="subject">
              Subject
            </label>
            <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="subject" name="subject" placeholder="Title" type="text" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700" for="message">
              Massage
            </label>
            <textarea class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="message" name="message" placeholder="Type Here" rows="4"></textarea>
          </div>
          <div>
            <button class="w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded-md hover:bg-yellow-600" type="submit">
            send Now
            </button>
          </div>
        </form>
      </div>
      <div>
        <p class="mb-8">
        If you have questions regarding registration, requirements, programs, or other information about our association, you can contact us by filling out the form below. We will respond promptly to your request and provide the information you need. </p>
        <div class="space-y-4">
          <div class="flex items-center space-x-2">
            <i class="fas fa-phone-alt text-yellow-500">
            </i>
            <div>
              <p class="font-bold">
              Telephone Number
              </p>
              <p>
                (021) 7994001
              </p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <i class="fas fa-envelope text-yellow-500">
            </i>
            <div>
              <p class="font-bold">
              Email address
              </p>
              <p>
                infoapjati@apjati.org.id
              </p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <i class="fab fa-whatsapp text-yellow-500">
            </i>
            <div>
              <p class="font-bold">
                Whatsapp
              </p>
              <p>
                (021) 7994001
              </p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <i class="fas fa-map-marker-alt text-yellow-500">
            </i>
            <div>
              <p class="font-bold">
              Our Office
              </p>
              <p>
                Jl. Buncit Raya No.126, RT.10/RW.2, Duren Tiga, Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12790, Indonesia
              </p>
            </div>
          </div>
        </div>
        <div class="mt-8 overflow-hidden">
          <iframe allowfullscreen="" height="300" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0468545204294!2d106.8258806757318!3d-6.2575584612668536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3d2b6dee7bb%3A0x9b875e638fb65e2e!2sIndonesian%20Manpower%20Services%20Association!5e0!3m2!1sen!2sid!4v1736021927383!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></ifr>
          </iframe>
        </div>
      </div>
    </div>
  </main>
  <?php include 'footer.php'?>
</body>

</html>