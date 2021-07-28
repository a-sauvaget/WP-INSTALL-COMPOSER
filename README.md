# Modèle d'installation de Wordpress avec Composer

## Prérequis

- Composer
- WP-CLI

## Installation

1. Télécharger WordPress, ses plugins, ses thèmes avec composer.

```bash
composer install
```

2. Créer une base de données avec un user dédié.

3. Compléter le fichier `wp-config.php` (copie de `wp-config-sample.php`):

   - les infos de connexion à la BDD.
   - Clés de salage (https://api.wordpress.org/secret-key/1.1/salt/)
   - URL de la page d'accueil (`WP_HOME`)

4. Modifier les droits des dossier avec les commandes:

```bash
sudo chown -R $USER:www-data .
sudo find . -type f -exec chmod 664 {} +
sudo find . -type d -exec chmod 775 {} +
sudo chmod g-w .htaccess
```

5. Installer WordPress avec la commande:

```bash
wp core install --prompt
```
