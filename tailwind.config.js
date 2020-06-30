module.exports = {
    purge: [
        './resources/**/*.vue',
        './resources/**/*.blade.php',
    ],
    theme: {
        extend: {
            screens: {
                'dark-mode': {'raw': '(prefers-color-scheme: dark)'},
            },
        },
    },
    variants: {},
    plugins: [],
};
