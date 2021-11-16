const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './app/Twill/Capsules/**/*.blade.php',
    ],
    darkMode: false,
    theme: {
        extend: {
            colors: {
                brown: {
                    "50": "#fdfaf7",
                    "100": "#fbf8f3",
                    "200": "#f9f3eb",
                    "300": "#f8f1e7",
                    "400": "#f6ece0",
                    "500": "#f4eadc",
                    "600": "#dcb989",
                    "700": "#c58b3a",
                    "800": "#765323",
                    "900": "#271c0c"
                },
                darkblue: {
                    "50": "#fcfcfd",
                    "100": "#fcfcfd",
                    "200": "#d9deed",
                    "300": "#afbada",
                    "400": "#7b8dc1",
                    "500": "#253050",
                    "600": "#2f3d65",
                    "700": "#394979",
                    "800": "#3c4d80",
                    "900": "#43568e"
                },
                accentRed: {
                    "50": "#fffbfa",
                    "100": "#fffbfa",
                    "200": "#fce1df",
                    "300": "#f8c0ba",
                    "400": "#f49a90",
                    "500": "#ed5b4a",
                    "600": "#ea4633",
                    "700": "#e32b17",
                    "800": "#cc2715",
                    "900": "#ab2111"
                }
            },
            transitionProperty: {'height': 'height'},
            typography: {
                light: {
                    css: {
                        color: '#f4eadc',
                        strong: {
                            color: '#f4eadc'
                        }
                    }
                }
            },
            height: {
                "s-1/3": '33vh',
            },
            minHeight: {
                "96": '24rem',
            }
        },
    },
    variants: {
        extend: {
            margin: ['group-hover'],
            padding: ['group-hover'],
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
};
