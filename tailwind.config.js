const {fontFamily} = require('tailwindcss/defaultTheme')
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                gray: colors.slate,
                primary: {
                    50: '#83D4FE',
                    100: '#6FCDFE',
                    200: '#46BFFD',
                    300: '#1EB1FD',
                    400: '#029FEF',
                    500: '#0284C7',
                    600: '#015F8F',
                    700: '#013A58',
                    800: '#001520',
                    900: '#000000',
                    950: '#000000'
                },
            },
            fontFamily: {
                sans: ["Fira Sans", ...fontFamily.sans],
            }
        },
    }
}
