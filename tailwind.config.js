/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class', // supaya dark mode aktif pakai class "dark"
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      transitionProperty: {
        'bg': 'background-color',
        'text': 'color',
      },
    },
  },
  plugins: [],
}
