![](https://img.shields.io/github/v/release/VQH-cmd/Monolith.lite)
![](https://tokei.rs/b1/github/VQH-cmd/Monolith.lite?category=code)
![](https://tokei.rs/b1/github/VQH-cmd/Monolith.lite?category=files)
![](https://img.shields.io/github/languages/code-size/VQH-cmd/Monolith.lite)
![](https://img.shields.io/github/repo-size/VQH-cmd/Monolith.lite)
![](https://img.shields.io/github/downloads/VQH-cmd/Monolith.lite/total)

![Monolith.lite](logo.jpg)

# **[ Monolith.lite ]** *framework*
________________________________________________________________

## **`[01]:` Basic Information**

- Project: **`Sample Project`**

- Date created Project: **`Day, Month Year`**

- Framework: **`Monolith.lite`**

- Framework Version: **`5.2.4`**

- Author: [**VQH-cmd**](https://VQH-cmd.github.io)

- Sync: [**Convergence**](https://github.com/VQH-cmd/Convergence.encrypted)

________________________________________________________________

## **`[02]:` About**

+ This project was created using:

	+ [**Convergence**](https://github.com/VQH-cmd/Convergence.encrypted) with:

		- PHP

		- PUG (/build/pug/)

		- SASS (/build/sass/)

		- JS (/build/js/)

		- CSS (/build/css/)

		- localhost

> Only edit / touch the file format above to create this Project if using [**Convergence**](https://github.com/VQH-cmd/Convergence.encrypted).

________________________________________________________________

## **`[03]:` Build**

> Edit these files at first to suit with your project.

> `0` = _false_<br />
> `1` = _true_

### **config.json**

```json
{
  "preprocessor": {

      "💡NOTE💡": "Minify all '.html' files",
      "minify_html": 0,

      "💡NOTE💡": "Generate '.html' files with '.pug' files",
      "pug": 0,

      "💡NOTE💡": "Is PHP project ?",
      "php": 1,

      "💡NOTE💡": "Apply WordPress admin ?",
      "wp_admin": 0,

      "💡NOTE💡": "Is Django project ?",
      "django" : 0,

      "💡NOTE💡": "0 = /global",
      "💡NOTE💡": "'app_name' = /app_name",
      "django_static" : 0 or "app_name"
  },

  "css": {

      "💡NOTE💡": "Minify Option",
      "minify": 1,

      "💡NOTE💡": "Auto remove unused CSS styles",
      "purge": 1
  },

  "js": {

      "💡NOTE💡": "Minify Option",
      "minify": 1,

      "💡NOTE💡": "Protect JavaScript files",
      "💡NOTE💡": "⚠️File size will be increased",
      "encrypt": 0,

      "💡NOTE💡": "0 = Basic protect",
      "💡NOTE💡": "1 = Extreme protect",
      "encrypt_level": 0
  },

  "img": {

      "💡NOTE💡": "Auto minify all image files",
      "minify": 0
  },

  "💡NOTE💡": "Prevent removing specific unused CSS",
  "purgecss_whitelist": [
    "aaa",
    "test"
  ]
}
```

### **libs.json**

```json
{
  "frameworks": {
    "vue": 1,
    "vuex": 0,
    "jquery": 0
  },

  "requests": {
    "swup": {
      "core": 1,
      "ga": 1,
      "debug": 0,
      "body": 0,
      "preload": 0
	},

    "barba": {
      "core": 0,
      "router": 0,
      "prefetch": 0,
      "css": 0
    },
    "axios": 0
  },

  "translate": {
    "dom_i18n": 0
  },

  "effects": {
    "gsap": 0,
    "threejs": 0,
    "tippy": 0,
    "vanilla_tilt": 0,
    "particles": 0
  },

  "scroll": {
    "inview": 0,
    "scroll_out": 1,
    "vanilla_smoothie": 1,
    "skrollr": 0
  },

  "lightbox": {
    "lightgallery": 1
  },

  "slider": {
    "swiper": 0,
    "splide": 1
  },

  "utilities": {
    "masonry": 0,
    "isotope": 0,
    "imagesloaded": 1,
    "packery": 0,
    "infinite_scroll": 0,
    "metismenu": 1,
    "sticky_sidebar": 0,
    "slim_select": 0,
    "choices": 0,
    "flatpickr": 0
  },

  "converter": {
    "luxon": 0
  }
}
```

________________________________________________________________

## **`[04]:` Note**

+ This project recommends you using:

	- [**Pug**](https://pugjs.org)

	- [**PHP**](https://www.php.net)

	- [**SASS**](https://sass-lang.com) (**NOT** "SCSS" !)

	+ localhost:
		- [**Laragon**](https://laragon.org) *(Windows)*
		- [**MAMP**](https://www.mamp.info) *(MacOS & Windows)*

	+ [**NodeJS**](https://nodejs.org)
		> To read and execute **SASS** & **Pug** files.<br>
		> Synchronize and optimize the whole project.

________________________________________________________________

+ Why ?
	- Coding faster than raw `.html`, `.css`, `.scss`.
	- Good looking, neat, elegant.

________________________________________________________________

## **`[05]:` License**

[GNU General Public License v3.0](https://github.com/VQH-cmd/Monolith.lite/blob/master/LICENSE)

________________________________________________________________

Copyright © 2018 - 2020, [VQH-cmd](https://VQH-cmd.github.io).