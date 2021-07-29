<?php

/**
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
// Les erreurs seront ajoutées dans le fichier de log (dans le dossier content)
define('WP_DEBUG_LOG', false);
// Les erreurs seront affichées directement dans le code html généré
define('WP_DEBUG_DISPLAY', true);

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#wp_disable_fatal_error_handler
 */
define('WP_DISABLE_FATAL_ERROR_HANDLER', true);

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#script_debug
 */
define('SCRIPT_DEBUG', true);

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#disable-javascript-concatenation
 */
define('CONCATENATE_SCRIPTS', false);

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#cache
 */
define('WP_CACHE', false);

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#empty-trash
 */
define('EMPTY_TRASH_DAYS', 0); // Désactivation corbeille

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#specify-the-number-of-post-revisions
 */
// Déactivation révision
define('WP_POST_REVISIONS', false);
