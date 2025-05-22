/** @type {import('tailwindcss').Config} */
export default {
	content: [
		"./site/templates/**/*.php", // Include template files
		"./site/snippets/**/*.php", // Include snippet files
		"./site/plugins/**/*.php", // Include plugin files
		"./content/**/*.txt", // Include content files
		"./assets/**/*.js", // Include JS files
		"./assets/**/*.css", // Include CSS files
	],
	theme: {
		extend: {
			height: {
				navbarHeight: "80px",
				heroHeight: "calc(100vh - 80px)",
			},
			padding: {
				navbarPadding: "80px",
			},

			fontFamily: {
				goldman: ["Goldman", "sans-serif"], // Add Goldman font
				manrope: ["Manrope", "sans-serif"], // Add Manrope font
			},

			colors: {
				primary: {
					DEFAULT: "#92d050", // Base primary color
					100: "#e8f5e0", // Lighter tone
					200: "#d1ebc1", // Light tone
					300: "#bae0a2", // Slightly lighter tone
					400: "#a3d683", // Lightest tone
					500: "#92d050", // Base primary color
					600: "#7bb342", // Slightly darker tone
					700: "#649635", // Dark tone
					800: "#4d7928", // Darker tone
					900: "#365c1b", // Darkest tone
				},
				lightGrey: "#d2d6dd",
				grey: "#747681",
				darkGrey: "#3f4144",
				error: "#ff5630",
				success: "#22c55e",
				empaiBlack: "#212b36",
			},
			backgroundColor: {
				bgColor: "#ffffff",
				bgSecondaryColor: "#f3f3f6",
			},
		},
	},
	plugins: [require("@tailwindcss/typography")],
};
