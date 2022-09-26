const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            white: colors.white,
            black: colors.black,
            primary: '#455A64',
            primaryLight: '#CFD8DC',
            secondary: '#7E57C2',
            secondaryLight: '#B39DDB',
            third: '#FFB74D',
            thirdLight: '#FFE9CA',
            red: colors.red,
            blue: colors.blue
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
