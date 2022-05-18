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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         'f)FL_GT`8H%emun&u)xuCX(zu~p^NY3*J,p!XS9k+UgYPE41i3UU2#4-e!X3_xEN' );
define( 'SECURE_AUTH_KEY',  'GG*]Bnzt#Kh~6u~N!p4.mU0r$gA;!:V<<nC:gbGcCct_p]]K{7xvfX vi>ub68]$' );
define( 'LOGGED_IN_KEY',    'c(e$SBd7;]@Emi(vs7_0$7y_?&DU(TVPsa+L3%9LgH$,WX&pX.wxeZGJm &D-q?M' );
define( 'NONCE_KEY',        '(67inf 14NyPL(Y~f_1N^L8bkh9v>;)z03BF,M8VK)AR!x/Ufu9J3aPf:A%Dx-{Y' );
define( 'AUTH_SALT',        '-*@`=J6Tw.fw4_C2GRlHWUb*t7~$zy>AQC`#*4[-?ijE/@3[-KP~-MxAjZ4Qx,Qy' );
define( 'SECURE_AUTH_SALT', 'dBS?x<E6eG<EjPyDClOSn+qgEiCe3~rQd@az5l&JPIWs2#~z5UxLWiKMxJm3>_Yv' );
define( 'LOGGED_IN_SALT',   'Qw``%)ibMC|v4[~6{%=M2kk qNHUR8*?(IAFpyz@/{lc4Qqu4Oe0}T:16XO%6a17' );
define( 'NONCE_SALT',       'w#9B8EW[S`XI-6@9OAh=uEp^0p8GO;I|Ba2@ph)DR2{.Auai.q=PY%8f) Ktnujt' );

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
