<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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

define('WP_REDIS_CLIENT', 'predis' );
define('WP_REDIS_HOST', '127.0.0.1');
define('WP_REDIS_PORT', '7006');
define('WP_REDIS_PASSWORD', '$sQvp*tm$6SYADm'); 

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'soenergy_WP' );

/** MySQL database username */
define( 'DB_USER', 'soenergy_WP' );

/** MySQL database password */
define( 'DB_PASSWORD', 'R4Zu45WcZ' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '=#DadK]V$T5eAT>>2I`.ecj6_jY6c)n7 Kq? )}igR|zacGM~f{SE:2[> IhU2}:' );
define( 'SECURE_AUTH_KEY',  '+/wGl#/c/wBL+(!a*]G+u?OxxoD^3$SiihtUQm#VO;lX_Eiz(&geTr)4_NzeT^Y8' );
define( 'LOGGED_IN_KEY',    '8k QbLzV4KL0p,X_B&gp Et}U g#Vz9>]$K)FK#E0=i:]@E6=RrW:|m7 d@}mmF7' );
define( 'NONCE_KEY',        '<yKxYzpxKgmDWiv]8yNYtJ/1.U3$A^p/gz$(gR nvFOd~O|yA|<r:wyQ|a-3[$a;' );
define( 'AUTH_SALT',        ']XoZ|x($cK{Ggd 0U%v&%29^zsJb;?n{-xZR]qAGvmKh}8)baIlCrJreD,Xe&%^I' );
define( 'SECURE_AUTH_SALT', 'w{k0KY53p.7jiE2*JFDKo}(tkx9Gs< pkAIe[}P9-`bpWvYgPEY;O3V_U kZi29P' );
define( 'LOGGED_IN_SALT',   'FMP9^fAII8`|bqYvW4v8fgyFc>L%!Wh?Deg?sZ(EGX^w?!kk!(Lt(A-#)qd!>LRV' );
define( 'NONCE_SALT',       'noV)&aFIPq[t]v{arr->a!9:60VYcI.=E;*,_l$s*+yMAn/nn/`!n@3IEiNUgzlF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'soenergy_WP';

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
