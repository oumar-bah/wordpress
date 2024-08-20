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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'b{)G1DC5dDc^CYE4j:s$fENBa{9od62^UQARH134Y[rqheS]oi<Cy`nmQ9:KF8Ed' );
define( 'SECURE_AUTH_KEY',  '/>>V ]l-?.cMKN@bQ_UG`- m;4kW6p+v(H4M:b^oMnn}$v6Z!?@/Y;pMXo-tfdwH' );
define( 'LOGGED_IN_KEY',    'SeK5tAiB$p.:XE}<IS855`6^=sJyrYzSEDR1rnr<@aaJoMe :eBqJ[yveN2i].^#' );
define( 'NONCE_KEY',        '^;]j4[-7PM&{EJd:Q6*S~Ug.fe;M1 c:qPj?5ux,eO4-D2HN|b+foR|S)E2m2Wb&' );
define( 'AUTH_SALT',        'aq>Nd/sr?X$=wYF0(c[Jw>jy^4K]9Boj0>SP=m/;2]:a/8_ CQYK9%|QlW)63GP=' );
define( 'SECURE_AUTH_SALT', 'n=HUDC,<%.G7|4DvPzI2/L~7q}13V~*B`ms$&>e2vDQSjxoz)>+uJ$QbGzM*;zdg' );
define( 'LOGGED_IN_SALT',   '%:S|3`Dczh{mNE<vvzR0j mKCZJl1dRlt+Fn5A bH-)B&i?|ZQk9Muh0RsjVR7:+' );
define( 'NONCE_SALT',       'p>CS&g-c<NCcn9F_$}uV]Sl22E@l{ODLmR]>P)r/)n$O,)7:{mAu?h*t3%mv0,(~' );

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
