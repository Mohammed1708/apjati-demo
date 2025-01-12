const carouselInner = document.querySelector('.carousel-inner');
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;
let currentIndex = 0;
const intervalTime = 3000; // Waktu dalam milidetik untuk auto-slide

document.getElementById('next').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalItems;
    updateCarousel();
});

document.getElementById('prev').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    updateCarousel();
});

function updateCarousel() {
    const offset = -currentIndex * 100;
    carouselInner.style.transform = `translateX(${offset}%)`;
}

// Fungsi untuk auto-slide
function autoSlide() {
    currentIndex = (currentIndex + 1) % totalItems;
    updateCarousel();
}

// Set interval untuk auto-slide
let autoSlideInterval = setInterval(autoSlide, intervalTime);

// Hentikan auto-slide saat mouse hover
document.querySelector('.carousel').addEventListener('mouseenter', () => {
    clearInterval(autoSlideInterval);
});

// Mulai kembali auto-slide saat mouse keluar
document.querySelector('.carousel').addEventListener('mouseleave', () => {
    autoSlideInterval = setInterval(autoSlide, intervalTime);
});



// Splide JS 1
document.addEventListener('DOMContentLoaded', function () {
  const splide = new Splide('.splide', {
    type       : 'loop',         // Membuat carousel loop
    perPage    : 1,              // Satu slide per halaman
    gap        : '1rem',         // Jarak antar slide
    focus      : 'center',       // Fokus pada slide tengah
    autoplay   : true,           // Aktifkan autoplay
    interval   : 3000,           // Interval autoplay 3 detik
    arrows     : true,           // Tampilkan tombol navigasi
    pagination : true,           // Aktifkan pagination
  });

  splide.on('mounted move', function () {
    const slides = document.querySelectorAll('.splide__slide');

    slides.forEach((slide) => {
      if (window.innerWidth > 1024) { // Zoom hanya untuk layar desktop (di atas 1024px)
        if (slide.classList.contains('is-active')) {
          slide.style.transform = 'scale(1.1)'; // Zoom in untuk slide aktif
          slide.style.transition = 'transform 0.3s ease'; // Transisi smooth
        } else {
          slide.style.transform = 'scale(1)'; // Reset zoom untuk slide lain
        }
      } else {
        slide.style.transform = 'scale(1)'; // Tidak ada zoom di mobile
      }
    });
  });

  splide.mount();
});

  
function showModal(imageSrc) {
  const modal = document.getElementById('imageModal');
  const modalImage = document.getElementById('modalImage');
  modalImage.src = imageSrc;
  modal.classList.remove('hidden');
}

function closeModal() {
  const modal = document.getElementById('imageModal');
  modal.classList.add('hidden');
}




document.querySelectorAll('a[data-lightbox="gallery-item"]').forEach(item => {
  item.addEventListener("click", () => {
    document.getElementById("backButton").classList.remove("hidden");
  });
});

document.getElementById("backButton").addEventListener("click", () => {
  document.getElementById("backButton").classList.add("hidden");
});
