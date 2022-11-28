module.exports = {
  plugins: {
    'postcss-import': {},
    'postcss-inline-svg': {},
    'postcss-preset-env': {
      stage: 3,
      features: {
        'nesting-rules': true,
      },
    },
    'postcss-csso': { restructure: false },
    'tailwindcss/nesting': {},
    tailwindcss: {},
    autoprefixer: {},
  },
}
