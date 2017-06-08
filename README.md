# projet Extension Typo3

## Authors
GIRARDOT Tiphaine
DURADE Romain
DUVIVIERS Alexandre
METAYER Sylvain

Serveur de rendu : https://typo3.dawin.pitchart.me

## Notation / Instructions
Notation sur le serveur https:/typo3.dawin.pitchart.me

**Il faudra faire la création des pages, enregistrements sur le serveur de rendu ( ce qui est déjà fait en local pour le moment )**

Attention aux liens qui ne fonctionnent pas pour le rendu.

Pas de barème prédéfinis, il faut faire le maximum pour avoir le maximum de points.

TODO :
- Faire une page d'accueil/ présentation de notre extension qui contiendra les liens vers le reste. (Mettre formulaire recherche dessus ?)
- Une page contact (plugin Contat => list, show )
- Une page Organisme (plugin Organisme)
- Dossier de stockage contenant nos enregistrements, services, ...

## Installation (dev-only)

- git clone git@github.com:pitchart/dawin-typo3-cms-distribution.git ./cms
- cd cms
- composer install
- php vendor/bin/typo3cms install:setup
  - Répondre aux questions, **en les lisant**
- make install-ext
- make install-config
- cd web/typo3conf/ext
- git clone https://github.com/sylvainmetayer/annuaire_tars.git
- Ajouter dans le fichier composer.json, à la fin (**à la racine du projet Typo3, pas de l'extension !!**)
  """
  ,
  "autoload": {
    "psr-4": {
      "TARS\\AnnuaireTars\\": "web/typo3conf/ext/annuaire_tars/Classes"
    }
  }
  """
- cd ../../.. (retour à la racine du projet Typo3)
- composer dump-autoload
- php vendor/bin/typo3cms configuration:set SYS/clearCacheSystem true
- php vendor/bin/typo3cms cache:flush
- php -S localhost:8080 -t web/

- Ouvrir un navigateur http://localhost:8080/ & http://localhost:8080/typo3 pour la partie admin
