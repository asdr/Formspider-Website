<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

	// define('DB_NAME', 'wordpress');
	// define('DB_USER', 'root');
	// define('DB_PASSWORD', 'root');
	// define('DB_HOST', 'localhost');
	// define('DB_CHARSET', 'utf8');
	// define('DB_COLLATE', '');
	
	
	define('DB_NAME', 'benwordpress773');
	define('DB_USER', 'benwordpress773');
	define('DB_PASSWORD', 'aA77374526@');
	define('DB_HOST', 'benwordpress773.db.7091464.hostedresource.com');
	define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         ' (uatPAb6/-J9dyutg&@6.A?(cremmtrS/?x(q <F0R621zOwvsSif1V[1^t-b1l');
define('SECURE_AUTH_KEY',  '/2q-N7<mB?E[^*vN`e&Vu<r65-iC>YM[5zsy{4H~u1tsLRisy}QPr|}d7R+75*}~');
define('LOGGED_IN_KEY',    'W*~?!&m/9zt]yT]4dr)k%P$e|T`6v#Mxz|R6V[hd%Eic[Fn^o{^zE1:#5ms:}Tg/');
define('NONCE_KEY',        ' bNzqKl|Vf6((BIDqpexIMB6h~A%9_0%E84=N8Kh6tp0&XG-}<>l`gxS2j$.<8`W');
define('AUTH_SALT',        'ohlmp5(M:@*scLUj6.[ESwk[9m|$~</!dx,f>?7aIlV4.aNX Js3NXz,f+@Al7aT');
define('SECURE_AUTH_SALT', '~MF%oQ7LX(2e-%ZNnf!#7[W3h@88C*W_ 5k0B4~_qX3/Rf3i}P4+AC(OA[sR--a)');
define('LOGGED_IN_SALT',   '2GZ5JpS:X2I(SJ#P,1s8aOO5JCg|/+3&q!Zfo.F23?%j9T.~7]Lv3y6,iPn*:.ju');
define('NONCE_SALT',       'j/$K+0&@X7/2g9C,Q<ZJ0T.M:ruS[sJN0Gregz]f7#f;rPTs)Bnm_mbv(UC$0[3q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
