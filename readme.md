# Pour lancer mon projet symfony: 
1/Ouvrir Docker Destop puis lancer docker compose via la commande terminal suivante: 
docker compose up -d 
2/ puis lancer projet symfony commande sur terminal : symfony server:start 
puis cliquer sur lancer le navigateur=> une page web s'ouvre en local
# Quelques commandes utiles sur symfony
php bin/console cache:clear : Pour vider le cach de l'application

php -v : sert à afficher la version actuelle de PHP installée

php bin/console doctrine:migration:migrate - Sert à exécuter les migrations de base de données dans le projet Symfony utilisant Doctrine (l’ORM de Symfony).

php bin/console make:migration : sert à générer un fichier de migration Doctrine dans le projet

console doctrine:schema:validate :  sert à vérifier la cohérence entre les entités Doctrine (les classes PHP) et la structure réelle de la base de données dans le projet Symfony

console make:migration : sert à générer un fichier de migration Doctrine dans le projet Symfony
Elle prépare les modifications à appliquer à la base de données, mais ne les exécute pas encore.
Pour modifier automatiquement la base de données il faut saisir :
Symfony ne modifie pas automatiquement la base de données. Il faut :
1/ Créer une migration : make:migration
2/ Lancer la migration : doctrine:migration:migrate

php bin/console make:controller Login : sert à générer automatiquement un contrôleur Symfony nommé LoginController, ainsi qu'un template Twig associé

php bin/console make:form : sert à générer automatiquement une classe de formulaire Symfony.
C’est très utile pour créer des formulaires personnalisés liés à une entité (ou non) 

php bin/console make:entity User : sert à créer ou modifier une entité Doctrine nommée User

php bin/console make:user : sert à générer automatiquement une classe User prête à l'emploi pour le système d'authentification Symfony.

npm run test : sert à lancer les tests automatisés d’un projet JavaScript ou TypeScript (souvent avec des frameworks comme Vitest, etc.).

npm install -D vitest : sert à installer Vitest comme dépendance de développement dans un projet Node.js (ou Vite + front-end).

cd .. : sert à revenir au dossier parent dans un terminal

# Penser à faire des commit régulièrement
## pour le 1er commit :
git init
git add .
git commit -m "Premier commit"
## pour les commit suivant
git status : Affiche l'état des fichiers (modifiés, non suivis, etc.).
git add . : Ajoute tous les fichiers modifiés et non suivis (dans le dossier courant) à l'index
git commit -m "création page connexion + formulaire enregistrement" : 
git push

# lumea
 
Bienvenue sur lumea — LUMEA est une application web sécurisée et éducative conçue pour accompagner les jeunes de 12 à 20 ans dans leur éducation sexuelle, émotionnelle et relationnelle. Elle vise les enseignants, les professionnels de la santé et les parents (parents délégués u à la demande dans un 1er tems) en tant qu'outil pédagogique et moyen de communication. 

Les objectifs de LUMEA sont de : 
- diffuser des informations fiables et accessibles 
- favoriser un soutien psychologique et éducatif 
- offrir un espace sécurisé, confidentiel et inclusif 
- aider les acteurs éducatifs à respecter les orientations du programme EVARS (2025) 

Pour résumer, la web app s'adresse aux jeunes en quête d'informations sur la santé sexuelle et affective, aux victimes de violences sexuelles à la recherche de soutien, aux professionnels de l'éducation et de la santé cherchant des outils adaptés, ainsi qu'aux parents en quête de ressources éducatives. 

L'accès à la version actuelle de LUMEA est réservé aux professionnels de l'éducation et aux parents, sur demande au chef d'établissement.  Chaque utilisateur est responsable de la diffusion des informations auprès des élèves, et doit veiller au strict respect d’une diffusion dans le cadre pédagogique établi.

 
## Sommaire

- [Pour lancer mon projet symfony:](#pour-lancer-mon-projet-symfony)
- [Quelques commandes utiles sur symfony](#quelques-commandes-utiles-sur-symfony)
- [Penser à faire des commit régulièrement](#penser-à-faire-des-commit-régulièrement)
  - [pour le 1er commit :](#pour-le-1er-commit-)
  - [pour les commit suivant](#pour-les-commit-suivant)
- [lumea](#lumea)
  - [Sommaire](#sommaire)
  - [Présentation du projet](#présentation-du-projet)
    - [Les outils](#les-outils)
    - [Installation :](#installation-)
  - [Installer les bundles nécessaires](#installer-les-bundles-nécessaires)
  - [Démarrage](#démarrage)
 
---
 
## Présentation du projet
 
**PetVeto** est une plateforme web qui permet :

- La création et la gestion de **comptes utilisateurs** (propriétaires d'animaux)

- La création et la gestion de **comptes vétérinaires** (vétos)

- La gestion des **animaux** associés aux utilisateurs

- L'enregistrement et le suivi des **soins vétérinaires**

- La sécurisation des accès via **authentification par mot de passe hashé**
 
---

### Les outils

- PHP Version 8.3.11

- MySQL sous docker ou installation local

- Symfony version 7.2.5 avec CLI, [Installer Symfony](https://symfony.com/doc/current/setup.html)
 
- Composer

- npm install

 
### Installation :

Après avoir cloné le projet avec  "git clone https://github.com/ton-compte/petveto.git"

Exécutez la commande *cd petveto* pour vous rendre dans le dossier depuis le terminal.
 
1) composer install afin d'installer toutes les dépendances composer du projet.
 
2) npm install afin d'installer toutes les dépendances npm du projet.
 
4) Paramétrer la création de votre base de donnée, dans le fichier .env du projet, et modifier la variable d'environnement :
 
**DATABASE_URL="mysql://appdb:password@127.0.0.1:3307/app?serverVersion=8.0&charset=utf8mb4**
 
Puis exécuter la création de la base de donnée avec la commande : php bin/console doctrine:database:create
 
5) vérifie que ta base de données correspond bien à tes entités : php bin/console doctrine:schema:validate
 
6) crée une 1ere migration : php bin/console make:migration
 
7) Exécuter la migration en base de donnée : php bin/console doctrine:migration:migrate
 
8) Exécuter les dataFixtures avec la commande : php bin/console doctrine:fixtures:load

Ceci créera :
 
   - Plusieurs utilisateurs (propriétaires d'animaux)
 
   - Plusieurs vétérinaires
 
   - Des animaux liés à des utilisateurs
 
   - Des soins associés aux animaux
   - 
-> lancer  Docker Destop sur une page navigation et se loguer
1) puis lancer la BDD via : docker compose up -d (ou installer MySQL en local)
 
2)  connectez-vous au serveur : symfony server:start
 
## Installer les bundles nécessaires
 
```bash

composer require symfony/security-bundle

composer require symfony/orm-pack

composer require zenstruck/foundry --dev

composer require fakerphp/faker --dev

composer require doctrine/doctrine-fixtures-bundle --dev

```
 
## Démarrage
 
Une fois sur l'application, il vous pouvez vous créer un compte "véto" et un compte "user" et visiter l'application (Les pages sont protégés.).  

Pour tester les fixtures le mot de passe est hashé dans la BDD, mais il est identique pour tous les user et veto : mdp123456
 
Installing & Setting up the Symfony Framework (Symfony Docs)
Screencast     Do you prefer video tutorials? Check out the Harmonious Development with Symfony screencast series.    Technical Requirements Before creating your first Symfony application you must:...
 