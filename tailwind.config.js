/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/css/**/*.css",
    "./resources/js/**/*.js",
    "./vite.config.js",
  ],
  theme: {
      extend: {
          colors: {
              "black": "#000000",
              "orange" : "#FF8400",
          },
          fontFamily: {
              "myriad": ["myriad-pro", "sans-serif"],
              "nunito": ["Nunito Sans", "sans-serif"],
          },
          fontSize: {
              "2xs": ".625rem", // 10px
          }
      },
  },
  plugins: [],
}