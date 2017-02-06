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
define('DB_NAME', 'jfpd_wp');

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
define('AUTH_KEY',         'QhE?<R~:iN,%zvM>&h<zP3L*!sAz-1E}K,N?D[WCB~qI42Ut,XUL6N7EZ<6qcXdO');
define('SECURE_AUTH_KEY',  'bq_9h=D6IR,ps)sSQd`xYkWi@S+r(J}MHFnl,UC](BGbpQep!+rY*+_g(+4`mhaL');
define('LOGGED_IN_KEY',    '3nh069CVb7or1VY>4I$5[SFdLYWgR_*9;b9b(Vqk4_=5j!Zx,x>%]$I.GN{$#b6H');
define('NONCE_KEY',        'z&,^x{Mxy)zIE#ALkTW[LpT0=1<n~s7Ive}5C$L^Z^mw6]X^r70CUfjM$6J9rY^h');
define('AUTH_SALT',        '{Ez#@j)@pyIdXP,Hfp*9u{Ai}j%5.p~@hh/%KOrOtb2>?!#Pz4dwL9iL#Z|<s~c.');
define('SECURE_AUTH_SALT', 'ZjePgL$h7<EEF_IyA3w[kM7s6(.,C#;Y(q$0w06ip<D^ZKq!q9xj]+A]i5TfqG,:');
define('LOGGED_IN_SALT',   ' DK;pG559gCcJ8niPqA.v&Mk+.bwWqYIp1@FvPak*cmw:~>]L^o|gt<)P1dj|z5q');
define('NONCE_SALT',       '?,_=Zmq_u=S-n7o,YS /h10dz;r%hTK~xw_6qtK{qu.m%<hoTQ9WVY)THxMxIj{)');

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

define( 'UPLOADS', 'wp-content/uploads' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if(is_admin()) {
add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
define( 'FS_CHMOD_DIR', 0751 );
}
