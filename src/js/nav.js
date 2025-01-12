// Ambil elemen tombol toggle dan menu mobile
const menuToggle = document.getElementById("menu-toggle");
const menuMobile = document.getElementById("menu-mobile");

// Fungsi untuk menampilkan/menyembunyikan menu mobile
menuToggle.addEventListener("click", () => {
  // Toggle kelas 'hidden' pada menu mobile
  menuMobile.classList.toggle("hidden");
});
document.addEventListener("DOMContentLoaded", () => {
  // Toggle for main menu (mobile view)
  const menu = document.getElementById("menu");

  menuToggle.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });

  // Toggle for Membership dropdown
  const membershipToggle = document.getElementById("membership-toggle");
  const membershipMenu = document.getElementById("membership-menu");

  membershipToggle.addEventListener("click", () => {
    membershipMenu.classList.toggle("show");
  });
  // Toggle for Media dropdown
  const mediaToggle = document.getElementById("media-toggle");
  const mediaMenu = document.getElementById("media-menu");

  mediaToggle.addEventListener("click", () => {
    mediaMenu.classList.toggle("show");
  });

  // Toggle for About Us dropdown
  const aboutusToggle = document.getElementById("aboutus-toggle");
  const aboutusMenu = document.getElementById("aboutus-menu");

  aboutusToggle.addEventListener("click", () => {
    aboutusMenu.classList.toggle("show");
  });

  // Close dropdowns if clicked outside
  document.addEventListener("click", (event) => {
    if (
      !membershipToggle.contains(event.target) &&
      !membershipMenu.contains(event.target)
    ) {
      membershipMenu.classList.remove("show");
    }
    if (
      !aboutusToggle.contains(event.target) &&
      !aboutusMenu.contains(event.target)
    ) {
      aboutusMenu.classList.remove("show");
    }
  });
});


// Ambil URL halaman saat ini
const currentPage = window.location.pathname.split("/").pop();

// Seleksi semua link dengan class 'nav-link'
const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach(link => {
  // Bandingkan href setiap link dengan URL halaman saat ini
  if (link.getAttribute("href") === currentPage) {
    link.classList.add("active"); // Tambahkan class active
  } else {
    link.classList.remove("active"); // Pastikan link lain tidak memiliki class active
  }
});



   // Function to toggle dropdown visibility
   function toggleDropdown(linkId, dropdownId) {
    const link = document.getElementById(linkId);
    const dropdown = document.getElementById(dropdownId);

    // Add event listener to the link
    link.addEventListener("click", (event) => {
      event.preventDefault(); // Prevent default link behavior
      dropdown.classList.toggle("hidden");
    });

    // Close dropdown when clicking outside
    window.addEventListener("click", (event) => {
      if (!link.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add("hidden");
      }
    });
  }

  // Initialize dropdowns
  toggleDropdown("membershipLink", "membershipDrop");
  toggleDropdown("mediaLink", "mediaDrop");
  toggleDropdown("aboutLink", "aboutDrop");
