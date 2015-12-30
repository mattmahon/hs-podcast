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
define('DB_NAME', 'hpn-data');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ')k0,I$4<x6>ivS+Ej#@Ap%DU5jD|jlW;0C|*PPnelH;-+Pb`LdPjIWGr-oE{V[)x');
define('SECURE_AUTH_KEY',  '{.5Zy|M3-X/Qqbbv+aw1/-=YEv<:#m2Xh#}hDRsV:|X x8e^m+q$>/KEkG=Tl-Jg');
define('LOGGED_IN_KEY',    'M#<xio!bve;~`@i]4k^-uUTFuyC<bl-v*s/!V2eNW?NKKKF`uk,xMh{b-MJE&j B');
define('NONCE_KEY',        ')x{8JkuRo1j.W-oWIMtUN/Q/JvR>b@-&m90D)TkCB#)^Fz^9ru}:ydWx&F8- 4+d');
define('AUTH_SALT',        'P-;a~*p*{GzI.5.jUq3emMA.+$%@ r^6EYt+|)kr<Pk3wH+oK+=Z0)e;c]r+Tv]L');
define('SECURE_AUTH_SALT', '2EG0kHt:qd07DH!m<$dWlmd/nU5mPVT.?o(Hy]j{l{Z>mNnc9{/e*tabOulpv{Y(');
define('LOGGED_IN_SALT',   'MWFFtP#Qr|,eZG^F[|AL0Be~l,)Fz>B10Bbem.*tm,6QMM+C*/Y{#~so690SL43K');
define('NONCE_SALT',       '@0,?pyN^;<T+l^Y4b@FCsqc]bE9&^-La;/o_1I1rW_r|h,EE~X6=<]zCEU4}tD5j');

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
