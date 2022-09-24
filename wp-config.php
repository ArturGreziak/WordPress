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
define( 'AUTH_KEY',         '%^}cjnZ|C-q v8TabKMD@68d %(F~UiY!G_)tsg[`xS|r@TVi2<Jh]0cM6(|t]*i' );
define( 'SECURE_AUTH_KEY',  '@w @+EO=P7.?@?hr@uGU6s6?mBe*g$[rBbQDS~H3gSofJ[4O;l%b=UR,<XEc0BU=' );
define( 'LOGGED_IN_KEY',    'Jp72lA%95B^Pukq)>gV(qqsR4L/Irm.?Ux/|~@z-WX&K~TGeIhQ0MR:i&cJ`ZuE?' );
define( 'NONCE_KEY',        '4ggZ1}nU/ &XFLNUbMvg[iWD+?.a$*,(v[u[i@8JsI(`60N@VI_+H@E#x%)2l8uW' );
define( 'AUTH_SALT',        'rQ{t|L=1b|Qrt=?IA,KU(Q9{$ks0+@f9{!)=QA<1Z[q;-r+C1}Dbe|0#113WE4dD' );
define( 'SECURE_AUTH_SALT', 'Ig(Gpm?/y;MUAa0l:pdSfo0L:`Q}Se8.#.Gi*}K;@k&(a8,{f[,ZJ[-z(!3!]a%q' );
define( 'LOGGED_IN_SALT',   '@aU~/.L{Kp2hkRzKvX _gz9t?04xV#e_*9}S-rxJ}4^]=mM)#&NZ2Gx@;c@R|%eT' );
define( 'NONCE_SALT',       ':!FTGapNZ^Sm=By^5GD6n.TkO!9M{`$DE]Yk`wCL0]ug>7 >F~B%q,YP0t=F<i5m' );

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
