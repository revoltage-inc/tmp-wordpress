import { Command } from 'commander'
import { rm, cp } from 'node:fs/promises'
;(async () => {
  const program = new Command()

  program
    .description('Copy files and directories.')
    .requiredOption('-s, --src [string]', 'Input directory path')
    .requiredOption('-d, --dist [string]', 'Output directory path')
    .parse(process.argv)

  const options = program.opts()
  const srcDirPath = options.src
  const distDirPath = options.dist

  await rm(distDirPath, { recursive: true, force: true })
  await cp(srcDirPath, distDirPath, { recursive: true, force: true })
})()
