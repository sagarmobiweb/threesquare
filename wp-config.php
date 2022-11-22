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
define( 'DB_NAME', 'threesquare' );

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
define( 'AUTH_KEY',         'j3= fiDWqD8b=fD%Il[{p}dj9>hpN{E](df%)CRo#XRNCT#SS}*}Z<bi!s8Ob$v6' );
define( 'SECURE_AUTH_KEY',  'flT}JjQO-/6*-B?RNgJP^,@AK.#+D^3XgIOAx8HXPB}_r6j[sYy!2F.,P$M5;be?' );
define( 'LOGGED_IN_KEY',    'uxjU=h<ttuE7&;=/xJn>*<M(wdo3Nc-j8DezUMXi]dKlqYA1jE3G,krINpx9+KQ<' );
define( 'NONCE_KEY',        'hK1/{?&~U{{f8.<.JgggKYcTb:WuAG*:DZM|^HE(r6c0= t+$DH{PVOU}d%2cU~j' );
define( 'AUTH_SALT',        'Hl4)OfAkkk1Y8jNl73#T_QGfQyusdX}=QrPkg.q2xS>QG7E/#CE>5g*m!=$FUKrt' );
define( 'SECURE_AUTH_SALT', 'z&[k?rh+e96u<7;t%&<HUj+k)WUU367*[i~BZGs0)!k+6mr+@@<po<R!Cm_6W,EE' );
define( 'LOGGED_IN_SALT',   '1LQnP)L%0^|GsiP(IQ-*zL2GVV$0M]{Ng&8YLqFa^/6t_e6iE[N)-@Q5{6mJt>Ba' );
define( 'NONCE_SALT',       'A,rTc? 9t$E1Z1){A,az{PX@da(lY`lT:f}(?+R*K&&0PX[O(MrVouS9_AZP`&pF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpthreesquare_';

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
