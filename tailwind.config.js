import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

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
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require("daisyui"),
    ],

    daisyui: {
        themes: [
            "light",
            "dark",
            {
                // base theme mengikuti OS
                mytheme: {
                    // kosong → inherits dari OS
                }
            }
        ],
        darkTheme: "dark",
        base: true,                // ← penting
        styled: true,
        utils: true,
        themeRoot: "html",
    },
};
