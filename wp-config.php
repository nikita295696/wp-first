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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         '8wWgTN8l;/]0PewoMUK]:77[(Dk# 30G q ifH{|lTv#WO%yXCvr&3r0m^Gkv$[#' );
define( 'SECURE_AUTH_KEY',  '|lCWkB,@r0i )rL7T^b8_OF<GU&Is-|SZT!Q9cK?2a_@#!:/^+>:OL(tk# 4bo>D' );
define( 'LOGGED_IN_KEY',    'hxh]^u!,ld<mfwhe=9[Euq)0=opj><%FCL-t}@D>M1G2T#L;IaRtm&rWyp2MCE3L' );
define( 'NONCE_KEY',        '8YFg13k>pHBCz-CoOLX30P@3mO^!kQC]Q_^ B)5I+FXgr]5iOJ&UGZ0G[?BfI;}z' );
define( 'AUTH_SALT',        'IxC*1~*: DjH+aGt7eZyKJ7j9vlI+7|8#Ay^!5]spTgcUU9%({E0ZVQOr-`O5ZD/' );
define( 'SECURE_AUTH_SALT', '=AxLf9|4EeTm~LLq7aV538UQ<|@o%~Qq4[=9yCg~y0`pj],oDIG?$a$Ena?StnOs' );
define( 'LOGGED_IN_SALT',   '?lwZ?8&CdvY kr4(lJ 5nNR :3=Lmk,waJ-KTnc!3W1o*xqcF7g]7^1OJ.O%h|1w' );
define( 'NONCE_SALT',       'B!@nvh3:9d <MJBFk^Ha>9f<9t<c)T,z)%,LGQ76J7OMcbet||g_]8`j*Xx942uW' );

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
