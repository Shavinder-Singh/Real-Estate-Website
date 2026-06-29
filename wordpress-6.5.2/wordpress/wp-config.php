<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'realestatedb');
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

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
define( 'AUTH_KEY',         'HL^0=#3iR#y>UE119Mb%9fJ.x.Z3s]1Rxt,O|2yZaL|L}-u)S]fnyI2drY)*  $j' );
define( 'SECURE_AUTH_KEY',  'hqNA8]w6OP<aax)0v5Z*{wcSDm uFcAf6ehL,cti5BrBF3>hAo>Qt&s`mpuM>)aE' );
define( 'LOGGED_IN_KEY',    '76DqmpBWmiyW}u.6BdpWGOZ7xWP?,jdy*.th0M)l@lcF`f&s<o/f`@;gKwVrY8LQ' );
define( 'NONCE_KEY',        ':Es;8PxcLt^*:]> C-xzT2Lx-pYv^ n{R yI/C%G$GBLzA#K(M#c&olL}THWT(Ah' );
define( 'AUTH_SALT',        '9umwfjFOcLAQciz*fI:*.&Q]!qyH(?faB2_[_^Q%&5_,BSn-~=!baZt-Sc:0!mEx' );
define( 'SECURE_AUTH_SALT', '=S$.mRZzGM36hj3*uz7kq9 ^fw&7SxO{WaQ/;Q`cFi)~%F19T}J}?Et>WC%]dM1E' );
define( 'LOGGED_IN_SALT',   'QL^xEqiloPTPw|9F>M8*@:sQ2kOvBW[qsLQ6xJ3|.+=T,N%kpHB)]6]YSYy<VY}L' );
define( 'NONCE_SALT',       '(Wpz:#1SdjJIq8>_Ss=q v|II7QA&z?W[M1?m1v>=|Z9`HwiU_I?(~1/0F,~H[g@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
