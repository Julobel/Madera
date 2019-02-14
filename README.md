# **Prérequis**:

- PHP version >= 7.0.0
- Composer version >= 1.5.0

Installation des dépendances:

`composer install`

# **Configuration**

## BBD

Ce rendre dans le fichier ***.env*** et modifier la variable ***DATABASE_URL*** si nécessaire.

**Création de la BDD:** 

`php bin/console doctrine:database:create`


**Création du schéma:** 

`php bin/console doctrine:schema:create`

## Fixtures

Chargement des fixtures

`php bin/console doctrine:fixtures:load`

## Serveur

**Lancement du serveur de dev:**

`php bin/console server:run`

# API

**Accéder à la doc swagger de l'API:**

[http://127.0.0.1:8000/api](http://127.0.0.1:8000/api)

**Après la création et/ou modification d'une entité, mettre à jour le schéma:**

`php bin/console doctrine:schema:update --force`

# Documentations utiles

[Api Platform](https://api-platform.com/) 

[Symfony 4](https://symfony.com/4)

[Doctrine 2](https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/index.html)

[Git Flow](https://danielkummer.github.io/git-flow-cheatsheet/)