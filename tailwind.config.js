const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    safelist: [
        //wille prevent the purge of all tailwind colors, can be modified to be more specific,
        //TODO this is because of the usage of dynamic components, remove it if the dynamic part is no more
        {
            //using actual regex does not seem to work, so the full names have been used
            pattern: /bg-(red|green|blue|purple)-(100|200|300|400|500|600|700|800|900)/,
            variants: ['lg', 'hover', 'focus', 'lg:hover'],

        },
      ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
