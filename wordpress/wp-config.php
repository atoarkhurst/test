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
define( 'DB_NAME', 'WP_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0T/b4*w4~W%3oDJDARX^fQ8kpw5I2O:i35b:SIw#$A<ts^0:Z,EEKWaVqS2OaZY&' );
define( 'SECURE_AUTH_KEY',  'Lb30)xB~7 YqLH2ddyjDm84=ZjOaq3tYS;i3)hRT,jmnd%,XHZ8~:q./.}4V:q+r' );
define( 'LOGGED_IN_KEY',    '7fZ1y>_R%{Hy_i{wA;vabd WAti/;B0|U,Z!aE-h4Q>]y*wv6<10]m}f*OJ`Uuz7' );
define( 'NONCE_KEY',        '<ed6h<~i/<K{N7Yb+5%6@&|l<nKn!I9)2kKm|U!4Uai1q+NIy`7bC3sP&mf,H8jr' );
define( 'AUTH_SALT',        'thy0Gb#w#`O+_xP^DU.OmzJVd-;/Uh/zIJpHXolmmeTK#djhD/ tsf8.mdtf*>xW' );
define( 'SECURE_AUTH_SALT', 'FS]- `L)H=^Flc(bs.b^<#DlQAhmJr}F)oZ?}mqM[i8AVfZPb{; );.Uw@&9;|Jg' );
define( 'LOGGED_IN_SALT',   'pkz^X(q2Pi Xga&*O(;[UsS.vV|0(;st =|WI!o%26;[28nMi=AO;BmXtm8T+z1o' );
define( 'NONCE_SALT',       '/u(<2V^#:Ij,AKZw~Lx8x4|2HK<D$R*2(Lc)~)5m7%]-lp,mDmv4x+P^wX[T .mx' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
