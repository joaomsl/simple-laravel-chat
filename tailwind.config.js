/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php"],
  theme: {
    fontFamily: {
      sans: 'Inter, sans-serif'
    },
    extend: {},
  },
  plugins: [require('tailwind-scrollbar')({ nocompatible: true, preferredStrategy: 'pseudoelements' })],
}

