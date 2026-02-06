/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./components/**/*.html",
    "./js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#1dbf73',
          dark: '#17a560',
          light: '#2dd492',
        },
        dark: {
          DEFAULT: '#141414',
          light: '#1a1a1a',
        },
        gray: {
          DEFAULT: '#707070',
          light: '#f5f5f5',
        }
      },
      fontFamily: {
        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
      },
      fontSize: {
        'hero': ['64px', { lineHeight: '80px', letterSpacing: '-2.56px' }],
        'heading': ['48px', { lineHeight: '60px', letterSpacing: '-1.92px' }],
        'subheading': ['24px', { lineHeight: '36px', letterSpacing: '-0.96px' }],
        'body': ['16px', { lineHeight: '24px', letterSpacing: '-0.32px' }],
        'small': ['12px', { lineHeight: '18px', letterSpacing: '-0.24px' }],
      },
      animation: {
        'float': 'float 6s ease-in-out infinite',
        'scroll': 'scroll 30s linear infinite',
        'scroll-reverse': 'scroll-reverse 40s linear infinite',
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0) translateX(0)' },
          '50%': { transform: 'translateY(-20px) translateX(20px)' },
        },
        scroll: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        'scroll-reverse': {
          '0%': { transform: 'translateX(-100%)' },
          '100%': { transform: 'translateX(0)' },
        },
      },
      borderRadius: {
        'xl': '16px',
        '2xl': '24px',
        '3xl': '32px',
        '4xl': '40px',
      },
    },
  },
  plugins: [],
}
