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
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         '47V-mh|srG5gWe$3*3VlB3i:xan@SQA26,@Iv,)AsCITOAqPJV|oj[2:nzxpi&51' );
define( 'SECURE_AUTH_KEY',  '0(0+m9Ci9<()X5BvU|Omq8#Xapq8tY_o|:Y4gPQf*Pfv6F_btBv}.qww5aM|%TxN' );
define( 'LOGGED_IN_KEY',    '/_jW4MsRm+d*(<GVpgDH4BL:8.{un~4#rz@nIe~IGGLX 88FtOW%hv#RTx @zFpH' );
define( 'NONCE_KEY',        'WQWS}B)W8aOkkU,nIm<a#eaLMh9b47b`PD?kG=(<cJv$bEVwWO*iWX(u>Af9oN^#' );
define( 'AUTH_SALT',        '^n=IQ~wtQMm`B^>^RH_h.1Kzpadzq.Lr1L2i1wc^A-KOnCc.N/_.~29{N502xNc*' );
define( 'SECURE_AUTH_SALT', 'UERDYV|B2hqts*{%PUidHdlG~Q4=Htx4|BTiqk:UL;5Q$&zd8B-#:N7WiQed}Ouz' );
define( 'LOGGED_IN_SALT',   'A+zWhcCrU-GM >4ERnE+W4B@fyK(nG4}!IT.P(fx7,O~<&ajK.9YLq8KZ?hgCb*M' );
define( 'NONCE_SALT',       '6 WGLSUh<O(&5DdPx7X}N--`[utf6.5{F}u8;;1wBjM=s)3o`N]ES;?kz?8D47Nu' );

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
