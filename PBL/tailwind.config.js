/** @type {import('tailwindcss').Config} */const defaultTheme = require('tailwindcss/defaultTheme')
export default {

    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],

    theme: {
     darkMode: 'class',
      extend: {
        fontFamily: {
            sans: ['InterVariable', ...defaultTheme.fontFamily.sans],

        },

      },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('daisyui'),
    ],
  }
