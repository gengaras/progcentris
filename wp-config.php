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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '*fbY?*v((q <dQ,HX+B+Aa#)J.: w5*5d_,?+n]t+c`~t9@i4J[h9}hoK/B$>mtl');
define('SECURE_AUTH_KEY',  'DY:{aX=(3V&R97n,.|av(9t=w<CqFO1{J,q_4_WO|x( Zu70-:;W?Udhc#sM]+<9');
define('LOGGED_IN_KEY',    '|.ql,`2!2<)7EfMn$ 7y}><8Uj{,/^NxMllYva-q7a(EwO0;zaO9Z,=Z4)@ldlHM');
define('NONCE_KEY',        '/6bLKy7AJ%CGs4[yg~_sZ[LoMbz*CST,H2l aGAM<}|VwiL(?Rlm-(|z{L,~>M>$');
define('AUTH_SALT',        '*<!F#eYYoLpgBNy&i[#_JAwj>iRlIJ,Lu(`(99uZWs^]hUgq]@P$Q=R6NWC=,3u{');
define('SECURE_AUTH_SALT', 'eDW79*d5j*[uVst_Y0EHV6~HTh4w#F?ENO915g^w-4,L:BPu/D{_ozKVR[$VI:cC');
define('LOGGED_IN_SALT',   'i-!Dy]AT*zfm_};WsO[:~Yo-^:N 5nbku`S?C-^G.;v!}QOzdoC<^|j>h`8F,Ob_');
define('NONCE_SALT',       'I`(3zbkslFyttrZ|.6eM.2^!4D<pNaP7T#o9BmxVdRA~+;+}q)o,X=YL4OxB{Rhc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress';

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
