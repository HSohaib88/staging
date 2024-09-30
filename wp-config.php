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
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         'hB.ny{$]{fNul0Qo<$|L@Ta*?E7$@^#!!s`:Yhg_~oc^6pxhB_AS7&l,vB9@xR5l' );
define( 'SECURE_AUTH_KEY',  '!Px~0X4^09<}[#qH#e{7i:!z$)^3)Mh@IRXBuN?1ZGJzZ}m`uJ~>f@yVY?NK*N1I' );
define( 'LOGGED_IN_KEY',    ';b)sH;iEL^k#!>O{ F1L,#{pFQ@lu<gQjt^>p}Z!-0`,K>Rc+W^Ql^):hc!5col5' );
define( 'NONCE_KEY',        'Iaf1^3I} [20RfzotDeyb_l,iT~]vg;dfhV%EZDx)(D++rO/7Fv3=mzOkBA7,E&p' );
define( 'AUTH_SALT',        'Xz^`/|;!yZD),3+U}WW4puh<8K9)TH4J<9fy.-DJN?S6p=^8rLmCqon?}!nW/DT1' );
define( 'SECURE_AUTH_SALT', '@*mZpy1aBsa^5E*VKNLFalv$zAKP^,~OIY[K+Fr`rQ^b;:[I&F=UzIbmrBu|YeU8' );
define( 'LOGGED_IN_SALT',   'OnEhUG>?v/rx{l`7+S}o()Px?ENRdo:`;^,#JFg7NLB,tUMH 4X#V%,k<Bx+-^uR' );
define( 'NONCE_SALT',       'E}FDWz~r03?f|#WW2wl w~:E+ZBNeyOQ(W~jI^{tS0mzInQx#p](4;gSF~%.E+hQ' );

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
