/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./**/*.php", "./**/*.js", "./**/*.html"],
  theme: {
    extend: {
      fontFamily: {
        rubik: ["Rubik", "sans-serif"],
        spaceGrotesk: ["Space Grotesk", "sans-serif"],
        maitree: ["Maitree", "serif"],
      },
    },
  },
  plugins: [],
};
