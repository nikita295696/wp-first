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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'device' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'D;!Qm-FGOM!p%F?I j2Lulq4sMm`|#.q=359Zoo+5$/^uryB{?::8/+CwS+)ec%$' );
define( 'SECURE_AUTH_KEY',  ' Xs`SV%4+lB1?0_)2u9@Yq?0*8xnWActn0Tl={c)-Whz,)`+])eM)#k*9qhm0r?m' );
define( 'LOGGED_IN_KEY',    '_C^NEYo>5Z,/-xz-i>~a_@b!V$.)31OXvrUkj|.+9pxa9SX;.7tVs+E)e:TQ<#`+' );
define( 'NONCE_KEY',        '425m|C7vU?KA-=|g3h%~^Vhq->:C+4n|#3o/_qPh]k@J8q9K;e[Mds!`FtkH>svK' );
define( 'AUTH_SALT',        'H}<0|DrrTfmpQ@n~}otz<WZ`Wa3s1l3hS4]G9@]$g&#+wsr:4;d.?FX_n3`>40H%' );
define( 'SECURE_AUTH_SALT', 'v3FgH;Ik>bb1(Oy~?Jq{YN#*fSng?c@dr_bO {3Z5/K*OzZQ)&ins~wWGq|<2T?!' );
define( 'LOGGED_IN_SALT',   'q@Fzds]9A)xgDvk~Jq+W i8=Tan]U#+M6tx1w|&bDl$c6$Iu|z[q {pp3zgwKBB?' );
define( 'NONCE_SALT',       'Gy6ghS#q:^;CpC USg#2B[1V.B H29c>SodWI>8X@UclqS3tbXv59gupUS0wFx.o' );

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
