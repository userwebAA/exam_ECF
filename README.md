# Configuration du Projet Laravel

Merci d'avoir cloné ce projet Laravel ! Suivez les étapes ci-dessous pour configurer l'environnement et lancer l'application.

## Prérequis

Avant de commencer, assurez-vous d'avoir les outils suivants installés sur votre machine :

- [PHP](https://www.php.net/downloads.php) (version 8.1 ou supérieure)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://dev.mysql.com/downloads/installer/) ou une autre base de données compatible

## Étapes à suivre

### 1. Cloner le dépôt

Clonez le projet depuis le dépôt Git :

```bash
git clone https://github.com/userwebAA/exam_ECF.git
```

### 2. Accéder au répertoire du projet

Naviguez dans le répertoire du projet que vous venez de cloner :

```bash
cd exam_ECF
```

### 3. Installer les dépendances PHP avec Composer

Installez les dépendances du projet via Composer :

```bash
composer install
```

### 4. Configurer le fichier .env

```bash
cp .env.example .env
```


Ouvrez le fichier .env et configurez les paramètres de votre environnement, notamment pour la base de données, le nom d'utilisateur, le mot de passe, etc.

### 5. Générer la clé de l'application

Générez une clé pour l'application en exécutant la commande suivante :

```bash
php artisan key:generate
```


### 6. Configurer la base de données et importer des données de test

Ensuite, exécutez les migrations pour configurer les tables dans la base de données et importer des données de test :

```bash
php artisan migrate --seed
```



### 7. Lancer le serveur de développement

Démarrez le serveur de développement local avec la commande suivante :

```bash
php artisan serve
```


### 8. Accès au projet

Vous pouvez accéder au projet en suivant le lien ci-après : [localhost:8000](http://localhost:8000)

<br><br>

## Problèmes courants

- Erreur de permissions : Assurez-vous que les répertoires storage et bootstrap/cache sont accessibles en écriture. <br><br>

- Erreur de base de données : Vérifiez que vos paramètres de connexion à la base de données dans le fichier .env sont corrects.