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
                'xs': '475px',
                ...defaultTheme.screens,
              },

        },
    },

    plugins: [
        forms,
        function({ addBase, config }) {
            addBase({
                '.p-standard': {
                    'margin-top': config('theme.spacing.3'),
                    'font-size': config('theme.fontSize.xl'),

                },
                '.h2-orange' : {
                    'font-size': config('theme.fontSize.2xl'), // odpovídá třídě 'text-2xl'
                    'color': config('theme.colors.orange.500'), // odpovídá třídě 'text-orange-500'
                    'text-decoration': 'underline', // odpovídá třídě 'underline'
                    'margin-top': config('theme.spacing.10'), // odpovídá třídě 'mt-10'
                    // další styly..
                }
            });
        },
    ],


};
