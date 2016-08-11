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
define('DB_NAME', 'arc');

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
define('AUTH_KEY',         '~J`DRxmUe2`ify2> e/Q/2=.LFo&{}_#P^?LOQw=@[N+&3YAMd^kDCB#;o3=w4Ry');
define('SECURE_AUTH_KEY',  '*TCESO?K+R#JouNF}8{V)_U=sWZ5Ua]s>yP1&fE*lqXHd^.V$obAK^R#EHNRTY>d');
define('LOGGED_IN_KEY',    'MLjM}37=QQQN&i2[@G3TYW3eu9!hG9%AZA%;(VylMV|(u*>5_d59SlOaMEujN[GW');
define('NONCE_KEY',        '5/hc1L%m]%]-Tv(ol8r2r/@Uw0fW4&w3f4I+,YX^/TQwumb3B2|^l8!c*:q+)bW@');
define('AUTH_SALT',        'Y>^EaiIOOZ6jDglK4@.iI@+;VXLuurI@!2fH?ap o>^]>hWB@v{*}5A#~_/( :vE');
define('SECURE_AUTH_SALT', 'ieDv~?$92?[Y{/h|ONsru7_zgxZ&<g59$Km9Wx:ALEa3+~_v0:?DdQ/yH%=r|F`O');
define('LOGGED_IN_SALT',   ',w`4ve82c_7EpM>]??RgTa<c[*A0:8%nSh X8s,dnnev[`p(ule[7hnuXDFXg#V.');
define('NONCE_SALT',       ')~T9]2ex1gwzVf8uDAW^P#Yw-oXdr[CpV3/4qXL#Qf{@},-ULQwK%ErFj7O5)dLL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'arc_';

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
