module.exports = {
  plugins: {
    'postcss-import': {},
    'postcss-preset-env': { stage: 3, features: { 'nesting-rules': true } },
    'tailwindcss/nesting': {},
    tailwindcss: {},
    autoprefixer: {},
    cssnano: { preset: 'default' },
  },
}
