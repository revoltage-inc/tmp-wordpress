import { defineConfig } from 'vite'
import multiInput from 'rollup-plugin-multi-input'
import commonjs from '@rollup/plugin-commonjs'
import { nodeResolve } from '@rollup/plugin-node-resolve'

module.exports = defineConfig({
  target: 'es2022',
  esbuild: {
    minify: true,
  },
  build: {
    rollupOptions: {
      input: ['assets/src/js/**/*.js'],
      output: {
        entryFileNames: '[name].js',
        assetFileNames: '[name].[ext]',
        format: 'es',
        dir: 'assets/dist/js',
        manualChunks: {
          swiper: ['swiper'],
        },
        chunkFileNames: 'lib/[name].js',
      },
      plugins: [
        multiInput({ relative: 'assets/src/js/' }),
        commonjs({ transformMixedEsModules: true }),
        nodeResolve({ browser: true }),
      ],
    },
  },
})
