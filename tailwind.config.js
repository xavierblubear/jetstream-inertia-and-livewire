import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors:{
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: {
                '50': "#f9fafb",
                '100': "#f5f5f5",
                '200': "#e5e7eb",
                '300': "#d1d5db",
                '400': "#9ca3af",
                '500': "#6b7280",
                '600': "#4b5563",
                '700': "#374151",
                '800': "#1f2937",
                '900': "#111827",
                '950': "#030712"
            },
            'yellow':{
                DEFAULT:'#fecb00'
            },
            'blue':{
                DEFAULT:'#05164d'
            },
            'whitebrown':{
                DEFAULT:"#e0dbc8"
            },
            'blackopacity':{
                DEFAULT: 'rgba(17,17,17,.5)'
            }
        },
        screens:{
            'tablet':'993px',
            'mobile':'778px'
        },
        aspectRatio: {
            '4/3': '4 / 3',
            '16/5': '16 / 5'
          },
    },

    plugins: [forms, typography],
};
