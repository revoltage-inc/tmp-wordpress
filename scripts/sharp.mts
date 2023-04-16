import { Command } from 'commander'
import { rm, mkdir } from 'node:fs/promises'
import { join, extname, dirname } from 'node:path'
import sharp from 'sharp'
import glob from 'tiny-glob'
;(async () => {
  const program = new Command()

  program
    .description('Convert image files to png/webp/avif format.')
    .requiredOption('-s, --src [string]', 'Input directory path')
    .requiredOption('-d, --dist [string]', 'Output directory path')
    .parse(process.argv)

  const options = program.opts()

  const srcDirPath = options.src
  const distDirPath = options.dist
  const srcFilePathList = await glob(join(srcDirPath, '**/*.{jpg,jpeg,png,avif}'))

  await rm(distDirPath, { recursive: true, force: true })

  await Promise.all(
    srcFilePathList.map(async (srcFilePath) => {
      // Get output image file path
      const distFilePath = srcFilePath
        .replace(srcDirPath, distDirPath)
        .replace(extname(srcFilePath), '')

      // Create output directory for image files
      await mkdir(dirname(distFilePath), { recursive: true })

      // Convert image file
      sharp(srcFilePath)
        .png({ quality: 85 })
        .toFile(`${distFilePath}.png`, (error) => {
          if (error) console.error(error)
        })
        .webp({ quality: 85 })
        .toFile(`${distFilePath}.webp`, (error) => {
          if (error) console.error(error)
        })
        .avif({ quality: 85 })
        .toFile(`${distFilePath}.avif`, (error) => {
          if (error) console.error(error)
        })
    })
  )
})()
