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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'O$e9H${;ZpQd-#@yo0z+)3s^r`t)!!dhOe_AoJt&ms/0hcBHT;]&!Jx>*TGl^^`2');
define('SECURE_AUTH_KEY',  't5qORNawE{x8iuw.RgWT-+zLn#2m9RCS{C/Lwk5xC~XL{/i7`K9arxEwM^*2!7`=');
define('LOGGED_IN_KEY',    'y-)g_C:T&?fOL:bKJ|g*e[B;W{eKW@n#p|-&/@>{eNrAC;KY#y{Ic%IweW b7w{@');
define('NONCE_KEY',        'Vdnv]gp,) 81y,8dibzsG$}CS>>c4+zd]VFYN7JZ`+Wt=UwbzIr9 .tV@_O^W:RR');
define('AUTH_SALT',        'bOQ440{6222IU?i;_~x&7I;ja%6!G&N71rmT%rEQ|)u(q?nYOY*yqrzet%J|CeKh');
define('SECURE_AUTH_SALT', 'G%2`XU>2cE!X]g{bgBm=Su.x?owf<KH$I/q4$CdH+,!~`:mmOS%C|O=6,Uz2hL:i');
define('LOGGED_IN_SALT',   'GD+U_:dH3nuO^AN|NeMjW~fC}Y[ykq=XqwN^A-4dhlE)3gi<z Q-Pk[~496a.Sc7');
define('NONCE_SALT',       '3sG0$3z^{aaT4D[~Z%m2!?;@2^4+So%lYiD|^$~nDQODj)}6^RR/J+^(# gB$M*_');

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
