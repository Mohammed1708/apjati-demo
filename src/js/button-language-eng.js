let currentLanguage = 'ENG';

const btnEng = document.getElementById('btnEng');
const btnIdn = document.getElementById('btnIdn');

// Function to update active button
function updateActiveButton(language) {
  if (language === 'ENG') {
    currentLanguage = 'ENG';
    btnEng.classList.replace('bg-gray-200', 'bg-primary');
    btnEng.classList.replace('text-primary', 'text-white');
    btnIdn.classList.replace('bg-primary', 'bg-gray-200');
    btnIdn.classList.replace('text-white', 'text-primary');
  } else if (language === 'IDN') {
    currentLanguage = 'IDN';
    btnIdn.classList.replace('bg-gray-200', 'bg-primary');
    btnIdn.classList.replace('text-primary', 'text-white');
    btnEng.classList.replace('bg-primary', 'bg-gray-200');
    btnEng.classList.replace('text-white', 'text-primary');
  }
}

// Add event listeners
btnEng.addEventListener('click', (event) => {
  event.preventDefault(); // Prevent default link behavior
  updateActiveButton('ENG');
  // Redirect after setting active state
  window.location.href = btnEng.getAttribute('href');
});

btnIdn.addEventListener('click', (event) => {
  event.preventDefault(); // Prevent default link behavior
  updateActiveButton('IDN');
  // Redirect after setting active state
  window.location.href = btnIdn.getAttribute('href');
});