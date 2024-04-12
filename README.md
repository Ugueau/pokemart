# PokeMart

PokeMart est un site web de vente de cartes Pokémon de tous types, développé avec le framework CakePHP.

## Dépendances

Avant de pouvoir utiliser l'application, vous devez installer Composer.

## Déploiement

Voici les étapes à suivre pour déployer l'application :

1. Renseignez les informations de votre base de données dans le `config/app_local.php`

2. Assurez-vous que votre schéma de base de données est à jour en exécutant les migrations nécessaires avec la commande suivante :
   `cake migrations migrate`

3. Téléchargez et installez les dépendances de l'application en exécutant la commande suivante dans le répertoire racine de l'application :
Vous pouvez directement passer en mode production avec la commande `composer install --no-dev`. Mais vous pouvez également développer et apporter
vos modifications. Pour cela, utilisez la commande `composer install` pour conserver les outils de développement (notamment pour le debug).

4. Hébergez l'application comme vous le souhaitez.

5. Les identifiants admin par défaut sont :

    Email : `admin@pokemart.fr`

    Mot de passe : `admin`

Exemple de jeu de données dans /webroot/dataset-example.sql

## Utilisation de l'API

L'API de PokeMart propose 2 routes :

1. `/api/catalog` qui renvoie l'ensemble des cartes du catalogue.
2. `/api/card/{id}` qui renvoie les informations d'une carte précise, en remplaçant `{id}` par l'ID de la carte.

## Contributeurs

Ce projet a été réalisé par Hugo MILLOT & Mathis GERBOUD.
