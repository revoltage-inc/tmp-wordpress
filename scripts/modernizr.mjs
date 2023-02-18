import { Command } from 'commander'
import modernizr from 'modernizr'
import { writeFile } from 'node:fs/promises'
import { join } from 'node:path'
;(() => {
  const program = new Command()

  program
    .description('Build only webp support browser detection function of Modernizr as library.')
    .requiredOption(
      '-d, --dist [string]',
      'Output directory path for library that detect webp support browser'
    )
    .parse(process.argv)

  const options = program.opts()
  const distDirPath = options.dist

  modernizr.build({ 'feature-detects': ['img/webp', 'img/avif'] }, async (result) => {
    await writeFile(join(distDirPath, 'modernizr.js'), result)
  })
})()
