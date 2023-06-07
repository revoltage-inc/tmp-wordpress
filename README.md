# tmp-wordpress

このリポジトリは、Wordpressテーマのテンプレートです。  
構成にはViteやTailwindCSSが含まれます。  

> **Warning**  
> このテンプレートは個人的なベストプラクティスに基づいて作成されたものです。  
> 破壊的な変更に注意してください。  

## 前提

- [VSCodeのインストール](https://azure.microsoft.com/ja-jp/products/visual-studio-code/)
- [VSCodeの推奨拡張機能のインストール](https://code.visualstudio.com/docs/editor/extension-marketplace#_workspace-recommended-extensions)
- [Voltaのインストール](https://docs.volta.sh/guide/getting-started)

## 設定

### 実行環境の作成

下記のコマンドで実行環境を作成する。  

```zsh
volta install node@18.16.0 npm@9.5.1 pnpm@8.2.0

pnpm install
```

## 使用方法

次のコマンドですべてのファイルをビルドする。
このリポジトリをWordPressテーマとして配置する。

```zsh
npm run build
```

## スクリプト

| スクリプト | 説明 |
|:-------|:--------|
| `npm run build` | 全てのファイルのビルド |
| `npm run build:tw`| TailwindCSSのビルド |
| `npm run build:css` | CSSファイルのビルド |
| `npm run build:font`| フォントファイルをビルド |
| `npm run build:svg`| SVGファイルをビルド |
| `npm run build:img` | 画像ファイルをビルド |
| `npm run build:js`| JSファイルをビルド |
| `npm run build:modernizr`| Modernizr.jsのビルド |
| `npm run watch` | 全てのファイルをビルド(ホットリロード) |
| `npm run watch:tw` | TailwindCSSのビルド(ホットリロード) |
| `npm run watch:css` | CSSファイルのビルド(ホットリロード) |
| `npm run watch:font` | フォントファイルをビルド(ホットリロード) |
| `npm run watch:svg` | SVGファイルをビルド(ホットリロード) |
| `npm run watch:img`| 画像ファイルをビルド(ホットリロード) |
| `npm run watch:js`| JSファイルをビルド(ホットリロード) |
| `npm run update`| パッケージの一括更新 |
| `npm run lint` | StylelintのよるCSSファイルのフォーマット |

## 参考

### ドキュメント

- [WordPress](https://developer.wordpress.org/)
- [Vite](https://ja.vitejs.dev/)
- [TailwindCSS](https://tailwindui.com/)
- [NotoSansJP](https://fonts.google.com/noto/specimen/Noto+Sans+JP)
- [Swiper](https://swiperjs.com/)
- [vanilla-autokana](https://github.com/ryo-utsunomiya/vanilla-autokana)

### 推奨ライブラリ

- [luminous-lightbox](https://github.com/imgix/luminous)

### 推奨プラグイン

- [admin-menu-editor](https://ja.wordpress.org/plugins/admin-menu-editor/)
- [all-in-one-wp-migration](https://ja.wordpress.org/plugins/all-in-one-wp-migration/)
- [all-in-one-wp-migration-unlimited-extension](https://servmask.com/products/unlimited-extension)
- [contact-form-7](https://ja.wordpress.org/plugins/contact-form-7/)
- [contact-form-7-honeypot](https://ja.wordpress.org/plugins/contact-form-7-honeypot/)
- [duplicate-post](https://ja.wordpress.org/plugins/duplicate-post/)
- [flamingo](https://ja.wordpress.org/plugins/flamingo/)
- [seo-simple-pack](https://ja.wordpress.org/plugins/seo-simple-pack/)
- [taxonomy-terms-order](https://ja.wordpress.org/plugins/taxonomy-terms-order/)
- [post-types-order](https://ja.wordpress.org/plugins/post-types-order/)
- [google-site-kit](https://ja.wordpress.org/plugins/google-site-kit/)
- [siteguard](https://ja.wordpress.org/plugins/siteguard/)
- [webp-express](https://ja.wordpress.org/plugins/webp-express/)
- [instagram-feed](https://ja.wordpress.org/plugins/instagram-feed/)
- [contact-form-7-multi-step-module](https://ja.wordpress.org/plugins/contact-form-7-multi-step-module/)
- [cf7-conditional-fields](https://ja.wordpress.org/plugins/cf7-conditional-fields/)
- [advanced-custom-fields-pro](https://www.advancedcustomfields.com/)
- [acf-to-rest-api](https://ja.wordpress.org/plugins/acf-to-rest-api/)

## ライセンス

[MIT](https://opensource.org/licenses/MIT)
