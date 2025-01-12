/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./api/**/*.php",   
    "./pages/**/*.php",  
    "./pages_id/**/*.php",  
  ],
  
  theme: {
    extend: {
      fontFamily: {
        sans: ["Roboto", "sans-serif"],
      },
      colors: {
        primary: ["#CBA344"],
        yellowCustom: "rgb(241,223,0)",
      },
      backgroundImage: {
        "gradient-to-custom":
          "linear-gradient(90deg, rgba(241,223,0,1) 0%, rgba(241,223,0,0.41237745098039214) 71%)",
      },
    },
  },
  plugins:[]
};

