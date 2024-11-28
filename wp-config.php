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
define( 'DB_NAME', 'hidden-treasures' );

/** Database username */
define( 'DB_USER', 'jdbernardo' );

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
define( 'AUTH_KEY',         ' +8hsqr>HL@joe<x_t9Q)[X>$~N:/rhXSJ6nriRFS-Js7(:0J8Wtq.ZG BY:,y-C' );
define( 'SECURE_AUTH_KEY',  'c!bO(3^h|puE>&.IOHDr.z=*xZB8bHwjk;96%v!t#jc9qqo& kR3sO>oadzlj{u4' );
define( 'LOGGED_IN_KEY',    '<HAU9+C34:9+i:6-^Uzyq#PMC$NNI]k}Wf%aZ+Yh3@=;[J+3ehhe1B8I|<.U_g#q' );
define( 'NONCE_KEY',        ' $d_^`<Xi&6pfZ!RTpS*agUP&kGy*+^(yaPh,Bd)LG>N78itOH}o*y~[9czll;a~' );
define( 'AUTH_SALT',        '^phndZ,bucFHdq(?DLa#aFm]~s)}y=@s;,Y$B[m}#)1FN7M-00f}1{qx-^:eve0P' );
define( 'SECURE_AUTH_SALT', 'O`n[mB!jS8,^.eBH&[hpF6gYXaA1zr7:ZN)3ynXHylCW@iI[,/|myPV)L^%#@K?F' );
define( 'LOGGED_IN_SALT',   '`f,]FJ[97z=Q]|$oVx*>VO&~GeDukx1$:/lkY3[_E1<?~Y/wNnD8V0g-py}df=6i' );
define( 'NONCE_SALT',       '!k:8C9O+:Y4`.KWF`[`e>Fg]!I]`} /Z)4lH:xj;Kinp</4HM!i>%o?%=TYi1$Na' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
