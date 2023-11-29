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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing_db' );

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
define( 'AUTH_KEY',         '0/PD)Rs-VLAhs}?iLP[)DYjAZT!,0LK-.!y=hko&_LR%=K{C%q*qV33{Vh_HDa_+' );
define( 'SECURE_AUTH_KEY',  'hxE2onKzIJb qB(L>u?nd^K<A~+=pAd]b?BRm!9:qe]*@0>`I!9b6|Y4t|}?6;#a' );
define( 'LOGGED_IN_KEY',    '=;crY`?y&JBv:]!hefnpV%%Y;8o}r&_b8N3Ou(|@.2InyATH L~nF9GfL)go5|x@' );
define( 'NONCE_KEY',        'DeTDQKjH`h$evzCab?sdpF]6RWl{}3C Z>hTLU8k10>=p^3t7?=-,_Cox s beL~' );
define( 'AUTH_SALT',        '8jgAn R/ ;jlgB%dOleaj3VDM|P$94ChX|lF4OK]|t4O 4s60|@?N<.h*_@BvrR&' );
define( 'SECURE_AUTH_SALT', 'Z^63k$j` e;36rY^q(:2% %@ruM%!&5uXfFys{uknp,(F^DR|ofH$m:b!>q~o|~(' );
define( 'LOGGED_IN_SALT',   '<v6U_o:4u.s}&?&PL,69m$mH[.25`4ZWfHg7AhF#S()j5|q*)7KtBbMVX!~Rs8N6' );
define( 'NONCE_SALT',       ',1}@Q>ki|0PP&nv;|ju$7@K(p:QVq<_]]Ir1bobH7n+~L(Hw?kGQ%CRnFvmxbR1m' );

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
