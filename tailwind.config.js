/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './dist/**/*.{html,js,php}',
    './node_modules/flowbite/**/*.js'
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#33E9A0',
        'beranda-bg': '#1F1A31',
        'beranda-main': '#292444',
        'beranda-red': '#E94A66'
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans - serif'],
      },
      width:{
        '100':'1080px'
      },
      backgroundImage: {
        // 'profil-bg': "url('../public/Assets/bg/profil.jpg')",
        // 'footer-texture': "url('/img/footer-texture.png')",
      },
      screens: {
        'tall': { 'raw': '(min-height: 812px)' },
        // => @media (min-height: 800px) { ... }
      },
    },
  },
  plugins: [
    require("daisyui"),
    require("flowbite/plugin")
  ],
}
