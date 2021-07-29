<?php

/**
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
// Les erreurs seront ajoutées dans le fichier de log (dans le dossier content)
define('WP_DEBUG_LOG', true);
// Les erreurs seront affichées directement dans le code html généré
define('WP_DEBUG_DISPLAY', true);

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#wp_disable_fatal_error_handler
 */
define('WP_DISABLE_FATAL_ERROR_HANDLER', false);

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#script_debug
 */
define('SCRIPT_DEBUG', false);

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#disable-javascript-concatenation
 */
define('CONCATENATE_SCRIPTS', true);

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#cache
 */
define('WP_CACHE', false);

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#empty-trash
 */
define('EMPTY_TRASH_DAYS', 30); // 60 days

/**
 * @link https://wordpress.org/support/article/editing-wp-config-php/#specify-the-number-of-post-revisions
 */
// Nombre de révision max par article: 5
define('WP_POST_REVISIONS', 5);
