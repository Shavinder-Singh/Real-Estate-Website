/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php",
  ],
  theme: {
    extend: {
      screens: {
        'vs': '490px',
        // => @media (min-width: 490px) { ... }
        'sm': '640px',
        // => @media (min-width: 640px) { ... }

        'md': '768px',
        // => @media (min-width: 768px) { ... }

        '1md': '900px',
        // => @media (min-width: 900px) { ... }

        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }

        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }

        '1xl': '1400px',
        // => @media (min-width: 1280px) { ... }

        '2xl': '1536px',
        // => @media (min-width: 1536px) { ... }
      },
      colors: {
        primaryColor: '#ed563b',
        secondaryColor: '#7a7a7a',//graycolor
        lightGray: '#f7f7f7',//light gray
        ContentColor: '#232d39',//black
        whiteColor: '#ffffff',//white
        lightblackColor:'#212529'//lightblack
      },
      backgroundColor: {
        primaryColor: '#ed563b', //redBrown Mix
        secondaryColor: '#7a7a7a',//graycolor
        lightGray: '#f7f7f7',//light gray
        ContentColor: '#232d39',//black
        whiteColor: '#ffffff',//white
        lightblackColor:'#212529'//lightblack

      },
      fontFamily: {
        poppins: ["poppins", "sans-serif"],
        poppinsRegular: ["poppinsRegular", "sans-serif"],
        poppinsThin: ["poppinsThin", "sans-serif"],
        poppinsBold: ["poppinsBold", "sans-serif"],
        poppinsLight: ["poppinsLight", "sans-serif"],
        poppinsMedium: ["poppinsMedium", "sans-serif"],
        poppinssemiBold: ["poppinssemiBold", "sans-serif"],
        poppinsBlack: ["poppinsBlack", "sans-serif"],
        robotoLight: ["robotoLight", "sans-serif"],
        robotoThin: ["robotoThin", "sans-serif"],

      },
      
    },
  },
  plugins: [],
}