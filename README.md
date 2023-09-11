# Pokedex

## Objectifs

Le projet Pokedex vise à créer une application permettant de consulter et trier différents Pokémons, ainsi que d'afficher leurs détails.   
Les principales fonctionnalités incluent :

- Visualiser la liste complète des Pokémons.
- Obtenir des détails sur un Pokémon spécifique.
- Trier les Pokémons par type.

## Technologies Utilisées

Ce projet utilise les technologies suivantes :

- **PHP** : Le langage de programmation principal.
- **SQL** : Pour la gestion de la base de données.
- **Composer** : Pour l'installation des dépendances PHP.

## Installation de l'Application

Suivez ces étapes pour installer et exécuter l'application sur votre machine :

1. Clonez le projet sur votre machine.
2. Installez les dépendances PHP en utilisant Composer
  ```shell  
  composer install
  ```
3. Dans le dossier app, vous devez modifier le fichier config.ini avec les informations nécessaires pour vous connecter à votre système de gestion de base de données (SGBD).  
4. Créez une base de données nommée "pokedex" dans votre SGBD. 
5. Pour peupler la base de données, importez le fichier "pokedex.sql" fourni avec le projet.  
   [Utiliser le fichier SQL](pokedex.sql)
6. Lancez l'application en utilisant la commande suivante :
  ```shell  
  php -S localhost:8080 -t public
  ```
![Capture d’écran de 2022-01-18 14-36-18](https://user-images.githubusercontent.com/86592793/149948852-22b8090b-cf78-40f8-902d-0747dc524e72.png)   


![Capture d’écran du 2022-01-18 14-37-20](https://user-images.githubusercontent.com/86592793/149948859-fe09ed7e-1227-4bd9-b02e-a62b490b474a.png)  


![Capture d’écran du 2022-01-18 14-37-41](https://user-images.githubusercontent.com/86592793/149948864-4ace6970-8c77-4752-b348-72267adac1dd.png)
