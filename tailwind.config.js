const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                blue: {
                    presta5: '#1b4d65',
                    presta4: '#27627E',
                    presta3: '#3f8596',
                    presta2: '#489AAB',
                    presta1: '#52B9CE',
                    presta0: '#00ffff',
                    prestaR: '#3B86A4',
                    prestaS: '#CCE5F8',
                    prestaT: '#819CA8',
                    prestaW: '#4799AA',
                    prestaX: '#E0ECF1',
                    prestaY: '#00ced1',
                    lightLink: '#faebd7'
                }
            },
            backgroundImage: theme => ({
                'footer-texture': "url('/images/Mask Group 7.png')",
                'banner-texture': "url('/images/Mask Group 3.png')",
            })
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('@tailwindcss/aspect-ratio'), require('@tailwindcss/line-clamp')],
};
