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
                custom: ['Nugros-Regular','Nugros-Medium','Nugros-Bold','Nugros-Black'],
            },
            dropShadow: {
                glow: [
                    "0 0px 20px rgba(255,255, 255, 0.35)",
                    "0 0px 65px rgba(255, 255,255, 0.2)"
                ]
            },
            colors: {
                'steps-primary': {
                    DEFAULT: '#EF6827',
                },
                'custom-gray': {
                    DEFAULT: '#444444',
                },
                'custom-black': {
                    DEFAULT: '#464646',
                },
            },
        },
    },
    plugins: [],
}
