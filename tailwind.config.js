import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Playfair', ...defaultTheme.fontFamily.sans],
                clicker: ['Clicker', 'sans-serif']
            },
            colors: {
                black: '#1E1E1E',
                orange: '#F9C06A',
                primary: '#603809',
                grey: '#707070',
                'secondary-orange': '#FFEED8',
                footer: '#442808',
            }
        },
    },

    plugins: [forms],
};
