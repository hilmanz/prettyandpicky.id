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
define('DB_NAME', 'pp_v2');

/** MySQL database username */
define('DB_USER', 'pp_v2');

/** MySQL database password */
define('DB_PASSWORD', 'm454d3p4n');

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
define('AUTH_KEY',         'dw!Q#Z5wFWEfD +1afe|(Yy4nS5;[|KI/REo.va]a6%Bq-zADl9m<7ye+FBmM?FE');
define('SECURE_AUTH_KEY',  'uKi LuLqx$/><z9-gL$-JtHnh9pbxTZnEL4;>/EEMs?r;_0X-V8,,;|v(~BZ;ts8');
define('LOGGED_IN_KEY',    '=rRr0HR?z(b|dh~Xwrb;>7xwiBO?wXs~tM:C-M}:kngn<1/]Yn-:Y&(1&ZvRH4q ');
define('NONCE_KEY',        'o7X5P=)mib)EtbCn_(c@JNx{Bm-/q<oOnXw~YAR&p5MYB@b>#J+|Nfry{747,-V+');
define('AUTH_SALT',        'D3/HaR!lL h)$lOFdX4Df;At(0(Z5EO@Mr^qu&Xpt9Ox)P.sC)_s20YD}=:j /q%');
define('SECURE_AUTH_SALT', 'BKgpe,KVhyPf?4a~oY[-:u2$(E8%$Ibm*Vx8`@e:I]CC&GdZMca&qK2OvD34RAu[');
define('LOGGED_IN_SALT',   '5d`*7Rj[@QBS=1tuawmBNx -WsAT6J%[#)A @1~Z~W[hveBcQ^53VNj>U`V9t0dC');
define('NONCE_SALT',       'z,a7_Q(({F[~l@5n5|V{N<oIl]IYk$3P0j!t*e)p2e1D$nF;<W_1ni=A]z2598h(');

/**#@-*/
define('FS_METHOD', 'direct');
define('WP_MEMORY_LIMIT', '64M');

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

