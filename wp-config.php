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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'gF%D?F.{ps]T_S98d/G?@iu*_XvV6If}eL;iI89G<3s1xN~Q)i?^NK+InB!)y--Y' );
define( 'SECURE_AUTH_KEY',  'gNRlN(GI&[_H&(j.%~23GFZ[}!7w.^O*6v@tpln%U%=y5;0VoQfpQfiDR4opP}:$' );
define( 'LOGGED_IN_KEY',    'P$,%@N k6?:U27mN@NZ9qq9)McVajENW{o@ u>v_@]>f>~*}J/XoZ<:WDU.G{p4P' );
define( 'NONCE_KEY',        'Te&G9SiUTTmVqq8g-K*6Z.l~>%`S@ecSd@3OkFF|VHwJ(1|>:Xc-S:n&8,vYrz!Z' );
define( 'AUTH_SALT',        'Fun$pbw~}WryRF`<ka=t@v<-5vbbo7RcC0d2p7`X=zaZ*9T]eZt{=mK#.pF[f190' );
define( 'SECURE_AUTH_SALT', '`i0~XM&X`)z{=S?m81<rg@X SAveB+7ZUVtf$9F%E{}w9aE2q!~PQk t#D2wj9BP' );
define( 'LOGGED_IN_SALT',   '/ym~VmK6$e.!GLSo5.wSzMYT5T^lr9kVg67&Sg/j@]_?<5$~;N]1be&?4NUi];[ ' );
define( 'NONCE_SALT',       'S_2c!(& yE?tz:*2*7rIyd0S8PORaZge0(.y;!kz$O_8_=Mx>XAiSO=V2E>y&{TV' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
