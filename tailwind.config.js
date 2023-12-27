/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  important: true,
  content: [
      "./**/**/*.{php,js}",
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Poppins', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        "primary": "#05445E",
        "secondary": "#189AB4",
        "third": "#75E6DA",
      },
      borderRadius: {
        "sm" : "0.25rem"
      },
      borderWidth: {
        '1': '1px',  // Add a 1px border width utility
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('flowbite/plugin')({
      charts: true,
    }),
  ],
}

