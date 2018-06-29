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
define('DB_NAME', 'heywood');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#OVFMD%wdiB@utW+B&AE(dcaISt-@ 0tsAE7C@Q}[T( sRY@h-2!C;Wo>]ucl|-p');
define('SECURE_AUTH_KEY',  'SIE(F0V#xb4 uHo&HJvgPVA_D XGBPLT5Ne%JzL -<ip5NxW<1B1.+3PN AsF*26');
define('LOGGED_IN_KEY',    '=}h4:NpRzeYB@MTie+@eEbpNmWJ3UIQ@o?J%W$96b`(h<CXVfo:W1DyV4KWGD6Cx');
define('NONCE_KEY',        'D$><XO#61[u$9ABSPUs,dNE<k;*e6^53x)W,yN)U=$U`;m#EVtxn7,mH@/} 4B*q');
define('AUTH_SALT',        '=q>AeTYcGR,=0]<Z_j4BpqVscS/N~`m2C[6zZR/e{aQ6f]->.mSB@p6#8iFn>fqv');
define('SECURE_AUTH_SALT', '@Qk;3c96a6c+W$M`P}+D<q{Fo{D>7M])6?jI>7B}(}saX2w+o*[R.Z=.5j8Xk2PQ');
define('LOGGED_IN_SALT',   '|*Irox7WX]?[jG{>aQ}J{DcLnT_KrU7%7RcR[|h)m~Hd9Q,yRlT/s)v@DBXg*_HJ');
define('NONCE_SALT',       'OrE`pL576 0-7Mz/Bhwp;rU}f7(92hHW` B2cAXHj=Vk/)JV;_9N*CwkhP0vsZR>');

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
