module.exports = {
  env: {
    node: true,
    browser: true,
    es2022: true,
  },
  parserOptions: {
    ecmaVersion: 'latest',
    sourceType: 'module',
  },
  extends: ['eslint:recommended', 'plugin:tailwindcss/recommended', 'prettier'],
  plugins: ['eslint-plugin-tailwindcss'],
  rules: {},
}
