import type { Config } from 'tailwindcss'
import plugin from 'tailwindcss/plugin'
import colors from 'tailwindcss/colors'

export default {
  content: ['{index,header,footer,404}.php', '{pages,components,singles,archives}/**/*.php'],
  theme: {
    fontFamily: {
      'noto-sans-jp': ['noto-sans-jp', 'sans-serif'],
      'yu-gothic': ['yu-gothic', 'sans-serif'],
    },
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
    plugin(({ addVariant }) => {
      addVariant('not-first', '&:not(:first-child)')
      addVariant('not-last', '&:not(:last-child)')
    }),
    plugin(({ addUtilities }) => {
      addUtilities([])
    }),
  ],
  important: false,
} satisfies Config
