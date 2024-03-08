/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      spacing: {
        '1.5': '0.375rem',
        '2.5': '0.625rem',
        '3.5': '0.875rem',
        '17.5': '4.375rem',
        '92.5': '23.125rem',
        '116': '29rem',
        '3/10': '30%',
        '12/100': '12%',
        '7/40': '17.5%',
        '21/100': '21%',
      },
      fontFamily: {
        'helvetica': ['Helvetica', 'sans-serif'],
      },
      fontSize: {
        '3.5xl': '2rem',
      },
      borderRadius: {
        '0.5xl': '0.625rem',
        '1.5xl': '0.875rem',
        '5xl': '3.125rem',
      },
      colors: {
        'blue-primary': '#499AF9',
        'blue-transparent': '#499AF914',
        'blue-darker': '#3386E7',
        'red-error': '#E91818',
        'green-success': '#4ABF4E',
        'gray-70': '#F6F8FA',
        'gray-220': '#E0E3E7',
        'gray-420': '#959DA5',
        'gray-510': '#6A737D',
        'gray-550': '#586069',
        'gray-720': '#2F363D',
      },
      boxShadow: {
        'message-box': '0 4px 4px 0 #0000000F',
      }
    },
  },
  plugins: [],
}
