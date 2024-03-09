/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.{html,js}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    fontFamily: {
      sans: ['Outfit', 'sans-serif'],
    },
    colors: {
      'peach': {
        50: '#F6F4F3',
        100: '#FFF0ED',
        200: '#FFCEC4',
        300: '#FFAD9B',
        400: '#FF8B72',
        500: '#FF6A49',
        600: '#DD5335',
        700: '#BB3F24',
        800: '#992E16',
        900: '#771F0B',
      },
    },
    extend: {},
  },
  plugins: [require('flowbite/plugin')],
}