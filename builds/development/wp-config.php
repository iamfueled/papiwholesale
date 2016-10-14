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
define('DB_NAME', 'papiws2');

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
define('AUTH_KEY',         'z3f3rnd}-BF=b7hB2D{Jj^BJv3jh4Kn;Sw)_fZT?+ALpN WY_JH-iXkezofIL&y-');
define('SECURE_AUTH_KEY',  'Fn7gz.58Uvc/-:K16==#q]sIx#SHz#{En^FZyuh,DSV(`b6!apSn(#W-|`XT9!A#');
define('LOGGED_IN_KEY',    'aagi|Vq-mo:0hXDB149QL=uk_w`4zYXS#T;.kOf7t$Rpv$WW.dw%5n|K<@RgPl*W');
define('NONCE_KEY',        'hYE*Y^E^j87Fj+D0CPsv<Su9I19Do{YtHe>%sN2%25,_V4)~g^[G,3bm]-UO^W;a');
define('AUTH_SALT',        'qiz#5iSd[&~EHo?,mT*{O`+J;qw6HGZ+9gevf<H$rQdq,MjV$[c2}l^/c0{/!?aJ');
define('SECURE_AUTH_SALT', 'Z+~wK~Bpv`9K:XC1=$0e(Rzz1LNI$_:Lr&0M@DGfF_kz#30hdB;_RxR%drEa`V3h');
define('LOGGED_IN_SALT',   '1`w]z/da&;glRa&Srw-*vZD*`P;|_d9|cI5?w[nR{T?OOo?$6~5vpv`32tpurR]j');
define('NONCE_SALT',       '_5}X^t~_Esv>X50{`,`nfqXlo7,&zV6P#>Dj`4TIcuON67OT<?fYf%F_#];W*x|i');

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
