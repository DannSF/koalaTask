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
define( 'DB_NAME', 'koala' );

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
define( 'AUTH_KEY',         ')=kT= s[v436Q8Z:p/o 3P-g5)3hV#y)Hn(k/gPe>tWj2[U>;:by@s8?4)RkV:Jz' );
define( 'SECURE_AUTH_KEY',  ',#bhiGx=J{Dc6}7g1n<t.k+t!H1}pBTHnf]!,@IaZQ<BLW;LTv?6Q{|hgs*^|7oZ' );
define( 'LOGGED_IN_KEY',    '>aYHwVwVbO=1}r|jEz1@`6]zR;rEPxB$z1HXTYA%rrJEz!]dcO]]mL$&fc_N0Bpo' );
define( 'NONCE_KEY',        'aJ~TMM9~[K;(avTrE97F(ODtE9OCOqa>Bf`s0:N}( A#KQ0IKEIAKZc%y{3Fh)=R' );
define( 'AUTH_SALT',        '_8IhUC~jSV=`KAs.7%n(SJGT%&dal8T#vA A8<#3&^~%PO+Tc!DTj:ctXsD2-im;' );
define( 'SECURE_AUTH_SALT', 'GZm`[38 8s|@399HyX@hrx;p=i,C0N)StIUNNYgbP_L>{uzZC!?E?l>v.rl+nLey' );
define( 'LOGGED_IN_SALT',   '!4]25iHG*^jgZ=a*g9{Pqb[f9.V[#0AP<Km Tq|haicD;Dv*cnWNb[aNU|7;fE@[' );
define( 'NONCE_SALT',       '4/6ac@]7KrikeD$.!VjDlk~^xR5|P6%@Yn~Lm,S00nydRrU1b2Wh2<?)A45I9;<5' );

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
