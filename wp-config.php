<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'luanasantos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D_!C%Sq)sk*p@J]`LbNU?al&/VCOnt%Orl@H`lvo.5iPJN<M0Y8@GU=.}Qu(r8w!' );
define( 'SECURE_AUTH_KEY',  'E}Fv+Z2l9U<zr9=I242/>WK}9.X.}=$?Ux[9A>-(bX*4`N3H}HfDEl}3-eskMTMU' );
define( 'LOGGED_IN_KEY',    '8Ozx<O:X~|:yf{9DAfRPP%=B`IYyq4=-t{g~zR{Lzwqofk;1}lo[T/{<v&4JqBy8' );
define( 'NONCE_KEY',        ':[Z?k7ut#1S73N<YMI8,K._3vGEv&2@7.J|TiRi8H#VcN@(;Pr%GOrdS^~^4ar3`' );
define( 'AUTH_SALT',        'Wa!~ss6})#UXo)ELq%)MAxUE.Y2l(6DwCc$=Ls!HMU~OUVbf>IOecWqwc%Qg*tTj' );
define( 'SECURE_AUTH_SALT', 'X9g}ax|h2x9s7Nf=6(+J<Q5)}dz;8 wxo0G>5Qd,?1}&J!!.g3`F2,?,;qrCv|G?' );
define( 'LOGGED_IN_SALT',   'Y26_/%3z*8L~ZFncbnXf$,kq}DutmSLN_BsjPuC,Xe5Y5]-a-w8%QJ4(H0%3ue&W' );
define( 'NONCE_SALT',       '|p-JR-^%XPgL~BMuCFx2*]8P^m{Xxgp!Hr6W~tul|+45+618jdCUP8~tYe@[y_M&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
