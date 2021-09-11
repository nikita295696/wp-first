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
define( 'DB_NAME', 'site.com.ua' );

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
define( 'AUTH_KEY',         '=QPmvSXz:t ~!Qem3B&ejxp0pgHKaLC2 PRb>b{ZfyMhfVn2qHCvR^9QvPhVB8/i' );
define( 'SECURE_AUTH_KEY',  'ac^!Wsk+T#s}`bv1wPc=sdb7#&j~.:l:*K5>*VH~zN5ty`mS{YNh&UXC iLT$[>(' );
define( 'LOGGED_IN_KEY',    'p?uNy&V*Zu=/QHwR`XR7q=@Y9@ArXW4WKSJ$Nb1or,N?%SNrq~ep7g>M4mOd}jj8' );
define( 'NONCE_KEY',        'hn1W^#AiEw;AV@Fn|Au(xjcm!*.]c`)pPbI/4dJqDjz0Z<a,s+I:_/)*^KGFOwbu' );
define( 'AUTH_SALT',        'hbUkKe}c~(=Tyi=5wSjza8HtH4A%~V9W[n]R(/Kjqlm*:C>Qdy% rb3qp.?ZFR+}' );
define( 'SECURE_AUTH_SALT', 'z*0Hfkxy~8/:*Yj.:K%CYN<*Dvm&LG7-usy1]{^t,V]{rK8?qu`<&:/4XP_B8kvC' );
define( 'LOGGED_IN_SALT',   '5R b@@,]u^rO|@@rEAd3oi?GthA1h|t!>ZqT)-L#Q5]trxmLZcZo `vxHYN5-u,P' );
define( 'NONCE_SALT',       '$Pn>D|t91t`raldEB9lb R[ekm8K=bZ^+|S3]KdyYZ3*8f(@Wr>ojT6~ 9}cv(jO' );

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
