/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': "#070F2B",
        'secondary': "#1B1A55",
        'accent': '#535C91',
        'accent1': '#9290C3',
        'teks': "#F0F0F0"
      }
    },
  },
  plugins: [],
}

