# TigerProd 🐯🎵

TigerProd est un site web pour un studio d'enregistrement, entièrement réalisé avec Laravel. Il intègre à la fois le front-end utilisant le moteur de templates Blade de Laravel, ainsi que le back-end Laravel pour la logique de l'application.

## Projet crée le 12/04/2023

## Fonctionnalités Principales

- **Enregistrement des Clients** : Les clients peuvent s'enregistrer sur le site pour accéder à des fonctionnalités spécifiques.
- **Gestion des Sessions d'Enregistrement** : Les clients peuvent commander des sessions d'enregistrement à travers le site.
- **Gestion des Commandes** : L'administrateur peut accepter, annuler ou modifier les commandes des clients.
- **Gestion des Clients** : L'administrateur peut ajouter de nouveaux clients, les modifier ou les supprimer.
- **Gestion de la Publicité** : L'administrateur peut modifier les annonces et la publicité sur le site.
- **Authentification et Autorisation** : Le site utilise un système d'authentification pour les clients et l'administration, avec différentes autorisations pour chaque type d'utilisateur.

## Technologies Professionnelles Utilisées

- **Laravel** : Framework PHP élégant pour le développement web.
- **Blade** : Moteur de templates intégré à Laravel pour la gestion des vues.
- **MySQL** : Système de gestion de base de données relationnelle pour le stockage des données.
- **HTML/CSS/JavaScript** : Langages de développement web pour la création de l'interface utilisateur.
- **Git** : Système de contrôle de version pour le suivi des modifications du code source.

## Instructions d'Installation

1. Cloner le dépôt depuis GitHub :

    ```bash
    git clone https://github.com/itschou/TigerProd.git
    ```

2. Installer les dépendances via Composer :

    ```bash
    composer install
    ```

3. Configurer les fichiers d'environnement `.env` avec les détails de la base de données, de l'application, etc.

4. Effectuer les migrations pour créer les tables de la base de données :

    ```bash
    php artisan migrate
    ```

5. Démarrez le serveur de développement :

    ```bash
    php artisan serve
    ```

6. Accédez à l'application dans votre navigateur à l'adresse [http://localhost:8000](http://localhost:8000).

## Auteur

Ce projet a été réalisé avec passion par [Afiri Mohammed Chouaib](https://github.com/itschou). N'hésitez pas à contribuer ou à signaler des problèmes en ouvrant une issue sur GitHub !
