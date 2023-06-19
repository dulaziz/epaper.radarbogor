/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['"Poppins"'],
            },
            colors: {
                primary: "#00548F",
                primary2: "#3b82f6",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
