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
define('DB_NAME', 'gudrunev_wp');

/** MySQL database username */
define('DB_USER', 'gudrunev_wp');

/** MySQL database password */
define('DB_PASSWORD', 'Gh62y%UDIQP4');

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
define('AUTH_KEY',         '?3k#_s/8j]vD.5ERT5Zx<N%0pw eH27.g1mJeIC|2,RpB&PC*V/y3%BhIcMHC.|2');
define('SECURE_AUTH_KEY',  '6vau8mcq=hWEh}0I%k!Fz 6f_M3@;8/%U4r6~VT@H^Qae%=0 wL-qDCQefeTkI>.');
define('LOGGED_IN_KEY',    'uU<(XE<=s_z9Al]^ +Rri:;SE0j#vOD=[/V`Gp$j:2C@a=,3[-1RB)9*}3co^.+<');
define('NONCE_KEY',        'T6O4!:s7b~LC06&){`Cudkn6mZ&V>!ah*3ncruc]gG|Z-NhJ)3hI1@c*S5ET6,Z|');
define('AUTH_SALT',        'Q9e!gGt:.yh[`?,,6sO>c{? 9Pg_3ulK1f2sY2[h=1oqk,HFpOE?0d2m-c;J!Z;,');
define('SECURE_AUTH_SALT', 'f!41s_F~j7WoF7RZB;ou.E)WyZ~a7Ft^6%E|_9>=Uk;#0a|S<T3$VsV[j>m8s0Ey');
define('LOGGED_IN_SALT',   '9mfF /[yIh;qCgxf{ahBi5GFb?Y@ r`ygBBv[f#<Z8Gc^:>t5PB$<awI=vu b@vV');
define('NONCE_SALT',       '/U8z!3:-uu_i2G}.7Mw?ma=[[T]nOU[Y&w+Q(WA@9<ArK-mP#kitF&0MVLf1>9Yy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gudrunev_';

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
