const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: 'Roboto',
                segoe: 'Segoe UI',
            },
            minWidth: {
                '0': '0',
                '1/4': '25%',
                '1/3': '33%',
                '1/2': '50%',
                '3/4': '75%',
                'full': '100%',
                '80': '20rem',
                '88': '22rem',
                '96': '24rem'
            },
            screens: {
                '2xl': '1280px',
                // => @media (max-width: 1535px) { ... }
          
                'xl': {'max': '1279px'},
                // => @media (max-width: 1279px) { ... }
          
                'lg': {'max': '1023px'},
                // => @media (max-width: 1023px) { ... }
          
                'md': {'max': '767px'},
                // => @media (max-width: 767px) { ... }
          
                'sm': {'max': '639px'},
                // => @media (max-width: 639px) { ... }
              }
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
