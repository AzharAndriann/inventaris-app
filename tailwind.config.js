import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                light1: '#f1f5f9', // Adjust these color values as needed
                light2: '#e2e8f0',
                light7: '#334155',
                light8: '#1e293b',
                light9: '#0f172a',
                purple6: '#9333ea',
                // Add more custom colors as needed
            },
            backdropBlur: {
                'none': '0',
                'sm': '4px',
                'md': '8px',
                'lg': '16px',
                'xl': '24px',
                '2xl': '40px',
                '3xl': '64px',
            }
        },
    },

    plugins: [forms],
};