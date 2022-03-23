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
define( 'DB_NAME', 'data' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'KVyrc/aBG9vn,&QVWkZJ<Z:wEmiy4qQ-~C8(Z@,aR7,o8*>QBI^iL@Iif+0OJ(GX' );
define( 'SECURE_AUTH_KEY',  '}XOv-j<.)Pu6)RT1WeN{S`>J[m  |Td*#lx3X3cjFgD1SsK.EWceJp((KE@BO(LU' );
define( 'LOGGED_IN_KEY',    'nHKPLn4_lJ-QC3]s6!/zRGZpdn.; g{@:9n)zh #/v=O5^w@aaDWC@Mzia7M$eIY' );
define( 'NONCE_KEY',        '.52SU+_mjohopbRcKAtx@ewm6yzBFN^S5mQcI2 QP[FOI#ts+!l[fYQr=on)fHgp' );
define( 'AUTH_SALT',        'e*:]^4nfJp4(Y+2v]hrzOe:)HUat`+I!f<_I_UHzOIB^xj@(i!>]$D7l62~Np@,+' );
define( 'SECURE_AUTH_SALT', 'Bwwl-Uls~ukU}bk:_f%l8V<p <eY,NAqoVMwqJ*7QY. #&cI+!,Kqf87=2< !9%}' );
define( 'LOGGED_IN_SALT',   'C@|Cj%]V1dp9@ggVE9GVHJt.J(V]M5b4;d:z(B#[^TAT@w!*/{Mc3t56*#Bk6r!Z' );
define( 'NONCE_SALT',       '%li?tf_/WP7hmHvL^gWBf$)3G`>kqfQ!9EOctS}.,n5:$y!qv7>{VxG`qQXF`U*v' );

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
