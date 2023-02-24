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
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'eC~{0B:(R9rZH^g&#F1nl0S!v5[>va%FnuhtAl{y8`Ibcu)<lu4twu,[(YnEqIWS' );
define( 'SECURE_AUTH_KEY',  'xo{b +j(9}X0%fk1/sP7|qZE3|kI|,NSH5KE@iUvQ6&zz5l(ST^-hdE&[Q~mB$-o' );
define( 'LOGGED_IN_KEY',    'wf688TA1z(~17-Jq%voiXd;0>G6Da1zj_6 sE7X2|h=~$Iz_c+tD-57bAehv^;nQ' );
define( 'NONCE_KEY',        'YWgB7G%Zc[B}pX+bhegPm]P3uosc`gBPLogFp`e,lqOYE mv<|C^I)f%)>9R:_xJ' );
define( 'AUTH_SALT',        'qXC*6wkbzEmJ:f3E{H{&a{1EjMHEp3;i)^QYvgk)Bv-7^!YkURDxZTz-Uh?vtPlY' );
define( 'SECURE_AUTH_SALT', ']tGCGe<i%T(c;.?Wlo?bbG}<DqzY1f{y;OZqh.>2qlQV^~7:R)t:FYVnP#LZL*JE' );
define( 'LOGGED_IN_SALT',   '-`rlypgEXriQHDR%#9(W}Fpuz=+*!MOBtV5d<|xANh4vjuDo%,0y+?*?CiVgVigE' );
define( 'NONCE_SALT',       'iSzc1axnn7f<tPC_%g~uHTe-nnC?`c-fwRnarf,;+!E^P=&cr-7}Y( a,y&ttH@0' );

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
