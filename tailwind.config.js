const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Quicksand', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'jh-green': {
                    400: '#26ae61'
                }
            },
            backgroundImage: theme => ({
                'search-section': "url('/images/bg-search.jpg')",
            })
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
