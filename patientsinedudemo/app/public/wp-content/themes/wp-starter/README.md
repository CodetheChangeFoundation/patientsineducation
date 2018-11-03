# Wordpress Theme Starter

Wordpress theme starter is a custom boilerplate made for Code the Change Foundation to help start the development of a custom Wordpress theme.

It comes with all the base files needed to start a custom theme as well as a folder structure to help keep your files organized. Also included are security patches for common Wordpress security holes.

## :package: Prerequisites
* Make sure you have a local Wordpress site running on your machine
  * Local by Flywheel is the easiest and fastest way to get started. Visit this [link](https://local.getflywheel.com/) to download Flywheel.

## :rocket: Quick start
1. Clone this repo into the Wordpress themes directory in your local Wordpress installation. This is located in wp-content/themes.

```bash
# In place of nameOfTheme, use a custom theme name
$> git clone https://github.com/CodetheChangeFoundation/wordpress-theme-starter.git nameOfTheme
```

2. Open the style.css file and change the variables to match your project needs.

```css
/*

Theme Name: Example Theme
There URI: www.example.com
Author: Code the Change Foundation
Author URI: http://codethechange.ca
Description: A custom theme for Example non-profit
Version: 1.0.0
Text Domain: example

*/
```

3. Login to your Wordpress admin panel and go to appearance > themes and activate the theme you just created.

## :trophy: Next steps
Now that you've activated the starter theme, any change made to the files in the theme will be reflected on the site.
There are a number of resources you can visit to help you develop your custom theme, I would recommend [this](https://www.youtube.com/playlist?list=PLriKzYyLb28nUFbe0Y9d-19uVkOnhYxFE) YouTube series.
