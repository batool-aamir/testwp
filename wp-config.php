<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'VhGKnH7lwD' );

/** MySQL database username */
define( 'DB_USER', 'VhGKnH7lwD' );

/** MySQL database password */
define( 'DB_PASSWORD', '3oifWtl5em' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n6csY+|Zun_o/9]koZNVv?a?xCIVd`=OS^Bwai72n:T/T(0Q[s)>O:9y3+[}RlXP' );
define( 'SECURE_AUTH_KEY',  'Xy`)^@oJS~]U`}Q/A/caN&e+zpkX[}]nJPYapvhX%6OII@|o3/T~pD64]Lf+91IZ' );
define( 'LOGGED_IN_KEY',    'A]_%Y/3OTDqn2KQemM7L__p!}lw0<-ag=0s[K?{kxLict{D>Uxh<*k<h7-? qoOT' );
define( 'NONCE_KEY',        ']K;N^U^d:aTFfi]7=08 :GiN]i1 W-o]m@n6r/gN-TjH6`%tvxYqWPX.F/[z.aF ' );
define( 'AUTH_SALT',        'LmI=jB@4CQqQ #a1RfS]G74?:.wa8+-}-E}j8[)oF#ySXUBHfkt1K@ p=RaKGg#i' );
define( 'SECURE_AUTH_SALT', 'MomC37D[(%KPFwAQo0ZVkhU^q1DL2)#.zbB4_^bs*oBCHPRy](A4ZWM#h,YC(cnF' );
define( 'LOGGED_IN_SALT',   '9UULxw*#3qx<Hcf0:Rv~>ByU#G)IDT?{q$~K73s(:BJb8=Qzxmwm;YlwV|O#MN<y' );
define( 'NONCE_SALT',       '(7019:JS,h}wT/@=^K5X[&DTuV2en$R,Bz2-A#fE|glARR#geW)ZwUsb}kde4o5N' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
