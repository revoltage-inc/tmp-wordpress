module.exports = {
  plugins: {
    'postcss-import': {},
    // BUG: Loading PostCSS Plugin failed
    // https://github.com/TrySound/postcss-inline-svg/issues/104
    // 'postcss-inline-svg': {},
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
