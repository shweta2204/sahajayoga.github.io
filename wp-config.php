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
define( 'DB_NAME', 'facebookjobs' );

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
define( 'AUTH_KEY',         'vs=!2LQJtDVNV;!*FF|bX}V%-BKpLIUNeucBYUT,2-.F0PmU#~Iv$F)WqrF{W@E0' );
define( 'SECURE_AUTH_KEY',  '!nY|/mn?v5(zG|kUmtLdjK$z>a1eH]e&RX_W;Aawg-Y.@Q^DfnW#CkN(Z8<F*bOj' );
define( 'LOGGED_IN_KEY',    'ZzrbNl3(sfz0~{EdU/207nuRURRM;Q3kcIE!HkO-YK)2jAg_5<WM*$C$nz^SI}d,' );
define( 'NONCE_KEY',        '#M-+0Wrn;<PDK>HsY-gT!2M;w!w|huA%O|E~hPuxX[FZV98WY1B,gv*YZS)6v<%#' );
define( 'AUTH_SALT',        'T!Aain h{JX{&uJK;D`ke@RB AsJL|pGf^ap3fR#P/Ki1+TZOx,a<|jc@%yj3fx*' );
define( 'SECURE_AUTH_SALT', 'gLQ>H1N&Hj7|?q*$t7=}UkARqXZ_G-E)B7Oy=:NRYw;u {x:|rRw(bI*KSxvw,b}' );
define( 'LOGGED_IN_SALT',   '?y7$WgmyqtslbJ#jZ@aqUf:1A.lJx2BB5OCIRHa1:,m;1x9E93FI^2no}OWxA2$}' );
define( 'NONCE_SALT',       '5XR3ztf!!oHIp2*$/&w:Z[*${XpQ|C&{40cY0WJ46a_p;GPei$o-K,;1#Ci2L&{J' );

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
