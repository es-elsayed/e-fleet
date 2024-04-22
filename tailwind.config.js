import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                pr: {
                    100: "#fff5e6",
                    200: "#ffd799",
                    300: "#ffc366",
                    400: "#ff9b00",
                    500: "#e68c00",
                    600: "#e68c00",
                    700: "#cc7c00",
                    800: "#b36d00",
                    900: "#995d00",
                },
                sec: {
                    100: "#fafafa",
                    200: "#ffd799",
                    300: "#f7f7f8",
                    400: "#f5f5f6",
                    500: "#dddddd",
                    600: "#eeeeee",
                    700: "#c4c4c4",
                    800: "#acacac",
                    900: "#acacac",
                },
                third: {
                    50 : "#f8fafc",
                    100: "#f1f5f9",
                    200: "#e2e8f0",
                    300: "#cbd5e1",
                    400: "#94a3b8",
                    500: "#64748b",
                    600: "#475569",
                    700: "#334155",
                    800: "#1e293b",
                    900: "#0f172a",
                    950: "#020617",
                },
            },
        },
    },

    plugins: [forms],
};
