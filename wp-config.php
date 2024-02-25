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
define( 'DB_NAME', 'wp-wordpress' );

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
define( 'AUTH_KEY',         'Ky,:7<wY:oc[@mJY*hb`oNJi(^I{e8JL&-U^L=JIx_]V~%]@c9sOZGJ*!K1QIx;W' );
define( 'SECURE_AUTH_KEY',  'udjNTKP[ey)k8g[/el*rf&Q@>`8GsbL_:WMS;v*JgJ`~<$};8~J2 6rB=J[xbvas' );
define( 'LOGGED_IN_KEY',    'Lw:kHTo%4?bt[#KxE|nwcw,tMUu{7X1PiDZ6;Jb(?1EU*=nfZ|fj5W2PrP]+h8_r' );
define( 'NONCE_KEY',        'wIK&8!;_lo9p ;S3]=E,p B+rha9-xX4XwpO_OW;OwLy9_kg?Rsnz<>=Ie=2_mY!' );
define( 'AUTH_SALT',        '!M1`*5qcCz[!#2Q5mmOsZJP.O{g3_#.C) S<_VY93Jc~y/..c@AD77nsp%H)N$fC' );
define( 'SECURE_AUTH_SALT', 'f_P[]~T5t-B8t}7jSY^ ~)D2Yg!n/3t;M,*RFTMtTxR)UNcI6|8%@b;{CBb{FaIs' );
define( 'LOGGED_IN_SALT',   'tTV:ji0 mK#1JAR<&}FYGBGKrmi@q}0jj$L )u_.ulWnWp7),1PljvkzQWMd--e7' );
define( 'NONCE_SALT',       'J2(H@Cm}j*~dLx/itaTkQwDP`h9,WaHnn|WvqYeXMD=`}JkM1w&6acC0#kWYc8r;' );

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
