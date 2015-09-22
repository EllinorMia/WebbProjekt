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
define('DB_NAME', 'Ellinor_projekt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'nCz`;I|s<6~SpK9U+hjKSIC9L?,t}(EAQcoAf_DEND}lam3p|]%633AeE/f>d^+Z');
define('SECURE_AUTH_KEY',  'uT{A[jxR4P}h YBWH=a``B5zO9<J15k2;s-WKRyxjP6_z9;Ewj {,>br b|_U%/D');
define('LOGGED_IN_KEY',    '%c:v{-YP+ 1l?(*`Cu}9u7 *=Co`ligi`iBkEO,5~Kr6sH>8L08h|PxVD0,E@p=S');
define('NONCE_KEY',        '+{U.%@di#|ivHeJjUyyIW&*+J4!zp%,QTJ|_1Psg?c,=}{d^<4-4JDIbx,=n)>Z8');
define('AUTH_SALT',        'pwu;vOOoK>d,+:yM^:Oj{c|3Kg*DJzHOfc).v968m#QQj:2Y$D F~GpO-[;/xDB|');
define('SECURE_AUTH_SALT', 'KEK?-Kf(Iw6_!n-#6sM(-Q2B)l5*evGip%q;|w8DL[?4Tp9:[Y[}d6p]i(u&$`nS');
define('LOGGED_IN_SALT',   'Lrc 1LzDq~8},&<t|,6pI$@8irJ-d}0Ody|fjhp5*i:@wv+Uc1LEldg&@TblbhNk');
define('NONCE_SALT',       '7=IF}!Pr;=T$.e#&w]3)4S(*0o5Y|}M:S6/wHYAU+Fs|9|[g*$.kJI |0}Bsf30_');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
