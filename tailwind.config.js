import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    mode: 'jit',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'xs': '360px',
                ...defaultTheme.screens,
            },
            colors: {
                'red-kena': '#bc0000ff',
            },

        },
    },

    plugins: [
        forms,

        function({ addBase, config }) {

            addBase({
                '.standard-content p': {
                    'margin-top': config('theme.spacing.3'),
                    'fon-size': config('theme.fontSize.xl'),
                    'font-weight': 'bold', // odpovídá třídě 'font-bold'
                    'color': config('theme.colors.white'),
                    'border-left': '1px solid white',
                    'border-right': '1px solid white',


                },
                'h2' : {
                    'font-size': config('theme.fontSize.2xl'), // odpovídá třídě 'text-2xl'
                    'color': config('theme.colors.red-kena'), // odpovídá třídě 'text-orange-500'
                    'background-color': config('theme.colors.white'), // odpovídá třídě 'bg-gray-100'
                    'text-align': 'center', // odpovídá třídě 'text-center'
                    'font-weight': 'bold', // odpovídá třídě 'font-bold'
                    'margin-top': config('theme.spacing.5'), // odpovídá třídě 'mt-5'
                    'margin-bottom': config('theme.spacing.5'), // odpovídá třídě 'mb-5'
                }
            });




        },
    ],


};
