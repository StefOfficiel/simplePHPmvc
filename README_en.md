**[EN] Structure :**


Date : January 16, 2023
Version : 1.0.0

simplePHPmvc/
├── index.php
├── config.php
├── assets/
│	└── lang/
│		├── en.php
│		├── fr.php
│		└── lang.php
├── c/
│	├── construct.php
│	└── function.php
├── css/
│	└── custom.css
├── img/
│	├── favicon/
│	│	├── ...
│	│	├── ...
│	│	└── ...
│	└── logo.png
├── js/
│	└── custom.js
└── v/
	├── 404.php
	├── footer.php
	├── head.php
	├── header.php
	├── home.php
	├── ...
	└── ...

--------------------------------------------------

***The `index.php` file contains:***
- The `date_default_timezone_set` which you must modify according to your geographical zone.
- The `session_start()` to handle session events.
- The 3 elements required for its operation.
- A page building function.

***The `config.php` file contains:***
- The required language management file.
- Basic and general `define` such as the name of the site, its url, the path to folders.
-- You can add other `define` to it to customize according to your needs.
- `define` for links, to put in your `href=` for example.
-- Example: `<a href="{{HOME_URL}}">{{HOME_LINK}}</a>`
-- Here, `HOME_URL` will refer to the constant `define('HOME_URL', '...')` contained in config.php, `HOME_LINK` is the constant which will be in the language file, it is to say in `/assets/lang/en.php` and `/assets/lang/fr.php` (so on depending on the language).
- A `DB` space so as not to repeat your login credentials to the database.

***The `lang.php` file in the `/assets/lang/` folders:***
Is the structure which will make it possible to discover the language of the visitor and to apply his language file to him, failing that, English is displayed. In order to remember this on each visit, a cookie is used.

***The `en` and `fr` files contain:***
These files have an identical structure, only the words must be in the language indicated. If a translation is not done, the `en.php` file is prioritized in `lang.php`.
Note that it is better to write constants in uppercase.

***The `construct.php` file in the `/c/` folder contains:***
- All the page construction method included in the `create_page()` function;
- The `constructor()` function which will replace the `{{INFO}}` by `define('INFO', ...)`;
The pages called to build the complete page can have the extension `.php` or `.html` in the `/v/` folder (see below in this README).

***The `functions.php` file in the `/c/` folder contains:***
All the functions you will need on your project. Only one function is already present.

***The `custom.css` file in the `/css/` folder contains:***
Your custom CSS style sheet.

***The `/img/` folder contains:***
All your necessary images, logo etc. and the `/favicon/` folder for the icon suite to use on your webapp.

***The `custom.js` file in the `/js/` folder contains:***
Your custom javascript/jQuery scripts.

***The `/v/` folder contains:***
All your pages called to the index, here `/index.php?p=home` the builder will look for the `home.php` file present in the `/v/` folder to display it.
If nothing is specified in the `?p=` on `/index.php` then the `home.php` file is called.
The `404.php` file is called by default if the constructor does not find the requested file in `/v/`, for example `/index.php?=page` if `page.php` does not exist in the `/v/` folder then `/v/404.php` will be displayed.

--------------------------------------------------
Enjoy!
