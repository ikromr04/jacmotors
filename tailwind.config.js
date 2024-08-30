/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', 'Arial', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
