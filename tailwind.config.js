// tailwind.config.js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // ESSENCIAL: Rastreia todas as views Blade e arquivos JS
    "./resources/**/*.blade.php", 
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}