/** @type {import('tailwindcss').Config} */const defaultTheme = require('tailwindcss/defaultTheme')
export default {

    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",
      'node_modules/preline/dist/*.js'
    ],

    theme: {
        screens: {
            xs: '320px',
            sm: '480px',
            md: '768px',
            lg: '976px',
            xl: '1440px',
            xxl: '1536px'
          },
     darkMode: 'class',
      extend: {
        fontFamily: {
            sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
            colors: {
                primary: {"50":"#ecfdf5","100":"#d1fae5","200":"#a7f3d0","300":"#6ee7b7","400":"#34d399","500":"#10b981","600":"#059669","700":"#047857","800":"#065f46","900":"#064e3b","950":"#022c22"}
              }
            },
            fontFamily: {
              'body': [
            'Raleway',
            'ui-sans-serif',
            'system-ui',
            '-apple-system',
            'system-ui',
            'Segoe UI',
            'Roboto',
            'Helvetica Neue',
            'Arial',
            'Noto Sans',
            'sans-serif',
            'Apple Color Emoji',
            'Segoe UI Emoji',
            'Segoe UI Symbol',
            'Noto Color Emoji'
          ],
              'sans': [
            'Raleway',
            'ui-sans-serif',
            'system-ui',
            '-apple-system',
            'system-ui',
            'Segoe UI',
            'Roboto',
            'Helvetica Neue',
            'Arial',
            'Noto Sans',
            'sans-serif',
            'Apple Color Emoji',
            'Segoe UI Emoji',
            'Segoe UI Symbol',
            'Noto Color Emoji'
          ]


        },


      },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('daisyui'),
        require('flowbite/plugin'),
        [require("rippleui")],
        require('preline/plugin')
    ],
  }
