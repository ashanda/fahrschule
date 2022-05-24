<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
//define('WP_HOME','https://yogeemedia.xyz/websites/fahrschule');
//define('WP_SITEURL','https://yogeemedia.xyz/websites/fahrschule');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bzyyummy_fah' );

/** MySQL database username */
define( 'DB_USER', 'bzyyummy_fah' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Zd(}BD#{NvJF' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n2guwq1b734qxyTgHnP6N7ZVns01UetgYV2GTbgOxpZAvXClWKB2GsglylFTXF1n' );
define( 'SECURE_AUTH_KEY',  '8QLmvQhHT9WsvBDsaO6KB1IzUr1YRlBYxLi9f5AVZNi8LVXhxchXxOhbtt3uzYIl' );
define( 'LOGGED_IN_KEY',    'uIaoGtsG2n7kd3z0dnGYErnWrNuZo1JY0L9nRHAzpTnO2INLRrbbsO3LrpYCWANM' );
define( 'NONCE_KEY',        'QAzqR8DFaBgdWsvRhVicHR3kY9Y1UFRYLMYCtkAdPZruhuCgcG6qmOMmolUKkdRe' );
define( 'AUTH_SALT',        'pr2SrERVCMNFhcRi3VdEDwePwi0u0yZjRI2YsALAgeDB3SHt03RvK1F5QSzBPbgq' );
define( 'SECURE_AUTH_SALT', 'b7ROOHZEsy4h1tP8XL2GAixkdqM2zRNKQ3vVdqgOIYtIIBVwGkcUvImgZrz19cm3' );
define( 'LOGGED_IN_SALT',   'eeMoLAIgLdRhFIUyVgN3RW0xqMrM5ZCHyJPwxJw8bW1Y0d2EDgmBuHgEmT9vCJWi' );
define( 'NONCE_SALT',       'imGXIsqS6TGglXZYTMAp9BLKD87xz8qEfq99Q2MqETwdzP8LBcwhsGa2IlH26gvy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
