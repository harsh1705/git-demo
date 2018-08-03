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
define('DB_NAME', 'git_demo');

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
define('AUTH_KEY',         'N=%DZ9{WG|-Xe_+D|B^i%m4De1mxUGny_DW8EqVZ02T`JVqgyM`O/N==D9Sgj8Y+');
define('SECURE_AUTH_KEY',  'jHKbW^KiQA? P-seD0s@Tb?YG{.f9Dg$nmyRV +r,Yp__DV3i9RcQfTZ:@$2&=>~');
define('LOGGED_IN_KEY',    'sO9,9yrC[_p9&4R7+r Z}Sxu2~$mJ|T4>KR6}!f9f&Tt$t:cZPi[5*WDQYdezZ1;');
define('NONCE_KEY',        '[Wsv@BYyq.v=8[ -4;]@D>XO:rq<aK+#Pd$MEa_r)u^y@CpmIam;p5Fd[RZf>:g ');
define('AUTH_SALT',        'V2=.D|SS]oh I0>C(`ni-VaKq7s)8[,-segee)=Run[Fph?X04tz_tR5(7v2%mo$');
define('SECURE_AUTH_SALT', 'RO NFL94{|RvqhG:pgq|u<B>9@DwRQ90rK:$<wKWa(OkOko#-U[~wY9F>W oLqTv');
define('LOGGED_IN_SALT',   'C<T!re u^JW:hUk|V-|V+N+R.`xH[vZD#? &/4Jt$z~&e^fNK>:5+$)*KPi@bY`x');
define('NONCE_SALT',       'FN&3T IhMh&uuJ5BNJ 0[W xu=9NHs+0 OmcfNeL}MDE(l4nE%1nXz~V5F@tS#Av');

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
