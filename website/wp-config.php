<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'fKcx13S0RwBBlT9L9J05kHBw906K6iGmn7RVkBRhGfR2WpXyWzAPweXHVSAD6Dia' );
define( 'SECURE_AUTH_KEY',  '86MHBRrrHgkgYPHk6RqytX30HaY9T0VMs22uTvEjsNVYdlXjh9StJsRid5Kyjm16' );
define( 'LOGGED_IN_KEY',    'cRt2QQ7g9WQsA6dEjqkpOu0xVCAtUKNlNkTDaYrda4s5DnaWgCiLefRH03NUHiGE' );
define( 'NONCE_KEY',        'cYudhy5FtjzrFUfKE07wRh7cONCE2VmskEmKEzQSSBW2eSDkmoq7Ujuoz8BHHNAY' );
define( 'AUTH_SALT',        'agbkjBcQL2UPXv3cwulhKbs2xQTfGUeRquClJd3pzMUoqCdBvkUYG2rILMMH2y6F' );
define( 'SECURE_AUTH_SALT', 'uFBeKMBlDXzMJvpwmiE6gHif7oJdk9se5F8CacnhiUC5bMrcZAw5tIWXEcMnThRg' );
define( 'LOGGED_IN_SALT',   'adNTy4ha68yhZUmI0A4YoQBTurayXz2zgcRyXwOt4X31xlj7Ldgnio36enBLjWSL' );
define( 'NONCE_SALT',       'PKZymlXZxgwLekiUWRtRvYUxTuBTB2AVsIBvJPgFO1tXSUa1yP1H868dPyp0JCSh' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
