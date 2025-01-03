/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        fontFamily: {
            sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            header: ['Lato', 'sans-serif']
        },
        colors:{
            'custom-blue':'#60A5FA'
        }
      },
    },
    plugins: [],
  }
