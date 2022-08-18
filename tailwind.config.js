/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './dist/**/*.{html,js,php}',
    './node_modules/flowbite/**/*.js'
  ],
  theme: {
    extend: {
      colors:{
        'primary':'#33E9A0',
      },
      screens: {
        's20': '412px',
      },
    },
  },
  plugins: [
    require("daisyui"),
    require("flowbite/plugin")
  ],
}
