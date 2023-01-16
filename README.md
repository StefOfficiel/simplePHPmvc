**[FR] Structure :**
```
Date : 16 Janvier 2023
Version : 1.0.0

simplePHPmvc/
├── index.php
├── config.php
├── assets/
│   └── lang/
│       ├── en.php
│       ├── fr.php
│       └── lang.php
├── c/
│   ├── construct.php
│   └── function.php
├── css/
│   └── custom.css
├── img/
│   ├── favicon/
│   │   ├── ...
│   │   ├── ...
│   │   └── ...
│   └── logo.png
├── js/
│   └── custom.js
└── v/
   ├── 404.php
   ├── footer.php
   ├── head.php
   ├── header.php
   ├── home.php
   ├── ...
   └── ...
```
--------------------------------------------------

***Le fichier `index.php` contient :***
- Le `date_default_timezone_set` que vous devez modifier en fontion de votre zone géographique.
- Le `session_start()` pour gérer les événements de session.
- Les 3 éléments requis à son fonctionnement.
- Une fonction de construction de page.

***Le fichier `config.php` contient :***
- Le fichier requis de la gestion de la langue.
- Des `define` basiques et généraux comme le nom du site, son url, le chemin vers des dossiers.
-- Vous pouvez y ajouter d'autres `define` pour customiser en fonction de vos besoins.
- Des `define` pour les liens, à mettre dans vos `href=` par exemple.
-- Exemple : `<a href="{{HOME_URL}}">{{HOME_LINK}}</a>`
-- Ici, `HOME_URL` fera référence à la constante `define('HOME_URL', '...')` contenu dans config.php, `HOME_LINK` est la constante qui se trouvera dans le fichier de langue, c'est à dire dans `/assets/lang/en.php` et `/assets/lang/fr.php` (ainsi de suite en fonction des langues).
- Un espace `DB` pour ne pas répéter vos identifiants de connexion à la base de donnée.

***Le fichier `lang.php` dans les dossiers `/assets/lang/` :***
Est la structure qui va permettre de découvrir la langue du visiteur et lui appliquer son fichier de langue, à défaut, l'anglais est affiché. Afin de s'en rappeler à chque visite, un cookie est utilisé.

***Le fichier `en` et `fr` contiennent :***
Ces fichiers ont une structure identique, seuls les mots doivent être dans la langue indiquée. Si une traduction n'est pas réaliser, le fichier `en.php` est priorisé dans `lang.php`.
Notez qu'il est préférable d'écrire les constantes en majuscule.

***Le fichier `construct.php` dans le dossier `/c/` contient :***
- Toute la méthode de construction des pages comprise dans la fonction `create_page()`;
- La fonction `constructor()` qui va remplacer les `{{INFO}}` par `define('INFO', ...)`;
Les pages appelés pour construire la page complète peuvent avoir l'extension `.php` ou `.html` dans le dossier `/v/` (voir plus bas dans ce README).

***Le fichier `functions.php` dans le dossier `/c/` contient :***
Toutes les fonctions que vous aurez besoin sur votre projet. Une seule fonction est déjà présente.

***Le fichier `custom.css` dans le dossier `/css/` contient :***
Votre feuille de style CSS personnalisée.

***Le dossier `/img/` contient :***
Toutes vos images nécessaires, le logo etc. et le dossier `/favicon/` pour la suite d'icones à utiliser sur votre webapp.

***Le fichier `custom.js` dans le dossier `/js/` contient :***
Vos scripts javascript/jQuery personnalisés.

***Le dossier `/v/` contient :***
Toutes vos pages appelés à l'index, ici `/index.php?p=home` le constructeur ira chercher le fichier `home.php` présent dans le dossier `/v/` pour l'afficher.
Si rien n'est précisé dans le `?p=` sur `/index.php` alors le fichier `home.php` est appelé.
Le fichier `404.php` est appelé par défaut si le constructeur ne trouve pas le fichier demandé dans `/v/`, par exemple `/index.php?=page` si `page.php` n'existe pas dans le dossier `/v/` alors ce sera `/v/404.php` qui sera affiché.

--------------------------------------------------
Enjoy!
