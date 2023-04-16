# Setting

## Create site by Local

1. Open the Local App.
2. Press plus button on the bottom left.
3. Enter the project name on the "Site settings" screen and proceed to the next.
4. Select "Preferred" on the "Set Up Environment" screen and proceed to the next.
5. On the "Set Up WordPress" screen, enter any login information in "WordPress Username" and "WordPress Password" and press the "Add Site" button to create the site.
6. Go to the admin screen page from the WP Admin button and open the WP admin site.
7. Click "Open site shell" when using WP CLI.

## Update

Update all WordPress, plugins, themes, translations, etc. in `Dashboard > Updates`.  
Or update with WP CLI.  

```zsh
wp core update

wp core update-db

wp plugin update --all

wp theme update --all

wp core language update
```

## Language Setting

Set the language in `Settings > General Settings > Site Language`  
Or setting with WP CLI  

```zsh
wp core language install ja

wp core language activate ja
```

## Activate Theme

1. Place this repository folder in the themes directory
2. Enable the "Template for WordPress" theme in the appearance page of the WP admin screens

## Activate plugin

### Activate Free Plugin

Search for the following free plugins on the management screen, `Plugins > Add New`, and install and activate them.  
Or install the free plugin with WP CLI.  

| Plugin Name | Use | Usage | Comment |
|:------------|:----|:------|:--------|
| [admin-menu-editor](https://ja.wordpress.org/plugins/admin-menu-editor/) | required | Custom admin menu |  |
| [all-in-one-wp-migration](https://ja.wordpress.org/plugins/all-in-one-wp-migration/) | required | Site backup and restore |  |
| [contact-form-7](https://ja.wordpress.org/plugins/contact-form-7/) | required | Create contact form |  |
| [contact-form-7-honeypot](https://ja.wordpress.org/plugins/contact-form-7-honeypot/) | required | Spam prevention for ContactForm7 |  |
| [duplicate-post](https://ja.wordpress.org/plugins/duplicate-post/) | required | Duplicate post |  |
| [flamingo](https://ja.wordpress.org/plugins/flamingo/)| required | ContactForm7 message storage |  |
| [seo-simple-pack](https://ja.wordpress.org/plugins/seo-simple-pack/) | required | SEO measures |  |
| [taxonomy-terms-order](https://ja.wordpress.org/plugins/taxonomy-terms-order/) | required | Sort taxonomies |  |
| [post-types-order](https://ja.wordpress.org/plugins/post-types-order/) | required | Sort posts |  |
| [google-site-kit](https://ja.wordpress.org/plugins/google-site-kit/) | production only | Google tool linkage |  |
| [siteguard](https://ja.wordpress.org/plugins/siteguard/) | production only | WordPress security measures |  |
| [webp-express](https://ja.wordpress.org/plugins/webp-express/) | production only | Webp support of images |  |
| [instagram-feed](https://ja.wordpress.org/plugins/instagram-feed/) | optional | Instagram feed display |  |
| [contact-form-7-multi-step-module](https://ja.wordpress.org/plugins/contact-form-7-multi-step-module/) | optional | Step form support for ContactForm7 |  |
| [cf7-conditional-fields](https://ja.wordpress.org/plugins/cf7-conditional-fields/) | optional | Conditional display control of ContactForm7 |  |
| [acf-to-rest-api](https://ja.wordpress.org/plugins/acf-to-rest-api/) | optional | Get custom field with WP REST API |  |

```zsh
wp plugin install --activate \
admin-menu-editor \
all-in-one-wp-migration \
contact-form-7 \
contact-form-7-honeypot \
duplicate-post \
flamingo \
seo-simple-pack

wp plugin install \
google-site-kit \
siteguard \
webp-express
```

After activating the plugin, uncomment all the `Plugin settings` settings in functions.php.  

### Activate Paid Plugin

If necessary, purchase and download the following paid plugins,  
Install and activate on the WP admin screen "Plugins > Add New > Upload Plugin"  

| Plugin Name | Use | Usage | Comment |
|:------------|:----|:------|:--------|
| [advanced-custom-fields-pro](https://www.advancedcustomfields.com/) | optional | Create custom field | No need to use with "Advanced Custom Fields" from free plugins.  |
| [all-in-one-wp-migration-unlimited-extension](https://servmask.com/products/unlimited-extension) | optional | Upload limit release of "All-in-One WP Migration"  | Should be used with "All-in-One WP Migration" of free plugin. |

## Create environment

Create environment with following command.  

```zsh
volta install node@18.16.0 npm@9.5.1

npm install
```

## Install add package

If necessary, install following packages.  

| Package Name | Usage | Comment |
|:-------------|:------|:--------|
| [luminous-lightbox](https://github.com/imgix/luminous) | Enlarge display of image | CSS file required. |
