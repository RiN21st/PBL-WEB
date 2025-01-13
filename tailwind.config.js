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
     darkMode: 'selector',
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
        boxShadow: {
            'custom': '0px 1px 2px #2B3044, 0px 4px 16px #2B3044',
          },
          transformOrigin: {
            'perspective': '600px',
          },

          colors: {
            glow: 'rgb(100, 100, 100)', // Warna glow utama abu-abu
            'glow-spread': 'rgba(60, 60, 60, 0.781)', // Warna glow tersebar lebih gelap
            'enhanced-glow': 'rgb(150, 150, 150)', // Warna glow tambahan abu-abu terang
            'btn-color': 'rgb(30, 30, 30)', // Warna tombol hitam gelap
          },
          boxShadow: {
            glow: '0 0 1em 0.25em rgb(100, 100, 100), 0 0 4em 1em rgba(60, 60, 60, 0.781), inset 0 0 0.75em 0.25em rgb(100, 100, 100)',
            'hover-glow': '0 0 1em 0.25em rgb(100, 100, 100), 0 0 4em 2em rgba(60, 60, 60, 0.781), inset 0 0 0.75em 0.25em rgb(100, 100, 100)',
            'active-glow': '0 0 0.6em 0.25em rgb(100, 100, 100), 0 0 2.5em 2em rgba(60, 60, 60, 0.781), inset 0 0 0.5em 0.25em rgb(100, 100, 100)',
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
