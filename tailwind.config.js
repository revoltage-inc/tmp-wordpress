const colors = require('tailwindcss/colors')
const plugin = require('tailwindcss/plugin')

module.exports = {
  content: ['{index,header,footer,404}.php', '{pages,components,singles,archives}/**/*.php'],
  theme: {
    colors: {
      transparent: colors.transparent,
      current: colors.current,
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      slate: colors.slate,
    },
    extend: {
      colors: {
        main: colors.white,
      },
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
    plugin(({ addVariant }) => {
      addVariant('not-first', '&:not(:first-child)')
      addVariant('not-last', '&:not(:last-child)')
    }),
    plugin(({ addUtilities }) => {
      addUtilities({
        '.box': {
          display: '-webkit-box',
        },
      })
    }),
  ],
}
