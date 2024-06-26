import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    options: {
        safelist: {
          standard: [
          'text-2xl',
          'text-3xl',
          'text-4xl',
          'text-5xl',
          'text-6xl',
          'sm:text-2xl',
          'sm:text-3xl',
          'sm:text-4xl',
          'sm:text-5xl',
          'sm:text-6xl',
          'md:text-2xl',
          'md:text-3xl',
          'md:text-4xl',
          'md:text-5xl',
          'md:text-6xl',
          'lg:text-2xl',
          'lg:text-3xl',
          'lg:text-4xl',
          'lg:text-5xl',
          'lg:text-6xl',
          ],
        },
      },
  
    theme: {
        fontSize: {
            'xs': '.75rem',
            'sm': '.875rem',
            'base': '1rem',
            'lg': '1.125rem',
            'xl': '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.875rem',
            '4xl': '2.25rem',
            '5xl': '3rem',
            '6xl': '4rem',
           },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
