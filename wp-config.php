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
define('DB_NAME', 'ecommerce');

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
define('AUTH_KEY',         '=H[u}?#vWDPq7D@jY<D2g1dU^BW%2Xcqw<gL*h[= )![dT?/OnpT.GC1yT.[[X O');
define('SECURE_AUTH_KEY',  '~ar$erTuP`hO;PIN93I+=mN}7BJ<oSXvBAcz*f=Shyk!&nQ,yP@&##/KN?z{CkNP');
define('LOGGED_IN_KEY',    'g0f94=bL&m./T,N~d;cb%Xc}miJtlQMMe*,e<]iDc3+w=`ELf7Id~=B@!?$|u?NS');
define('NONCE_KEY',        'A}r:D_V+B#a;Q^MUIxdpdu1?hp:}mi_<SvqB#W+6s1ZG[HB.98of?g]FvPy:zF}r');
define('AUTH_SALT',        ' e^]D}%0h.@4>sGt|tF%gtH0k)tg^!Ckl.3p?{VYxUMmTM&izMyT3`=HXvQ[+6#3');
define('SECURE_AUTH_SALT', ';W2>ZKGmsHcd}CbEx@Uto,7w!;>g~h[,P}^D@yQs}B&Pi?a(E<mUJ07[FO8;POE~');
define('LOGGED_IN_SALT',   '>go1)iwrUqz}lvQ^0unkx0+(C$WT&N$k!d1kz77v{c$v*MWC/~!yYH$yKenREvyb');
define('NONCE_SALT',       ';lTu0gcPME3(E**s?B@;!aB#=45OsiB,I6&=jDI.#T?S/ cy;UXTQJ0haR8&K;:8');

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
