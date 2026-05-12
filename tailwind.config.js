/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './**/*.php',
        './builder/**/*.php',
        './template-parts/**/*.php',
        './assets/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#2563eb',
                secondary: '#64748b',
            },
            fontFamily: {
                sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            maxWidth: {
                '8xl': '88rem',
            },
        },
    },
    plugins: [],
};
