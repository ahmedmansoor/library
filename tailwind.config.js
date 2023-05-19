import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './node_modules/flowbite/**/*.js'
    ],

     theme: {
        extend: {
            fontFamily: {
                // wilden: ['Wilden', 'sans-serif'],
                graphik: ['Graphik', 'sans-serif'],
                helveticaNowRegular: ['HelveticaNowRegular', 'sans-serif'],
                helveticaNowMedium: ['HelveticaNowMedium', 'sans-serif'],
                helveticaNowBold: ['HelveticaNowBold', 'sans-serif'],
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#258169",
                primary_light: "#fff1eb",
                primary_hard: "#205F4F",
                bg: "#eadec7",
                bg_dark: "#272a30",
                bg_darker: "#21252a",
                secondary: "#24915c",
                secondary_light: "#E2EFEC",
            },
        },
    },


    darkMode: 'class',

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};
