import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],

    theme: {
  extend: {
    colors: {
      'siger-brown': '#A67032', // Cokelat tombol
      'siger-text': '#5D4037',  // Judul teks
      'siger-cream': '#FDFBF7', // Background
    },
  },
},

};
