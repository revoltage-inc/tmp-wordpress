# tmp-wordpress(α)

This repository is template for Wordpress Theme.  
This includes TailwindCSS.  

> **Warning**  
> This template is still in alpha stage.  
> Beware destructive changes.  

## Premise

- [Install VSCode](https://azure.microsoft.com/ja-jp/products/visual-studio-code/)
- [Install Workspace recommended VSCode extensions](https://code.visualstudio.com/docs/editor/extension-marketplace#_workspace-recommended-extensions)
- [Install Volta](https://docs.volta.sh/guide/getting-started)
- [Install direnv](https://github.com/direnv/direnv)
- [Install Local(Formerly known as Local By Flywheel)](https://localwp.com/)

## Settings

See [settings.md](./docs/settings.md).

## Usage

Build all files with the following command.  
This repository will be ready for use as a WordPress theme.  

```zsh
npm run build
```

## Script

| Script | Content |
|:-------|:--------|
| `npm run build` | Build all files |
| `npm run build:tw`| Build TailwindCSS |
| `npm run build:css` | Build CSS files |
| `npm run build:font`| Build font files |
| `npm run build:svg`| Build svg files |
| `npm run build:img` | Build image files |
| `npm run build:js`| Build JS files |
| `npm run watch` | Build all files with hot reload |
| `npm run watch:tw` | Build TailwindCSS with hot reload |
| `npm run watch:css` | Build CSS files with hot reload |
| `npm run watch:font` | Build font files with hot reload |
| `npm run watch:svg` | Build svg files with hot reload |
| `npm run watch:img`| Build image files with hot reload |
| `npm run watch:js`| Build JS files with hot reload |
| `npm run update`| Bulk update of packages |
| `npm run lint` | Format CSS files with stylelint |
| `npm run modernizr`| Build modernizr.js |

## Reference

- [WordPress](https://developer.wordpress.org/)
- [Vite](https://ja.vitejs.dev/)
- [TailwindCSS](https://tailwindui.com/)
- [NotoSansJP](https://fonts.google.com/noto/specimen/Noto+Sans+JP)

## License

[MIT](https://opensource.org/licenses/MIT)
