/** @type {import('tailwindcss').Config} */
export default {
    theme: {
        extend: {
          colors: {
            'futuristic-purple': '#6D5ACF',
            'futuristic-blue': '#4AC8E8',
            'futuristic-green': '#70CC72',
            'futuristic-red': '#E3605B',
            'futuristic-gray': '#9BA4B4',
            'futuristic-dark': '#1E1F26',
          },
          boxShadow: {
            'futuristic': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
          },
          gradientColorStops: theme => ({
            'futuristic-gradient-start': '#6D5ACF',
            'futuristic-gradient-end': '#4AC8E8',
          }),
        },
      },
      variants: {
        extend: {},
      },
  plugins: [],
}

