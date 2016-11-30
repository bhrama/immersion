<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'immersion_bd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Dl~._MHA@J#jqsL+crYoPW,}?[Qb<<3+UJ6u`u&;msB& ?j|6OYTHP8UNI@(B%DU');
define('SECURE_AUTH_KEY',  'uf`^sefI42Y,5tRS(E4}QfX<Y&@.|)n~YNq]C7]Z.wP 9ECcBiUY~jh<z0(|Ue~S');
define('LOGGED_IN_KEY',    'xLZBFaRK(}WX%Oz`$tjl4<i^w9$ldEGdJ[&sdFPbk9/js4+HY{9PxswE)agP*Tt!');
define('NONCE_KEY',        'eI?yga#%FHGcx`4T~tO*h2F<5f$o!bS>1i`hOW,,}5Vw%nh38g}g8D[kEKqd,Y^<');
define('AUTH_SALT',        'bifGDCpj-g1YzUQtQ647$DUz{PNrcGu9t=<3O|Z/7#*LNVK_|xp^HDB:u5jr/{:9');
define('SECURE_AUTH_SALT', 'dV}9rzwDfk1xoS1u1B|3y~,#JrEi)x;rmrMvBl>7Qo{5qMH(y4mt ldFHhcaDqOX');
define('LOGGED_IN_SALT',   'Yg[WA; Nz;].,=*_YfNc#3t{HEn)]rxb-?g~x%jDxG3}RJ2~b0N77:a!F nv!aS_');
define('NONCE_SALT',       'xL{#%{.HtK}?iUuRvNr4m8(`wr_Ksk[tBlF-p|sQH egCHYLq0y/2wG:mM8A%gA0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
