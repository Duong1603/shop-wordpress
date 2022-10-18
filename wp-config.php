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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ':>,YAuvKyUdz?Ul4}d82;7a2s6g=: ,c .V96Cp|qkfxN)C>!_kD@J<3|d|q1*$l' );
define( 'SECURE_AUTH_KEY',  '$rB.OQz+SI sb=QV14Vx0R:xqLw`GkldYA4Nd1hF 4E$3+4httZPLFFL/2GVU(4v' );
define( 'LOGGED_IN_KEY',    'YMzrgE[ AfBWY_6Xhk1>EZTZDIy8qduEUJM$8n(iaATQ_Yd|JgZ(.X]lsg)~~MxP' );
define( 'NONCE_KEY',        'CClFma=QTsW`YGO&rzqE,r&|?ofABq^l- 8B/rqb3z-Yi&M,LX4w!},ZQ_?Mg0I1' );
define( 'AUTH_SALT',        'o<46xf;9_l45`]Jxvjnvl>9B.2A4iWu$Qw.R`b(1/6zzy(5o>6-D(j=nk{jsht-e' );
define( 'SECURE_AUTH_SALT', 'u|?U4,D9$s B#XoZ_S9KI7JTvaj1[p]dI+E5X3%$S:)#q{A_; v2+de<w.pPKmo4' );
define( 'LOGGED_IN_SALT',   ',~PB%$8dLb@8Hy-z}5gk>ky9{:%=)|s%ZL#1^@fEvC$qp<>pENk@<*?pva7-YGPj' );
define( 'NONCE_SALT',       'Hc?tXYwm`NQEWi=`Yv.k6MI!|QCkw:zPd5:cd2xQ<B{*0RpB OX{mzb`?Sy5k~!A' );

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
