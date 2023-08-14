/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                REM: " 'REM', sans-serif",
            },
            backgroundImage: {
                cake: "url('../../../public/images/cake-bg-div.jpg')",
                "cake-pic-1": "url('../../../public/images/cake1.jpg')",
                "cake-pic-2": "url('../../../public/images/cake2.jpg')",
            },
            animation: {
                "spin-slow": "spin 3s linear infinite",
            },
        },
    },
    plugins: [],
};
